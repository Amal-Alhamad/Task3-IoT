<?php

// this is for connect to DB
$conn = mysqli_connect('localhost', 'root','');
    
if(!$conn){
    die('Connction Failed');
}
$db_select = mysqli_select_db($conn,'getNumbers');

if(!$db_select){
    die('Sorry, there is no database named getIntNum');
}




$Integer_Number = $_GET['int'];

    
if(isset($_GET["submit"])){
    $query = "INSERT INTO IntNumbers (Numbers) VALUES ('$Integer_Number')";
    $result =mysqli_query($conn,$query);
    if ($result) {
        echo "Added successfully " . "<br>" . "<br>";
       
    } else {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);   
} 
    
else

{
    echo "Failure!";
}

?>
