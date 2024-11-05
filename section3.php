<?php

// Section 3 Content
function generate_section3_content() {
    $heading = "Latest Work";

    // Projects
    $projects = [
        ['image' => 'Images/pic1.png', 'alt' => 'picture1', 'title' => 'RESTful API for E-commerce Platform', 'description' => 'Description'],
        ['image' => 'Images/pic2.png', 'alt' => 'picture2', 'title' => 'Scalable Database Design', 'description' => 'Description'],
        ['image' => 'Images/pic3.png', 'alt' => 'picture3', 'title' => 'Secure Authentication System', 'description' => 'Description'],
        ['image' => 'Images/pic4.png', 'alt' => 'picture4', 'title' => 'Microservices Architecture', 'description' => 'Description'],
        ['image' => 'Images/pic5.png', 'alt' => 'picture5', 'title' => 'High-Performance Caching System', 'description' => 'Description'],
        ['image' => 'Images/pic6.png', 'alt' => 'picture6', 'title' => 'Cloud Deployment', 'description' => 'Description']
    ];

    echo '
    <section class="projects-section container">
        <h1 class="latest-work-h1">' . $heading . '</h1>
        <div class="third-section">
    ';

    foreach ($projects as $project) {
        echo '
            <div class="card">
                <img src="' . $project['image'] . '" alt="' . $project['alt'] . '">
                <h1>' . $project['title'] . '</h1>
                <p>' . $project['description'] . '</p>
            </div>
        ';
    }

    echo '
        </div>
    </section>
    ';
}
?>