<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname='motorsdb';
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;
  if(isset($_POST['forward'])){

    $my_query = "select * from control WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control (f) VALUES ('forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['right'])){

    $my_query = "select * from control WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control (r) VALUES ('right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['left'])){

    $my_query = "select * from control WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control (l) VALUES ('left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['stop'])){

    $my_query = "select * from control WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control (s) VALUES ('stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['backward'])){

    $my_query = "select * from control WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control (b) VALUES ('backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}?>
