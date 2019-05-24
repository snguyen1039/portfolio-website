<!DOCTYPE html>

<html lang="en">

<head>
    <?php
        $title = "About Me";
        include("header.php");
    ?>
</head>

<body>

<header id="header">
    <?php include("navbar.php"); ?>
</header>

<div class="content-wrapper">
    <div id="content" role="main">
        <section id="about-me" class="bg-blueberry">
            <div class="container">
                <div class="col-md-3">
                    <div class="portrait">
                        <img class="img-responsive" src="images/steven-nguyen.jpg" alt="Steven Nguyen"/>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="info-block">
                        <h1 class="custom-subheader ivory-black">About Me</h1>
                        <p>Hello! My name is Steven.</p>
                        <p>
                            My introduction into technology came when my brother pursued a career as a Software Engineer
                            and showed his expertise in creating software products for me and my family that we found
                            useful in our everyday lives. Impressed, I decided to follow in my brother's footsteps to
                            make the same experience for everyone else as my main goal in my education. After graduating
                            from University of California, Irvine with a Bachelor's Degree in Computer Science in 2016,
                            my journey as a Software Engineer would begin.
                        </p>
                        <p>
                            I begin my journey into the technical industry with OC Web Kings, a web and mobile app
                            development company where we specialize in custom design, lead capture pages, strategic
                            marketing, and technical efficiency. Being a large contributor for the company's success,
                            my technical capabilities expanded to learn complex languages and utilize modern tools to
                            develop excellent software.
                        </p>
                        <p>
                            As a professional software engineer with 4 years of experience in the industry, I
                            have much to offer in the realm of software development. I pride myself in facing
                            new challenges, new obstacles, and new opportunities each and every step of the way
                            in my career so that I may make everyone's dreams turn into a successful product with
                            any resources at my disposal.
                        </p>
                        <p>Contact me to get started, and let's make your dreams come true!</p>
                        <div>
                            <a class="btn btn-custom btn-ivory-black"
                               href="download/Steven%20Nguyen's%20Resume.pdf"
                               download="Steven Nguyen's Resume.pdf">
                                My Resume
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include('footer.php') ?>

</body>

</html>