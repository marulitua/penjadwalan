/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Time;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Date;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author erwin
 */
public class DataLayer {

    //connect
    String userName = "root";
    String passWord = "";
    String address = "127.0.0.1";
    String db = "penjadwalan";
    Connection con;
    ArrayList<String[]> result = new ArrayList<>();
    ArrayList<DosenTime> listDosen = new ArrayList<>();
    ArrayList<Kurikulum> listKurikulum = new ArrayList<>();
    ArrayList<RuangKelas> listRuang = new ArrayList<>();

    public DataLayer() {
        try {
            try {
                Class.forName("com.mysql.jdbc.Driver");
            } catch (ClassNotFoundException ex) {
                Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
            }
            con = DriverManager.getConnection("jdbc:mysql://" + address + "/" + db + "?user=" + userName + "&password=" + passWord + "");
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    public void getActivePeriode() {
        try {
            Statement ps = con.createStatement();
            ResultSet rs = ps.executeQuery("SELECT * FROM periode WHERE flag = 1");
            int columnCount = rs.getMetaData().getColumnCount();
            while (rs.next()) {
                String[] row = new String[columnCount];
                for (int i = 0; i < columnCount; i++) {
                    row[i] = rs.getString(i + 1);
                }
                result.add(row);
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void getDosenTime() {
        try {
            Statement ps = con.createStatement();
            ResultSet rs = ps.executeQuery("SELECT * FROM findDosenWaktu");
            int columnCount = rs.getMetaData().getColumnCount();
            while (rs.next()) {
//                String[] row = new String[columnCount];
//                for (int i = 0; i < columnCount; i++) {
//                    row[i] = rs.getString(i + 1);
//                }

                int Id = rs.getInt(1);
                int Dosen = rs.getInt(2);
                int Hari = rs.getInt(3);
                String MataKuliah = rs.getString(4);
                int Start = rs.getInt(5);
                int End = rs.getInt(6);

                for (int i = Start; i < End; i++) {
                    DosenTime row = new DosenTime(Id, Dosen, Hari, MataKuliah, i, i + 1);
                    listDosen.add(row);
                }
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void getKurikulum() {
        try {
            Statement ps = con.createStatement();
            ResultSet rs = ps.executeQuery("SELECT * FROM findKurikulum");
            int columnCount = rs.getMetaData().getColumnCount();
            while (rs.next()) {
//                String[] row = new String[columnCount];
//                for (int i = 0; i < columnCount; i++) {
//                    row[i] = rs.getString(i + 1);
//                }

                int mataKuliah = rs.getInt(1);
                String kelas = rs.getString(2);
                String hari = rs.getString(3);
                int sks = rs.getInt(4);

                ArrayList<RuangKelas> listRuang = null;
                ArrayList<Hari> listHari = null;

                if (kelas != null) {
                    listRuang = new ArrayList<>();
                    for (String retval : kelas.split(",")) {
                        RuangKelas peer = new RuangKelas(Integer.parseInt(retval));
                        listRuang.add(peer);
                    }
                }

                if (hari != null) {
                    listHari = new ArrayList<>();
                    for (String retval : hari.split(",")) {
                        Hari peer = new Hari(Integer.parseInt(retval));
                        listHari.add(peer);
                    }
                }

                for (int i = 0; i < rs.getInt(4); i++) {
                    Kurikulum kurikulum = new Kurikulum(mataKuliah, listHari, listRuang, sks);
                    listKurikulum.add(kurikulum);
                }
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void getRuang() {
        int jamMulai = 8;
        int jamEnd = 20;

        int dayMin = 1; //pk hari senin
        int dayMax = 6; //pk hari sabtu

        try {
            Statement ps = con.createStatement();
            ResultSet rs = ps.executeQuery("SELECT id,praktek FROM ruang_kelas");
            while (rs.next()) {

                int id = rs.getInt(1);
                int praktek = rs.getInt(2);

                for (int j = dayMin; j <= dayMax; j++) {
                    for (int i = jamMulai; i <= jamEnd; i++) {
                        RuangKelas ruang = new RuangKelas(id, praktek, i,j);
                        listRuang.add(ruang);
                    }
                }
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}