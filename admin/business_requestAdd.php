<?php
// if (isset($_POST['submit'])) {
//     if (isset($_POST['ufullname'])) {
        
//         $residentId = "WALK-IN";        
//         $username = $_POST['ufullname'];
//         $businessName = $_POST["bname"];
//         $businessContactno = $_POST["bcontactno"];
//         $businessEmail = $_POST["bemail"];
//         $location = $_POST["lacation"];
//         $location = str_replace(" ", "+", $location);
//         $businessId = $_POST['businessId'];
//         $status = "Pending";
//         $permitType = 'Indigency';
//         $pstatus = "none";
//         date_default_timezone_set('Asia/Manila');
//         $date = date("F j, Y, g:i a");
//         $img = time() . '_' . $_FILES['img']['name'];

//         $target = 'images/businessImage/' . $img;

//         move_uploaded_file($_FILES['img']['tmp_name'], $target)

//         $host = "localhost";
//         $dbUsername = "root";
//         $dbPassword = "";
//         $dbName = "barangay206";
//         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
//         if ($conn->connect_error) {
//             die('Could not connect to the database.');
//         }
//         else {
//             $Select = "SELECT uname FROM business WHERE uname = ? LIMIT 1";
//             $Insert = "INSERT INTO business(uname,businessName,bstatus,status,date_set,urbi,location,businessImg) values(?, ?, ?, ?, ?, ?, ?, ?)";
//             $stmt = $conn->prepare($Select);
//             $stmt->bind_param("s", $id);
//             $stmt->execute();
//             $stmt->bind_result($resultEmail);
//             $stmt->store_result();
//             $stmt->fetch();
//             $rnum = $stmt->num_rows;
//             if ($rnum == 0) {
//                 $stmt->close();
//                 $stmt = $conn->prepare($Insert);
//                 $stmt->bind_param("sssssssb",$username,$businessName,$status,$pstatus, $date, $residentId, $location,$img);
//                 if ($stmt->execute()) {
//                     echo "Gago gumana!";
//                 }
//                 else {
//                     echo $stmt->error;
//                 }
//             }
//             else {
//                 echo "Insert failed.";
//             }
//             $stmt->close();
//             $conn->close();
//         }
//     }
//     else {
//         echo "All field are required.";
//         die();
//     }
// }
// else {
//     echo "Submit button is not set";
// }
?>
<?php 

    session_start();
    if(isset($_POST["submit"])) {

        $businessName = $_POST["bname"];
        $businessContactno = $_POST["bcontactno"];
        $businessEmail = $_POST["bemail"];
        $location = $_POST["lacation"];
        $location = str_replace(" ", "+", $location);
        $businessId = $_POST['businessId'];
        $description = $_POST['description'];

        $urbi = "WALK-IN";       

        $uname = $_POST['ufullname'];
        $uemail = $_POST['uemail'];
        
        

        $status = "Pending";

        date_default_timezone_set('Asia/Manila');
        $date = date("F j, Y, g:i a");
   
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

               
        $img = time() . '_' . $_FILES['img']['name'];

        $target = '../resident/businessImage/' . $img;

    

        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)) {

            business($conn, $businessName, $location, $businessId, $img, $businessContactno, $description,  $businessEmail,  $urbi, $uname, $uemail);

            exit();

       

        }



    }

    else {
        header("location: business_request.php");
    }