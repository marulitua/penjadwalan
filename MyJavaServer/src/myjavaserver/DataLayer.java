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

                DosenTime row = new DosenTime(Id, Dosen, Hari, MataKuliah, Start, End);
                listDosen.add(row);
//                for (int i = Start; i < End; i++) {
//                    DosenTime row = new DosenTime(Id, Dosen, Hari, MataKuliah, i, i + 1);
//                    listDosen.add(row);
//                }
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
                int praktek = rs.getInt(5);

                ArrayList<RuangKelas> harusDiruang = null;
                ArrayList<Hari> listHari = null;

                harusDiruang = new ArrayList<>();

                if (kelas != null) {
                    for (String retval : kelas.split(",")) {
                        RuangKelas peer = new RuangKelas(Integer.parseInt(retval));
                        harusDiruang.add(peer);
                    }
                } else {
                    for (int i = 0; i < listRuang.size(); i++) {
                        if (listRuang.get(i).getPraktek() == getPraktek(mataKuliah)) {
                            RuangKelas peer = new RuangKelas(listRuang.get(i).getId());
                            harusDiruang.add(peer);
                        }
                    }
                }

                listHari = new ArrayList<>();
                if (hari != null) {
                    for (String retval : hari.split(",")) {
                        Hari peer = new Hari(Integer.parseInt(retval));
                        listHari.add(peer);
                    }
                } else {
                    for (int i = 1; i < 6; i++) {
                        Hari peer = new Hari(i);
                        listHari.add(peer);
                    }
                }

                for (int i = 0; i < rs.getInt(4); i++) {
                    Kurikulum kurikulum = new Kurikulum(mataKuliah, listHari, harusDiruang, sks, praktek);
                    listKurikulum.add(kurikulum);
                }
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void getRuang() {
        try {
            Statement ps = con.createStatement();
            ResultSet rs = ps.executeQuery("SELECT id,praktek FROM ruang_kelas");
            while (rs.next()) {

                int id = rs.getInt(1);
                int praktek = rs.getInt(2);

                RuangKelas ruang;
                if (praktek == 1) {
                    ruang = new RuangKelas(id, true);
                } else {
                    ruang = new RuangKelas(id, false);
                }
                listRuang.add(ruang);
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void clearHasil() {
        try {
            Statement ps = con.createStatement();
            int rs = ps.executeUpdate("delete from jadwal_hasil");
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void clearGagal() {
        try {
            Statement ps = con.createStatement();
            int rs = ps.executeUpdate("delete from jadwal_gagal");
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    void simpanJadwal(ArrayList<Possible> finalSolutions) {
        for (int i = 0; i < finalSolutions.size(); i++) {
            try {
                Statement ps = con.createStatement();
                int rs = ps.executeUpdate("INSERT INTO `jadwal_hasil` (`dosen_id`, `ruang_id`, `matakuliah_id`, `day_id`, `start_time`, `end_time`) VALUES (" + finalSolutions.get(i).getDosenId() + ", " + finalSolutions.get(i).getRuangId() + ", " + finalSolutions.get(i).getMatakuliahId() + ", " + finalSolutions.get(i).getDayId() + ", \'" + finalSolutions.get(i).getStartTime() + ":00:00\', \'" + finalSolutions.get(i).getEndTime() + ":00:00\');");
//                int rs = ps.executeUpdate("insert into jadwal_hasil (dosen_id, ruang_id, matakuliah_id, day_id, start_time, end_time) values("+finalSolutions.get(i).getDosenId()+", "+finalSolutions.get(i).getRuangId()+", "+finalSolutions.get(i).getMatakuliahId()+", "+finalSolutions.get(i).getDayId()+", '0"+finalSolutions.get(i).getStartTime()+":00:00', '0"+finalSolutions.get(i).getEndTime())+":00:00'");
            } catch (SQLException ex) {
                Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    void simpanGagal(ArrayList<Kurikulum> listGagal) {
        for (int i = 0; i < listGagal.size(); i++) {
            try {
                Statement ps = con.createStatement();
                int rs = ps.executeUpdate("INSERT INTO `jadwal_gagal` (`mata_kuliah_id`, `sks`, `praktek`) VALUES (" + listGagal.get(i).getMataKuliah() + ", " + listGagal.get(i).getSks() + ", " + listGagal.get(i).getPraktek() + ");");
//                int rs = ps.executeUpdate("insert into jadwal_hasil (dosen_id, ruang_id, matakuliah_id, day_id, start_time, end_time) values("+finalSolutions.get(i).getDosenId()+", "+finalSolutions.get(i).getRuangId()+", "+finalSolutions.get(i).getMatakuliahId()+", "+finalSolutions.get(i).getDayId()+", '0"+finalSolutions.get(i).getStartTime()+":00:00', '0"+finalSolutions.get(i).getEndTime())+":00:00'");
            } catch (SQLException ex) {
                Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    public int getSks(int param) {
        int sks = 0;
        try {
            Statement ps = con.createStatement();
            ResultSet rs = ps.executeQuery("SELECT m.sks\n"
                    + "from mata_kuliah m\n"
                    + "where m.id = " + param);
            while (rs.next()) {
                sks = rs.getInt(1);
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
        return sks;
    }

    public boolean getPraktek(int param) {
        int praktek = 0;
        try {
            Statement ps = con.createStatement();
            ResultSet rs = ps.executeQuery("SELECT m.praktek\n"
                    + "from mata_kuliah m\n"
                    + "where m.id = " + param);
            while (rs.next()) {
                praktek = rs.getInt(1);
            }
        } catch (SQLException ex) {
            Logger.getLogger(DataLayer.class.getName()).log(Level.SEVERE, null, ex);
        }
        if (praktek == 1) {
            return true;
        } else {
            return false;
        }
    }
}