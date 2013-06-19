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
    private boolean praktek;
//    private int jamMulai;
//    private int day;
    
    public RuangKelas(int Kelas){
        setId(Kelas);
    }
    
    public RuangKelas(int Kelas, boolean Praktek){
        setId(Kelas);
        setPraktek(Praktek);
    }
    
//    public RuangKelas(int Kelas, int Praktek, int jam, int day){
//        setId(Kelas);
//        setPraktek(Praktek);
//        setJamMulai(jam);
//        setDay(day);
//    }
    
    

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
    public boolean getPraktek() {
        return praktek;
    }

    /**
     * @param praktek the praktek to set
     */
    public void setPraktek(boolean praktek) {
        this.praktek = praktek;
    }
}
