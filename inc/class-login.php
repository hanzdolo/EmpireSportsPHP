<?php
require('connect.php');
require('class-register.php');

class Login{
    private $username;
    private $password;
    protected $funcs;


    public function verify_login($username, $password, $db, $table){
        if(empty($username) && empty($password)){
            echo 'You must enter a username and password!';
            echo '<script>
                    setInterval(function(){
                        window.location='. $_SERVER['PHP_SELF'] .';
                    }, 3000);
                  </script>';
        }else{
            $this->funcs = new Registration();
            
            if(!empty($username)){
                $this->funcs->test_input($username);
                if(!empty($password)){
                    $this->funcs->test_input($password);
                    $password = $this->funcs->hash_it($password);
                    $username = strtolower($username);


                    $db->connect();
                    $query = $db->query("SELECT * FROM {$table} WHERE username='$username', password='$password';");
                    $numrows = $query->num_rows;
                    
                    if($numrows == 1){
                        $rows = $query->fetch_assoc();
                        $db_id = $rows['id'];
                        $db_user = $rows['username'];
                        $db_pass = $rows['password'];
                        $admin_status = $rows['admin_status'];
                    }else{
                        echo 'Wrong username an password combination';
                        echo '<script>
                                setInterval(function(){
                                    window.location='. $_SERVER['PHP_SELF'] .';
                                }, 3000);
                              </script>';
                    }
                    
                }else{
                    echo 'Password must be entered!';
                }
            }else{
                echo 'Username must be entered!';
            }
        }
    }


}

?>