<?php require('inc/header.php') ?>
    <!--Navigation bar-END-->
    <script>
        div({class: 'top-image'}, function(){

            div({class: 'boxAlign'}, function(){
                h1({class: 'slide-head1'}, function(){ text('&nbsp;'); });
                h1({class: 'slide-head2'}, function(){ text('Check'); });
                h1({class: 'slide-head3'}, function(){ text('Our'); });
                h1({class: 'slide-head4'}, function(){ text('News Feed!'); });
            });
            img({src: 'images/football.jpg', width: '100%'}, function(){});

            //--Bookmark Button----START--------------------------------
            anchor({href: '#posts', style: 'text-decoration: none; color: white;'},function(){
                div({class: 'bookmark-btn'}, function(){
                    span({class: 'glyphicon glyphicon-chevron-down', style: 'position: relative; left: 9px; right: 0; top: 9px;'}, function(){});
                });
            });
            //--Bookmark Button-----END---------------------------------
        });

        div({class: 'mid-block'}, function(){

        });
        </script>
        <div class="mid-wrapper">
            <div id="posts">
            <?php

            $timestamp = time();
            $timestamp_format = strftime('%b *%d, %G', $timestamp);


            $post_query = $con->query("SELECT * FROM posts ORDER BY id DESC");

            while($row = $post_query->fetch_array()) {
                $post_id = $row['id'];
                $posted_id = $row['user_id'];
                $title = $row['title'];
                $subtitle = $row['subtitle'];
                $content = $row['content'];
                $post_date = $row['post_date'];

                $user_query = $con->query("SELECT * FROM users WHERE id=('$posted_id')");
                $user_row = $user_query->fetch_assoc();
                $poster = ucfirst($user_row['username']);

                ?>

                    <div style="text-align: center">
                        <div style="width: 80%; margin: 0 auto;">
                            <h2><?php echo $title; ?> - <small><?php echo $subtitle; ?></small></h2>

                            <span><?php echo html_entity_decode($content); ?></span>
                        </div>
                    </div>
                    <?php
                    echo '<div style="width: 100%; text-align: right; color: #777777;">
                            <div style="text-align: left;" >
    
                            </div>
                            <p><span style="text-decoration: underline">Posted by</span>: ' .$poster.' | '. $post_date .'</p>
                      </div>';

                    echo '<hr/>';
                }

                ?>
            </div>
        </div>
</body>
</html>