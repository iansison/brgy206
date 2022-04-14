<?php
include ("config.php");

$query = "SELECT*FROM rbi_tenant ORDER BY rbi_id DESC";
$r=mysqli_query($con,$query);