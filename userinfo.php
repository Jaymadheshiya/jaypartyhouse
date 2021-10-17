<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'youtubeuserdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];


$query = "insert into userinfodata (user,Email,mobile,comments)
values('$user','$email','$mobile','$comments')"; 


echo "$query"; 

mysqli_query($con,$query);

header ('location:index.php');

?>