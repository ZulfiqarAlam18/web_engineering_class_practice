<?php 

    // if (isset($_REQUEST['btn'])??""){

    //     $connection = mysqli_connect("localhost","root","","contactForm_db");

    //     $query = "INSERT into contacts  values(1,'".$_REQUEST['Name']."','".$_REQUEST['Email']."','".$_REQUEST['Message']."')";

    //     $result = mysqli_query($connection,$query);
    //     if (!$result) {
    //         echo "Error: " . mysqli_error($connection);
    //     }

    // }

     
if (isset($_POST['btn'])) {
    $connection = mysqli_connect("localhost", "root", "", "contactForm_db");
    echo $connection;

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize inputs
    $name = mysqli_real_escape_string($connection, $_POST['Name']);
    $email = mysqli_real_escape_string($connection, $_POST['Email']);
    $message = mysqli_real_escape_string($connection, $_POST['Message']);

    // Use prepared statements for better security
    $query = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo "<script>document.getElementById('msg').innerHTML = 'Message sent successfully!';</script>";
        } else {
            echo "<script>document.getElementById('msg').innerHTML = 'Error: " . mysqli_error($connection) . "';</script>";
        }
        
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>document.getElementById('msg').innerHTML = 'Error preparing statement: " . mysqli_error($connection) . "';</script>";
    }

    mysqli_close($connection);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zulfiqar Alam | Software Engineer</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c54c866d57.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- header -->
    <header id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" alt="Zulfiqar Alam Logo" class="logo" loading="lazy">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()" aria-label="Close menu"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()" aria-label="Open menu"></i>
            </nav>
            <div class="header-text">
                <p>Software Engineer</p>
                <h1>Hi, I'm<span>Zulfiqar</span> Alam<br>From Pakistan</h1>
                <div class="social-icons">
                    <a href="https://github.com/ZulfiqarAlam18" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/feed/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/share/1ULFaPy8Ms/" target="_blank" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="Pasted image.png" alt="Zulfiqar Alam" loading="lazy">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>Hi, I'm Zulfiqar Alam — a passionate software engineer specializing in mobile and web development. With expertise in Flutter, Python, and Java, I create efficient, user-friendly applications. I'm dedicated to continuous learning and turning innovative ideas into practical solutions that make a difference.</p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>

                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Mobile Development</span><br>Building cross-platform apps with Flutter</li>
                            <li><span>Web Development</span><br>Creating responsive websites with HTML, CSS, JS</li>
                            <li><span>Backend Development</span><br>Developing server-side logic with Python</li>
                            <li><span>UI/UX Design</span><br>Designing intuitive user interfaces</li>
                        </ul>
                    </div>
                    
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li>Demo Data for now</li>
                            <li><span>2022 - Present</span><br>Freelance Mobile Developer</li>
                            <li><span>2021 - 2022</span><br>Intern at XYZ Inc.</li>
                            <li><span>2020 - 2021</span><br>University Projects Developer</li>
                        </ul>
                    </div>
                    
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2021 - 2025</span><br>BE Software Engineering - University of Mehran UET</li>
                            <li><span>2019 - 2021</span><br>Intermediate -G.B.C Bhan SyedAbad</li>
                            <li><span>2017 - 2019</span><br>Matriculation - H.S School Bhan SyedAbad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-mobile-screen" aria-hidden="true"></i>
                    <h2>Mobile App Development</h2>
                    <p>Building beautiful, high-performance cross-platform mobile applications using Flutter framework.</p>
                    <a href="#contact">Get in touch</a>
                </div>
                <div>
                    <i class="fa-solid fa-code" aria-hidden="true"></i>
                    <h2>Web Development</h2>
                    <p>Creating responsive, modern websites with clean code and excellent user experience.</p>
                    <a href="#contact">Get in touch</a>
                </div>
                <div>
                    <i class="fa-solid fa-robot" aria-hidden="true"></i>
                    <h2>AI Integration</h2>
                    <p>Implementing machine learning models and AI features into your applications.</p>
                    <a href="#contact">Get in touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio -->
    <section id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/work-1.png" alt="E-commerce App" loading="lazy">
                    <div class="layer">
                        <h3>E-commerce App</h3>
                        <p>A complete shopping solution with payment integration and admin dashboard built with Flutter.</p>
                        <a href="#" aria-label="View project"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-2.png" alt="Fitness Tracker" loading="lazy">
                    <div class="layer">
                        <h3>Fitness Tracker</h3>
                        <p>Health monitoring application with workout plans and nutrition tracking features.</p>
                        <a href="#" aria-label="View project"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-3.png" alt="Portfolio Website" loading="lazy">
                    <div class="layer">
                        <h3>Portfolio Website</h3>
                        <p>Responsive personal portfolio website built with HTML, CSS, and JavaScript.</p>
                        <a href="#" aria-label="View project"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </section>

    <!-- contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i> zulfiqaralam651@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> +92 314 9807774</p>
                    <div class="social-icons">
                        <a href="https://github.com/ZulfiqarAlam18" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/feed/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/share/1ULFaPy8Ms/" target="_blank" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/zulfiquralam18?igsh=aWpxeXpudnh4ajBo" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a href="images/my-cv.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="" method="POST">
                        <input type="text" name="Name" placeholder="Your Name" required autocomplete="name">
                        <input type="email" name="Email" placeholder="Your Email" required autocomplete="email">
                       
                        <textarea name="Message" rows="6" placeholder="Your Message" required></textarea>
                       
                        <!-- <button type="submit" name="btn" class="btn btn2" value="Submit"></button> -->
                       
                        <input type="submit" name="btn" class="btn-btn2" value = "Submit"  >

                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="copyright">
        <p>Copyright © 2023 Zulfiqar Alam. All rights reserved.</p>
    </footer>

    <script>
        // Tab functionality
        var tablinks = document.getElementsByClassName('tab-links');
        var tabContents = document.getElementsByClassName('tab-contents');

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabContents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }

        // Mobile menu functionality
        var sidemenu = document.getElementById("sidemenu");

        function openmenu() {
            sidemenu.style.right = "0";
            document.body.style.overflow = "hidden"; // Prevent scrolling when menu is open
        }

        function closemenu() {
            sidemenu.style.right = "-200px";
            document.body.style.overflow = "auto"; // Re-enable scrolling
        }

        // Close menu when clicking on a link
        document.querySelectorAll('#sidemenu a').forEach(link => {
            link.addEventListener('click', closemenu);
        });

        // Contact form submission
        const scriptURL = 'YOUR_GOOGLE_SCRIPT_URL' // Add your Google Script URL here
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                    msg.innerHTML = "Message sent successfully!"
                    setTimeout(function() {
                        msg.innerHTML = ""
                    }, 5000)
                    form.reset()
                })
                .catch(error => {
                    msg.innerHTML = "Error sending message. Please try again."
                    setTimeout(function() {
                        msg.innerHTML = ""
                    }, 5000)
                })
        })
    </script>
</body>
</html>