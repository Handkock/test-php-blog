<?php

namespace Models;
require_once ROOT_PATH . '/config.php';

class Post
{
    private $table = 'posts';

    /*
     * get all posts
     */
    public static function getAll($conn = null)
    {
        if(empty($conn)){
            global $conn;
        }
        $sql = "Select * from " . self::getTable() . ";";
        $result = mysqli_query($conn, $sql);
        if ($conn->error) {
            print_r($conn->error);
            die;
        }

        $posts = [];
        // fetch all posts as an associative array called $posts
        while ($row = $result->fetch_assoc()) {
            $posts = $row;
        }

        return $posts;
    }

    public static function getTable()
    {
        return 'posts';
    }

}