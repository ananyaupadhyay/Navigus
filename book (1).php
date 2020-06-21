<?php
    session_start();
    $var = $_SESSION["name"];
    echo "<h1 style='text-align: center;margin-top: 50x;color:darkred;'>Appointment Booking</h1>"; 
    echo "<h2 style='margin-top: 20x;color:blue;margin-left: 200px;'>Please choose a slot:$var</h2>";
    
    $date = date('Y-m-d'); 
    $slots = array();
    for($i =1; $i <= 7; $i++){
        $date = date('Y-m-d', strtotime('+1 day', strtotime($date)));
        $nDates[] = date('Y-m-d', strtotime($date));
    }
    foreach($nDates as $value){
        echo "<h3 style='margin-left:100px'>$value<br><br></h3>";
    }
    
   
    
    
?>
