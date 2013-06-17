/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.util.ArrayList;

/**
 *
 * @author erwin
 */
public final class Kurikulum {

    private int mataKuliah;
    private int sks;
    private int praktek;
    ArrayList<Hari> harusHari;// new ArrayList<> ();    
    ArrayList<RuangKelas> harusRuangKelas;

    public Kurikulum(int MataKuliah, ArrayList<Hari> HarusHari, ArrayList<RuangKelas> HarusRuangKelas, int Sks, int Praktek) {
        setMataKuliah(MataKuliah);
        harusHari = HarusHari;
        harusRuangKelas = HarusRuangKelas;
        setSks(Sks);
        setPraktek(Praktek);
    }

    /**
     * @return the mataKuliah
     */
    public int getMataKuliah() {
        return mataKuliah;
    }

    /**
     * @param mataKuliah the mataKuliah to set
     */
    public void setMataKuliah(int mataKuliah) {
        this.mataKuliah = mataKuliah;
    }

    /**
     * @return the sks
     */
    public int getSks() {
        return sks;
    }

    /**
     * @param sks the sks to set
     */
    public void setSks(int sks) {
        this.sks = sks;
    }

    public boolean harusAri(int test) {
        boolean result = false;

        if (harusHari == null){
            result = true;
        } else {
            for (int i = 0; i < harusHari.size(); i++) {
                if (harusHari.get(i).getId() == test) {
                    result = true;
                    break;
                }
            }
        }

        return result;
    }

    public boolean harusRuang(int test) {
        boolean result = false;

        if (harusRuangKelas == null) {
            result = true;
        } else {
            for (int i = 0; i < harusRuangKelas.size(); i++) {
                if (harusRuangKelas.get(i).getId() == test) {
                    result = true;
                    break;
                }
            }
        }

        return result;
    }

    /**
     * @return the praktek
     */
    public int getPraktek() {
        return praktek;
    }

    /**
     * @param praktek the praktek to set
     */
    public void setPraktek(int praktek) {
        this.praktek = praktek;
    }
}
