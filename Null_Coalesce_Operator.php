<?php 
//Null Coalesce Operator
/*
If $username does not exists then Guest will be printed, if variable present before ?? print the 
variable  value.
*/
// $username="Keith Adam";
// $email="abc@cnc.com";
// $user = $username ?? $email??'Guest';

//another way of doing the same way(but this will give warning but null coalesce operator not):
// $username='Keith';
// $user = ($username?$username:'Guest');

// echo $user;


//USING NULL COALESCE OPERATOR USING PHP
$username = $_POST['username']??"Guest";
echo 'Hello '.$username;

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="username" >
<input type="submit" value="Submit">
</form>
