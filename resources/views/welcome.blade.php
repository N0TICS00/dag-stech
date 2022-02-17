@include("partials.head")
<title>Home</title>
<!--HOMEPAGE-->
<section id="home-page">
    <!--NAVBAR-->
    <nav class="navbar ">
        <div class="container">
            <h1 class="navbar-brand align-middle">
                dag's tech
            </h1>
        </div>
    </nav>
    <h1>Choose us for your formation.</h1>
    <button class="btn button btn-lg">Sign Up</button>
    <ion-icon name="chevron-down-outline" class="down"></ion-icon>
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
<!--TEACHER-->
<section id="teacher">
    <h1>Meet the teacher.</h1>
    <div class="teacher">
        <img class="teacher-img" src="assets/img/teacher.jpg" alt="Warren Morrison's image">
        <h1>Warren Morrison</h1>
    </div>
</section>
@include("partials.footer")
