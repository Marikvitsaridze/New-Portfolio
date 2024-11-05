<?php

// Section 2 Content
function generate_section2_content() {
    $image_src = "Images/for figm.jpeg";
    $image_alt = "image2";
    $heading = "I Am A Back-End Developer";
    $description = "Building robust and reliable server-side logic is at the heart of my daily work. 
                    From creating powerful APIs to optimizing database interactions, 
                    I thrive on solving complex problems and turning ideas into seamless, high-performance applications. 
                    For me, every line of code is a step towards innovation.";
    $button1_text = "Download CV";
    $button1_link = "#";
    $button2_text = "View Portfolio";
    $button2_link = "#";

    // Progress Bars
    $skills = [
        ['logo' => 'Images/python-removebg-preview.png', 'alt' => 'logo1', 'progress' => '90%'],
        ['logo' => 'Images/node.js-removebg-preview.png', 'alt' => 'logo2', 'progress' => '85%'],
        ['logo' => 'Images/sql-removebg-preview.png', 'alt' => 'logo3', 'progress' => '80%']
    ];

    echo '
    <section class="section2">
        <div class="second-section container">
            <div class="second-image">
                <img src="' . $image_src . '" alt="' . $image_alt . '">
            </div>
            <div class="second-content">
                <h1>' . $heading . '</h1>
                <p class="firstp">' . $description . '</p>
                <div class="second-link">
                    <a href="' . $button1_link . '" class="main-button">' . $button1_text . '</a>
                    <a href="' . $button2_link . '" class="main-button button2">' . $button2_text . '</a>
                </div>
                <div class="progress-bars">
    ';

    foreach ($skills as $skill) {
        echo '
            <img src="' . $skill['logo'] . '" alt="' . $skill['alt'] . '">
            <p>' . $skill['progress'] . '</p>
        ';
    }

    echo '
                </div>
            </div>
        </div>
    </section>
    ';
}

// Additional Section Content
function generate_additional_section() {
    $cards = [
        ['count' => '81+', 'description' => 'HAPPY CUSTOMERS'],
        ['count' => '97+', 'description' => 'COMPLETED <span>PROJECTS</span>', 'class' => 'resph2'],
        ['count' => '50', 'description' => 'AWARDS WON']
    ];

    echo '
    <section class="additional-section">
        <div class="additional-content container">
    ';

    foreach ($cards as $card) {
        echo '
            <div class="card1">
                <h1>' . $card['count'] . '</h1>
                <h1' . (isset($card['class']) ? ' class="' . $card['class'] . '"' : '') . '>' . $card['description'] . '</h1>
            </div>
        ';
    }

    echo '
        </div>
    </section>
    ';
}
?>