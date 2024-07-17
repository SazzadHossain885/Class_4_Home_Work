<?php

    $url1 = $_POST['url'];
    
    $method1 = stripos($url1, '?v=');
    $method2 = stripos($url1, '.be/');

    if(! empty ($method1)){
        if(isset($_POST['submit'])){
            $url = $_POST['url'];
            $value = explode("?v=", $url);
            $videoId = $value[1];
            $MainV_id = substr($videoId,0,11);
        }
    }
    else if(! empty($method2)){
        if(isset($_POST['submit'])){
            $url = $_POST['url'];
            $value = explode(".be/", $url);
            $videoId = $value[1];
            $MainV_id = substr($videoId,0,11);
        }
    }
    
    if(! empty ($MainV_id)){
        $thumbnail= "http://img.youtube.com/vi/".$MainV_id."/maxresdefault.jpg";
        echo "<img src = '$thumbnail' alt='YouTube Thumbnail'>";
    }


    ?>