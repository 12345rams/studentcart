<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<?php 
include './_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $item=$_POST['comment'];
   $sql="INSERT INTO `listofproduct`(`name`) VALUES ('$item')";
   $result = mysqli_query($conn,$sql);
   if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your demand has been added! Please wait for community to respond
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>';
   }
}
   echo '<div class="container">
       <h1 class="py-2">Demand item</h1> 
       <form action= "./demand.php" method="post"> 
           <div class="form-group">
               <label for="exampleFormControlTextarea1">Add your demand</label>
               <textarea class="form-control" id="comment" name="comment" rows="2"></textarea>
               <input type="hidden" name="sno" value="">
           </div>
           <button type="submit" class="btn btn-success">Post demand</button>
       </form> 
   </div>';
   


   ?>
</body>
</html>