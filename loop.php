

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-center">
                                    <div class="card-block">
                                       
                                        <style type="text/css">

        #outerdiv {
            position: absolute;
            top: 0;
            left: 0;
            right: 23em;
        }
        #innerdiv {
            width: 100%;
            overflow-x:scroll;
            margin-left: 21em;
            margin-right: -23em;
            overflow-y:visible;
            padding-bottom:1px;
        }
         .headcol-1 {
            position:absolute;
           
            width:3em;
            left:0;
            right: 5em;
            top:auto;
            border-right: 0px none black;
            border-top-width:3px;
            /*only relevant for first row*/
            margin-top:-3px;
            /*compensate for top border*/
            background:yellow;
        }
        .headcol {
            position:absolute;
           
            width:12em;
            left:3em;
            right: 5em;
            top:auto;
            border-right: 0px none black;
            border-top-width:3px;
            /*only relevant for first row*/
            margin-top:-3px;
            /*compensate for top border*/
            background:yellow;
        }
        .headcol2 {
            position:absolute;
           
            width:5em;
            left:15em;
            right: 5em;
            top:auto;
            border-right: 0px none black;
            border-top-width:3px;
            /*only relevant for first row*/
            margin-top:-3px;
            /*compensate for top border*/
            background:yellow;
        }
        .headcol:before {
           
        }
        .long {
            background:#EEE;
           
        }
        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }
</style>
<div id="outerdiv">
    <div id="innerdiv">
        
        <?php 
    $start = '2018-05-01';
    $end = '2018-05-30';
    $db     = mysqli_connect('localhost', 'root', 'toor', 'smarthr');
    $get  = mysqli_query($db,"SELECT code,name FROM employee WHERE code between '1900' and '2200' order by code asc LIMIT 0,100");
    //$get    = mysqli_query($db,"SELECT code,name FROM employee order by code asc  LIMIT 0,50");
    $datediff = strtotime($end) - strtotime($start);
    $datediff = floor($datediff/(60*60*24));

    function differenceInHours($startdate,$enddate){
    $starttimestamp = strtotime($startdate);
    $endtimestamp = strtotime($enddate);
    $difference = abs($endtimestamp - $starttimestamp)/3600;
    return $difference;
}
    
    echo '<table class="table table-bordered table-hover" >';
    echo '<thead class="thead-default thead-lg">';
    echo "<tr>";
    
    echo "</tr>";

    echo "<tr>";
        echo '<th class="headcol-1">&nbsp;&nbsp;</th>'; 
        echo "<th colspan='3' class='headcol'>";
        echo "WEEK";
        echo "</th>";
        echo '<th class="headcol2">&nbsp;&nbsp;</th>'; 
        for($i = 0; $i < $datediff + 1; $i++)
        {
            echo '<th>'.date("w", strtotime($start . ' + ' . $i . 'day')) .'</th>'; 
        }
    echo "</tr>";
    echo "<tr>";
        echo '<th class="headcol-1">&nbsp;&nbsp;</th>'; 
        echo "<th colspan='3' class='headcol'>";
        echo "DAY";
        echo "</th>";
        echo '<th class="headcol2">&nbsp;&nbsp;</th>'; 
        for($i = 0; $i < $datediff + 1; $i++)
        {
            echo '<th>'.date("D", strtotime($start . ' + ' . $i . 'day')) .'</th>'; 
        }
    echo "</tr>";
    
    echo "<tr>";
        echo '<th class="headcol-1">&nbsp;&nbsp;</th>'; 
        echo "<th colspan='3' class='headcol'>";
        echo "DATE";
        echo "</th>";
        echo '<th class="headcol2">&nbsp;&nbsp;</th>'; 
        for($i = 0; $i < $datediff + 1; $i++)
        {
            echo '<th>'.date("m/d", strtotime($start . ' + ' . $i . 'day')) .'</th>'; 
        }
    echo "</tr>";
    echo "<tr>";
        echo "<th colspan='2' class='headcol-1'>";
        echo "NO";
        echo "</th>";
        echo "<th colspan='2' class='headcol'>";
        echo "NAME";
        echo "</th>";
        echo "<th colspan='2' class='headcol2'>";
        echo "NIK";
        echo "</th>";
        echo '<th colspan="30">HASIL PERHITUNGAN</th>'; 
        
    echo "</tr>";
    echo '</thead>';
    echo '<tbody>';
    $x = 1;
    while($data = mysqli_fetch_array($get))
    {
        echo "<tr style='overflow: visible;'>";
            echo "<td class='headcol-1'>";
                echo $x;
            echo "</td>";
            echo "<td class='headcol2' >";
                echo $code = $data['code'];
            echo "</td>";
            echo "<td class='headcol'>";
                echo $data['name'];
                echo '</td>'; 
                
              /*  $dari       = date("Y/m/d", strtotime($start));
                $sampai     = date("Y/m/d", strtotime($end));
                $queries    = "SELECT date_time,day FROM msi_log_data where pin = '$code' and tgl between '$dari' and '$sampai'";
                
                $get_code   = mysqli_query($db,$queries);
                //$klo        = mysqli_fetch_array($get_code);
                


                while ($row = mysqli_fetch_assoc($get_code)) {
                    echo '<td class="long">'.date("H:i", strtotime($row['date_time'])).'</td>';
                    /*foreach ($row as $key => $value) {
                        if ($key == 'date_time') {
                            echo '<td class="long">'.date("H:i", strtotime($value)).'</td>';
                        }else{
                             
                        }
                        
                    }
                }

                
    */
                for($i = 0; $i < $datediff + 1; $i++)
                {
                    
                    $true       = date("Y/m/d", strtotime($start . ' + ' . $i . 'day'));
                    $day        = date("w", strtotime($start . ' + ' . $i . 'day'));
                    $queries    = "SELECT date_time,day FROM msi_log_data where pin = '$code' and tgl = '$true' and status = 0 order by tgl asc LIMIT 1";
                    $get_code   = mysqli_query($db,$queries);
                    $klo        = mysqli_fetch_array($get_code);
                   
                    //$queries    = "SELECT date_time,status,day FROM msi_log_data where pin = '$code' and tgl = '$true' order by tgl  LIMIT 0,2"; 
                    

                   // echo date("H:i", strtotime($klo[0])).'</br>';
                    $in                 = date("H:i", strtotime($klo['date_time'])); 
                    
                    $office_1_in        = date("H:i", strtotime("08:30"));
                    $office_1_out_1     = date("H:i", strtotime("17:30"));
                    $office_1_out_2     = date("H:i", strtotime("17:00"));
                    
                    $office_2_in        = date("H:i", strtotime("08:00"));
                    $office_2_out_1     = date("H:i", strtotime("17:30"));

                    $shift_1_in         = date("H:i", strtotime("07:00"));
                    $shift_1_out        = date("H:i", strtotime("15:00"));

                    $shift_2_in         = date("H:i", strtotime("15:00"));
                    $shift_2_out        = date("H:i", strtotime("23:00"));

                    $shift_3_in         = date("H:i", strtotime("23:00"));
                    $shift_3_out        = date("H:i", strtotime("07:00"));

                    

                    $queries2   = "SELECT date_time,day FROM msi_log_data where pin = '$code' and tgl = '$true' and status = 1 order by tgl asc ";
                    $get_code2  = mysqli_query($db,$queries2);
                    $klo2       = mysqli_fetch_array($get_code2);

                    $datetime1 = strtotime($klo['date_time']);
                    $datetime2 = strtotime($klo2['date_time']);
                    
                    
                    $datetime1 = new DateTime($klo['date_time']);
                    $datetime2 = new DateTime($klo2['date_time']);
                    
                     $interval = $datetime1->diff($datetime2);
                    

                    echo '<td class="long">';
                    if(!isset($klo['date_time']) == NULL){
                        $masuk = date("H:i", strtotime($klo['date_time'])); 
                    }else{
                        $masuk = '00.00';
                    }
                    if(!isset($klo2['date_time']) == NULL){
                         $keluar = date("H:i", strtotime($klo2['date_time'])); 
                    }else{
                        $keluar = '00.00';
                    }
                   

                    if($masuk == '00.00' && $keluar == '00.00'){
                        echo '00:00|00.00';
                    }else{
                        //echo $interval->format('%H,%i |');
                        echo '<a style="color:red">'.$masuk.'|'.$keluar.'</a>';
                        
                        echo '<div class="tooltip">Shift';
                            echo '<span class="tooltiptext">Tooltip text</span>';
                        echo '</div>';

                    echo '</td>'; 
                    //echo '<td>'.date("m/d", strtotime($start . ' + ' . $i . 'day')) .'</td>'; 
                    }
                }
                
                
                
            echo "</td>";
            $x++;
        echo "</tr>";
        
        
    
    } 
     echo '</tbody>';
    echo "</table>";
    
?>

    </div>
</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
