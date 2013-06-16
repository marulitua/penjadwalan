/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.io.IOException;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.TimeZone;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author erwin
 */
public class MyThread extends Thread {

    private int startIdx, nThreads, maxIdx;

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

//            DataLayer dao = new DataLayer();
//            dao.getActivePeriode();
//            System.out.println("getActivePeriode()\n");
//            System.out.println("Contents of result: " + dao.result);


            for (int i = this.startIdx; i < this.maxIdx; i += this.nThreads) {
                MsgLog.write("[ID " + this.getId() + "] " + i);
                try {
                    MsgLog.write(" Child thread is sleeping");
                    Thread.sleep(100);
                } catch (InterruptedException ex) {
                    Logger.getLogger(MyThread.class.getName()).log(Level.SEVERE, null, ex);
                }
            }

            MsgLog.write(" Child thread terminating");
        } catch (IOException ex) {
            Logger.getLogger(MyThread.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}
