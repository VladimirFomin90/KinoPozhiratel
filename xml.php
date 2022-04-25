<?php 

    function insert($name, $desc, $year, $rating, $poster, $category_id) {
        $mysqli = new mysqli('localhost', 'root', '', 'KinoPozhiratel');
        if(mysqli_connect_errno()) {
            print_f('соедение не установлено');
            exit();
        }  

        $query = "INSERT INTO movies VALUES(null, '$name', '$desc', '$year', '$rating', '$poster' Now(), '$category_id')";
        $result = false;

        if($mysqli->query($query) or die( $mysqli->error ) ) {
            $result = true;
        }
        return $result;
    }

    $xml = simplexml_load_file("xml/movies.xml") or die("error: cannot create object");

// echo count($xml);

    $title = null;
    $title_orig = null;
    $post = null;
    $rating = null;
    $year = null;

    foreach ($xml as $movie_key => $movie) {
        $title = $movie->title_russian;
        $title_orig = $movie->title_original;
        $year = $movie->$year;


        foreach ($movie->poster->big->attributes() as $poster_key => $poster) {
            $post = $poster;
        }

        if($movie->imdb) {
            $rating = $movie->imdb->attributes()['rating'];
        } else {
            $rating = null;

        }

        insert($title, $title_orig, $year, $rating, $post, 1);
    }

    echo "<pre>";
    print_r($xml);
    echo "</pre>";


?>