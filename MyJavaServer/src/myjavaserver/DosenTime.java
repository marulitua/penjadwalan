/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

/**
 *
 * @author erwin
 */
public final class DosenTime {
    private int id;
    private int dosen;
    private int hari;
    private String mataKuliah;
    private int timeStart;
    private int timeEnd;
    
    public DosenTime(int Id, int Dosen, int Hari, String MataKuliah, int Start, int End){
        setId(Id);
        setDosen(Dosen);
        setHari(Hari);
        setMataKuliah(MataKuliah);
        setTimeStart(Start);
        setTimeEnd(End);
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
     * @return the dosen
     */
    public int getDosen() {
        return dosen;
    }

    /**
     * @param dosen the dosen to set
     */
    public void setDosen(int dosen) {
        this.dosen = dosen;
    }

    /**
     * @return the hari
     */
    public int getHari() {
        return hari;
    }

    /**
     * @param hari the hari to set
     */
    public void setHari(int hari) {
        this.hari = hari;
    }

    /**
     * @return the mataKuliah
     */
    public String getMataKuliah() {
        return mataKuliah;
    }

    /**
     * @param mataKuliah the mataKuliah to set
     */
    public void setMataKuliah(String mataKuliah) {
        this.mataKuliah = mataKuliah;
    }

    /**
     * @return the timeStart
     */
    public int getTimeStart() {
        return timeStart;
    }

    /**
     * @param timeStart the timeStart to set
     */
    public void setTimeStart(int timeStart) {
        this.timeStart = timeStart;
    }

    /**
     * @return the timeEnd
     */
    public int getTimeEnd() {
        return timeEnd;
    }

    /**
     * @param timeEnd the timeEnd to set
     */
    public void setTimeEnd(int timeEnd) {
        this.timeEnd = timeEnd;
    }
    
    public boolean bisaNgajar(int test) {
        boolean result = false;
        for (String retval : getMataKuliah().split(",")) {
            if(Integer.parseInt(retval)==test){
                result = true;
                break;
            }
        }
        return result;
    }
}
