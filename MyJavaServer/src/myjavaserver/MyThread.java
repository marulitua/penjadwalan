/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.io.IOException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author erwin
 */
public class MyThread extends Thread {
    
    private int startIdx, nThreads, maxIdx;
    ArrayList <DosenTime> listDosen = new ArrayList<> ();    
    ArrayList <Kurikulum> listKurikulum = new ArrayList<> ();    
    
    public MyThread(int s, int n, int m) {
        this.startIdx = s;
        this.nThreads = n;
        this.maxIdx = m;
    }

    @Override
    public void run() {
        try {
            Periode activePeriode = new Periode();
//            System.out.println(activePeriode.getId());
//            System.out.println(activePeriode.getPeriode());
//            System.out.println(activePeriode.getSemester());
//            System.out.println(activePeriode.getFlag());
//        

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
            System.out.println("List Dosen = " + listKurikulum.size());

//            for (int i = this.startIdx; i < this.maxIdx; i += this.nThreads) {
//                MsgLog.write("[ID " + this.getId() + "] " + i);
//                try {
//                    MsgLog.write(" Child thread is sleeping");
//                    Thread.sleep(100);
//                } catch (InterruptedException ex) {
//                    Logger.getLogger(MyThread.class.getName()).log(Level.SEVERE, null, ex);
//                }
//            }

            MsgLog.write(" Child thread terminating");
        } catch (IOException ex) {
            Logger.getLogger(MyThread.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}
