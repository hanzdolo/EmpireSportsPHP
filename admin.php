<?php require('inc/header.php') ?>
<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>
<script>
    tinymce.init({
        selector: '#text_content',
        height: 500,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true,
        templates: [
            { title: 'Test template 1', content: 'Test 1' },
            { title: 'Test template 2', content: 'Test 2' }
        ],
        content_css: [
            'http://fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            'http://www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>
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

    </script>
    <?php
    if ($_SESSION['id'] && $_SESSION['username']){
        if($_SESSION['admin_status'] == 1) {
            $username = ucfirst($_SESSION['username']);
            echo " <div style='position: relative; top: 100px;'><h1>Welcome,  <b>$username</b>!</h1>";br();
            echo ' <form method="post" action="admin.php" enctype="multipart/form-data" >
                        <label for="title">Title</label><br/>
                        <input type="text" name="title" placeholder="Enter a title..." class="form-control" maxlength="150"/><br/>
                        <label for="subtitle">Subtitle</label><br/>
                        <input type="text" name="subtitle" placeholder="Enter a subtitle..." class="form-control" maxlength="250"/><br/>
                        <label for="content">Content</label><br/>

                        <textarea id="text_content" name="content" placeholder="Enter your content here(text only)..."  ></textarea>
                        <br/>
                        <input type="submit" name="submit" value="Post" class="btn btn-warning"> 
                    </form>
                        <div id="event_input">
                            <form action="admin.php" method="post">
                                <input type="text" name="event_date" placeholder="Enter Event Date"/>
                                <input type="text" name="event_type" placeholder="Enter Event Type"/>
                                <input type="text" name="event_length" placeholder="Enter Length (Distance/Time)"/>
                                <input type="text" name="event_link" placeholder="Event Link (If any)" />
                                <input type="submit" name="post_event" value="Add Event" />
                            </form>
                        </div>
                        <button onclick="new_event();" style="color: #333333;">New Event</button>
                        
                    </div>';

            


            $user_post = $_SESSION['username'];
            $id_query = $con->query("SELECT * FROM users WHERE username=('$user_post')");
            $row = $id_query->fetch_assoc();
            $posted_id = $row['id'];

            if($_POST['submit']){
                $date = date_now();
                $title = test_input($_POST['title']);
                $subtitle = test_input($_POST['subtitle']);
                $content = test_input($_POST['content']);

                if(empty($title) && empty($subtitle) && empty($content)){
                    echo '<h4 style="color: red">All fields are empty.</h4>';
                }else{
                    // $insert = $con->query("INSERT INTO `posts`(`post_id`, `title`, `subtitle`, `content`,`img_name`,`image`) VALUE (NULL, ?, ?, ?, ?, ?)");
                    if(empty($content)){
                        echo 'You cannot create a post with no content.';
                    }else{
                        $stmt = $con->stmt_init();
                        if($stmt->prepare("INSERT INTO `posts`(`id`,`title`, `subtitle`, `content`, `user_id`, `post_date`) VALUES (NULL, ?, ?, ?, ?, ?)")){
                            $stmt->bind_param('sssss',  $title, $subtitle, $content, $posted_id, $date);

                            $stmt->execute();

                        }
                    }

                    echo '<script>alert(\'Entry has been posted!\'); </script>';
                }
            }
            if($_POST['post_event']){
                $event_date = test_input($_POST['event_date']);
                $event_type = test_input($_POST['event_type']);
                $event_length = test_input($_POST['event_length']);
                $event_link = test_input($_POST['event_link']);

                if(empty($event_date) && empty($event_type) && empty($event_length)){
                    echo '<h4 style="color: red">All fields are empty.</h4>';
                }else{
                    // $insert = $con->query("INSERT INTO `posts`(`post_id`, `title`, `subtitle`, `content`,`img_name`,`image`) VALUE (NULL, ?, ?, ?, ?, ?)");
                        $stmt = $con->stmt_init();
                        if($stmt->prepare("INSERT INTO `events`(`id`,`event_date`, `event_type`, `event_length`, `event_link`) VALUES (NULL, ?, ?, ?, ?)")){
                            $stmt->bind_param('ssss',  $event_date, $event_type, $event_length, $event_link);

                            $stmt->execute();

                        }
                    
                    echo '<script>alert(\'Event has been posted!\'); </script>';
                }
            }
        }else{
            echo "Sorry, but you don't have the proper privileges to access this page.";
            header('refresh:2;url=updates.php');
        }
    }else{
        echo "You must be logged in to access this page!";
        echo '<script>
                setInterval(function() {
                    window.location=\'login.php\';
                }, 2000);
              </script>';
        die();
    }
    ?>
</div>
</body>
</html>