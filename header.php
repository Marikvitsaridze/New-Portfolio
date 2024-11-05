<?php


function generate_navigation() {
    $links = [
        'index.php' => 'Home',
        'about.php' => 'About',
        'latest-works.php' => 'Latest Works',
        'contact.php' => 'Contact'
    ];

    foreach ($links as $link => $text) {
        echo "<a href='$link'>$text</a>";
    }
}


function render_header() {
    echo '
    <header>
        <div class="header container">
            <div class="header-logo">
                <h1>Mariam.K</h1>
            </div>
            <nav class="header-navigation">
    ';
    generate_navigation();
    echo '
            </nav>
        </div>
    </header>
    ';
}
?>