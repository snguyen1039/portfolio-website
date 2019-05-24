<!DOCTYPE html>

<html lang="en">

<head>
    <?php
        $title = "Salary Estimator | Project";
        include("header.php");
    ?>
</head>

<body>

<header id="header">
    <?php include("navbar.php"); ?>
</header>

<div class="content-wrapper">
    <div id="content" role="main">

        <section class="hero background-img salary-estimator-bg-img" id="hero">
            <div class="info-block bg-transparent-blueberry padding-sm">
                <h1 class="custom-header white no-margin">Salary Estimator</h1>
            </div>
        </section>

        <section id="portfolio">
            <div class="row">
                <div class="col-md-9">
                    <div id="description">
                        <h2>Salary Estimator</h2>
                        <p>
                            Word & Brown is among the three industry leaders in the development and distribution
                            of health insurances and benefit plan solutions. The company provides brokers, carriers,
                            business owners, and families, the services and benefits they need.
                        </p>
                        <p>
                            Word & Brown needed an estimator tool and dynamic bar graph that calculates sales revenue
                            based on number of insurance policies sold per year. So, they came to OC Web Kings
                            for a relationship to expand upon the contents of the website. I, along with my team, took
                            part in the development, with me assigned to create the tool for the company. Using
                            Wordpress as the CMS to create a page, a combination of the required languages, API calls,
                            and AJAX, I created the tool that would provide insurance brokers a way to project their goal
                            of the annual salary to earn with a graph.
                        </p>
                        <p>
                            The estimator tool itself consists of a slider that calculates the annual salary, displayed
                            by the number of healh insurance policies they need to sell within the year to reach that
                            salary. There are also two options the user can click on to decide how they want to meet
                            their potential earnings in 5 years. The graph itself auto adjusts to the slider and the
                            two options when calculating the annual salary.
                        </p>
                        <p>
                            It has become the tool that has proven itself useful for brokers to use.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="resources">
                        <a class="btn btn-custom btn-small btn-blueberry"
                           href="https://www.wordandbrown.com/salary-estimator" target="_blank">
                            Go to Website
                        </a>
                    </div>
                    <div class="resources">
                        <h3>Tools</h3>
                        <ul>
                            <li>PHP Storm</li>
                            <li>Wordpress</li>
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