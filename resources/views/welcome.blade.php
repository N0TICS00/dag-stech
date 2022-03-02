@include("partials.head")
<title>Home</title>
<!--HOMEPAGE-->
<section id="home-page">
    <!--NAVBAR-->
    <nav class="navbar ">
        <div class="container">
            <a class="navbar-brand align-middle" href="/">
                dag's tech
            </a>
        </div>
    </nav>
    <h1>Choose us for your formation.</h1>
    <a class="btn button btn-lg" href="#form">Sign Up</a>
    <ion-icon name="chevron-down-outline" class="down"></ion-icon>
</section>
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

        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-img-top" id="second-image">
        </div>
        <div class="card-body">
        <h5 class="card-title"><b>JavaScript Basics</b></h5>
            <p class="card-text">JavaScript is the most viewed course on our platform. These lessons will give you the general knowledge to be able to take the Advanced course.</p>
        </div>
    </div>
    </div>
</section>
<!--TEACHER-->
<section id="teacher">
    <h1>Meet the teacher.</h1>
    <div class="teacher">
        <img class="teacher-img" src="assets/img/teacher.jpg" alt="Warren Morrison's image">
        <h1>Warren Morrison</h1>
        <p class="teacher-p">Warren Morrison was born in 7/5/1970 in London.
            He discovered a passion for programming when he was 13. He attended Computer Science and got a job at Centure Inc. At the age of 25 he became Senior Full Stack Developer at the Renesas Company and thanks to this work he was able to find new stimuli, so much so that he could register a course.</p>
    </div>
</section>
<!--FORM-->
<section id="form">
    <h1>Subscribe to our platform.  </h1>
    <div class="form-div">
        <form>
            <p>
            <label>
                <h5>Name</h5>
                <input type="text" name="name" class="form">
            </label>
            </p>
            <p>
            <label>
                <h5>Email</h5>
                <input type="email" name="email" class="form">
            </label>
            </p>
            <p>
            <label>
                <h5>Password</h5>
                <input type="password" name="password" class="form">
            </label>
            </p>
            <div class="buttons">
            <p>
            <a href="" class="btn">Sign Up</a>
            <p>or</p>
            <a href="">Login</a>
            </p>
            </div>
        </form>
    </div>
</section>
@include("partials.footer")
