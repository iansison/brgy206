<?php
 include('include/connect.php');
//  include('include/sidebar.php');


   if($_POST['request']){
   // if(isset($_POST['request'])){

      $request = $_POST['request'];


       $sql = "SELECT * FROM rbi_tenant where rbi_id ='$request'";
       $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_assoc($result)) {
        //    $fullname = $row['full_name'];
           ?>
         
            <option value="<?php echo $row['full_name'];?>"><?php echo $row['full_name'];?></option>
           <?php
           
       }
      
       
   }
   
   elseif(isset($_POST['resident'])) {

         $resident = $_POST['resident'];

         $sql = "SELECT * FROM rbi_tenant where full_name ='$resident'";
         $result = mysqli_query($conn, $sql);
  
         while($row = mysqli_fetch_assoc($result)) {
          //    $fullname = $row['full_name'];
             ?>
      
              <option value="<?php echo $row['resident_no'];?>"><?php echo $row['resident_no'];?></option>
             <?php
             
         }
      
      
 
   }


 

?>

