<?php

class Movie{

    public $movie_title;
    public $category;
    public $actors;
    public $movie_id;

    public function __construct($movie_id=null, $movie_title=null, $category=null, $actors=null ){
        
        $this->movie_id = $movie_id;
        $this->movie_title = $movie_title;
        $this->category = $category;
        $this->actors = $actors;

    }

    //displaying all saved movies
    public static function getAll(mysqli $conn){

        $query = "SELECT * FROM saved_movies";
        return $conn->query($query);

    }

    //getting movie by id
    public static function getById($id, mysqli $conn){
        $query = "SELECT * FROM saved_movies WHERE movie_id = '$id'";
        $myObj = array();

        if($msqlObj= $conn->query($query)){
            while($row=$msqlObj->fetch_array(1)){
                $myObj = $row;
            }
        }
        return $myObj;
    }


    public function deleteById(mysqli $conn){
        $query = "DELETE FROM saved_movies WHERE movie_id = '$this->id'";
        return $conn->query($query);
    }


}

?>