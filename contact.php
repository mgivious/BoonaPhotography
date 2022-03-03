<?php
$con = mysqli_connect('localhost','root', '','Boonaphotography');

if($con){
    if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $number= $_POST['Number'];


   $querry = "INSERT INTO CustomerDetails(Name,Email,Number) VALUES('$name','$email','$number' )";

   if(mysqli_query($con,$querry)){
       echo "Data inserted successfully";

   }else{
       echo "Cant Connect man ".mysqli_error($con);
   }

    }
    

}else{
    echo "connection failed";

   
}
?>