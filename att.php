<?php 
$s = $_GET['s'];
$y = date('Y');

$fdt = date('Y-m-d',strtotime($y.'-'.$s.'-'.'01'));
$ldt = date('Y-m-t',strtotime($y.'-'.$s.'-'.'01'));
$nd = date('t',strtotime($y.'-'.$s.'-'.'01'));
$stmt = $pdo->prepare("SELECT emp_id_fk, Resource_Name , ROUND(SUM(TIME_TO_SEC(TIMEDIFF(COALESCE(`end_time`,NOW()),`start_time`)))/3600,1) as Hrs, CAST(`start_time` AS DATE) as cd FROM `attendance` LEFT JOIN resource ON attendance.`emp_id_fk` = resource.`Resource_ID` WHERE CAST(`start_time` AS DATE) BETWEEN :s AND :e GROUP BY emp_id_fk, Resource_Name, CAST(`start_time` AS DATE)");

$stmt->bindParam(':s', $fdt);
$stmt->bindParam(':e', $ldt);

$stmt->execute();
$data = $stmt->fetchAll();
print_r($data);
$ret = "";
$id = array_column($data,'emp_id_fk');
$name = array_column($data,'Resource_Name');
$id = array_unique($id);
$name = array_unique($name);

for($i=0;$i<sizeof($id); $i++){
    $ret.='<tr>
            <td>'.$name[$i].'</td>';

        for($j=0; $j<sizeof($nd); $j++){
            $cd = date('Y-m-d',strtotime($y.'-'.$s.'-'.($j+1)));
            $d = date('l',strtotime($y.'-'.$s.'-'.($j+1)));

            if($d != 'Sunday' && $d != 'Saturday'){

                for($k=0; $k<sizeof($data); $k++){

                    if( $id[$i] == $data[$k]['emp_id_fk']){

                        if($cd == $data[$k]['cd']){
                            $ret.='<td>'.($data[$k]['Hrs']).'</td>';
                        }else{
                            $ret.='<td>0</td>';
                        }
                    }
                }
            }

        }
    $ret.='</tr>';
}

echo $ret;
?>