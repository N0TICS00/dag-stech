@include('partials.head')
<title>HTML & CSS's roadmap</title>
<body onload="load()">
<section id="home-page">
    <!--NAVBAR-->
    <nav class="navbar ">
        <div class="container">
            <a class="navbar-brand align-middle" href="/">
                dag's tech
            </a>
        </div>
    </nav>
    <h1 class="navbar-h1">Do you want to learn JavaScript?</h1>
</section>
<section id="explanation">
    <h1>What is JavaScript?</h1>
    <p>JavaScript is one of the most popular programming languages in the world, and growing faster than any other programming language.</p>
</section>
<section id="showcase">
    <h1>All the course explained in data.</h1>
    <div class="cards">
        <div class="card">
            <div class="card-body card-showcase">
            <ion-icon name="albums-outline" class="icon"></ion-icon>
                <p><strong>7</strong> modules of learning.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body card-showcase">
            <ion-icon name="book-outline" class="icon"></ion-icon>
                <p><strong>100+</strong> lectures.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body card-showcase">
            <ion-icon name="timer-outline" class="icon"></ion-icon>
                <p><strong>5+</strong> hours of content.</p>
            </div>
        </div>
        <div class="card" style="height:150px">
            <div class="card-body card-showcase">
            <ion-icon name="people-outline" class="icon"></ion-icon>
                <p><strong id="numbers"></strong><br> people have joined in the community.</p>
            </div>
        </div>
    </div>
</section>
<section id="modules">
    <h1>All the modules of the course</h1>
    <div class="accordion accordion-roadmap" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Getting Started
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
            <li>Welcome</li>
            <li>What is JavaScript?</li>
            <li>Setting Up the Development</li>
            <li>JavaScript in Browsers</li>
            <li>Separation of Concerns</li>
            <li>JavaScript in Node</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        HTML Fundamentals
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol>
           <li>Variables</li>
           <li>Constants</li>
           <li>Primitive Types</li>
           <li>Dynamic Typing</li>
           <li>Objects</li>
           <li>Arrays</li>
           <li>Functions</li>
           <li>Types of Functions</li>
       </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Operators
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
            <li>JavaScript Operators</li>
            <li>Arithmetic Operators</li>
            <li>Assignment Operators</li>
            <li>Comparison Operators</li>
            <li>Equality Operators</li>
            <li>Ternary Operators</li>
            <li>Logical Operators with Non-booleans</li>
            <li>Logical Operators with Non-booleans #2</li>
            <li>BitWise Operators</li>
            <li>Operator Precedence</li>
            <li>Quiz</li>
            <li>Challenge: Swapping Variables</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Control Flow
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol>
           <li>If-Else</li>
           <li>Switch-Case</li>
           <li>For</li>
           <li>While</li>
           <li>Do-While</li>
           <li>Infinite Loops</li>
           <li>For-in</li>
           <li>For-of</li>
           <li>Break and Continue</li>
           <li>Max of Two Numbers</li>
           <li>Challenge #1: Landscape or Portrait</li>
           <li>Challenge #2: FizzBuzz</li>
           <li>Challenge #3: Demerit Points</li>
           <li>Challenge #4: Even and Odd Numbers</li>
           <li>Challenge #5: Count Truthy</li>
           <li>Challenge #6: String Properties</li>
           <li>Challenge #7: Sum of Multiples 3 and 5</li>
           <li>Challenge #8: Grade</li>
           <li>Challenge #9: Stars</li>
           <li>Challenge #10: Prime Numbers</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Objects
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
        <li>Basics</li>
        <li>Factory Functions</li>
        <li>Constructor Functions</li>
        <li>Dynamic Nature of Objects</li>
        <li>Constructor Property </li>
        <li>Functions are Objects</li>
        <li>Value vs. Reference Types</li>
        <li>Enumerating Properties of an Object</li>
        <li>Cloning an Object</li>
        <li>Garbage Collection </li>
        <li>Math</li>
        <li>String</li>
        <li>Template Literals</li>
        <li>Date</li>
        <li>Challenge #1: Address Object</li>
        <li>Challenge #2: Factory and Construtor Function</li>
        <li>Challenge #3: Object Equality</li>
        <li>Challenge #4: Blog Post Object</li>
        <li>Challenge #5: Constructor Functions</li>
        <li>Challenge #6: Price Range Objects</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Arrays
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol>
           <li>Introduction</li>
           <li>Adding Elements</li>
           <li>Finding Elements (Primitives)</li>
           <li>Finding Elements (Reference Types)</li>
           <li>Arrow Functions</li>
           <li>Removing Elemens</li>
           <li>Emptying an Array</li>
           <li>Combining and Slicing Arrays</li>
           <li>The Spread Operator</li>
           <li>Iterating an Array</li>
           <li>Joining Arrays</li>
           <li>Sorting Arrays</li>
           <li>Testing the Elements of an Array</li>
           <li>Filtering an Array</li>
           <li>Mapping an Array</li>
           <li>Reducing an Array</li>
        </ol>
      </div>
    </div>
  </div>
</div>  
</section>
<section id="people">
    <h1>But behind the numbers there are also people</h1>
    <!--CAROUSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="active" style="background-color:#FF7F3F"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:#FF7F3F"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:#FF7F3F"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../assets/img/42.jpg" alt="Ray Gomez" class="carousel-img">
      <p>Good one! Slowly, but surely explained everything. Not too long, chapters made to the point. All what is needed is said. Had lots of fun, and gain lots of knowledge. Thanks and see you in next one. <br>~Ray Gomez</p>
    </div>
    <div class="carousel-item">
      <img src="../../assets/img/0.jpg" class="carousel-img" alt="Ashley Knight">
      <p>A great course and a great instructor. Thanks Warren for your fantastic work. I learned a lot and highly recommend everyone who likes to learn html and CSS to participate in this descriptive and easy to learn course. I hope we can have more courses from Warren. Ones more thanks for your great job.<br>~Ashley Knight</p>
    </div>
    <div class="carousel-item">
      <img src="../../assets/img/48.jpg" class="carousel-img" alt="Mary Bell">
      <p>It was really a good experience to learn with Jonas. The way he explained every single piece of code that he wrote throughout the entire lecture is praiseworthy! Not only that, there was even theoretical explanations as well. I truly liked it to be very honest!

Although I had some knowledge of coding before watching this course, yet, I can surely say that a beginner with absolutely no coding experience can benefit a lot from this course.<br>~Mary Bell</p>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <ion-icon name="caret-back-outline" class="icon" aria-hidden="true"></ion-icon>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <ion-icon name="caret-forward-outline" class="icon" aria-hidden="true"></ion-icon>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<section id="cta">
  <a href="/#form" class="btn button btn-lg btn-dark">Sign Up to our Platform</a>
</section>
@include("partials.footer")
<script src="/assets/js/index.js"></script>
</body>