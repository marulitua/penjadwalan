/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

/**
 *
 * @author erwin
 */
public final class Possible {

    private int dosenId;
    private int ruangId;
    private int matakuliahId;
    private int dayId;
    private int startTime;
    private int endTime;
    private boolean flag;
    private String dapatMengajar;
    private int praktek;

    public Possible(int DosenId, int RuangId, String DapatMengajar, int DayId, int StartTime, int Praktek) {
        setDosenId(DosenId);
        setRuangId(RuangId);
        setDapatMengajar(DapatMengajar);
        setDayId(DayId);
        setStartTime(StartTime);
        setFlag(false);
        setPraktek(Praktek);
    }

    /**
     * @return the dosenId
     */
    public int getDosenId() {
        return dosenId;
    }

    /**
     * @param dosenId the dosenId to set
     */
    public void setDosenId(int dosenId) {
        this.dosenId = dosenId;
    }

    /**
     * @return the ruangId
     */
    public int getRuangId() {
        return ruangId;
    }

    /**
     * @param ruangId the ruangId to set
     */
    public void setRuangId(int ruangId) {
        this.ruangId = ruangId;
    }

    /**
     * @return the matakuliahId
     */
    public int getMatakuliahId() {
        return matakuliahId;
    }

    /**
     * @param matakuliahId the matakuliahId to set
     */
    public void setMatakuliahId(int matakuliahId) {
        this.matakuliahId = matakuliahId;
    }

    /**
     * @return the dayId
     */
    public int getDayId() {
        return dayId;
    }

    /**
     * @param dayId the dayId to set
     */
    public void setDayId(int dayId) {
        this.dayId = dayId;
    }

    /**
     * @return the startTime
     */
    public int getStartTime() {
        return startTime;
    }

    /**
     * @param startTime the startTime to set
     */
    public void setStartTime(int startTime) {
        this.startTime = startTime;
        this.setEndTime(startTime + 1);
    }

    /**
     * @return the endTime
     */
    public int getEndTime() {
        return endTime;
    }

    /**
     * @param endTime the endTime to set
     */
    public void setEndTime(int endTime) {
        this.endTime = endTime;
    }

    /**
     * @return the flag
     */
    public boolean isFlag() {
        return flag;
    }

    /**
     * @param flag the flag to set
     */
    public void setFlag(boolean flag) {
        this.flag = flag;
    }

    /**
     * @return the dapatMengajar
     */
    public String getDapatMengajar() {
        return dapatMengajar;
    }

    /**
     * @param dapatMengajar the dapatMengajar to set
     */
    public void setDapatMengajar(String dapatMengajar) {
        this.dapatMengajar = dapatMengajar;
    }

    public boolean bisaNgajar(int test) {
        boolean result = false;
        for (String retval : getDapatMengajar().split(",")) {
            if(Integer.parseInt(retval)==test){
                result = true;
                break;
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
