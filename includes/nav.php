<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    $pages = array(
        'Home' => 'index.php',
        'About Rose Library' => 'about-rose.php',
        'Position Description' => 'position-description.php',
        'Search Committee' => 'search-committee.php'
    );
    echo '<nav><ul>';
    foreach ($pages as $title => $url) {
        if($url == $currentPage){
            $class = ' class="current"';
        } else {
            $class = '';
        };
        echo '<li'.$class.'><a href="'.$url.'">'.$title.'</a></li>';
    };
    echo '</ul></nav>';
