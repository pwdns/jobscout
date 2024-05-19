<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>JOBSCOUT - Job Listings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&family=Raleway:wght@700&display=swap");

        body {
        background-image: url('../project_aplication/asset/bg3.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        }

        header {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header ul li {
            margin-right: 20px;
        }

        header ul li a {
            text-decoration: none;
            color: #333;
        }

        header ul li a:hover,
        header ul li.active a {
            color: #007bff;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
        }

        main {
            position: relative;
            width: calc(min(90rem, 90%));
            margin: 0 auto;
            display: flex;
            align-items: center;
            min-height: 100vh;
            min-height: 100svh;
            column-gap: 3rem;
            padding-block: min(20vh, 3rem);
        }

        .swiper {
            width: 100%;
            padding: 1.875rem 0;
        }

        .swiper-slide {
            width: 18.75rem;
            height: 35rem;
            display: flex;
            flex-direction: column;
            justify-content: end;
            align-items: self-start;
            box-shadow: 0.063rem 0.5rem 1.25rem rgba(0, 0, 0, 0.1216);
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .swiper-slide-img {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            transform: rotate(180deg);
            line-height: 0;
            bottom: -0.063rem;
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .swiper-slide-img img {
            width: 100%;
            height: 100%;
            position: absolute;
            inset: 0;
            object-fit: cover;
            z-index: -1;
            transition: 0.3s ease-in-out;
            transform: rotate(-180deg);
        }

        .swiper-slide-img svg {
            position: relative;
            display: block;
            width: calc(300% + 1.3px);
            height: 5rem;
            transform: rotateY(180deg);
        }

        .swiper-slide-img .shape-fill {
            fill: #ffffff;
        }

        .swiper-slide-content>div {
            transform: translateY(-1.25rem);
        }

        .swiper-slide-content {
            background: #fff;
            padding: 0 1.65rem;
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            width: 100%;
        }

        .swiper-slide-content h2 {
            color: #000;
            font-family: "Raleway", sans-serif;
            font-weight: 700;
            font-size: 1.4rem;
            line-height: 1.4;
            margin-bottom: 0.425rem;
            text-transform: capitalize;
            letter-spacing: 0.02rem;
        }

        .swiper-slide-content p {
            color: #000;
            line-height: 1.6;
            font-size: 0.9rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .swiper-slide-content .show-more {
            width: 3.125rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #24aad9;
            border-radius: 50%;
            box-shadow: 0px 0.125rem 0.875rem #24aad96b;
            margin-top: 1em;
            margin-bottom: 0.2em;
            height: 0;
            opacity: 0;
            transition: opacity 0.3s ease-in;
            margin-left: auto;
        }

        .swiper-slide-content .show-more:hover {
            background: #1184ac;
        }

        .swiper-slide-content .show-more svg {
            width: 1.75rem;
            color: #fff;
        }

        .swiper-slide-active:hover img {
            transform: scale(1.2) rotate(-185deg);
        }

        .swiper-slide-active:hover .show-more {
            opacity: 1;
            height: 3.125rem;
        }

        .swiper-slide-active:hover p {
            display: block;
            overflow: visible;
        }

        .swiper-3d .swiper-slide-shadow-left,
        .swiper-3d .swiper-slide-shadow-right {
            background-image: none;
        }

        @media screen and (min-width: 93.75rem) {
            .swiper {
                width: 85%;
            }
        }

        /* -- External Social Link CSS Styles -- */

        #source-link {
            top: 120px;
        }

        #source-link>i {
            color: rgb(94, 106, 210);
        }

        #yt-link {
            top: 65px;
        }

        #yt-link>i {
            color: rgb(219, 31, 106);

        }

        #Fund-link {
            top: 10px;
        }

        #Fund-link>i {
            color: rgb(255, 251, 0);

        }

        .meta-link {
            align-items: center;
            backdrop-filter: blur(3px);
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: inline-flex;
            gap: 5px;
            left: 10px;
            padding: 10px 20px;
            position: fixed;
            text-decoration: none;
            transition: background-color 600ms, border-color 600ms;
            z-index: 10000;
        }

        .meta-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .meta-link>i,
        .meta-link>span {
            height: 20px;
            line-height: 20px;
        }

        .meta-link>span {
            color: white;
            font-family: "Rubik", sans-serif;
            transition: color 600ms;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>JOBSCOUT</h1>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li class="active"><a href="creates.html">Upload</a></li>
                <li><a href="index0.php">login</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                include "connection.php";
                $sql = "SELECT * FROM items_table";
                $result = $conn->query($sql);
                if(!$result){
                    die("Invalid query: " . $conn->error);
                }
                while($row = $result->fetch_assoc()){
                    echo "
                        <div class='swiper-slide'>
                            <div class='swiper-slide-img'>
                                <svg data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'>
                                    <path d='M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z' opacity='.25' class='shape-fill'></path>
                                    <path d='M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z' opacity='.5' class='shape-fill'></path>
                                    <path d='M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z' class='shape-fill'></path>
                                </svg>
                            </div>
                            <div class='swiper-slide-content'>
                                <div>
                                    <h2>{$row['item_name']}</h2>
                                    <p>{$row['item_desc']}</p>
                                    <p>Contact: {$row['contact']}</p>
                                    <p>Price: Rp. {$row['item_price']}</p>
                                    <a class='show-more' href='https://example.com/item/{$row['id']}' target='_blank'>
                                        <svg fill='none' stroke='currentColor' stroke-width='1.5' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                                            <path stroke-linecap='round' stroke-linejoin='round' d='M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3'></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
                }
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8.4.5/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            spaceBetween: 30,
            loop: false,
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        swiper.slideTo(1, false, false);
    </script>
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
    <footer>
        <div class="container">
            <small> Copyright &copy; 2023 - JOBSCOUT, All Rights Reserved</small>
        </div>
    </footer>
</body>
</html>