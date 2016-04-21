<?php
require_once('connect.php');
// Execute only ONCE!
class CreateTables{
    protected $createUsersTable = 'CREATE TABLE users(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                                      username VARCHAR(50) NOT NULL UNIQUE,
                                                      password VARCHAR(150) NOT NULL,
                                                      email VARCHAR(150) NOT NULL UNIQUE,
                                                      admin_status INT(1) NOT NULL);';
    protected $createPostsTable = 'CREATE TABLE posts(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                                      title VARCHAR(75) NOT NULL UNIQUE,
                                                      subtitle VARCHAR(150) NOT NULL,
                                                      content MESSAGE_TEXT NOT NULL,
                                                      user_id INT NOT NULL);';

    public function build_tables($host, $user, $pass, $name){
        $db = new mysqli($host, $user, $pass, $name);
        $db->connect();
        $users_query = $db->query($this->createUsersTable);
        $posts_query = $db->query($this->createPostsTable);
        if((!$users_query && !$posts_query) || (!$users_query || !$posts_query)){
            echo 'Error: ' . $db->error;
        }else{
            echo 'Tables have been created';
        }
        $db->close();
    }
}

