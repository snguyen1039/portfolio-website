<!DOCTYPE html>

<html lang="en">

<head>
    <?php
        $title = "MDK | Project";
        include("header.php");
    ?>
</head>

<body>

<header id="header">
    <?php include("navbar.php"); ?>
</header>

<div class="content-wrapper">
    <div id="content" role="main">

        <section class="hero background-img marc-kirshbaum-bg-img" id="hero">
            <div class="info-block bg-transparent-blueberry padding-sm">
                <h1 class="custom-header white no-margin">MDK</h1>
            </div>
        </section>

        <section id="portfolio">
            <div class="row">
                <div class="col-md-9">
                    <div id="description">
                        <h2>MDK</h2>
                        <p>
                            MDK is a personal website we created for Marc D. Kirshbaum, a businessman who grows and turns
                            around businesses with a hands-on approach.
                        </p>
                        <p>
                            We wanted to give Marc something unique and spectacular to show off his fantastic operation,
                            so we created this new website for him using Laravel structured with an MVC architecture.
                            The website greatly represents who Marc is, ranging from his background, to his skills and
                            services that display his level of expertise in the business industry, to his goals that
                            motivate him to work hard and turn businesses around with sustainable and measurable results
                            for investors, employees and customers.
                        </p>
                        <p>
                            Marc's website doesn't just provide information on himself, but also results of businesses 
                            he helped turn around, a blog to illustrate his thoughts, books that have taught him to learn 
                            from success and failure, and quotes that inspired him. Visitors can keep up with Marc and his 
                            business ventures by contacting him or signing up for a newsletter integrated with a marketing 
                            software called Constant Contact. All of this is managed by a backend admin panel that Marc's 
                            site can use so he can continuously create and update more content for visitors to see and a 
                            MySQL database that stores the information.
                        </p>
                        <p>
                            It's important that a website's quality matches its owner's level of work, and we feel we've
                            achieved that with Marc's site.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="resources">
                        <a class="btn btn-custom btn-small btn-blueberry" href="http://marckirshbaum.com/" target="_blank">
                            Go to Website
                        </a>
                    </div>
                    <div class="resources">
                        <h3>Tools</h3>
                        <ul>
                            <li>PHP Storm</li>
                            <li>Laravel</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                    <div class="resources">
                        <h3>Languages</h3>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>jQuery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php include('footer.php') ?>

</body>

</html>