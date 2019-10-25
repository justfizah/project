<?php

  require "dp.php";


  $str = '';
  $q1 = "Select Description from symptom";
  $res = mysqli_query($con,$q1);
if(isset($_POST['value'])){
  while($row = $res->fetch_array())
  {
      $str = $str.$row['Description'].'|';
  }

  echo $str;
}