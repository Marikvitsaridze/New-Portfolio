<?php

function generate_section1_content() {
    $greeting = "Hello,";
    $name = "I’m <span>Mariam Kvitsaridze</span>";
    $description = "I’m a Web Developer. Coding has become my daily craft. Mastering frameworks and algorithms is my constant pursuit, and building seamless, efficient websites never gets old.";
    $button_text = "Download CV";
    $button_link = "#";
    $image_src = "Images/for figm.jpeg";
    $image_alt = "image1";

    echo '
    <section class="Section1">
        <div class="first-section container">
            <div class="first-content">
                <h5>' . $greeting . '</h5>
                <h1>' . $name . '</h1>
                <p>' . $description . '</p>
                <a href="' . $button_link . '" class="main-button">' . $button_text . '</a>
            </div>
            <div class="first-image">
                <img src="' . $image_src . '" alt="' . $image_alt . '">
            </div>
        </div>
    </section>
    ';
}
?>