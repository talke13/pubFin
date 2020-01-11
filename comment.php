<?php 
$conn = mysqli_connect('localhost:3308', 'root', '');
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, 'ThePub');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}   
if((isset($_POST['name'])) && (isset($_POST['komment'])))
{
$name = $_POST['name'];
$email = $_POST['surname'];
$comment = $_POST['comment'];
$sql="INSERT INTO contact (name, surname, comment) VALUES ('$name','$surname', '$comment');";
$result = mysqli_query($conn, $sql);
if($result){
    
echo "Thank you! We will get in touch with you soon";
}
else{
    echo "Submission failed!";
}    
}
?>