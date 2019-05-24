<!DOCTYPE html>

<html lang="en">

<head>
    <?php
        $title = "Software Engineer, Front-End Developer, Team Player";
        include("header.php");
    ?>
</head>

<body>

<header id="header">
    <?php include("navbar.php"); ?>
</header>

<div class="content-wrapper">
    <div id="content" role="main">

        <section class="hero background-img hero-bg-img" id="hero">
            <div class="info-block">
                <img src="images/logo.png" alt="Steven Nguyen's Logo"/>
                <h1 class="custom-header white">Steven Nguyen</h1>
                <h2 class="custom-subheader white">
                    <span class="title">Software Engineer </span>
                    <span class="bullet-point">&#8226;</span>
                    <span class="title">Front-End Developer </span>
                    <span class="bullet-point">&#8226;</span>
                    <span class="title">Team Player</span>
                </h2>
                <a class="btn btn-custom btn-blueberry" id="call-to-action"
                   href="#about-me">
                    Get to know me
                </a>
            </div>
        </section>

        <section id="about-me" class="bg-blueberry">
            <div class="container">
                <div class="col-md-3">
                    <div class="portrait">
                        <img class="img-responsive" src="images/steven-nguyen.jpg" alt="Steven Nguyen"/>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="info-block">
                        <h2 class="custom-subheader ivory-black">It's nice to meet you. Let's get started.</h2>
                        <p>Hello! My name is Steven.</p>
                        <p>
                            As a professional software engineer with 4 years of experience in the industry, I
                            have much to offer in the realm of software development. I pride myself in facing
                            new challenges, obstacles, and opportunities each and every step of the way
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

        <section id="services">
            <div class="container">
                <h2 class="custom-subheader ivory-black text-center">Services</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service text-center">
                            <div>
                                <img class="service-icon" src="images/services/software-engineer.png" alt="Software Engineer"/>
                                <h3 class="custom-thirdheader">Software Engineer</h3>
                                <h4 class="blueberry">Information Systems, Data Structures, OOP</h4>
                                <p>
                                    Combine my knowledge of Computer Science principles with cutting-edge
                                    technology to develop modern software for everyone to use.
                                </p>
                            </div>
                            <div class="skills">
                                <h4 class="blueberry">Languages</h4>
                                <p>
                                    C, C++, C#, Java, Python
                                </p>
                            </div>
                            <div class="tools">
                                <h4 class="blueberry">Tools</h4>
                                <ul>
                                    <li>Microsoft Visual Studio</li>
                                    <li>IDLE</li>
                                    <li>jGRASP</li>
                                    <li>Git</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service text-center">
                            <div>
                                <img class="service-icon" src="images/services/front-end-developer.png" alt="Front-End Developer"/>
                                <h3 class="custom-thirdheader">Front-End Developer</h3>
                                <h4 class="blueberry">Websites, Web Apps, SEO</h4>
                                <p>
                                    Build responsive websites and web applications for clients to that encapsulates their
                                    creative vision and help them gain traction on the internet.
                                </p>
                            </div>
                            <div class="skills">
                                <h4 class="blueberry">Languages</h4>
                                <p>
                                    HTML/CSS, PHP, LESS/Sass, JavaScript, jQuery, Liquid, SQL
                                </p>
                            </div>
                            <div class="tools">
                                <h4 class="blueberry">Tools</h4>
                                <ul>
                                    <li>PHP Storm</li>
                                    <li>Web Storm</li>
                                    <li>Wordpress</li>
                                    <li>Shopify</li>
                                    <li>Laravel</li>
                                    <li>MySQL</li>
                                    <li>Microsoft SQL Server</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service text-center">
                            <div>
                                <img class="service-icon" src="images/services/team-player.png" alt="Team Player"/>
                                <h3 class="custom-thirdheader">Team Player</h3>
                                <h4 class="blueberry">Transparency, Communication, Reliability</h4>
                                <p>
                                    Reliable as both a communicative team member and an independent developer
                                    within the Agile software development life cycle.
                                </p>
                            </div>
                            <div class="skills">
                                <h4 class="blueberry">Soft Skills</h4>
                                <p>
                                    Teamwork, Critical Thinking, Multitasking, Troubleshooting
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="bg-light-grey">
            <div class="container">
                <h2 class="custom-subheader text-center">My Work</h2>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="portfolio-bg-img marc-kirshbaum-bg-img">
                            <div class="transparent-background"></div>
                            <div class="description">
                                <h3>Marc Kirshbaum</h3>
                                <p>
                                    A portfolio website for a businessman who grows and turns around businesses
                                    with a hands-on approach.
                                </p>
                                <a class="btn btn-custom btn-small btn-blueberry"
                                   href="http://marckirshbaum.com/" target="_blank">
                                    Go to Website
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="portfolio-bg-img adoption-network-bg-img">
                            <div class="transparent-background"></div>
                            <div class="description">
                                <h3>Adoption Network</h3>
                                <p>
                                    An overhaul of a website for a company that provides professional adoption
                                    services to birth mothers and adoptive parents.
                                </p>
                                <a class="btn btn-custom btn-small btn-blueberry"
                                   href="https://adoptionnetwork.com/" target="_blank">
                                    Go to Website
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="portfolio-bg-img aquaflex-bg-img">
                            <div class="transparent-background"></div>
                            <div class="description">
                                <h3>Aquaflex</h3>
                                <p>
                                    A business website that features a multitude of chemical adhesive and
                                    suppressant products for commercial flooring.
                                </p>
                                <a class="btn btn-custom btn-small btn-blueberry"
                                   href="https://aquaflexinc.com/" target="_blank">
                                    Go to Website
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="portfolio-bg-img netblast-bg-img">
                            <div class="transparent-background"></div>
                            <div class="description">
                                <h3>Netblast</h3>
                                <p>
                                    A website for Netblast, a 2D free-to-play arena shooter developed by
                                    Atomic Lollypop.
                                </p>
                                <a class="btn btn-custom btn-small btn-blueberry"
                                   href="https://atomiclollypop.com/" target="_blank">
                                    Go to Website
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="portfolio-bg-img salary-estimator-bg-img">
                            <div class="transparent-background"></div>
                            <div class="description">
                                <h3>Word and Brown's Salary Estimator</h3>
                                <p>
                                    A salary estimator that calculates sales revenue based on number of insurance
                                    policies sold per year.
                                </p>
                                <a class="btn btn-custom btn-small btn-blueberry"
                                   href="https://www.wordandbrown.com/salary-estimator" target="_blank">
                                    Go to Website
                                </a>
                            </div>
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