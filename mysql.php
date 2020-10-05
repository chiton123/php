<?php
$username = "root";
$password = "";
$host = "localhost:3307";
$database = "sendo";
$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error){
    dia("error");
}else {
    echo "success";
}
$sql = "UPDATE user set name = 'TON' where id = 1";
$query = $conn->query($sql);
if($query === true){
    echo "da update";
}

// while($row = $query->fetch_assoc()){
//     echo $row["name"] . "<br>";
// }




?>