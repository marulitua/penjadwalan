/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.ListIterator;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author erwin
 */
public class MyThread extends Thread {

    int minTime = 8;
    int maxTime = 18;
    long startTime;
    ArrayList<DosenTime> listDosen = new ArrayList<>();
    ArrayList<Kurikulum> listKurikulum = new ArrayList<>();
    ArrayList<RuangKelas> listRuang = new ArrayList<>();
    ArrayList<Possible> listPossibles = new ArrayList<>();
    ArrayList<Possible> finalSolutions = new ArrayList<>();
    ArrayList<Kurikulum> listGagal = new ArrayList<>();
    DataLayer dao = new DataLayer();

    public MyThread() {
    }

    public MyThread(long StartTime) {
        startTime = StartTime;
    }

    @Override
    public void run() {
        try {
//            Periode activePeriode = new Periode();
//            System.out.println(activePeriode.getId());
//            System.out.println(activePeriode.getPeriode());
//            System.out.println(activePeriode.getSemester());
//            System.out.println(activePeriode.getFlag());

            //test DataLayer


            dao.getActivePeriode();
            System.out.println("getActivePeriode()\n");
            System.out.println("Contents of result: " + dao.result.get(0)[1]);

            //get doset time
            dao.getDosenTime();
            listDosen = dao.listDosen;
            System.out.println("List Dosen = " + listDosen.size());

            //get kurikulum
            dao.getKurikulum();
            listKurikulum = dao.listKurikulum;
            System.out.println("List Kurikulum = " + listKurikulum.size());

            //get All posible Room
            dao.getRuang();
            listRuang = dao.listRuang;
            System.out.println("List Ruang = " + listRuang.size());

            //generating possible solution
            generatePossibleSolution();
            Collections.shuffle(listPossibles);
            System.out.println("List Possible = " + listPossibles.size());

            //finding solutions
            doBacktracking(0);
            //algoNgeramput();
            //algoNgeramput();
            dao.clearGagal();
            dao.clearHasil();
            dao.simpanJadwal(finalSolutions);
            dao.simpanGagal(listGagal);

            System.out.println("Dapat hasil = " + finalSolutions.size());

            System.out.println("Gagal = " + listGagal.size());



//            for (int i = 0; i < 200; i += 1) {
//                MsgLog.write("[ID " + this.getId() + "] " + i);
//                try {
//                    MsgLog.write(" Child thread is sleeping");
//                    Thread.sleep(100);
//                } catch (InterruptedException ex) {
//                    Logger.getLogger(MyThread.class.getName()).log(Level.SEVERE, null, ex);
//                }
//            }

            MsgLog.write(" Child thread terminating");

            long endTime = System.nanoTime();
            MsgLog.write("execution time = " + ((double) (-startTime + endTime) / 1000000000) + " s");
            System.out.println("execution time = " + ((double) (-startTime + endTime) / 1000000000) + " s");
        } catch (IOException ex) {
            Logger.getLogger(MyThread.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    private void generatePossibleSolution() {

        for (RuangKelas r : listRuang) {
            for (DosenTime d : listDosen) {
                int endTime = maxTime;

                if (d.getTimeEnd() < endTime) {
                    endTime = d.getTimeEnd();
                }
                for (int i = d.getTimeStart(); i < endTime; i++) {
                    for (String retval : d.getMataKuliah().split(",")) {
                        if ((i + dao.getSks(Integer.parseInt(retval))) <= endTime) {
                            Possible baru = new Possible(d.getDosen(), r.getId(), Integer.parseInt(retval), d.getHari(), i, (i + dao.getSks(Integer.parseInt(retval))));
                            //Possible(int DosenId, int RuangId, int MatakuliahId, int DayId, int StartTime, int EndTime)
                            //System.out.println("retval = "+retval+" Integer.parseInt(retval) = "+Integer.parseInt(retval));
                            //System.out.println("yang dimasukkan DosenId ="+baru.getDosenId()+" RuangId = "+baru.getRuangId()+" MatakuliahId = "+baru.getMatakuliahId()+" hari = "+baru.getDayId()+" jam mulai = "+baru.getStartTime()+ " jam selesai = "+baru.getEndTime());
                            listPossibles.add(baru);
                        }
                    }
                }
            }
        }
    }

    private boolean doBacktracking(int nKurikulum) {
        System.out.println("doBacktracking");
        int row;
        if ((nKurikulum == listKurikulum.size())) {
            return true;
        } else {
            boolean successful = false;
            row = 0;
            while ((row < listPossibles.size()) && !successful) {
                if (!bisaNga(nKurikulum, row)) {
                    //System.out.println("row++");
                    row++;
                } else {
                    // Place queen and try to place queen in next column.
                    finalSolutions.add(listPossibles.get(row));
                    successful = doBacktracking(nKurikulum + 1);
                    if (!successful) {
                        // Remove the queen placed in the column.
                        finalSolutions.remove(finalSolutions.size() - 1);
                        row++;
                    }
                }
            }
            return successful;
        }
    }

    private boolean compareElement(int nKurikulum) {

        for (int i = 0; i < listPossibles.size(); i++) {
            if (bisaNga(nKurikulum, i)) {

                Possible baru = listPossibles.get(i);

                if (findIsNew(baru)) {
                    finalSolutions.add(baru);
                }
                //System.out.println("sama");
                return true;
            } else {
                //System.out.println("nga sama bro");
            }
        }
        return false;
    }

    private boolean bisaNga(int nKurikulum, int i) {
        Kurikulum kurikulum = listKurikulum.get(nKurikulum);

        Possible test = listPossibles.get(i);

        // bisa ngajar ini nga
        if (test.getMatakuliahId() != kurikulum.getMataKuliah()) {
            //System.out.println("matakuliah tidak memenuhi");
//            System.out.println("Dosen matakuliah = "+test.getMatakuliahId());
//            System.out.println("Kurikulum matakuliah = "+kurikulum.getMataKuliah());
            return false;
        } else if (!kurikulum.harusAri(test.getDayId())) {
            return false;
        } else if (kurikulum.getHarusRuangKelas(test.getRuangId())) {
            System.out.println("ruang kelas tidak memenuhi");
            return false;
        } else if (finalSolutions.contains(test)) {
            System.out.println("Sudah ada di list");
            return false;
        }else if(!waktunyaUdaKepakeApaBlom(test)){
            System.out.println("Waktunya nga mungkin");
            return false;
        }
        return true;
    }

    private boolean findIsNew(Possible baru) {

        if (finalSolutions.isEmpty()) {
            return true;
        } else {
            if (finalSolutions.contains(baru)) {
                return true;
            } else {
                return false;
            }
        }
    }

    private void algoNgeramput() {
        for (int i = 0; i < listKurikulum.size(); i++) {
            for (int j = 0; j < listPossibles.size(); j++) {
                if (bisaNga(i, j)) {
                    Possible baru = listPossibles.get(j);
                    finalSolutions.add(baru);
                }
            }
        }
    }

    private boolean waktunyaUdaKepakeApaBlom(Possible test) {
        for(int i=0;i<finalSolutions.size();i++){
            if(finalSolutions.get(i).getDayId() == test.getDayId() && finalSolutions.get(i).getStartTime()==test.getStartTime() && finalSolutions.get(i).getEndTime()==test.getEndTime())
                return false;
            else
                if(finalSolutions.get(i).getDayId() == test.getDayId() && test.getStartTime() < finalSolutions.get(i).getEndTime())
                    return false;
        }
        
        return true;
    }
}
