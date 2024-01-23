<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text"  name="firstname" >
        <input type="text" name="lastname">
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php

class User
{
    public $FirstName = null;
    public $lastname = null;
    public $name = null;

    public function regaster(){
 
        $servername = "localhost";
        $username = "root";
        $password = "";     
        $dbname = "user";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (first_name, last_name, username)
        VALUES ('$this->FirstName', ' $this->lastname', '$this->name')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    }

       
    
};



$test = new User();
if(isset($_POST['firstname'])&& isset($_POST['lastname'])){
    $test->FirstName = $_POST['firstname'];
    $test->lastname = $_POST['lastname'];
    $test->name = $_POST['username'];
    
     $test->regaster();
}

