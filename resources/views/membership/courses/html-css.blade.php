@include("partials.head")
<title>HTML & CSS</title>
@include("partials.navbar")
<section id="html-css">
    <video class="video" controls>
        <source src="/assets/img/coding.mp4">
    </video>
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
</section>
