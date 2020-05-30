<?php
    print_r($_POST);
    $conn = mysqli_connect("localhost","root","root","mydb");
    if (!empty($_POST['sub'])) {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        echo "DONE!";
        if (!empty($name)&&!empty($roll)) {
            $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$name','$roll')";
            $conn->query($sql);
        }
    }
    else{
        echo "Enter details";
    }
    

?>

<html>
    <body>
    <form action="index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="roll"><br>
        <input type="submit" name="sub">
    </form>
    </body>
</html>