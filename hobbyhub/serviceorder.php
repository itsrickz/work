<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbyhub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="fdashstyle.css">

</head>
<style>
  body{
    overflow-x:hidden;
  }
</style>
<body>
<?php 
  $id=$_GET['id'];
  include("connection.php");
  $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
         if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM $tbl2 WHERE id LIKE '%{$id}'";
        

        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
        $freelanceremail=$row['email'];
        $query2="SELECT * FROM $tbl3 WHERE email LIKE '%{$freelanceremail}'";
        $result2=mysqli_query($conn,$query2);
        $row2=mysqli_fetch_array($result2);
        $query3 = "SELECT * FROM $tbl2 WHERE email LIKE '%{$freelanceremail}'";
        $result3=mysqli_query($conn,$query3);
        

?>
 <?php
 session_start(); 
 
 ?>
 
<div class="row" >
    <div class="col-lg-6"><h1 style="margin:4vw;" >
      <h1>
         <?php echo $row['title'];?>
      </h1>
      <img style="margin-left:4vw;" class="img-fluid" src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/156816502/original/ddb45dd35a31c691ee1f2f66eec0462707bb879d/do-any-photoshop-editing-under-24-hrs.jpg" alt="">    
    </div>
    <div class="col-lg-6">
    
        <h3 style="margin-top:4vw;" >Description
            
    </h3>
    
      <p>
      <?php echo $row['description'];?></p>
        <h3>Charges</h3>
        <div class="charges">Rs.<?php echo $row['cost'];?></div>
        <div class="container11">
        <button class="btn btn-lg  btn-lg btn-info"  type="button" data-toggle="modal" data-target="#order1"> Order </button>
        
      </div>
        
</div>
    
      </div>
<div  style="margin-top: 4%;" class="jumbotron container">
<div class="container">

<div class="jumbotron">
    <h1 class="display-4">About the freelancer</h1>
    <img style="height:200px; width: 200px;" src="https://source.unsplash.com/random" alt="">
    <h1 class="name"> <?php echo $row2['fname']." ".$row2['lname'];?></h1>
    <p class="lead">Sed ut perspiciatis unde omnis  vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
  </div>
</div>
      </div>
<div class="jumbotron container">
    <h2>Previous orders</h2>
    <ul class="list-group">
        <li class="list-group-item"><h2>Cras justo odio</h2><p>Sed ut perspiciatis unde omnis  vel illum qui dolorem eum fugiat quo voluptas nulla </p></li>
        <li class="list-group-item"><h2>Cras justo odio</h2><p>Sed ut perspiciatis unde omnis  vel illum qui dolorem eum fugiat quo voluptas nulla </p></li>

      </ul>
</div>

<div class="container">
    <h1 class="text-center">Other Services by <?php echo $row2['fname']." ".$row2['lname'];?></h1>
    <div style="display:flex;flex-wrap:wrap;"> 
        <?php while($row3=mysqli_fetch_array($result3)){if ($row3['id']!=$id){?>

        <div class="card text-center" style="width:250px;height:auto;margin-bottom:50px;margin-right:50px;" >
          <img class="card-img-top" src="https://source.unsplash.com/random" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row3['title'];?></h5>
            <p class="card-text"><?php echo $row3['description'];?></p>
           <a href="serviceorder.php?id=<?php echo $row3['id'];?>"><button class="btn btn-info btn-block">View Details</button></a>
          </div>
        </div>
        <?php }}?>
        
     
        </div>
      </div>

    
</div>

</div>

  
  <!-- Modal -->
  <div class="modal fade" id="order1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Order Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['usertype']==1) {?>

           <form method="POST" action="ordercreate.php">
                <div class="form-group">
                  <label for="instruction">Intructions to the service provider</label><br>
                  <textarea name="instruction" id="instruction" style="width:100%;height:300px;"></textarea>
                </div>
                
             
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button  type="submit"  class="btn btn-primary">Proceed to pay</button>
                  </div>
                
              </form>
        <?php } else {?>
          You need to login to order a service
          <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
        <?php };?>
        </div>
       
    </div>
  </div>
    
</body>
</html>