<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'yetiforce'); #CONNECT TO DB

$start = date('Y-m-d', strtotime(htmlspecialchars($_POST['start']))); #GET START USER'S DATE
$end = date('Y-m-d', strtotime(htmlspecialchars($_POST['end'])));  #GET END USERS DATE

if($start == '' or $end == ''){
    echo "Not all dates was selected. Please, select all dates";  #TEST FOR EMPTY DATES
}

else{
    $sumar = [];            #SUM OF KM AFTER COUNTIG WITH FORMULA "KM / 100 * COST OF FUEL * FUEL ON HOUR"
    $date_between = "SELECT * FROM u_yf_departures WHERE departure_date BETWEEN " . "'" . $start . "'". " AND " . "'" . $end . "'";     #POINT OF START: CONNECT AND GET NAME OF CAR
    $koszt_paliwa = 5;
    $ar = [];       #ARRAY WITH CARNAME
    if($result = $connect->query($date_between)){
        foreach ($result as $row){
            $ar[] = $row['car_name'];  #GET CARNAME
        }

        $sum = 0; #CRAETE 0 SUM OF KM
        foreach (array_unique($ar) as $i){
            $pytan = "SELECT * FROM u_yf_departures WHERE car_name = " . $i; #CONNECT FOR TABLE OF DEPARTURE FOR GET SUM OF KM
            if($re = $connect->query($pytan)){
                foreach ($re as $b){
                    $sum += $b['sum_of_km'];
                }
            }

            $pytan_finaly = "SELECT * FROM u_yf_cars WHERE carsid = " . $i; #CONNECT TO DB FOR GET LIST OF CAR
            if($re_finaly = $connect->query($pytan_finaly)){
                foreach ($re_finaly as $fianly){
                    $sumar = round($sum / 100 * $koszt_paliwa * $fianly['zu_pl']);  #COST OF SERVICE
                    $connect->query('UPDATE u_yf_cars SET koszt =' . $sumar .  ' WHERE carsid = ' . $i); #UPDATE COST OF SERVICE IN DB
                }
            }
            $sum = 0; #RESET SUM OF KM FOR NEW ITTERATION
        }
    }
    $url = 'http://localhost:8888/index.php?module=Cars&view=List';
    header("Location: ".$url);
    echo "<script>AsAlert();</script>";
}