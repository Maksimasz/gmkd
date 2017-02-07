<?php

class mail {
    
    
    public function Send($send){
        
        extract($send);
  
        $mess = ' 
                <html style="direction: rtl;">
                <head >
                <title>מכתב מ:&nbsp; gmkd.co.il </title>
                </head>
                <body style="direction: rtl;" >
                <h2>מכתב מ:&nbsp;gmkd.co.il</h2>
                <h3>&nbsp; '.date("H:i").' &nbsp;|&nbsp;'.date("d.m.Y").'</h3>
                <hr>
                <p style="font-size: 14px; font-weight: bold; color: green;"><i style="color: black; font-weight: normal;">שם: &nbsp;&nbsp;'.$name.'</i></p>
                <p style="font-size: 14px; font-weight: bold; color: green;"><i style="color: black; font-weight: normal;">דוא"ל:&nbsp;&nbsp;'.$email.'</i> </p>
                <p style="font-size: 14px; font-weight: bold; color: green;"><i style="color: black; font-weight: normal;">מספר טלפון נייד: &nbsp;&nbsp;'.$mobile.'</i> </p>
                <p style="font-size: 14px; font-weight: bold; color: green;"><i style="color: black; font-weight: normal;">'.$subject.'</i> </p>
                <p style="font-size: 13px;\"><hr><br>'.$message.'</p>
                </body></html>'; 

                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

                // $to - кому отправляем 
               $to = 'office@gmkd.co.il'. "\r\n"; 
                //$to = 'maksimasz@yahoo.com'. "\r\n";
                $headers .= "From:gmkd.co.il-{$name}" . "\r\n";

       $yalla = mail($to, $subject, $mess, $headers); 
       
       if($yalla==TRUE){
            $send_ok='<b>תודה לך! הודעתך נשלחה.</b>'; 
            return $send_ok;
       }
       else {
        exit('SEND EMAIL FAIL');
               
       }       

        
    }
}