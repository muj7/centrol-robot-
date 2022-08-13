<?php

$host = 'localhost';
$db = 'robort_sm';
$username = 'root';
$password = '';

$con = mysqli_connect($host, $username, $password, $db);

if(mysqli_connect_errno())
{
  echo mysqli_connect_error();
  exit();
}

$query = 'SELECT * FROM moves';
$result = mysqli_query($con, $query);

  $var = $_GET["value"]
?>

  <?php if(isset($_POST["forwared"]){
    $query = "INSERT INTO moves (direction, lenght) VALUES ('Forwared', '$var')";
    $res = mysqli_query($con, $query); ?>
    <?php echo "<h2> Forwared </h2>";
  }
  ?>
 <?php else if(isset($_POST["right"]){
    $query = "INSERT INTO moves (direction, lenght) VALUES ('Right', '$var')";
    $res = mysqli_query($con, $query); ?>
    <?php echo "<h2> Right </h2>";
  } ?>

  <?php else if(isset($_POST["stop"]){
    $query = "INSERT INTO moves (direction, lenght) VALUES ('stop', '$var')";
    $res = mysqli_query($con, $query); ?>
    <?php echo "<h2> Stop </h2>";
  } ?>
<?php  else if(isset($_POST["left"]){
    $query = "INSERT INTO moves (direction, lenght) VALUES ('left', '$var')";
    $res = mysqli_query($con, $query); ?>
    <?php echo "<h2> Left </h2>";
  } ?>

<?php  else if(isset($_POST["backward"]){
    $query = "INSERT INTO moves (direction, lenght) VALUES ('backward', '$var')";
    $res = mysqli_query($con, $query); ?>
     <?php echo "Backward";
  } ?>
