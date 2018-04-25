<?PHP 
$db = mysqli_connect('localhost', 'root', 'toor', 'coba');
$result = mysqli_query($db,"
select 
  ca.studentname,
  ca.rollno,
  ca.class,
  max(case when ca.date = '2013-06-01' then coalesce(p.status, 'P') end) `2013-06-01`,
  max(case when ca.date = '2013-06-02' then coalesce(p.status, 'P') end) `2013-06-02`,
  max(case when ca.date = '2013-06-03' then coalesce(p.status, 'P') end) `2013-06-03`,
  max(case when ca.date = '2013-06-04' then coalesce(p.status, 'P') end) `2013-06-04`,
  max(case when ca.date = '2013-06-05' then coalesce(p.status, 'P') end) `2013-06-05`,
  max(case when ca.date = '2013-06-06' then coalesce(p.status, 'P') end) `2013-06-06`,
  max(case when ca.date = '2013-06-07' then coalesce(p.status, 'P') end) `2013-06-07`,
  max(case when ca.date = '2013-06-08' then coalesce(p.status, 'P') end) `2013-06-08`,
  max(case when ca.date = '2013-06-08' then coalesce(p.status, 'P') end) `2013-06-09`,
  max(case when ca.date = '2013-06-10' then coalesce(p.status, 'P') end) `2013-06-10`
from
(
  select c.date, a.studentname, a.rollno, a.class
  from calendar c
  cross join tbl_admission a
) ca
left join tbl_absentees p
  on ca.rollno = p.rollno
  and ca.date = p.date
group by ca.studentname, ca.rollno, ca.class
order by ca.rollno;
");


$data_table = $result;

echo '<table border =1>';
foreach ($data_table as $row) {
    echo '<tr>';
        foreach($row as $cell) {
            echo '<td>' . $cell . '</td>';
        }
    echo '</td>';
}
echo '</table>';
?>