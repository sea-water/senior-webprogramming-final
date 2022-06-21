<?php
​
include "dbdb.php";
​
  if($userId != null)    
  {
    $sql = "insert into store (id, text, date)";
    $sql = $sql."values('$uName', '$uContent', '$date')";
     
    if($mysqli->query($sql)){
        echo "<script>alert('Success'); location.href='final copy.html';</script>";
​
    }else{
        echo "<script>alert('Failed');location.href='final copy.html';</script>";
    }
  }
  else {
        echo "<script>alert('no match');location.href='final copy.html';</script>";
  }
​
?>