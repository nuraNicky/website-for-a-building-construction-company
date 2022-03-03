   <?php
       
    if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect.php"); 
	$fname = $_POST['name'];
    $lname=$_POST['email'];
    $email=$_POST['country'];
    $dob=$_POST['subject'];
try{
    $query="insert into register(name,email,country,subject)    
values('$fname','$lname','$email','$dob')";
$dbname->exec($query);
	echo "<script>alert('Your data has been updated')</script>"; 
}
catch(PDOException $e) {
 echo '<div class="alert-warning" > ';
  echo $e->getMessage();
    }}
?>