<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "barangay206");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM rbi_tenant ORDER BY rbi_id";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                               <th>Resident_ID</th>
                               <th>Full Name</th>  
                               <th>Address</th>  
                               <th>Birth Place</th>  
                               <th>Birthday</th>  
                               <th>Sex</th>    
                               <th>Civil Status</th>    
                               <th>Tenant</th>    
                               <th>Occupation</th>    
                               <th>Relationship to Household Head</th>  
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["resident_no"].'</td>  
                         <td>'.$row["firstname"] . " ". $row["lastname"].'</td>  
                         <td>'.$row["address"].'</td>  
				         <td>'.$row["birth_place"].'</td>  
				         <td>'.$row["birth_date"].'</td>  
				         <td>'.$row["gender"].'</td>  
				         <td>'.$row["civil_status"].'</td>  
				         <td>'.$row["tenant"].'</td>  
				         <td>'.$row["occupation"].'</td>  
				         <td>'.$row["relationship"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
