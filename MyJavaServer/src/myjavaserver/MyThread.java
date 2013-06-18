/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.io.IOException;
import java.util.ArrayList;
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
    ArrayList<Solution> finalSolutions = new ArrayList<>();
    ListIterator<Solution> iteratorFinal = finalSolutions.listIterator();

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

            DataLayer dao = new DataLayer();
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
            System.out.println("List Possible = " + listPossibles.size());

            //finding solutions
            doBacktracking(0);

            System.out.println("Dapat hasil = " + finalSolutions.size());

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
                    Possible baru = new Possible(d.getDosen(), r.getId(), d.getMataKuliah(), d.getHari(), i, r.getPraktek());
                    listPossibles.add(baru);
                }
            }
        }
    }

    private boolean doBacktracking(int nKurikulum) {
        System.out.println("doBacktracking");
        if ((nKurikulum < listKurikulum.size())) {
            System.out.println("sampe sini");
            if (compareElement(nKurikulum)) {
                boolean result = doBacktracking(nKurikulum + 1);
                if (!result) {
                    finalSolutions.remove(finalSolutions.size() - 1);
                }
                return result;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    private boolean compareElement(int nKurikulum) {

        for (int i = 0; i < listPossibles.size(); i++) {
            if (bisaNga(nKurikulum, i)) {

                Solution baru = new Solution(listPossibles.get(i).getDosenId(), listPossibles.get(i).getRuangId(), listKurikulum.get(nKurikulum).getMataKuliah(), listPossibles.get(i).getDayId(), listPossibles.get(i).getStartTime(), listPossibles.get(i).getStartTime() + listKurikulum.get(nKurikulum).getSks());

                if (findIsNew(baru)) {
                    finalSolutions.add(baru);
                }
                System.out.println("sama");
                return true;
            }
        }
        System.out.println("nga sama bro");
        return false;
    }

    private boolean bisaNga(int nKurikulum, int i) {

        boolean flag = true;

        Kurikulum kurikulum = listKurikulum.get(nKurikulum);

        if (i + kurikulum.getSks() - 1 < listPossibles.size()) {

            for (int j = i; j < i + kurikulum.getSks() - 1; j++) {
                Possible test = listPossibles.get(j);

                // bisa ngajar ini nga
                if (!test.bisaNgajar(kurikulum.getMataKuliah())) {
                    flag = false;
                }

                if (kurikulum.getHarusHari() != null) {
                    if (!kurikulum.harusAri(test.getDayId())) {
                        flag = false;
                    }
                }

                if (kurikulum.getHarusRuangKelas() != null) {
                    if (!kurikulum.harusRuang(test.getRuangId())) {
                        flag = false;
                    }
                } else if (kurikulum.getPraktek() != test.getPraktek()) {
                    flag = false;
                }
            }
        } else {
            flag = false;
        }

        return flag;
    }

    private boolean findIsNew(Solution baru) {

        for (int i = 0; i < finalSolutions.size(); i++) {
            //if(finalSolutions.get(i).getDayId() == baru.getDayId() && finalSolutions.get(i).getDosenId() == baru.getDosenId() && finalSolutions.get(i).getEndTime() == baru.getEndTime() && finalSolutions.get(i).getMatakuliahId() == baru.getMatakuliahId() && finalSolutions.get(i).getRuangId() == baru.getRuangId() && finalSolutions.get(i).getStartTime() && baru.getStartTime())
            if (finalSolutions.get(i) == baru) {
                return false;
            }
        }

        return true;
    }
}
