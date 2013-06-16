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
    
    public RuangKelas(int kelas){
        setId(kelas);
    }
    
    public RuangKelas(int Kelas, int Praktek){
        setId(Kelas);
        setPraktek(Praktek);
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
}
