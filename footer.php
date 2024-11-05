<?php

// Footer Content
function generate_footer_content() {
    // Contact Info
    $contacts = [
        ['type' => 'phone', 'link' => 'tel:+995557673535', 'text' => '+995557673535'],
        ['type' => 'email', 'link' => 'mailto:marikvitsaridze@gmail.com', 'text' => 'marikvitsaridze@gmail.com'],
        ['type' => 'address', 'link' => '#', 'text' => 'Tbilisi, P. Sarajishvili 1']
    ];

    // Icons
    $social_icons = [
        ['src' => 'Images/Vector.png', 'alt' => 'icon1'],
        ['src' => 'Images/Vector (1).png', 'alt' => 'icon2'],
        ['src' => 'Images/Vector (2).png', 'alt' => 'icon3'],
        ['src' => 'Images/Vector (3).png', 'alt' => 'icon4'],
        ['src' => 'Images/Vector (4).png', 'alt' => 'icon5']
    ];

    echo '
    <footer>
        <div class="footer-content container">
            <div class="footer-main">
    ';

    foreach ($contacts as $contact) {
        echo '<a href="' . $contact['link'] . '">' . $contact['text'] . '</a>';
    }

    echo '
            </div>
            <div class="footer-socials">
    ';

    foreach ($social_icons as $icon) {
        echo '<img src="' . $icon['src'] . '" alt="' . $icon['alt'] . '">';
    }

    echo '
            </div>
        </div>
    </footer>
    ';
}
?>