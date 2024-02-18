<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THREADS</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Local CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" />

    
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!--first chile mini-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
 <img src="./images/logo.jpeg" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <!--<a class="nav-link" href="#">product</a>-->
        <div class="dropdown">
  <button class="  btn btn-secondary dropdown-toggle "   type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CATEGORIES
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">KURTA</a>
    <a class="dropdown-item" href="#">TOPS</a>
    <a class="dropdown-item" href="#">KURTA SET</a>
    <a class="dropdown-item" href="#">LEGGIN</a>
  </div>
</div>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">reg</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">total:</a>
      </li>
     
        
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        <!--second child-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
                        <a class="nav-link" href="#">WELCOME GUEST</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">LOGIN</a>
                    </li>
            </ul>  
        </nav>

        <!--THRID CHILD-->
        <div class="bg-light">
            <h3 class="text-center">THREADS</h3>
            <p class="text-center">YOUR BEAUTY IN YOUR FINGER</p>
        </div>

        <!--forth child-->
        <div class="row">
            <div class="col-md-12">
                <!--products-->
                <div class="row">
                    <div class="col-md-3  mb-2   "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top"  >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>
                    <div class="col-md-3 mb-2 "><div class="card" >
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>
<div class="col-md-3 mb-2 "><div class="card" >
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>
                    <div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>

<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>
<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>



<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>
<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>

<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>

<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>
<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>

<div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>
                </div>
                <div class="col-md-3 mb-2 "><div class="card">
  <img src="./images/logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View</a>
  </div>
</div></div>



            </div>
            
            
        </div>

        <!--last child -->
        <div class="bg-info p-3 text-center">
           
        <p>All rights reserved © [Year] [Your Clothing Brand Name]. Designs by sai, 2022</p>
        </div>
    </div>

    <!-- Bootstrap JS Link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
