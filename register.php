<?php require('inc/all-classes.php'); ?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" width="width=device-width, initial-scale=1" />
    <title>Login</title>
    <script src="javascripts/jquery-2.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="javascripts/jquery-ui-1.11.4/jquery-ui.css" />
    <script src="javascripts/jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="javascripts/scripts.js"></script>
    <script src="javascripts/NewLang.js"></script>
    <style>
        body{
            background: darkslategray;
        }
        .top-image img{
            width: 100%;
            /*margin-top: -292px;*/
            margin-top: -22%;
        }
        .event-table{
            margin: 0 auto;
            color: black;

        }
        .event-table th{
            text-align: center;
        }
        .event-table td{
            padding: 3px 5px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <!--Navigation bar-START-->
    <div class="nav">
        <div id="branding">
            <a href="index.php" class="no-dec"><img id="logo" src="images/empire-sports-logo-white.png" height="65"/></a>
        </div>
        <div class="inner-nav">
            <ul class="top-nav-bar">
                <li><a href="index.php">Home</a></li>

                <li><a>Events <b class="caret"></b></a>
                    <ul class="list-menu">
                        <li><a href="upcoming.php">Upcoming Events</a></li>
                        <li><a href="">Sign Up</a></li>
                    </ul>
                </li>

                <li><a href="updates.php">Updates</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <button class="resp-btn">Dropdown</button>
    </div>
    <!--Navigation bar-END-->
    <script>
       /*
       div({class: 'top-image'}, function(){
            img({src: 'images/sport.jpg', width: '100%'}, function(){});

            //--Bookmark Button----START--------------------------------
            anchor({href: '#upcoming-events-table', style: 'text-decoration: none; color: white;'},function(){
                div({class: 'bookmark-btn'}, function(){
                    span({class: 'glyphicon glyphicon-chevron-down', style: 'position: relative; left: 9px; right: 0; top: 9px;'}, function(){});
                });
            });
            //--Bookmark Button-----END---------------------------------
        });
        */


        div({class: 'mid-block'}, function(){

        });

        div({class: 'mid-wrapper'}, function(){
    </script>
    <?php

    if($_SESSION['id'] && $_SESSION['username']) {
        $sess_user = ucfirst($_SESSION['username']);
        echo "<p class=\"alert alert-warning\">You are already logged in as <b>{$sess_user}</b></p>";
        if($_SESSION['admin_status'] == 1){
            header('refresh:3; url=admin.php');
        }else{
            header('refresh:3; url=updates.php');
        }
    }else {


        $master_password_input = '<br/><form method="post" action="register.php">
                                        <input type="password" name="master_password" class="form-control btn-warning"/><br/>
                                        <input type="submit" name="authorize" value="Authorize" class="btn btn-danger"/>
                                   </form>';



        $form = '<form action="register.php" method="post" style="position: relative; top: 100px;">
                                  <table>
                                      <tr>
                                        <td>First Name: </td>
                                        <td><input type="text" name="first_name" class="form-control"></td>
                                      </tr>
                                      <tr><td><br/></td></tr>
                                      <tr>
                                        <td>Last Name: </td>
                                        <td><input type="text" name="last_name" class="form-control"></td>
                                      </tr>
                                      <tr><td><br/></td></tr>
                                      <tr>
                                          <td>Username: </td>
                                          <td><input type="text" name="username" class="form-control"></td>
                                      </tr>
                                       <tr><td><br/></td></tr>
                                      <tr>
                                          <td>Password: </td>
                                          <td><input type="password" name="password" class="form-control"></td>
                                      </tr>
                                       <tr><td><br/></td></tr>
                                      <tr>
                                          <td>Confirm Password: </td>
                                          <td><input type="password" name="confirmPassword" class="form-control"></td>
                                      </tr>
                                       <tr><td><br/></td></tr>
                                      <tr>
                                          <td>E-mail: </td>
                                          <td><input type="text" name="email" class="form-control"></td>
                                      </tr>
                                        <tr><td><br/></td></tr>
                                        <tr>
                                            <td>Admin? </td>
                                            <td><label for="admin_status">Yes</label><input type="radio" id="admin_yes" name="admin_pick" value="Yes"/></td>
                                            <td><label for="admin_status">No</label><input type="radio" id="admin_no" name="admin_pick" value="No" </td>
                                        </tr>
                                        <tr><td><br/></td></tr>

                                        <tr>
                                        <td></td>
                                        <td id="td_1">
                                            <input class="btn-warning form-control" type="password" id="master_input" name="master_input" placeholder="Enter the |MASTER KEY|"/>
                                        </td>
                                        <script>
                                              $(\'#master_input\').hide();
                                            $("input[name=\'admin_pick\']").change(function () {
                                                if($(this).val() == "Yes"){
                                                    $(\'#master_input\').show();
                                                }else if($(this).val() == "No"){
                                                   $(\'#master_input\').hide();
                                                }
                                            });
                                        </script>
                                        </tr>
                                        <tr><td><br/></td></tr>
                                      <tr>
                                          <td><input type="submit" name="register" value="Register" class="btn btn-success"></td>
                                      </tr>

                                  </table>
                             </form>';
        if ($_POST['register']) {
            $first_name = test_input($_POST['first_name']);
            $last_name = test_input($_POST['last_name']);
            $user = test_input($_POST['username']);
            $pass = test_input($_POST['password']);
            $confPass = test_input($_POST['confirmPassword']);
            $email = test_input($_POST['email']);

            if($_POST['admin_pick'] == "Yes"){
                $admin_pick = true;
            }elseif($_POST['admin_pick'] == "No"){
                $admin_pick = false;
            }

            if (!empty($first_name)) {
                if (!empty($last_name)) {
                    if (!empty($user)) {
                        $user = strtolower($user);
                        if (!empty($pass)) {
                            if (!empty($confPass)) {
                                if (!empty($email)) {
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        echo '<p class="alert-danger" style="position: relative; top: 100px;">The email you have entered is invalid</p>' . $form;
                                    } else {
                                        if ($pass == $confPass) {
                                            $pass = super_encrypt($pass);
                                            $query = $con->query("SELECT * FROM users WHERE username='$user'");
                                            $rows = $query->fetch_array(MYSQLI_ASSOC);
                                            $db_id = $rows['id'];
                                            $db_user = $rows['username'];
                                            $db_pass = $rows['password'];
                                            $db_email = $rows['email'];

                                            if ($user == $db_user) {
                                                echo '<p class="alert alert-warning" style="position: relative; top: 100px;">Username already exists. <a href="login.php">Login here!</a></p>' . $form;
                                            } else {
                                                if ($email == $db_email) {
                                                    echo '<p class="alert alert-danger" style="position: relative; top: 100px;">Email is already used by another user</p>' . $form;
                                                } else {
                                                    // $insert = $con->query("INSERT INTO `users`(`user_id`, `first_name`, `last_name`, `username`, `password`, `email`, `admin_status`) VALUE (NULL, '$first_name', '$last_name', '$user', '$pass', '$email', '0')");
                                                    /* if(!$insert){
                                                         echo 'There has been a problem: '. $con->error;
                                                     }else{
                                                         echo "<h2>ALL GOOD CAPTAIN!</h2>";
                                                     }*/
                                                    $stmt = $con->stmt_init();
                                                    if ($stmt->prepare("INSERT INTO `users`(`id`, `first_name`, `last_name`, `username`, `password`, `email`, `admin_status`) VALUES (NULL, ?, ?, ?, ?, ?, '0')")) {
                                                        $stmt->bind_param('sssss', $first_name, $last_name, $user, $pass, $email);
                                                        $stmt->execute();
                                                        echo "<p class='alert alert-success' style=\"position: relative; top: 100px;\">Congratulations, you have been successfully registered!</p>";
                                                    }

                                                }
                                            }

                                        } else {
                                            echo '<p class="alert alert-danger" style="position: relative; top: 100px;">Passwords do not match. Retry.</p>' . $form;
                                        }
                                    }
                                } else {
                                    echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must enter a email</p>' . $form;
                                }
                            } else {
                                echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must confirm password.</p>' . $form;
                            }
                        } else {
                            echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must enter a password.</p>' . $form;
                        }
                    } else {
                        echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must enter a username.</p>' . $form;
                    }
                } else {
                    echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must enter a last name.</p>' . $form;
                }
            } else {
                echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must enter a first name.</p>' . $form;
            }


        } else {
            echo $form;
        }



    }
    ?>
    <script>
        });
    </script>
</div>
</body>
</html>