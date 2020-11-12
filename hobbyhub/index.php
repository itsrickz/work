
<?php 
include("connect.php");
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
   header("Location:home.php");
   }
else {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="serv.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobbyHub</title>

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
<link rel="stylesheet" href="serv.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("header.php") ?>
    

    <div id="searcharea" style="background-image:url('static/rec.png')">
        <div id="searchbar">
            <form method="GET" action="search.php">
                <div class="form-row align-items-center">
                  <div class="col-auto">
                      <select id="location" name="location" class="form-control mb-2">
                        <option value="ghy">Location</option>
                        <option value="pan">PAN India</option>
                        <option value="ghy">Guwahati</option>
                        
                      </select>
                  </div>
                  <div class="col-auto">
                    <select id="category" name="category" class="form-control mb-2">
                        <option value="any">Category</option>
                        <option value="art">Art</option>
                        <option value="crafts">Crafts</option>
                        <option value="bakery">Bakery</option>
                        <option value="fashion">Fashion</option>
                        <option value="Food-Service">Food Service</option>
                        <option value="photography">Photography</option>
                        <option value="make-up-artist">Make Up Artist</option>
                        <option value="gift_makers">Gift Makers</option>
                      </select>
                    </div>
                  <div class="col-auto">
                    <select id="subcategory" name="subcategory" class="form-control mb-2">
                    <option value="any">sub-Category</option>
                        <option value="art">Art</option>
                        <option value="crafts">Crafts</option>
                        <option value="bakery">Bakery</option>
                        <option value="fashion">Fashion</option>
                        <option value="photography">Photography</option>
                        <option value="make_up_artist">Make Up Artist</option>
                        <option value="gift-makers">Gift Makers</option>
                        
                      </select>
                  </div>
                  <div style="margin-left: 1vw;" class="col-auto ser_btn">
                    <button  type="submit" class="btn btn-warning mb-2 "><i  class="fa fa-search fa-2x animate__animated animate__infinite animate__pulse" aria-hidden="true"></i></button>
                  </div>
                </div>
              </form>

        </div>

    </div>
    <h1 class="bigHeading">Featured Freelancers</h1>

    <div style="margin:auto; padding:5%" class="main_box">
    <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfPQDc8hLUPVKQjWNuCctUtKKTc8IW0sQSkw&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Name here</h5>
      <p><small>Designer</small></p>
     
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfPQDc8hLUPVKQjWNuCctUtKKTc8IW0sQSkw&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Name here</h5>
      <p><small>Designer</small></p>
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfPQDc8hLUPVKQjWNuCctUtKKTc8IW0sQSkw&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Name here</h5>
      <p><small>Designer</small></p>
     
    </div>
  </div>

</div>
      <button id="browse" class="btn btn-warning ">Browse more</button>
    <
    <h1 class="bigHeading">Popular services</h1>

    <div class="main_box">
      <div class="row">
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
      </div>
      <button id="browse" class="btn btn-warning ">Browse more</button>
    </div>

    <!--  -->
 

    <!-- end -->
  
<!-- about us -->
<h1 id="about" style="text-align: center; margin:10% 0 5% 0">About us</h1>
<div class="container">
<div class="row ">
  <div class="col-lg-6 abt_content">
    <p class="but"><p>HobbyHub is a Guwahati based startup which makes the process of freelancing and consigning easier than before.</p>



<p>We have huge number of freelancers from the town and different parts of the country as well who are searching for customers to get their work done</p>



<p>OUR VISION &#8211; &#8220;To Make the dream of earning through hobby a reality&#8221;<br>OUR MISSION-&#8220;To provide our customers with the best services and the freelancers with daily clients&#8221;</p>



  </p> <a href="aboutus.php">Read more</a></div>
     <div class="col-lg-6 abt_content">
       <div class="imageBox"></div>
</div>
    </div>
    <!-- services -->
    <h1 style="text-align: center; margin:10% 0 5% 0">Services</h1>

    <div  style="text-align: ; margin:10% 0 5% 0" class="container " >
          <div class="row" >
              <div class="col-lg-3 ser  " style="background-color:white"><div class="container" style="font-size:7vw;text-align:center;color:#ED9D2B;"><a href="servicesart.php"><i class="fas fa-palette"></a></i><h5>Art</h5>

</div></div>
              <div class="col-lg-3 ser  "  style="background-color:white">
              <div class="container" style="font-size:7vw;text-align:center;color:#ED9D2B;"><a href="servicescraft.php"><i class="fab fa-firstdraft"></i></a>

<h5>Craft</h5>

</div>
            </div>
              <div class="col-lg-3 ser  "  style="background-color:white">
              <div class="container" style="font-size:7vw;text-align:center;color:#ED9D2B;"><a href="servicesfood.php"><i class="fas fa-utensils"></i></a>

<h5>Food</h5>

</div></div>
              <div class="col-lg-3 ser  "  style="background-color:white">
              <div class="container" style="font-size:7vw;text-align:center;color:#ED9D2B;"><a href="servicesbakery.php"><i class="fas fa-birthday-cake"></i></a>

<h5>Bakery</h5>

</div></div>
              <div class="col-lg-3 ser  "  style="background-color:white">
              <div class="container" style="font-size:7vw;text-align:center;color:#ED9D2B;"><a href="servicesfashion.php"><i class="fas fa-tshirt"></i></a>



<h5>Fashion</h5>

</div></div>
              <div class="col-lg-3 ser  "  style="background-color:white">
              <div class="container" style="font-size:7vw;text-align:center;color:#ED9D2B;"><a href="servicesphotography.php"><i class="fas fa-camera-retro"></i></a>

<h5>Photography</h5>

</div></div>
          </div>
      </div>
    <!-- freelancers testimonials -->
    <h1 style="text-align: center; margin:10% 0 5% 0"> Freelancers testimonials</h1>
    <div id="carouselExample" class="carousel slide testi" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
         
          <h5>Hobbyhub has been an overwhelming platform for me. Got to know about it from a friend who ordered from various freelancers and ever since I have joined, I meet new customers and freelancers everyday
- <small>Neha Kamati</small> </h5>
        </div>
        <div class="carousel-item">
          <h5> I started selling my cakes since the lockdown and then I came across HobbyHub's Instagram page, and signed up for free. I started receiving orders and what amazes me is they have no registration charge. If you're a freelancer I guess this is where you should register yourself to be seen <small>- Saloni Binnani</small></h5>

        </div>
       
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- customer testimonials -->
    <h1 style="text-align: center; margin:10% 0 5% 0"> Customers testimonials</h1>
    <div id="carouselExample1" class="carousel slide testi" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
         
          <h5> I was searching for some gift makers in town for my mom's birthday and then someone suggested me about this website and the range of options they provide for us to check out and choose the best is an amazing feature.</h5>
- <small>- Muskaan Shankala</small> </h5>
        </div>
        <div class="carousel-item">
<h5> The range of options they provide us for a single category is great. From clothes to food to paintings to gifts and the advance payment is the least I have seen till date. They have been so comforting since I don't need to keep on searching for Freelancers or asking people again and again.</h5>
<small>- Diviyaj Mittal</small>
        </div>
        <div class="carousel-item">
        <h5>I have been ordering from various freelancers in the website not just within the town but from different places and the process is so smooth. From choosing the best option to going through the gallery and paying a minimum amount.  It is an awesome experience</h5>
<small>- Pulkit Periwal</small>
        </div>
       
      </div>
      <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>










  <!-- footer -->
  
  
  
</div>
<script>
// dropdown

$(document).ready(function () {
    $("#category").change(function () {
        var val = $(this).val();
        if (val == "art") {
            $("#subcategory").html("<option value='illustration'>illustration</option><option value='portraitart'>Portrait art</option><option value='caricature'>Caricacature</option><option value='mandala'>Mandala</option><option value='line-art'>Line art</option><option value='sketching'>sketching</option><option value='calligraphy'>Calligraphy</option><option value='painting'>painting</option><option value='mix-media'>mix media</option><option value='ethnic art'>Ethnic art</option><option value='contemporary art'>contemporary art</option><option value='doodle'>Doodle</option><option value='grafitti'>Grafitti</option><option value=''>any</option>");
        } else if (val == "crafts") {
            $("#subcategory").html("<option value='print making'>Print making</option><option value='ceramic art'>Ceramic art</option><option value='home decoration'>Home decoration</option><option value='macrame'>macrame</option><option value='pottery'>Pottery</option><option value='bambooandcrane'>Bamboo and Crane</option><option value=''>any</option>");
        } else if (val == "Food-Service") {
            $("#subcategory").html("<option value='indian'>indian</option><option value='chinese'>chinese</option><option value='southindian'>south indian</option><option value='continental'>continental</option><option value='italian'>italian</option><option value='icecream'>ice cream</option><option value='sweets'>sweets</option><option value=''>any</option>");
        } else if (val == "bakery") {
            $("#subcategory").html("<option value='cakes'>cakes</option><option value='cookies'>cookies</option><option value='dougnut'>Dougnut</option><option value='pies-cupcakes'>pies cupcakes</option><option value=''>any</option>");
        }
        else if (val == "fashion") {
            $("#subcategory").html("<option value='clothing'>clothing</option><option value='accessories'>accessories</option><option value=''>any</option>");
        }
        else if (val == "photography") {
            $("#subcategory").html("<option value='photo editing'>Photo editing</option><option value='videography'>videography</option><option value='video editing'>Video editing</option><option value='photography'>photography</option><option value=''>any</option>");
        }
        else if (val == "make-up-artist" || val=="gift-makers") {
            $("#subcategory").html("<option value=''></option>");
        }
    });
});
// Pan india delivery
$(document).ready(function(){
$("#location").change(function(){
var loc=$(this).val();
if(loc=="pan"){
  $("#category").html("<option>category</option><option>art</option><option>crafts</option><option>fashion</option><option>gift-makers</option>")
}else if(loc=="ghy"){
  $("#category").html("<option>category</option><option>art</option><option>crafts</option><option>Food-Service</option><option>fashion</option><option>gift-makers</option><option>bakery</option><option>make-up-artist</option><option>photography</option>")
}


})

  
})


// end



  $("#first-choice").change(function() {

var $dropdown = $(this);

$.getJSON("jsondata/data.json", function(data) {

  var key = $dropdown.val();
  var vals = [];
            
  switch(key) {
    case 'beverages':
      vals = data.beverages.split(",");
      break;
    case 'snacks':
      vals = data.snacks.split(",");
      break;
    case 'base':
      vals = ['Please choose from above'];
  }
  
  var $secondChoice = $("#second-choice");
  $secondChoice.empty();
  $.each(vals, function(index, value) {
    $secondChoice.append("<option>" + value + "</option>");
  });

});
});
</script>
<?php include('footer.php')?>
</body>
</html>




<?php } ?>