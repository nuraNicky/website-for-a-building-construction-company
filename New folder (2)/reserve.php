   <?php
       
    if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect.php"); 
	$fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['mail'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $tel=$_POST['tel'];
    $date=$_POST['date'];
    $ftime=$_POST['ftime'];
    $ttime=$_POST['ttime'];
try{
    $query="insert into reserve(fname,lname,email,dob,address,city,tel,date,form,tto)    
values('$fname','$lname','$email','$dob','$address','$city','$tel','$date','$ftime','$ttime')";
$dbname->exec($query);
	echo "You Have Successfully Reserved" . " " . "National Youth Services Council"; 
}
catch(PDOException $e) {
 echo '<div class="alert-warning" > ';
  echo $e->getMessage();
    }}
?>