<?php
session_start();
include('connection.php');
include('login.php');
include('signup.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JOBSCOUT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.php">JOBSCOUT</a></h1>
            <ul>
                <li><a href="joblist.php">JOB</a></li>
                <li class="active"><a href="create.php">Upload</a></li>
                 
                <li><a class="btn btn-info" type="submit" name="submit" href="logout.php">logout</a></li>
                <?php
               if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "Hello $username  Welcome.";
                } else {
                    echo "Please log in.";
                }
                ?>
            </ul>
        </div>
    </header>

    <!-- banner -->
    <section class="banner">
        <h2><a href="index3.php">LOOKING FOR SIDEJOB?</a></h2>
    </section>

    <!-- about -->
    <section class="about">
        <div class="container">
        <h3>ABOUT US</h3>
            <h1>Welcome to JOBSCOUT</h1>
            <p>Your trusted partner in balancing work, life, and extra income. We understand the challenges that come with managing a full-time job or other responsibilities while still seeking to enhance your financial situation. At TaskSide JOBSCOUT, we specialize in connecting you with side job opportunities that not only fit your skills but also complement your schedule.</p>
            <h2>Empower Your Potential</h2>
            <p>Here at TaskSide JOBSCOUT, we believe in the power of flexibility and the potential of every individual. Whether you're looking to turn your evenings into productive work sessions or have weekends free to engage in profitable projects, we offer a wide range of options to suit your needs. Our platform is designed to empower you to use your skills effectively, allowing you to take on virtual assistant roles, creative endeavors, or specialized tasks.</p>
            <h2>Join Our Community</h2>
            <p>Join our vibrant community of task enthusiasts today and start navigating through a plethora of job opportunities tailored just for you. With TaskSide JOBSCOUT, you're not just finding a job; you're unlocking the potential of your talents and earning extra income on your own terms. Dive into a world of opportunities where your skills meet their match and your schedule is no longer a barrier to earning more.</p><br><br>
            <h1>Your Go-To Solution for Task Completion and Efficiency</h1>
            <p>We take immense pride in being recognized as your primary solution for achieving remarkable efficiency and completing tasks with utmost precision. In today's fast-paced world, where every second counts and balancing multiple responsibilities can seem daunting, we understand the unique challenges you face daily.</p>
            
            <h2>Understanding Your Needs</h2>
            <p>Our approach is centered around a deep understanding of your time constraints and the constant juggle between personal and professional life. This insight drives our commitment to providing tailored solutions that fit seamlessly into your busy schedule, helping you achieve more with less stress.</p>

            <h2>Our Passion for Organization</h2>
            <p>At the heart of our services lies a profound passion for organization. Our team thrives on bringing order to chaos, transforming cluttered schedules and to-do lists into streamlined processes. We specialize in managing your tasks so that you can focus on what truly matters—your goals and well-being.</p>

            <h2>Commitment to Excellence</h2>
            <p>Our unwavering commitment to excellence is what sets us apart. We dedicate ourselves to completing each task with a level of precision and dedication that is unmatched. We are relentless in our pursuit of perfection, ensuring that every detail is meticulously handled and every project is delivered on time and to the highest standards.</p>

            <h2>Let Us Take the Weight Off Your Shoulders</h2>
            <p>Allow us to take the weight off your shoulders. We're not just about completing tasks; we're about enhancing your overall productivity and quality of life. With our help, you can enjoy a clearer mind and a more organized life. We're here to help you navigate the complexities of daily responsibilities with ease and confidence.</p>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="container">
            <small> Copyright &copy; 2023 - JOBSCOUT, All Rights Reserved</small>
        </div>
    </footer>
</body>
</html>