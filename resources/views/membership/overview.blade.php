@include("partials.head")
<title>Courses</title>
<!--NAVBAR-->
<section id="navbar">
<nav class="navbar navbar-dark">
  <div class="container-fluid">
    
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</section>
<!--COURSES-->
<section id="courses">
    <h1>Our Courses.</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-img-top" id="first-image">
        </div>
        <div class="card-body">
            <h5 class="card-title"><b>HTML & CSS</b></h5>
            <p class="card-text">HTML and CSS is our first course, which takes you from basic to advanced level. By the end of this course you will be able to create websites easily with the power of HTML and CSS.</p>
            <a href="#" class="btn ">Go to HTML & CSS</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-img-top" id="second-image">
        </div>
        <div class="card-body">
        <h5 class="card-title"><b>JavaScript Basics</b></h5>
            <p class="card-text">JavaScript is the most viewed course on our platform. These lessons will give you the general knowledge to be able to take the Advanced course.</p>
            <a href="#" class="btn ">Go to JavaScript Basics </a>
        </div>
    </div>
</section>
@include("partials.footer")