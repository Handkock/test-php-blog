<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class PostTest extends TestCase{

    public function testGetAllPosts(){
        global $conn;
        $conn =  mysqli_connect('localhost', 'root', 'root', 'blog_test', 8889);
        $posts = \Models\Post::getAll($conn);
        $this->assertCount(0, $posts);
    }
}