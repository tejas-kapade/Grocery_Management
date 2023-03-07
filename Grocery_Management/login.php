<?php
// Database configuration
$dbHost = 'localhost:3306';
$dbUsername = 'tejas';
$dbPassword = 'ILOVEKRISHNA';
$dbName = 'GROCERY';

// Connect to the database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["username"];
$psw = $_POST["password"];

//$sql = "INSERT INTO register(NAME, EMAIL, PHONE, ADDRESS, PINCODE, PASSWORD) VALUES ($name,$email,$phone,$add,$pin,$psw)";
        $sql = "select * from register where NAME = '$name' and PASSWORD = '$psw'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        	
        if($count == 1 && $name=='admin'){
        header('Location: admin.php');
        }
        elseif($count == 1){  
        echo "<br>";
        echo "<br>";
            $vn = $conn->prepare("INSERT INTO entries(name) VALUES (?)");
 $vn->bind_param("s",$name);
 $vn->execute();
  $vn->close();
            echo "<h3 style='color:blue;'><center> Login successful </center></h3>";  
            echo "<hr/>";
            echo "<h1> Welcome ".$name."</h1>";
            header('Location: order.html');
        } 
        else{  
        echo "<br>";
        echo "<br>";
            echo "<h1 style='color:tomato'><center> Login failed. Invalid username or password... TRY AGAIN </center></h1>";  
        }   
/*
$vn = $conn->prepare("INSERT INTO register(NAME, EMAIL, PHONE, ADDRESS, PINCODE, PASSWORD) VALUES (?,?,?,?,?,?)");
 $vn->bind_param("ssssss",$name,$email,$phone,$add,$pin,$psw);
 $vn->execute();
  $vn->close();
 $conn->close();

echo "<h2 style='color:tomato;'>Data inserted successfully... NOW YOU CAN LOGIN</h2>";
echo "<a style='font-size:2em;color:blue;' href='login.html'> LOGIN HERE </a>";


if (mysqli_query($conn, $sql)) {
    echo "<h2 style='color:tomato;'>WELCOME :".$name."</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
// Close the database connection
mysqli_close($conn);
?>
