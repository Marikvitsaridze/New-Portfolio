<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <?php

        include('header.php');
        include('section1.php');
        include('section3.php');
        include('footer.php');
        include('section2.php');
        ?>
</head>
<body>

    <script>
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        };
    </script>

    <!--Header-->

    <?php
    // header
        render_header();

    // Section 1
        generate_section1_content();
       
    // Section 2
        generate_section2_content();

    // Additional Section
        generate_additional_section();
    
    // Section 3
        generate_section3_content();

     // footer
        generate_footer_content();

    ?>

    
</body>
</html>