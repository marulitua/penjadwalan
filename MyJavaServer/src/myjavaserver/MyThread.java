/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Arrays;
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
    int anchor = 0;
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
            Collections.shuffle(listKurikulum);
            System.out.println("List Kurikulum = " + listKurikulum.size());

            //get All posible Room
            dao.getRuang();
            listRuang = dao.listRuang;
            Collections.shuffle(listRuang);
            System.out.println("List Ruang = " + listRuang.size());

            //generating possible solution
            generatePossibleSolution();
            Collections.shuffle(listPossibles);
            System.out.println("List Possible = " + listPossibles.size());

//            System.out.println("harusHari");
//            for(int i =0;i<listKurikulum.size();i++){
//                System.out.println(listKurikulum.get(i).getHarusHari().isEmpty());
//            }
//            
//            System.out.println("harusRuang");
//            for(int i =0;i<listKurikulum.size();i++){
//                System.out.println(listKurikulum.get(i).getHarusRuangKelas().size());
//            }
//            
//            System.out.println("harusRuang");
//            for(int i =0;i<listKurikulum.size();i++){
//                System.out.println("praktek = "+listKurikulum.get(i).getPraktek());
//            }

            //finding solutions
            //doBacktracking(0);

            //do repeatly until all kurikulums are tested
            do {
                doBacktracking(0);
                System.out.println("doBacktracking ==> done");

                //if no result remove it and do againt
                if (anchor != 0 && anchor < listKurikulum.size()) {
                    listGagal.add(listKurikulum.get(anchor));
                    listKurikulum.remove(anchor);
                    System.out.println("anchor = " + anchor);
                    System.out.println("kurikulim tinggal = " + listKurikulum.size());
                    //doBacktracking(0);
                } else {
                    anchor = 0;
                }
            } while (anchor != 0); //algoNgeramput();
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
                            //Possible baru = new Possible(d.getDosen(), Integer.parseInt(retval), d.getHari(), i, (i + dao.getSks(Integer.parseInt(retval))));
                            Possible baru = new Possible(d.getDosen(), r.getId(), Integer.parseInt(retval), d.getHari(), i, (i + dao.getSks(Integer.parseInt(retval))), r.getPraktek());
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
        if (nKurikulum > anchor) {
            anchor = nKurikulum;
        }

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

    private boolean bisaNga(int nKurikulum, int i) {

        Kurikulum kurikulum = listKurikulum.get(nKurikulum);
        Possible test = listPossibles.get(i);
        boolean praktek;
        if (kurikulum.getPraktek() == 1) {
            praktek = true;
        } else {
            praktek = false;
        }

        // bisa ngajar ini nga
        if (test.getMatakuliahId() != kurikulum.getMataKuliah()) {
//            System.out.println("mata kuliah nga sama");
            return false;
        } else if (!kurikulum.harusAri(test.getDayId())) {
//            System.out.println("harus ari");
            return false;
        } else if (!kurikulum.harusRuang(test.getRuangId())) {
//            System.out.println("harus ruang");
            return false;
        } else if (praktek != test.isPraktek()) {
            return false;
        } else if (udaAdaApaBlom(test)) {
            return false;
        } else if (!waktunyaUdaKepakeApaBlom(test)) {
            return false;
        }
//        else if(!ruangUdaKepakeApaBlom(test)){
//            return false;
//        }


        return true;
    }

    private boolean waktunyaUdaKepakeApaBlom(Possible test) {

        int[] jam = new int[maxTime];
        Arrays.fill(jam, 0);
        boolean result = true;
        for (int i = 0; i < finalSolutions.size(); i++) {
            //coloring
            if (finalSolutions.get(i).getDayId() == test.getDayId() && finalSolutions.get(i).getDosenId() == test.getDosenId()) {
                for (int j = finalSolutions.get(i).getStartTime(); j < finalSolutions.get(i).getEndTime(); j++) {
                    jam[j] = 1;
                }
            }

            /*
             if (finalSolutions.get(i).getDayId() == test.getDayId() && finalSolutions.get(i).getDosenId() == test.getDosenId()) {
             if (test.getEndTime() <= finalSolutions.get(i).getStartTime() || finalSolutions.get(i).getEndTime() >= test.getStartTime() ) {
             return true;
             }
             else
             return false;
             //                if (finalSolutions.get(i).getStartTime() == test.getStartTime() && finalSolutions.get(i).getEndTime() == test.getEndTime()) {
             //                    return false;
             //                } else if (test.getStartTime() < finalSolutions.get(i).getEndTime()) {
             //                    return false;
             //                }
             }*/
        }

        for (int j = test.getStartTime(); j < test.getEndTime(); j++) {
            if (jam[j] == 1) {
                result = false;
            }
        }

        return result;
    }

    private boolean ruangUdaKepakeApaBlom(Possible test) {
        int[] jam = new int[maxTime];
        Arrays.fill(jam, 0);
        boolean result = true;
        for (int i = 0; i < finalSolutions.size(); i++) {
            //coloring
            if (finalSolutions.get(i).getDayId() == test.getDayId() && finalSolutions.get(i).getRuangId()== test.getRuangId()) {
                for (int j = finalSolutions.get(i).getStartTime(); j < finalSolutions.get(i).getEndTime(); j++) {
                    jam[j] = 1;
                }
            }

            /*
             if (finalSolutions.get(i).getDayId() == test.getDayId() && finalSolutions.get(i).getDosenId() == test.getDosenId()) {
             if (test.getEndTime() <= finalSolutions.get(i).getStartTime() || finalSolutions.get(i).getEndTime() >= test.getStartTime() ) {
             return true;
             }
             else
             return false;
             //                if (finalSolutions.get(i).getStartTime() == test.getStartTime() && finalSolutions.get(i).getEndTime() == test.getEndTime()) {
             //                    return false;
             //                } else if (test.getStartTime() < finalSolutions.get(i).getEndTime()) {
             //                    return false;
             //                }
             }*/
        }

        for (int j = test.getStartTime(); j < test.getEndTime(); j++) {
            if (jam[j] == 1) {
                result = false;
            }
        }

        return result;
    }

    private boolean udaAdaApaBlom(Possible test) {
//        for (int i = 0; i < finalSolutions.size(); i++) {
////            if(finalSolutions.get(i).getDayId() == test.getDayId() && finalSolutions.get(i).getDosenId() == test.getDosenId() &&  finalSolutions.get(i).getEndTime() == test.getEndTime() && finalSolutions.get(i).getMatakuliahId() )
//            if(fin)
//        }

        return finalSolutions.contains(test);
    }
}
