<?php
include_once 'pdo/db.php';
echo 'Processing';
var_dump($dbh);
    if(isset($_POST['name'])){
        var_dump('here');
        echo 'Your Post name is : '.$_POST['name'];
        $name=$_POST['name'];
        $query = "INSERT INTO users(name) VALUES(:name)";
        $statement= $dbh->prepare($query);
        $statement->execute(array(
            ':name'=>$name
        ));
        if($statement->rowCount()==1){
            echo 'Successfully inserrted';
        }
    }

    if(isset($_GET['name'])){
        echo ' Your name is :' . $_GET['name'];
    }

    $sql = "SELECT * FROM users";
    foreach ($dbh->query($sql) as $row)
    {
    echo $row["id"] ." - ". $row["name"] ."<br/>";
    }
?>
