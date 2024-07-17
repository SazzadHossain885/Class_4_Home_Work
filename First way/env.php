
<?php

    function youtubeThumbnailApi($exUrl){
        

    $method1 = stripos($exUrl, '?v=');
    $method2 = stripos($exUrl, '.be/');
    if(! empty($method1)){
            $video_id_array = explode("?v=", $exUrl);
            $video_id = $video_id_array[1];
            echo "<br>";
            $main_id = substr($video_id,0,11);
            $thumbnail= "http://img.youtube.com/vi/".$main_id."/maxresdefault.jpg";
            echo "<img src = '$thumbnail' alt='YouTube Thumbnail'>";
        }
        else if(! empty($method2)){
            $video_id_array = explode(".be/", $exUrl);
            $video_id = $video_id_array[1];
            echo "<br>";
            $main_id = substr($video_id,0,11);
            $thumbnail= "http://img.youtube.com/vi/".$main_id."/maxresdefault.jpg";
            echo "<img src = '$thumbnail' alt='YouTube Thumbnail'> with = 100";
        }
        else{
            echo "Your url failed! try again";
        }

    }

    $exUrl = $_POST["url"];
    youtubeThumbnailApi($exUrl);



    
    ?>
