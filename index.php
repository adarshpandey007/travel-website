<?php
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con= mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection failed".mysqli_connect_error());

    }
    echo"successfulyy connected";

    

    $name=$_POST['name'];
    $age=$_POST['age'];
    $other=$_POST['desc'];  
    $sql="INSERT INTO `trip'.'trip1` ( `name`, `age`,'desc',`dt`) VALUES ( '$name', '$age', '$desc', current_timestamp());";
    echo $sql;
}
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Travel Website</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <img class="bg" src="pic.jpg" alt="brevistay">
        <div class="container">
    
        <h3>Welcome to Brevistay US trip form</h3>
        <p>
            Enter Your details to confirm your booking
        </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <textarea name="desc" id="desc" placeholder="enter the extra details"></textarea>
            <button class="btn">submit</button>
            <button class="btn">reset</button>  
    
        </form>
        </div>
        <script src="index.js"></script>
    </body>
    </html>
    //bfyubfyubfuy
    <!-- INSERT INTO `trip1` (`sno`, `name`, `age`, `other`, `dt`) VALUES ('1', 'adarsh pandey', '21', 'trip tru[ tri cqhjcbq', current_timestamp());
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Travel Website</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <img class="bg" src="pic.jpg" alt="brevistay">
        <div class="container">
    
        <h3>Welcome to Brevistay US trip form</h3>
        <p>
            Enter Your details to confirm your booking
        </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <textarea name="desc" id="desc" placeholder="enter the extra details"></textarea>
            <button class="btn">submit</button>
            <button class="btn">reset</button>  
    
        </form>
        </div>
        <script src="index.js"></script>
    </body>
    </html>
    //bfyubfyubfuy
    <!-- INSERT INTO `trip1` (`sno`, `name`, `age`, `other`, `dt`) VALUES ('1', 'adarsh pandey', '21', 'trip tru[ tri cqhjcbq', current_timestamp());
    if($con->query($sql)==true){
        echo "success";
    }
    else{
        echo"failedddddddddddddddd  $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="pic.jpg" alt="brevistay">
    <div class="container">

    <h3>Welcome to Brevistay US trip form</h3>
    <p>
        Enter Your details to confirm your booking
    </p>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="enter your name">
        <input type="text" name="age" id="age" placeholder="enter your age">
        <textarea name="desc" id="desc" placeholder="enter the extra details"></textarea>
        <button class="btn">submit</button>
        <button class="btn">reset</button>  

    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
//bfyubfyubfuy
<!-- INSERT INTO `trip1` (`sno`, `name`, `age`, `other`, `dt`) VALUES ('1', 'adarsh pandey', '21', 'trip tru[ tri cqhjcbq', current_timestamp());