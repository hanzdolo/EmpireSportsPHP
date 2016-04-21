<?php
//input({type: 'text', name: ''}, function(){});
class Registration{
    protected $fname, $lname, $uname, $pword, $confPword, $email;
    protected $self;

    public $form = 'form({action: \'register.php\', method: \'post\'}, function(){
                            table({}, function(){
                                tr({}, function(){
                                    td({}, function(){
                                        label({for: \'first_name\'}, function(){ text("First Name"); });
                                    });
                                    td({}, function(){
                                        input({type: \'text\', name: \'first_name\'}, function(){});
                                    });
                                });
                                tr({}, function(){
                                    td({}, function(){
                                        label({for: \'last_name\'}, function(){ text("Last Name"); });
                                    });
                                    td({}, function(){
                                        input({type: \'text\', name: \'last_name\'}, function(){});
                                    });
                                });
                                tr({}, function(){
                                    td({}, function(){
                                        label({for: \'user_name\'}, function(){ text("Username"); });
                                    });
                                    td({}, function(){
                                        input({type: \'text\', name: \'user_name\'}, function(){});
                                    });
                                });
                                tr({}, function(){
                                    td({}, function(){
                                        label({for: \'pass_word\'}, function(){ text("Password"); });
                                    });
                                    td({}, function(){
                                        input({type: \'password\', name: \'pass_word\'}, function(){});
                                    });
                                });
                                tr({}, function(){
                                    td({}, function(){
                                        label({for: \'confPass_word\'}, function(){ text("Confirm Password"); });
                                    });
                                    td({}, function(){
                                        input({type: \'password\', name: \'confPass_word\'}, function(){});
                                    });
                                });
                                tr({}, function(){
                                    td({}, function(){
                                        label({for: \'e_mail\'}, function(){ text("E-mail"); });
                                    });
                                    td({}, function(){
                                        input({type: \'text\', name: \'e_mail\'}, function(){});
                                    });
                                });
                                tr({}, function(){
                                    td({}, function(){
                                        input({type: \'submit\', name: \'register\'}, function(){});
                                    });
                                }); 
                            });
                      });';

    public function hash_it($string, $salt = null, $salt2 = null){
        $string = md5($salt. md5(sha1($string)) . $salt2);
        return $string;
    }
    
    public function test_input($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlentities($data);
    }
    

    public function filter_info(){
        if((empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['user_name']) || empty($_POST['pass_word']) || empty($_POST['confPass_word']) || empty($_POST['e_mail'])) || (empty($_POST['first_name']) && empty($_POST['last_name']) && empty($_POST['user_name']) && empty($_POST['pass_word']) && empty($_POST['confPass_word']) && empty($_POST['e_mail']))){
            echo 'You must fill in all of the fields!' . $this->form;
        }else{
            $this->fname =  $this->test_input($_POST['first_name']);
            $this->lname =  $this->test_input($_POST['last_name']);
            $this->uname =  $this->test_input($_POST['user_name']);
            $this->pword =  $this->test_input($_POST['pass_word']);
            $this->confPword =  $this->test_input($_POST['confPass_word']);
            $this->email =  $this->test_input($_POST['e_mail']);
        }
    }

    public function insert_info($db, $table){
        $db->connect();
        $query = $db->query("INSERT INTO {$table}(id, first_name, last_name, username, password, email, admin_status) VALUES ('', '$this->fname', '$this->lname', '$this->uname', '$this->pword', '$this->confPword', '$this->email', '0');");
        if(!$query){
            echo 'Error: ' . $db->error;
            die();
        }else{
            echo 'Congrats! You have been registered!';
        }
        $db->close();
    }

}