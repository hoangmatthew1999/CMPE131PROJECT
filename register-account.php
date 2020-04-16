<?php
    $conn = mysqli_connect("localhost", "root", "", "users");
    if(!conn){
        die("connection failed");
    }
    echo $_GET["account"];
    echo $_GET["pin"];
    $account = $_GET["account"];
    $pin = $_GET["pin"];

    $sql = "INSERT INTO bankAccount(accountNumber, pin) VALUES('$account','$pin') ";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "The data has been added correctly";
    }
    else{
        echo mysqli_error($conn);
        echo "THERE IS AN ERROR";
    }
    mysqli_close($conn);
    // mysqli_query($conn,$sql);
    // $records = mysqli_query($conn,$sql);
    // while($row = mysqli_fetch_array($records) ){
    //     echo "<tr>";
    //     echo "<td>".$row['username']."</td>";
    //     echo " password ";
    //     echo "<td>".$row['password']."</td>";
    //     echo "<br/>";
    // }
   


?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form method = "get">
account number<input type="text" name ="account"><br>
pin number<input type="text" name ="pin"><br>

<input type ="submit">
</form>

</body>
</html> 