@include("partials.head")
<title>Courses</title>
<!--NAVBAR-->
@include("partials.navbar")
<!--COURSES-->
<section id="courses">
    <h1>Our Courses.</h1>
    <div class="cards">
    <div class="card" style="width: 18rem;">
        <div class="card-img-top" id="first-image">
        </div>
        <div class="card-body">
            <h5 class="card-title"><b>HTML & CSS</b></h5>
            <p class="card-text">HTML and CSS is our first course, which takes you from basic to advanced level. By the end of this course you will be able to create websites easily with the power of HTML and CSS.</p>
            <a href="/courses/1" class="btn ">Go to HTML & CSS</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-img-top" id="second-image">
        </div>
        <div class="card-body">
        <h5 class="card-title"><b>JavaScript Basics</b></h5>
            <p class="card-text">JavaScript is the most viewed course on our platform. These lessons will give you the general knowledge to be able to take the Advanced course.</p>
            <a href="/courses/2" class="btn ">Go to JavaScript Basics </a>

 
        </div>
    </div>
    </div>
</section>
@include("partials.footer")