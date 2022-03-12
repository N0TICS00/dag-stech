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
    <h1 class="navbar-h1">Do you want to learn HTML & CSS?</h1>
</section>
<section id="explanation">
    <h1>What are HTML & CSS?</h1>
    <p>HTML & CSS are the basis of the internet, everything on the internet has been done with them. And learning them will help you a lot to understand what is behind the creation of a website.</p>
</section>
<section id="showcase">
    <h1>All the course explained in data</h1>
    <div class="cards-showcase">
        <div class="card">
            <div class="card-body card-showcase">
            <ion-icon name="albums-outline" class="icon"></ion-icon>
                <p><strong>6</strong> modules of learning</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body card-showcase">
            <ion-icon name="book-outline" class="icon"></ion-icon>
                <p><strong>150+</strong> lectures</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body card-showcase">
            <ion-icon name="timer-outline" class="icon"></ion-icon>
                <p><strong>35+</strong> hours of content</p>
            </div>
        </div>
        <div class="card" style="height:150px">
            <div class="card-body card-showcase">
            <ion-icon name="people-outline" class="icon"></ion-icon>
                <p><strong id="numbers"></strong><br> people have joined in the community</p>
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
        Welcome and First Steps
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
            <li>A High-Level Overview of Web Development</li>
            <li>Setting Up Our Code Editor</li>
            <li>Your Very First Webpage</li>
            <li>Downloading Course Material</li>
            <li>Watch Before You Start</li>
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
           <li>Introduction to HTML</li>
           <li>HTML Document Structure</li>
           <li>Text Elements</li>
           <li>More Text Elements: Lists</li>
           <li>Images and Attributes</li>
           <li>Hyperlinks</li>
           <li>Structuring our Page</li>
           <li>A Note on Semantic HTML</li>
           <li>Installing Additional VS Code Extensions</li>
           <li>Challenge #1</li>
           <li>Challenge #2</li>
       </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        CSS Fundamentals
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
            <li>Introduction to CSS</li>
            <li>Inline,Internal, and External CSS</li>
            <li>Styling Text</li>
            <li>Combining Selectors</li>
            <li>Class and ID Selectors</li>
            <li>Working with Colors</li>
            <li>Pseudo-classes</li>
            <li>Styling Hyperlinks</li>
            <li>Using Chrome DevTools</li>
            <li>CSS Theory #1: Conflicts Between Selectors</li>
            <li>CSS Theory #2: Inheritance and the Universal Selector</li>
            <li>Challenge #1</li>
            <li>CSS Theory #3: The CSS Box Model</li>
            <li>Using Margins and Paddings</li>
            <li>Adding Dimensions</li>
            <li>Centering Our Page</li>
            <li>Challenge #2</li>
            <li>CSS Theory #4: Types of Boxes</li>
            <li>CSS Theory #5: Absolute Positioning</li>
            <li>Pseudo-elements</li>
            <li>Developer Skill #1: Googling and Reading Documentation</li>
            <li>Developer Skill #2: Debugging and Asking Questions</li>
            <li>Challenge #3</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Layouts: Floats, Flexbox, and CSS Grid Fundamentals
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol>
           <li>The 3 Ways of Building Layouts</li>
           <li>Using Floats</li>
           <li>Clearing Floats</li>
           <li>Building a Simple Float Layout</li>
           <li>box-sizing: border-box</li>
           <li>Challenge #1</li>
           <li>Introduction to Flexbox</li>
           <li>A Flexbox Overview</li>
           <li>Spacing and Aligning Flex Items</li>
           <li>The flex Property</li>
           <li>Adding Flexbox to Our Project</li>
           <li>Building a Simple Flexbox Layout</li>
           <li>Challenge #2</li>
           <li>Introduction to CSS Grid</li>
           <li>A CSS Grid Overview</li>
           <li>Sizing Grid Columns and Rows</li>
           <li>Placing and Spanning Grid Items</li>
           <li>Aligning Grid Items and Tracks</li>
           <li>Building a Simple CSS Grid Layout</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Components and Layout Patterns
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol>
        <li>Building an Accordion Component - Part 1</li>
        <li>Building an Accordion Component - Part 2</li>
        <li>Building a Carousel Component - Part 1</li>
        <li>Building a Carousel Component - Part 2</li>
        <li>Building a Table Component - Part 1 </li>
        <li>Building a Table Component - Part 2</li>
        <li>Challenge #1: Building a Pagination Component</li>
        <li>Building a Hero Section - Part 1</li>
        <li>Building a Hero Section - Part 2</li>
        <li>Building a Web Application Layout - Part 1 </li>
        <li>Building a Web Application Layout - Part 2</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Bootstrap Fundamentals
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol>
           <li>Introduction to Bootstrap</li>
           <li>Installing Bootstrap</li>
           <li>The Bootstrap Navigation Bar</li>
           <li>Setting Up Our New Project</li>
           <li>Bootstrap Grid Layout System</li>
           <li>Adding Grid Layouts to Our Website</li>
           <li>Bootstrap Containers</li>
           <li>Bootstrap Buttons & Font Awesome</li>
           <li>Styling Our Website Challenges and Solutions</li>
       </ol>
      </div>
    </div>
  </div>
</div>  
</section>
<section id="people">
    <h1>But, behind the numbers, there are also people</h1>
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
      <p class="carousel-p">Good one! Slowly, but surely explained everything. Not too long, chapters made to the point. All what is needed is said. Had lots of fun, and gain lots of knowledge. Thanks and see you in next one. <br>~Ray Gomez</p>
    </div>
    <div class="carousel-item">
      <img src="../../assets/img/0.jpg" class="carousel-img" alt="Ashley Knight">
      <p class="carousel-p">A great course and a great instructor. Thanks Warren for your fantastic work. I learned a lot and highly recommend everyone who likes to learn html and CSS to participate in this descriptive and easy to learn course. I hope we can have more courses from Warren. Ones more thanks for your great job.<br>~Ashley Knight</p>
    </div>
    <div class="carousel-item">
      <img src="../../assets/img/48.jpg" class="carousel-img" alt="Mary Bell">
      <p class="carousel-p">It was really a good experience to learn with Jonas. The way he explained every single piece of code that he wrote throughout the entire lecture is praiseworthy! Not only that, there was even theoretical explanations as well. I truly liked it to be very honest!

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