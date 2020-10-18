
<?php 

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['usertype']==0) { 
    ?>
      <!--freelancer-->
      <!DOCTYPE html>
      <html lang="en">
       <head>
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
         <link rel="stylesheet" href="static/fdashstyle.css">
         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
        </head>
      <body>
         <?php include("header.php") ?>
         <?php 
         $tbl2="freelancers";
         $tbl3="services";
         $email=$_SESSION['email'];
         $con=mysqli_connect("localhost","root","","hobbyhub");
         $sql="SELECT * FROM $tbl2 WHERE email='$email'";
         $result=mysqli_query($con,$sql);
         
         $row=mysqli_fetch_array($result);
         
         $_SESSION['fname']=$row['fname'];
         $_SESSION['lname']=$row['lname'];
         $_SESSION['earnings']=$row['earnings'];
         $_SESSION['wallet']=$row['wallet'];
         $_SESSION['profilepic']=$row['profileic'];
         $_SESSION['address']=$row['address'];

         
         mysqli_close($con);?>
         
         
         <div class="container">
    <table>

        <td>
            <h4 style="margin-top: 2vw;">Total earnings:Rs.<?php echo $_SESSION['earnings'];?> <b></b></h4>
            <div ><img class="profile-img"src="https://static1.squarespace.com/static/5283d33fe4b065af7e0f0f97/528ac1abe4b000f9c70bd010/5461c80ee4b0efbe94330465/1482514728236/YvesBehar-20141010-051.JPG?format=1500w" alt=""></div>
        </td>
        <td>
           <h1><?php echo $_SESSION['fname']." ". $_SESSION['lname'] ?> </h1>
           <a href="myservices.php"><button class="btn btn-default" style="color: black;">My Services</button></a>
           <a href="wallet.php"><button class="btn btn-warning" style="color: black;">Wallet</button>
        </td>


    </table>
</div>

<div class="container">
<div class="row mt-2">
<div class="col-lg-4">
<button id="work" class="btn btn-block btn-outline-warning">New order <span class="badge badge-danger">4</span></button>

</div> 

<div class="col-lg-4">
  <button id="pend" class="btn btn-block btn-outline-warning">Pending order<span class="badge badge-danger">4</span></button>
  
  </div>

  <div class="col-lg-4">
    <button id="done" class="btn btn-block btn-outline-warning">completed</button>
    
    </div>
</div>
</div>

<div class="container order" style="display:none">
<div class="row">
  <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
  <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Accept</button> <button class="btn btn-warning">Decline</button></div>
</div>
<hr>
<div class="row">
  <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
  <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Accept</button> <button class="btn btn-warning">Decline</button></div>
</div>

<button style="float:right; margin: 20px;" class="btn btn-info">View all</button>

</div>
<!-- pending -->
<div class="container pending" style="display:none">

  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Mark as done</button> </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Mark as Done</button> </div>
  </div>
  
  <button style="float:right; margin: 20px;" class="btn btn-info">View all</button>


</div>
<!-- completed -->
<div class="container comp" style="display:none">

  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><h4 >123$</h4></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><h4>200$</h4></div>
  </div>
  <button style="float:right; margin: 20px;" class="btn btn-info">View all</button>


</div>


<script>
  $("#work").click(function(){
    $(".order").css("display","block")
    $(".comp,.pending").css("display","none")
  })
  $("#pend").click(function(){
    $(".pending").css("display","block")
    $(".comp,.order").css("display","none")
  })
  $("#done").click(function(){
    $(".comp").css("display","block")
    $(".pending,.order").css("display","none")
  })

</script>


</body>
</html>


    
      
<?php }elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['usertype']==1) { 
    ?>   <!DOCTYPE html>
    <html lang="en">
     <head>
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
       <link rel="stylesheet" href="static/fdashstyle.css">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
      </head>
    <body>
      <?php include("header.php");?>
      <div class="container">
    <table>

        <td>
            <h4 style="margin-top: 2vw;">Hi Customer <b></b></h4>
            <div ><img class="profile-img"src="https://static1.squarespace.com/static/5283d33fe4b065af7e0f0f97/528ac1abe4b000f9c70bd010/5461c80ee4b0efbe94330465/1482514728236/YvesBehar-20141010-051.JPG?format=1500w" alt=""></div>
        </td>
        <td>
           
        </td>


    </table>
      
      <div class="container">
<div class="row mt-2">
<div class="col-lg-2">
<button id="work" class="btn btn-block btn-outline-warning">Present orders <span class="badge badge-danger">4</span></button>

</div> 

<div class="col-lg-2">
  <button id="pend" class="btn btn-block btn-outline-warning">Order History<span class="badge badge-danger">4</span></button>
  
  </div>

  
</div>


<div class="container order">
<div class="row">
  <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
  <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Accept</button> <button class="btn btn-warning">Decline</button></div>
</div>
<hr>
<div class="row">
  <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
  <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Accept</button> <button class="btn btn-warning">Decline</button></div>
</div>

<button style="float:right; margin: 20px;" class="btn btn-info">View all</button>

</div>
<!-- pending -->
<div class="container pending">

  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Mark as done</button> </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Mark as Done</button> </div>
  </div>
  
  <button style="float:right; margin: 20px;" class="btn btn-info">View all</button>


</div>
<!-- completed -->

<script>

  $("#work").click(function(){
    $(".order").css("display","block")
    $(".comp,.pending,.capsule2,.capsule3,.capsule1").css("display","none")
  })
  $("#pend").click(function(){
    $(".pending").css("display","block")
    $(".comp,.order,.capsule2,.capsule3,.capsule1").css("display","none")
  })
  


</script>


</body>
</html>
<
<?php }elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['usertype']==2) { 
    ?>  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HobbyHub</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <linkrel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="fdashstyle.css">

    </head>
<body>
    <!-- css is same as of freelance Dbord -->
    <?php include("header.php");?>
      <!-- names -->
  

<div class="container">
<div class="row mt-2">
<div class="col-lg-2">
<button id="work" class="btn btn-block btn-outline-warning">New Orders <span class="badge badge-danger">4</span></button>

</div> 

<div class="col-lg-2">
  <button id="pend" class="btn btn-block btn-outline-warning">Pending Orders<span class="badge badge-danger">4</span></button>
  
  </div>

  <div class="col-lg-2">
    <button id="done" class="btn btn-block btn-outline-warning">Completed Orders</button>
    
    </div>
    <div class="col-lg-2">
        <button id="tab1" class="btn btn-block btn-outline-warning">New Services</button>
        
        </div>
        <div class="col-lg-2">
            <button id="tab2" class="btn btn-block btn-outline-warning">All freelancers</button>
            
            </div>
            <div class="col-lg-2">
                <button id="tab3" class="btn btn-block btn-outline-warning">Transaction History</button>
                
                </div>
</div>
</div>

<div class="container order">
<div class="row">
  <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
  <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Accept</button> <button class="btn btn-warning">Decline</button></div>
</div>
<hr>
<div class="row">
  <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
  <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Accept</button> <button class="btn btn-warning">Decline</button></div>
</div>

<button style="float:right; margin: 20px;" class="btn btn-info">View all</button>

</div>
<!-- pending -->
<div class="container pending">

  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Mark as done</button> </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><button class="btn btn-info">View</button> <button class="btn btn-primary">Mark as Done</button> </div>
  </div>
  
  <button style="float:right; margin: 20px;" class="btn btn-info">View all</button>


</div>
<!-- completed -->
<div class="container comp">

  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><h4 >123$</h4></div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6"><h4>You recieves a new order for illustration</h4></div>
    <div class="col-lg-6"><h4>200$</h4></div>
  </div>
  <button style="float:right; margin: 20px;" class="btn btn-info">View all</button>


</div>
<!-- tb1 -->
<?php 
include("connection.php");
$tbl2="services";
$notcomplete=0;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM $tbl2 WHERE servicestatus LIKE '%{$notcomplete}'";

$result=mysqli_query($conn,$query);



while($row=mysqli_fetch_array($result)){?>
    <div class="container capsule1" style="display:none;">
           <div class="col-lg-6" style="margin-top:100px;"><h5>New Service created by <?php echo $row['email'];?> in <?php echo $row['subcategory'];?> subcateogory of <?php echo $row['category'];?> category</h5></div>
           <div class="col-lg-6" style="margin-bottom:100px;">
                <a href="adminserviceview.php?id=<?php echo $row['id'];?>"><button class="btn btn-info">View</button> </a>
                <a href="adminserviceaccept.php?id=<?php echo $row['id'];?>"><button class="btn btn-primary">Approve</button></a>
                <a href="adminservicedecline.php?id=<?php echo $row['id'];?>"><button class="btn btn-warning">Decline</button></a>
            </div>
    
  
      </div>
<?php } ;
mysqli_close($conn);?>
  <!-- tab2 -->
<div class="container capsule2" style="display:none">

    <h1>hello2</h1>
  
  </div>
  <!-- tab -->
<div class="container capsule3" style="display:none">

 <h1>hello3</h1>

  
  </div>

<script>

  $("#work").click(function(){
    $(".order").css("display","block")
    $(".comp,.pending,.capsule2,.capsule3,.capsule1").css("display","none")
  })
  $("#pend").click(function(){
    $(".pending").css("display","block")
    $(".comp,.order,.capsule2,.capsule3,.capsule1").css("display","none")
  })
  $("#done").click(function(){
    $(".comp").css("display","block")
    $(".pending,.order,.capsule2,.capsule3,.capsule1").css("display","none")
  })
  $("#tab1").click(function(){
    $(".capsule1").css("display","block")
    $(".pending,.order,.capsule2,.capsule3,.comp").css("display","none")
  })
  $("#tab2").click(function(){
    $(".capsule2").css("display","block")
    $(".pending,.order,.capsule1,.capsule3,.comp").css("display","none")
  })
  $("#tab3").click(function(){
    $(".capsule3").css("display","block")
    $(".pending,.order,.capsule2,.capsule1,.comp").css("display","none")
  })


</script>


</body>
</html>
<?php
}

else{header("Location:index.php");}?> 
  