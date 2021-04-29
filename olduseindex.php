<?php

$hostname = 'localhost';

$username = 'adminaccount';

$password = ')6@*7PKRU.GXwSWA';


try {
        $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);

        

        $name = $password = $nameErr =$passwordErr = $error = "";

        
    
}



    

catch(PDOException $e)
{
    echo "Error: ".$e->getMessage();
}


if (empty($nameErr)&&empty($password)) {
    $stmt = $dbh->query("SELECT id FROM 'user' WHERE name = '$name' and password ='$password';");

     $error = "Username or Password didn't  match";
    
}




function test_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body align = "center">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>User Login</h1>
        Username: <input type="text" name="name">
        <br><br>
        Password; <input type="password" name="password"><br><br>
        <a href="http://localhost:8080/login/welcome.html">
        <input type="button" value="submit" />
        </a> 
    </form>
    <?php $conn=null; ?>
</body>
</html> 
