/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

/**
 *
 * @author erwin
 */
public final class RuangKelas {
    private int id;
    private int praktek;
    private int jamMulai;
    private int day;
    
    public RuangKelas(int kelas){
        setId(kelas);
    }
    
    public RuangKelas(int Kelas, int Praktek){
        setId(Kelas);
        setPraktek(Praktek);
    }
    
    public RuangKelas(int Kelas, int Praktek, int jam, int day){
        setId(Kelas);
        setPraktek(Praktek);
        setJamMulai(jam);
        setDay(day);
    }
    
    

    /**
     * @return the id
     */
    public int getId() {
        return id;
    }

    /**
     * @param id the id to set
     */
    public void setId(int id) {
        this.id = id;
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
     * @return the jamMulai
     */
    public int getJamMulai() {
        return jamMulai;
    }

    /**
     * @param jamMulai the jamMulai to set
     */
    public void setJamMulai(int jamMulai) {
        this.jamMulai = jamMulai;
    }

    /**
     * @return the day
     */
    public int getDay() {
        return day;
    }

    /**
     * @param day the day to set
     */
    public void setDay(int day) {
        this.day = day;
    }
}
