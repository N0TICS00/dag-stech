@include("partials.head")
<title>Courses</title>
<!--NAVBAR-->
@include("partials.navbar")
<!--COURSES-->
<section class="courses">
    <h1>Our Courses</h1>
    <div class="cards">
    <div class="card">
        <div class="card-img-top" id="first-image">
        </div>
        <div class="card-body">
            <h5 class="card-title"><b>HTML & CSS</b></h5>
            <p class="card-text"><strong>WHAT ARE HTML & CSS? </strong> <br>
            They are the basis of the internet, everything you can find on the sites has been done with them. If you want to learn these superpowers, you are in the right place! They are the basis of the internet, everything you can find on the sites has been done with them.<br>
            <strong>3 REASON TO LEARN HTML & CSS</strong>
            <ul>
                <li>Web development is one of the most future-proof and highest-paying industries in the world. And HTML and CSS is the entry point to this world!</li>
                <li>Used in every sites of every Companies.</li>
                <li>Creative Work with them and their framework such as Bootstrap.</li>

            </ul></p>
            <a href="/courses/1" class="btn ">Go to HTML & CSS</a>
        </div>
    </div>
    
    <div class="card" >
        <div class="card-img-top" id="second-image">
        </div>
        <div class="card-body">
        <h5 class="card-title"><b>JavaScript Basics</b></h5>
            <p class="card-text"><strong>WHAT IS JAVASCRIPT? </strong><br>JavaScript is one of the most popular programming languages in the world, and growing faster than any other programming language. As a developer, you can use JavaScript to build web and mobile apps, real-time networking apps, command-line tools, and games.<br>
            <strong>4 REASONS TO LEARN JAVASCRIPT </strong>
            <ul>
                <li>JavaScript is a key tool for front-end, back-end, and full-stack developers.</li>
                <li>The average annual salary for a JavaScript developer is $72,000.</li>
                <li>Companies like Walmart, Netflix, and PayPal run big internal applications around JavaScript.</li>
                <li>Having strong JavaScript knowledge will help you land your dream job.</li>
            </ul>
</p>
            <a href="/courses/2" class="btn ">Go to JavaScript Basics </a>

 
        </div>
    </div>
    </div>
</section>
@include("partials.footer")