<?php
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("127.0.0.1","root","swcu1234","php");
    $data_stream = "'".$_POST['userID']."','".$_POST['userPW']."','".$_POST['userName']."'";
    $query = "insert into users(ID,PW,Name) values (".$data_stream.")";
    $result = mysqli_query($conn, $query);
     
    if($result)
      echo "result";
    else
      echo "fault";
     
    mysqli_close($conn);
?>
