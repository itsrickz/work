<?php 
session_start();



if (isset($_GET['category'])) {
  
    $category=$_GET['category'];
    }
else{

}
if (isset($_GET['subcategory'])) {
  
        $subcategory=$_GET['subcategory'];
}
else{

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="serv.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobbyHub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">    
<link rel="stylesheet" href="homestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
</head>
<body>
<?php include('header.php');?>
<h1 style="margin: 2rem;">Services related to <?php echo $subcategory;?></h1>
    <div class="jumbotron">
        <div class="row row-cols-1 row-cols-md-4">
        <?php 
        include("connection.php");
          
          

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
         if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM $tbl2 WHERE category LIKE '%{$category}' and subcategory LIKE '%{$subcategory}'";

        $result=mysqli_query($conn,$query);



while($row=mysqli_fetch_array($result)){?> 
            <div class="col mb-4">
              <div class="card">
                <img src="https://www.elegantthemes.com/blog/wp-content/uploads/2019/04/change-wordpress-thumbnail-size-featured-image.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['title'];?></h5>
                  <small>By Someone</small>
                  <p class="card-text">fkfhajhf l,klahnfk mhfkja ajlfljaf klajflajf ,anfkahnf </p>
                  <a style="float: right;" href="serviceorder.php?id=<?php echo $row['id'];?>" class="btn btn-primary">View</a>
                  <a style="" href="#" class="btn btn-warning">Rs.<?php echo $row['cost'];?></a>
                </div>
              </div>
            </div>
<?php }?>
            
          </div>

    </div>
</body>
</html>
