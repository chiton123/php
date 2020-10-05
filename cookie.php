<!DOCTYPE html>
<?php
$cookie_name = "ton1";
$cookie_value = "123";
setcookie($cookie_name, "", time() , "/");

?>

<html>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "cookie is not set";
    }else {
        echo "Cookie : " . $cookie_name . " is set";
        echo "Value : " . $_COOKIE[$cookie_name];
    }

    
    ?>
</body>
</html>