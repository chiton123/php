<?php
if(isset($_POST['name']) && isset($_POST['age'])){
    echo "Name: " . $_POST['name'] . "<br>";
    echo "Age: " .$_POST['age'];
    die();
}

?>

<html>
<body>
    <form action="12.php" method="POST">
        Name:
        <input type="text" name="name"/>
        Age:
        <input type="text" name="age" />
        <input type="submit" />
    </form>


</body>

</html>