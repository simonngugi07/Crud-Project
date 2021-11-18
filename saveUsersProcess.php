

<?php
if (isset($_GET['submit'])){
$inputedname=  $_GET['name'];
$inputedemail = $_GET['email'];
$inputedpassword = $_GET['password'];
//to save data you have to  connect to the db
    $con = mysqli_connect("localhost","root","","saveusers");
//check if the connection was successful
if(!$con){
echo "connection failed";
}
else{
//proceed to save the data
//start insert query
    $insertQuery = "INSERT INTO `webstudents`(`id`, `name`, `email`, `password`) VALUES ('[null]','[$inputedname]','[$inputedemail]','[$inputedpassword]')";
//check if insert query is correct
if(!$insertQuery){
echo "Error in insert query";
}
else{
//  proceed to write data to the db
$save = mysqli_query($con,$insertQuery);
//check if your data was successfully saved
if(!$save){
echo "saving failed";

}
else{
echo "saved successfully";
echo "<br>";
//to return to the original page
header("location;saveUsers.html");
}


}
}
}

