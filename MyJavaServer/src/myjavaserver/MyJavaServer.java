/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myjavaserver;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.TimeZone;

/**
 *
 * @author erwin
 */
public class MyJavaServer {

    public static void main(String[] args) throws IOException {

        //
        MsgLog.write("java server stared");

        int port = 20222;
        ServerSocket listenSock = null; //the listening server socket
        Socket sock = null;			 //the socket that will actually be used for communication

        try {

            listenSock = new ServerSocket(port);

            while (true) {	   //we want the server to run till the end of times

                sock = listenSock.accept();			 //will block until connection recieved

                BufferedReader br = new BufferedReader(new InputStreamReader(sock.getInputStream()));
                BufferedWriter bw = new BufferedWriter(new OutputStreamWriter(sock.getOutputStream()));
                String line = "";
                while ((line = br.readLine()) != null) {
                    //write log
                    MsgLog.write("php sent : " + line);
//                    int param = Integer.parseInt(line);
//                    param *= param;
//                    bw.write(Integer.toString(param) + "\n");
//                  
                    TimeZone tz = TimeZone.getTimeZone("EST"); // or PST, MID, etc ...
                    Date now = new Date();
                    DateFormat df = new SimpleDateFormat("yyyy.mm.dd hh:mm:ss ");
                    df.setTimeZone(tz);
                    String currentTime = df.format(now);

                    bw.write(currentTime + "\n");
                    bw.flush();
                    MsgLog.write("java sent : " + (currentTime));
                }

                //Closing streams and the current socket (not the listening socket!)
                bw.close();
                br.close();
                sock.close();
            }
        } catch (IOException ex) {
            ex.printStackTrace();
        }
    }
}
