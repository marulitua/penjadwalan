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
    ListIterator<Possible> iterator = listPossibles.listIterator();

    ArrayList<Possible> finalSolutions = new ArrayList<>();
    ListIterator<Possible> iteratorFinal = finalSolutions.listIterator();
    
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
            System.out.println("List Possible = "+ listPossibles.size());

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
                    Possible baru = new Possible(d.getDosen(), r.getId(), d.getMataKuliah(), d.getHari(), i);
                    listPossibles.add(baru);
                }
            }
        }
    }
    
    private boolean doBacktracking(){
        return true;
    }
}
