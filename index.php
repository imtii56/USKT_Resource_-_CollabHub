
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: log.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USKT-Resource_sharing and ColabHub</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/resopnsiv.css">
</head>

<body>

    <header>
        <div class="container nav">
            <div class="logo"><img src="Images/logo.png" alt="" class="logo_img"></div>
            <nav>
                <a href="index.html">Home</a>
                <a href="cources.html">Courses</a>
                <a href="about.html">About us</a>
                <a href="courceDetials.php">Details </a>
            </nav>
            <di> <a href="log.php" class="btn">Let's Collaborate</a></di>

        </div>



    </header>


    <section class="hero">

        <div class="container hero-content">
            <div class="text">
                <h1>Build, Learn & Grow <br />Together</h1>
                <p>Our portal is a digital hub built for IT students and aspiring developers. Whether you're looking to
                    explore detailed course schemes or collaborate on innovative tech projects, this platform empowers
                    you to learn, connect, and grow — all in one place.</p>
                <div class="buttons">
                    <a href="#explore_IT" class="btn primary">View Study Scheme</a>
                    <a href="log.php" class="btn link">Let's Collaborate →</a>
                </div>
            </div>
            <div class="image-wrapper">
                <img src="Images/heroSec.png" alt="Campus" />
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container-feature">
            <h2>Collaborate to <strong>build</strong> the future with skills</h2>
            <p>Designed for IT students and developers, this platform helps you access academic resources, course
                schemes, and more. Collaborate with peers, share ideas, and build real-world tech projects—together.</p>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <div class="about-text">
                <h1><span>All-in-One <span class="highlight">IT</span></span><br>Learning Hub that<br> makes it easier
                </h1>
                <ul>
                    <li>✔️ Semester-wise breakdowns</li>
                    <li>✔️ Join hands with fellow learners to build</li>
                    <li>✔️ Download notes, guides, and tools to make studying smarter</li>
                </ul>
                <a href="cources.html" class="cta">Explore our IT world →</a>
            </div>

            <div class="about-image-cards">

                <img src="Images/aoutleft.jpg" alt="" class="about-img">


            </div>
        </div>
        </div>
        </div>
    </section>




    <section class="programs-section" id="explore_IT">
        <h2>Explore Our <span class="highlight">IT Programs</span></h2>
        <div class="card-container">
            <div class="card">
                <img src="images/adp.png" alt="ADP Program">
                <h3>ADP – Associate Degree Program</h3>
                <p>A foundational-based program designed to equip you with essential IT skills and real-world knowledge
                    in just two years.</p>
                <a href="cources.html">Learn More →</a>
            </div>
            <div class="card">
                <img src="images/it.png" alt="ITBS Program">
                <h3>ITBS – Information Technology</h3>
                <p>A powerful combo of tech and business. Learn to build systems and strategies in this tech+business
                    focused program.</p>
                <a href="cources.html">Learn More →</a>
            </div>
            <div class="card">
                <img src="images/AO.png" alt="AI Program">
                <h3>AI – Artificial Intelligence</h3>
                <p>Dive into the future with hands-on learning in machine learning, data science, and intelligent
                    systems.</p>
                <a href="cources.html">Learn More →</a>
            </div>
        </div>
    </section>

    <!-- Collaborate and Innovate Section -->
    <section class="collab-section">
        <div class="collab-text">
            <h2>Collaborate <span class="highlight">and Innovate</span> Together</h2>
            <p>Unlock new opportunities by teaming up with fellow students and developers. Whether you're looking to
                start a project, join one, or simply share your skills—this is your space to connect, create, and grow
                together.</p>
            <a class="visit-link" href="#">Visit Collaboration Center →</a>
        </div>
        <div class="collab-images">

            <div class="grid-images">
                <img src="images/cl1.png" alt="Team Collab">
                <img src="images/cl2.png" alt="Working Together">
                <img src="images/cl3.png" alt="Idea Sharing">
            </div>
        </div>
    </section>


    <section class="testimonials">
        <div class="containerbox">
            <div class="section-title">
                <h2>What Our Students Say</h2>
                <p>Hear from students who have transformed their careers through our programs</p>
            </div>

            <div class="tes-div">
                <div class="testimonial-card">
                    <p>The BS IT program gave me the practical skills I needed to land my dream job at a tech startup.
                        The
                        hands-on projects were exactly what employers were looking for.</p>
                    <div class="testimonial-author">
                        <img src="Images/face1.png" alt="Sania">
                        <div class="author-info">
                            <h4>Sania</h4>
                            <p>BS IT Graduate, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>The BS IT program gave me the practical skills I needed to land my dream job at a tech startup.
                        The
                        hands-on projects were exactly what employers were looking for.</p>
                    <div class="testimonial-author">
                        <img src="Images/face8.png" alt="Sania">
                        <div class="author-info">
                            <h4>Ali Sher</h4>
                            <p>BS IT Graduate, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>The BS IT program gave me the practical skills I needed to land my dream job at a tech startup.
                        The
                        hands-on projects were exactly what employers were looking for.</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                        <div class="author-info">
                            <h4>Sania Ashfaq</h4>
                            <p>BS IT Graduate, 2023</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="join-section">
        <div class="floating-faces">
            <img src="images/face1.png" alt="face">
            <img src="images/face2.png" alt="face">
            <img src="images/face3.png" alt="face">
            <img src="images/face4.png" alt="face">
            <img src="images/face5.png" alt="face">
            <img src="images/face6.png" alt="face">
            <img src="images/face7.png" alt="face">
            <img src="images/face8.png" alt="face">
            <img src="images/face4.png" alt="face">
            <img src="images/face7.png" alt="face">
        </div>
        <div class="join-content">
            <h2>Join a world of learning</h2>
            <p>Malesuada at aliquam at ac est nisi, interdum etiam dignissim.<br> Risus est et fringilla habitant ut
                facilisi.</p>
            <button class="join-btn">Sign Up Now</button>
        </div>
    </section>

    <footer class="study-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Study Resources</h4>
                <ul>
                    <li><a href="#">Notes</a></li>
                    <li><a href="#">Past Papers</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Quizzes</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Community</h4>
                <ul>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Study Groups</a></li>
                    <li><a href="#">Ask Questions</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>About Us</h4>
                <ul>
                    <li><a href="#">Our Mission</a></li>
                    <li><a href="#">The Team</a></li>
                    <li><a href="#">Contribute</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Connect</h4>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Report Issue</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Made with ❤️ by students, for students</p>
            <p class="copyright">© 2025 CBS-IT Study Hub. All rights reserved</p>
        </div>
    </footer>


    <script src="js/script.js"></script>
</body>

</html>