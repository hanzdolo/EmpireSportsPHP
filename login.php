<?php require('inc/header.php') ?>
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
    if($_SESSION['id'] && $_SESSION['username']){
        $sess_user = ucfirst($_SESSION['username']);
        echo "<p  style=\"position: relative; top: 100px;\" class=\"alert alert-warning\">You are already logged in as <b>{$sess_user}</b></p>";
        if($_SESSION['admin_status'] == 1){
            header('refresh:3; url=admin.php');
        }else{
            header('refresh:3; url=updates.php');
        }
    }else{
        $form = '<form action="login.php" method="post" style="position: relative; top: 100px;">
                        <table>
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
                            <tr><td><input type="submit" name="login" value="Login" class="btn btn-info" /></td></tr>
                        </table>
                      </form>
                    ';
    }
    if($_POST['login']){
        $user = test_input($_POST['username']);
        $pass = test_input($_POST['password']);

        if(!empty($user)){
            if(!empty($pass)){
                $pass = super_encrypt($pass);
                $user = strtolower($user);

                $query = $con->query("SELECT * FROM users WHERE username='$user'");

                $numrows = $query->num_rows;

                if($numrows == 1){
                    $rows = $query->fetch_assoc();
                    $db_id = $rows['id'];
                    $db_user = $rows['username'];
                    $db_pass = $rows['password'];
                    $admin_status = $rows['admin_status'];

                    if($user == $db_user && $pass == $db_pass){
                        $_SESSION['id'] = $rows['id'];
                        $_SESSION['username'] = $db_user;
                        $_SESSION['admin_status'] = $admin_status;
                        $uc_user = ucfirst($db_user);
                        echo "<p class='alert alert-success' style=\"position: relative; top: 100px;\">You are now logged in as <b>$uc_user</b></p>";

                        if($_SESSION['admin_status'] == 1){
                            header("refresh:3;url=admin.php");
                            echo '<a href="admin.php" style="position: relative; top: 100px;">Go to admin page</a>';
                        }else{
                            header("refresh:3;url=updates.php");
                            echo '<a href="admin.php" style="position: relative; top: 100px;">Go to admin page</a>';
                        }

                    }else{
                        echo '<p class="alert alert-danger" style="position: relative; top: 100px;">Wrong username and password combination. Try again.</p>' .$form;
                    }
                }else{
                    echo '<p class="alert alert-danger" style="position: relative; top: 100px;">The username you entered does not exist.</p>'.$form;
                }


            }else{
                echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must enter a username and password</p>' . $form;
            }
        }else{
            echo '<p class="alert alert-danger" style="position: relative; top: 100px;">You must enter a username and password</p>' .$form;
        }

    }else{
        echo $form;
    }

    ?>
    <script>
        });
    </script>
</div>
</body>
</html>