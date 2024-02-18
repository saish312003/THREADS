<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <!-- bootstarp css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <!--  font awsome-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  css file-->
<link rel="stylesheet" href="../style.css">
<style>

.admin_image{
    width: 100px;
    object-fit: contain;
}

.footer {
    position: fixed; /* or absolute depending on your requirement */
    bottom: 0;
    left: 50%; /* Adjust as needed */
    transform: translateX(-50%);
    text-align: center;
}

</style>
</head>
<body>

<!-- navbar-->
<div class="container-fluid p-0" >
    <!-- first child-->
<nav class="navbar navbar-expand lg navbar-dark  " style="background-color: black !important;">
<div class="container-fluid" >
<img src="../images/logo.jpeg" alt="" class="logo">
<nav class="navbar navbar-expand lg " >
<ul  class="navbar-nav">
    <li class="nav-item" >
        <a href="" class="nav-link" style="color: chartreuse;">WELCOME GUEST</a>
    </li>



</ul>
</nav>
</div>
</nav>
    <!-- second child -->
    <div class="bg-light" style="background-color: purple !important;">
    <h1 class="text-center p-2" style="color: white;">MANAGE DETAILS</h1>
</div>
<!-- third child -->
<div class="row ">
    <div class="col-md-12 bg-secondary p-1 d-flex  align-items-center">
<div class="p-2 my-0" >
<a href="#">
    <img src="../images/logo.jpeg" alt="" class="admin_image">
</a>
<p class="text-light text-center">SHWETA</p>
</div>
<!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
<div class="button text-center">
<button><a href="" class="nav-link text-light bg-info my-1">VIEW PRODUCTS</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">INSERT PRODUCTS</a></button>
<button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">INSERT CATEGORIES</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">VIEW CATEGORIES</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">INSERT BRANDS</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">INSERT CATEGORIES</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">ALL ORDERS</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">ALL PAYMENTS</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">LIST USER</a></button>
<button><a href="" class="nav-link text-light bg-info my-1">LOGOUT</a></button>


</div>

    </div>
</div>
<!--fourth child -->
<div class="container my-5">
<?php
if(isset($_GET['insert_category'])){

   include('insert_categories.php');
}
?>
</div>

</div>


      <!-- bootstarp js link-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
 <!--last child -->
 <div class="bg-light p-3 text-center footer">
           
           <p>All rights reserved © [Year] [Your Clothing Brand Name]. Designs by sai, 2022</p>
           </div>
       </div>
</html>