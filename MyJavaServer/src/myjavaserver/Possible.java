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
    //private boolean praktek;

    public Possible(int DosenId, int MatakuliahId, int DayId, int StartTime, int EndTime) {
        setDosenId(DosenId);
        setDayId(DayId);
        setStartTime(StartTime);
        setMatakuliahId(MatakuliahId);
        setEndTime(EndTime);
    }
    
    public Possible(int DosenId, int RuangId, int MatakuliahId, int DayId, int StartTime, int EndTime) {
        setDosenId(DosenId);
        setRuangId(RuangId);
        setDayId(DayId);
        setStartTime(StartTime);
        setMatakuliahId(MatakuliahId);
        setEndTime(EndTime);
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

//    public boolean bisaNgajar(int test) {
//        boolean result = false;
//        for (String retval : getDapatMengajar().split(",")) {
//            if(Integer.parseInt(retval)==test){
//                result = true;
//                break;
//            }
//        }
//        return result;
//    }
}
