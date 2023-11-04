<?php include_once 'header-index.php'; ?>
    <section class="popular-courses">
        <span>---</span>
        <h2>Featured courses</h2>
        <div class="course-row">
            <div class="course-col">
                <img src="image/chem-course.jpg" alt="">
                <a href=""> Fluid Mechanics</a>
                <p>Detailed,genuine and certified script</p>
                <div class="course-details">
                    <div class="course-profile">
                        <img src="image/bg_3.jpg_11zon.webp" alt=""> &ensp;
                        <p><span>Collins Ojukwu</span> Author</p>
                    </div>
                    <div class="course-price">
                        <h4>$29</h4>
                    </div>
                </div>
            </div>
            <div class="course-col">
                <img src="image/chem-course.jpg" alt="">
                <a href=""> Separation Process 2 </a>
                <p>Detailed,genuine and certified course</p>
                <div class="course-details">
                    <div class="course-profile">
                        <img src="image/bg_3.jpg_11zon.webp" alt=""> &ensp;
                        <p><span>Collins Ojukwu</span> Author</p>
                    </div>
                    <div class="course-price">
                        <h4>$29</h4>
                    </div>
                </div>
            </div>
            <div class="course-col">
                <img src="image/chem-course.jpg" alt="">
                <a href="">Chemical Reaction Engr 3</a>
                <p>Detailed,genuine and certified material</p>
                <div class="course-details">
                    <div class="course-profile">
                        <img src="image/bg_3.jpg_11zon.webp" alt=""> &ensp;
                        <p><span>Collins Ojukwu</span> Author</p>
                    </div>
                    <div class="course-price">
                        <h4>$29</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-courses">
        <span>---</span>
        <h2>Popular courses</h2>
        <h5>click on the buttons below to filter out the School year/Level</h5>
        <div class="filter-buttons">
            <button data-filter="all">All</button>
            <button data-filter="year-one">Year-one</button>
            <button data-filter="year-two">Year-two</button>
            <button data-filter="year-three">Year-three</button>
            <button data-filter="year-four">Year-four</button>
            <button data-filter="year-five">Year-five</button>
        </div>
        <div class="course-filter-wrapper">
            <div class="course-filter-row">
                <div class="item" data-category="year-one">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="overflow-img">
                        <p>First Semester <br> -- Year One</p>
                    </div>
                    <div class="course-info">
                        <h3> First Semester </h3>
                        <p>CHE 111 : Chemical Process Principles and Computation(Year One)</p>
                        <a href="">purchase course</a>
                    </div> 
                </div>
                <div class="item" data-category="year-two">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="course-info">
                        <h3> First Semester </h3>
                        <p>CHE 211 : Fluid Mechanics <br>(Year Two)</p>
                        <a href="">purchase course</a>
                    </div>
                    <div class="overflow-img">
                        <p>First Semester <br> -- Year Two</p>
                    </div>
                </div>
                <div class="item" data-category="year-three">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="course-info">
                        <h3> First Semester </h3>
                        <p>CHE 301 : Chemical Analytical Technique (year Three)</p>
                        <a href="">purchase course</a>
                    </div>
                    <div class="overflow-img">
                        <p>First Semester <br> -- Year Three</p>
                    </div>
                </div>
                <div class="item" data-category="year-four">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="course-info">
                        <h3> First Semester </h3>
                        <p>CHE 414 : Separation Process 2 (Year Four)</p>
                        <a href="">purchase course</a>
                    </div>
                    <div class="overflow-img">
                        <p>First Semester <br> -- Year Four</p>
                    </div>
                </div>
                <div class="item" data-category="year-four">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="course-info">
                        <h3> First Semester </h3>
                        <p>CHE 453 : Chemical Process Design & Evaluation 2 (year-four)</p>
                        <a href="">purchase course</a>
                    </div>
                    <div class="overflow-img">
                        <p>First Semester <br> -- Year Four</p>
                    </div>
                </div>
                <div class="item" data-category="year-five">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="course-info">
                        <h3> First Semester </h3>
                        <p>CHE 516 : Separation Process 3 (Year Five)</p>
                        <a href="">purchase course</a>
                    </div>
                    <div class="overflow-img">
                        <p>First Semester <br> -- Year Five</p>
                    </div>
                </div>
                <div class="item" data-category="year-five">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="course-info">
                        <h3> Second Semester </h3>
                        <p>CHE 533 : Chemical Reaction Engineering 3 (Year Five)</p>
                        <a href="">purchase course</a>
                    </div>
                    <div class="overflow-img">
                        <p>Second Semester <br> -- Year Five</p>
                    </div>
                </div>
                <div class="item" data-category="year-five">
                    <img src="image/chem-course.jpg" alt="">
                    <div class="course-info">
                        <h3> Second Semester </h3>
                        <p>CHE 533 : Chemical Reaction Engineering 3 (Year Five)</p>
                        <a href="">purchase course</a>
                    </div>
                    <div class="overflow-img">
                        <p>Second Semester <br> -- Year Five</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback" id="feedback">
        <span>---</span>
        <h2>Give us a Feedback</h2>
        <form action="code-base/feedback-system.php" method="post">
            <label for="name">Name</label>
           
           <div class="feedback-inputDiv">
                <input type="text" name="name" class="<?php if(isset($_GET['error'])){ echo $_GET['error'] === 'emptyinputs' || $_GET['error'] === 'invalidname' ? 'focus-danger':null;} ?>" placeholder="Your name here....">
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] === 'emptyinputs'){
                        echo "<p style='color:red;'>Please fill all fields </p>";
                        }elseif ($_GET['error'] === 'invalidname') {
                            echo "<p style='color:red;'>please enter a valid name</p>";
                        }
                    }
                ?>
           </div>
            <label for="email"> Email </label>
            <div class="feedback-inputDiv">
                <input type="email" name="email" class="<?php if(isset($_GET['error'])){
                   echo $_GET['error'] === 'emptyinputs' ? 'focus-danger' : null;} ?>" placeholder="Your email here..">
                <?php
                 if(isset($_GET['error'])){
                    if($_GET['error'] === 'emptyinputs'){
                    echo "<p style='color:red;'>Please fill all fields </p>";
                }
            }
                ?>
            </div>
            
            <label for="message">Message</label>
            <div class="feedback-inputDiv">
            <textarea name="bodymsg" id="" cols="30" rows="10" class="<?php if(isset($_GET['error'])){
                echo $_GET['error'] === 'emptyinputs' ? 'focus-danger' : null;
            } ?>" placeholder="Your Message here..."></textarea>
            <?php
                 if(isset($_GET['error'])){
                    if($_GET['error'] === 'emptyinputs'){
                        echo "<p style='color:red;'>Please fill all fields </p>";
                    }
                 }

            ?>
            </div> 
            <button type="submit" name="submit">Send Message</button>
        </form>
    </section>
    <section class="register">
        <div class="register-row">
            <div class="register-col register-details">
                <h3>
                    Register now and get a discount 50% discount until 1 January
                </h3>
                <p>
                    In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.
                </p>
                <div class="register-btn">
                    <a href="">Register Now</a>
                </div>
            </div>
            <div class="register-col">
                <h3>Search for your course</h3>
                <form action="">
                    <input type="text" placeholder="Course Name">
                    <input type="text" placeholder="category">
                    <input type="text" placeholder="Degree">
                    <button type="submit" class="course-btn"> Search Course </button>
                </form>
            </div>
        </div>
    </section>
    <section class="our-service">
        <span>---</span>
        <h2>Our services</h2>
        <div class="service-row">
            <div class="service-col">
                <ion-icon name="book-outline" class="service-icon"></ion-icon>
                <h3> Comprehensive Course Materials</h3>
                <p>
                    Get access to a treasure trove of comprehensive and certified course materials tailored to meet the specific needs of chemical engineering students.
                </p>
            </div>
            <div class="service-col">
                <ion-icon name="bug-outline" class="service-icon"></ion-icon>
                <h3> Problem-Solving Scripts</h3>
                <p>
                    Our problem-solving scripts are your key to conquering complex chemical engineering challenges. Unlock solutions that will elevate your academic performance.
                </p>
            </div>
            <div class="service-col">
                <ion-icon name="git-network-outline" class="service-icon"></ion-icon>
                <h3> Laboratory Simulation Scripts</h3>
                <p>
                    Experience realistic laboratory simulations with our certified scripts. Perfect your practical skills and gain hands-on experience in a virtual environment.
                </p>
            </div>
        </div>
        <div class="service-row">
            <div class="service-col">
                <ion-icon name="school-outline" class="service-icon"></ion-icon>
                <h3> Exam Prep Scripts</h3>
                <p>
                    Ace your chemical engineering exams with our specialized exam preparation scripts. Achieve top scores and boost your confidence on test day.
            </div>
            <div class="service-col">
                <ion-icon name="telescope-outline" class="service-icon"></ion-icon>
                <h3>Research Assistance Scripts</h3>
                <p>
                    Our research assistance scripts provide invaluable support for your academic projects and theses. Elevate the quality of your research with our expert guidance.
                </p>
            </div>
            <div class="service-col">
                <ion-icon name="planet-outline" class="service-icon"></ion-icon>
                <h3> 24/7 Customer Support</h3>
                <p>
                    We're here for you around the clock. Our dedicated customer support team ensures that your needs and questions are addressed promptly, providing you with peace of mind.
                </p>
            </div>
        </div>
    </section>
    <section class="testimony">
        <span>---</span>
        <h2>What our students say</h2>
        <div class="swiper mySwiper height-set">
            <div class="swiper-wrapper height-set">
              <div class="swiper-slide height-set">
                <div class="testimony-writeUp">
                    <h1>""</h1>
                    <p>
                        "I enrolled in their chemical engineering course, and it was a game-changer for my career. The knowledge and skills I gained were instrumental in landing my dream job. Highly recommended!"
                        <h5>James Copper</h5>
                        <h6>Bsc Holder</h6>
                    </p>
                </div>
              </div>
              <div class="swiper-slide height-set">
                <div class="testimony-writeUp">
                    <h1>""</h1>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo nesciunt sapiente sit in, eum sequi dolorem minus cumque veniam repudiandae, ipsam, laudantium nemo aliquid. Aspernatur doloribus tempore quo nobis ipsum.
                        <h5>Joe Brad</h5>
                        <h6>Engineering student</h6>
                    </p>
                </div>
              </div>
              <div class="swiper-slide height-set">
                <div class="testimony-writeUp">
                    <h1>""</h1>
                    <p>
                        "Thanks to their courses, I now have the expertise I needed to excel in the chemical engineering industry. The practical insights and guidance have been invaluable."
                        <h5>Joe Brad</h5>
                        <h6>Engineering student</h6>
                    </p>
                </div>
              </div>
              <div class="swiper-slide height-set">
                <div class="testimony-writeUp">
                    <h1>""</h1>
                    <p>
                        "I can't thank them enough for the quality education I received. Their courses are a must for anyone looking to succeed in chemical engineering."
                        <h5>James Thompson</h5>
                        <h6>Graduate student</h6>
                    </p>
                </div>
              </div>
              <div class="swiper-slide height-set">
                <div class="testimony-writeUp">
                    <h1>""</h1>
                    <p>
                        "I was searching for the right path in chemical engineering, and their courses provided the perfect roadmap. I'm now confidently pursuing my career goals."
                        <h5>Maria Rodriguez</h5>
                        <h6>College student</h6>
                    </p>
                </div>
              </div>
              <div class="swiper-slide height-set">
                <div class="testimony-writeUp">
                    <h1>""</h1>
                    <p>
                        "Their courses have opened up new opportunities for me. I've gained a deep understanding of chemical engineering principles, and it's had a significant impact on my professional growth."
                         <h5>Emily Turner</h5>
                        <h6>Uni - student</h6>
                    </p>
                </div>
              </div>
              <div class="swiper-slide height-set">
                <div class="testimony-writeUp">
                    <h1>""</h1>
                    <p>
                        "Enrolling in their courses was the best decision I made for my career. The knowledge and skills I acquired have set me on a path to success in the field of chemical engineering."
                        <h5>Michael Carter</h5>
                        <h6>Master's Holder</h6>
                    </p>
                </div>
              </div>
              <div class="autoplay-progress">
            </div>
        </div>
    </section>
    <section class="events">
        <span>---</span>
        <h2>Upcoming Events</h2>
        <div class="events-row">
            <div class="events-col events-col1">
                <h3> 07 </h3>
                <p>January</p>
            </div>
            <div class="events-col events-col2">
                <h3>Student Festival</h3>
                <h5>Grand Central Park</h5>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
            </div>
            <div class="events-col events-col3">
                <img src="image/chem-course2_11zon.jpg" alt="Event Image">
            </div>
        </div>
        <div class="events-row">
            <div class="events-col events-col1">
                <h3> 07 </h3>
                <p>January</p>
            </div>
            <div class="events-col events-col2">
                <h3>Student Festival</h3>
                <h5>Grand Central Park</h5>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
            </div>
            <div class="events-col events-col3">
                <img src="image/bookl-ady_11zon.jpg" alt="Event Image">
            </div>
        </div>
        <div class="events-row">
            <div class="events-col events-col1">
                <h3> 07 </h3>
                <p>January</p>
            </div>
            <div class="events-col events-col2">
                <h3>Student Festival</h3>
                <h5>Grand Central Park</h5>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
            </div>
            <div class="events-col events-col3">
                <img src="image/study-lady.webp" alt="Event Image">
            </div>
        </div>
    </section>
    <footer>
        <section class="subscribe">
            <span>---</span>
            <h2>Upcoming Events</h2>
            <form action="">
                <input type="email" placeholder="Your Email Address..">
                <button type="submit">Subcribe</button>
            </form>
            <div class="scrolling">
                <p>scroll Top</p>
            </div>
        </section>
        <div class="footer-contentsRow">
            <div class="footer-content-col first-footer-col">
                <a href=""><h2>ChemEduConnect</h2></a>
                <a href=""><p class="footer-text1">Home of Chem Courses</p></a>
                <p class="footer-text2">
                    In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin 
                </p>
                <a href=""> <ion-icon name="logo-twitter" class="footer-icon"></ion-icon></a> &ensp;
                <a href=""> <ion-icon name="logo-facebook" class="footer-icon"></ion-icon></a>  &ensp;
                <a href=""> <ion-icon name="logo-instagram" class="footer-icon"></ion-icon></a> &ensp;
                <a href=""><ion-icon name="logo-linkedin" class="footer-icon"></ion-icon></a>
            </div>
            <div class="footer-content-col second-footer-col">
                <h2> Menu </h2>
                <a href="">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p>Home</p>
                </a>
                <a href="" class="footer-linkText">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p>About</p>
                </a>
                <a href="" class="footer-linkText">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p>courses</p>
                </a>
                <a href="" class="footer-linkText">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p>contact</p>
                </a>
            </div>
            <!-- cccc -->
            <div class="footer-content-col second-footer-col">
                <h2>Usefull Links</h2>
                <a href="" class="disclaimer-anchor">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p class="footer-disclaimer">Disclaimer</p>
                </a>
                <a href="" class="footer-linkText">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p>Testimonials</p>
                </a>
                <a href="" class="footer-linkText">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p>Courses</p>
                </a>
                <a href="" class="footer-linkText">
                    <ion-icon name="caret-forward-outline" class="arrow-footer"></ion-icon> &ensp;
                    <p>Community</p>
                </a>
            </div>
            <!-- cccc -->
            <div class="footer-content-col second-footer-col last-footer-col">
                <h2> Have a Questions? </h2>
                <a href="" style="margin-top: 20px;">
                    <ion-icon name="location-outline" class="footer-green-1"></ion-icon> &ensp; &ensp; &ensp; &ensp; 
                    <!-- <p>	203 Fake St. Mountain View, San Francisco, California, USA</p> -->
                    <p>visit us @ChemEduConnect on all our social media pages/channels</p>
                </a>
                <a href="" class="footer-linkText">
                        <ion-icon name="call-outline"  class="footer-green"></ion-icon> &ensp; &ensp;  
                    <p>+234 9046-4874-01</p>
                </a>
                <a href="" class="footer-linkText">
                        <ion-icon name="mail-outline" class="footer-green"></ion-icon> &ensp; &ensp; 
                    <p>chemeduconnect12@gmail.com</p>
                </a>
                <a href="" class="footer-linkText">
                        <ion-icon name="globe-outline" class="footer-green"></ion-icon> &ensp; &ensp; 
                    <p>chemeduconnect.com</p>
                </a>
            </div>
            <!-- cccc -->
        </div>

        <div class="last-itemDiv">
            <p>Copyright ©2023 All rights reserved | This Website is made with
             <i class="fa-solid fa-heart"></i>
                by <a href="">Ac Digital tech</a></p>
        </div>
    </footer>
    </main>
<!--     
    INSERT INTO `user_info` (`id`, `name`, `email`, `date`) VALUES (NULL, 'John Doe', 'johndoe@gmail.com', current_timestamp());
    DELETE FROM user_info WHERE `user_info`.`id` = 1"? -->
    <script src="swiper-bundle.min.js"></script> 
    <!-- Initialize Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>
           new WOW().init();
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>