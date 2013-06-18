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
    private ArrayList<Hari> harusHari;// new ArrayList<> ();    
    private ArrayList<RuangKelas> harusRuangKelas;

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

        if (getHarusHari() == null){
            result = true;
        } else {
            for (int i = 0; i < getHarusHari().size(); i++) {
                if (getHarusHari().get(i).getId() == test) {
                    result = true;
                    break;
                }
            }
        }

        return result;
    }

    public boolean harusRuang(int test) {
        boolean result = false;

        if (getHarusRuangKelas() == null) {
            result = true;
        } else {
            for (int i = 0; i < getHarusRuangKelas().size(); i++) {
                if (getHarusRuangKelas().get(i).getId() == test) {
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

    /**
     * @return the harusHari
     */
    public ArrayList<Hari> getHarusHari() {
        return harusHari;
    }

    /**
     * @param harusHari the harusHari to set
     */
    public void setHarusHari(ArrayList<Hari> harusHari) {
        this.harusHari = harusHari;
    }

    /**
     * @return the harusRuangKelas
     */
    public ArrayList<RuangKelas> getHarusRuangKelas() {
        return harusRuangKelas;
    }

    /**
     * @param harusRuangKelas the harusRuangKelas to set
     */
    public void setHarusRuangKelas(ArrayList<RuangKelas> harusRuangKelas) {
        this.harusRuangKelas = harusRuangKelas;
    }
}
