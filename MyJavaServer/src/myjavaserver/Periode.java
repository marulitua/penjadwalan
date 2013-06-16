/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author erwin
 */
public class Periode {
    private int id;
    
    private int semester;
    private int flag;
    private String periode;
    
    public Periode(){
            DataLayer dao = new DataLayer();
            
            dao.getActivePeriode();
            this.id = Integer.parseInt(dao.result.get(0)[0]);
            this.periode = dao.result.get(0)[1];
            this.semester = Integer.parseInt(dao.result.get(0)[2]);
            this.flag = Integer.parseInt(dao.result.get(0)[3]);
            
    }

    /**
     * @return the id
     */
    public int getId() {
        return id;
    }

    /**
     * @return the semester
     */
    public int getSemester() {
        return semester;
    }

    /**
     * @return the flag
     */
    public int getFlag() {
        return flag;
    }

    /**
     * @return the Periode
     */
    public String getPeriode() {
        return periode;
    }
    
}
