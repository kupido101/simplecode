<?php
 include("database.php");
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="facebookhome.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,500&display=swap" rel="stylesheet">
   
<title>Personal Portfolio</title>
  </head>
  <body>
    
    <nav>
      <div class="nav__content">
         <p><a href="#">Jessie.</a></p>
        <div class="menu-toggle"><img src="image/navlogo2.png"></div>
        

        <nav class="navbar">
        <ul class="menu">
          <li><a href="#" class="navlink"> <img src="image/navhome.png">Home</a></li> 
          <li><a href="#About" class="navlink"> <img src="image/navabout2.png">About</a></li>
          <li><a href="#Services" class="nav-link"> <img src="image/navservices.jpg">Services</a></li>
          <li><a href="#Contact" class="nav-link"> <img src="image/navcontact2.jpg">Contact</a></li>
          <li><a href="Login.php" class="nav-link"> <img src="image/navlogout.jpg">Logout</a></li>
        </ul>
        </nav>
        

      </div>
    </nav>
   
     
    <script> 
      document.querySelector(".menu-toggle").addEventListener("click", function () {
          document.querySelector(".menu").classList.toggle("active");
      });
      </script>


    <header>
      <div class="section__container header__container">
        <h1>Hello, I'm Jessie</h1>
        <h2 class="section__title">BSIT <span>STUDENT.</span></h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Placeat temporibus error nisi, iure accusantium numquam
           reiciendis enim beatae similique omnis sint voluptate vero
            doloribus dolores a qui sed deserunt voluptates dolor   
        </p>

        <div class="action__btns">
          <button class="hire__me">Hire Me</button>
          <button class="portfolio"><a href="#Portfolio">Portfolio</a></button>
        </div>
        
  </div>
    </header>
    <section class="about" id="About">
      <div class="section__container about__container">
        <div class="about__image">
          <img src="image/profile" alt="about" />
        </div>

        <div class="about__content">
          <h2 class="section__title">About <span>Me</span></h2>
          <p class="section__subtitle">Creative BSIT STUDENT!</p>
          <p class="about__details">
            Lorem ipsum dolor, sit amet consectetur adipisicing 
            elit. Distinctio, libero. Natus in voluptatum
             praesentium voluptatem cum id quos iusto quia
              recusandae non omnis sequi consequuntur nostrum
               amet aut vitae adipisci maiores soluta minima 
               rerum veniam, iure deleniti nesciunt eos. Labore
                iure, sapiente similique itaque ab necessitatibus
                 voluptatum cum deleniti molestias modi exercitationem 
                 assumenda, neque vero ad accusamus iusto corporis? Beatae,
                  molestias eaque ullam quisquam voluptas, ex velit vero 
                  nihil quis pariatur est maiores possimus blanditiis
                   sunt fugiat at! Nesciunt, ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </p>
          <button class="btn">More About</button>
        </div>
      </div>
    </section>

    <section class="service" >
      <div class="section__container service__container" id="Services">
        <p class="section__subtitle">What I Offer!</p>
        <h2 class="section__title"><span>My</span> Services</h2>
        <div class="service__grid">
          <div class="service__card">
            <i class="ri-smartphone-line"></i>
            <h4>Web Design</h4>
            <p>
              We are dedicated to providing high-quality web design services
              that are tailored to meet the specific needs of our clients.
            </p>
            <a href="#Services" class="read__more">Read more...</a>
          </div>
          <div class="service__card">
            <i class="ri-code-s-slash-line"></i>
            <h4>Web Development</h4>
            <p>
              We use the latest web technologies and development tools to create
              websites that are fast, secure, and scalable.
            </p>
            <a href="#Services" class="read__more">Read more...</a>
          </div>
          <div class="service__card">
            <i class="ri-edit-2-line"></i>
            <h4>Creative Design</h4>
            <p>
              Our approach is collaborative, and we encourage your feedback
              throughout the design process to ensure that we are meeting your
              expectations.
            </p>
            <a href="#Services" class="read__more">Read more...</a>
          </div>
        </div>
      </div>
    </section>

    <section class="project">
      <div class="section__container project__container">
        <p class="section__subtitle" id="Portfolio">Portfolio</p>
        <h2 class="section__title"><span>Latest</span> Project</h2>
        <div class="project__grid">
          <div class="project__card">
            <img src="image/proj1" alt="project" />
          </div>
          <div class="project__card">
            <img src="image/proj2" alt="project" />
          </div>
          <div class="project__card">
            <img src="image/proj3" alt="project" />
          </div>
          <div class="project__card">
            <img src="image/proj4" alt="project" />
          </div>
          <div class="project__card">
            <img src="image/proj5" alt="project" />
          </div>
          <div class="project__card">
            <img src="image/proj6" alt="project" />
          </div>
        </div>
      </div>
    </section>

      
   
   
  
  </body>

  <footer>
    <div class="section__container footer__container" id="Contact">
      <div class="footer__content">
        <h2 class="section__title" >Contact <span>Me!</span></h2>
        <p class="section__subtitle">If you have any project in your mind</p>
        <div class="footer__details">
          <p>
            You can reach me through the contact form provided on this
            website. Simply fill out the form with your name, email address,
            and message, and I will get back to you as soon as possible.
          </p>
          <p>031, Purok 3 Phase 1 Lupang Pangako</p>
          <p>Brgy.Payatas B, Quezon City</p>
          <p>Philippines</p>
        </div>

        
        <div class="social__icons">
          <a href="https://www.facebook.com/jessie.berino.94" class="icon"><i class="ri-facebook-fill">facebook</i></a>
          <a href="https://twitter.com/BerinoJsie" class="icon"><i class="ri-twitter-fill">Twitter</i></a>
        </div>
        <br>
        <a class="email">email address: <br><i class="ri-mail-line">berino.jessie.10102000@gmail.com</i></a>
        
      </div>
      <form class="footer__form">
        <input type="text" placeholder="Your Name" />
        <input type="text" placeholder="Your Email Address"/>
        <input type="text" placeholder="Your Phone Number" />
        <textarea cols="30" rows="10" placeholder="Your Idea"></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>

    <div class="copyrights">&copy; 
      2023 Jessie Berino | Alrights reserved
    </div>
    
  </footer>
   
</html>
