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
    ArrayList <Hari> harusHari;// new ArrayList<> ();    
    ArrayList<RuangKelas> harusRuangKelas;
    public Kurikulum(int MataKuliah, ArrayList <Hari> HarusHari, ArrayList <RuangKelas> HarusRuangKelas){
        setMataKuliah(MataKuliah);
        harusHari = HarusHari;
        harusRuangKelas = HarusRuangKelas;
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
}
