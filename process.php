<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];
}
$conn = new mysqli('localhost', 'root', '', 'messages_db');
if ($conn){
    $sql = "insert into `messages`(name,subject,email,massage)values('$name','$subject','$email','$massage')";
    $result=mysqli_query($conn,$sql);
    if($result){
        
    }else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="end.css">
    <title>dawit tamen</title>
   
</head>
<body>
    
        <div class="end">
            <h1>Hi, Your Data Is Inserted Successfully</h1>
        </div>

        <a href="index.php" class="back">&#x2190; Back To Home </a>
  
   
    
</body>
</html>


