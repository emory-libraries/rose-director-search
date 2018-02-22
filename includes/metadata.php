<?php
        echo '<meta charset="utf-8" />';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';

        $currentURL = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $unitTitle = 'Emory Libraries - Emory University';

        $title = $pageTitle.' - '.$unitTitle;

        echo '<title>'.$title.'</title>';
        echo '<meta name="description" content="'.$description.'">';

        // Open Graph data
        echo '<meta property="og:title" content="'.$title.'">';
        echo '<meta property="og:description" content="'.$description.'">';

        $dir = 'images/*.jpg';
        $images = glob($dir);
        foreach($images as $image) {
                echo '<meta property="og:image" content="images/'.$image.'">';
        }

        echo '<meta property="og:url" content="'.$currentURL.'">';

        // Twitter card data
        echo '<meta property="twitter:site" content="@EmoryLibraries">';
        echo '<meta property="twitter:title" content="'.$title.'">';
        echo '<meta property="twitter:description" content="'.$description.'">';
        foreach($images as $image) {
                echo '<meta property="twitter:image" content="'.$image.'">';
        }
        echo '<meta property="twitter:card" content="summary_large_image">';

        // Schema.org metadata for Google+
        echo '<meta itemprop="name" content="'.$title.'">';
        echo '<meta itemprop="description" content="'.$description.'">';
        foreach($images as $image) {
                echo '<meta itemprop="image" content="'.$image.'">';
        }
?>
