<?php require('inc/header.php') ?>
    <!--Navigation bar-END-->
    <script>
        div({class: 'top-image', style: 'overflow: hidden;'}, function(){
            div({class: 'boxAlign'}, function(){
                h1({class: 'slide-head1'}, function(){ text('&nbsp;'); });
                h1({class: 'slide-head2'}, function(){ text('Upcoming'); });
                h1({class: 'slide-head3'}, function(){ text('Events'); });
                //h1({class: 'slide-head4'}, function(){ text('News Feed!'); });
            });
            img({src: 'images/sport.jpg', width: '100%'}, function(){});

            //--Bookmark Button----START--------------------------------
            anchor({href: '#upcoming-events-table', style: 'text-decoration: none; color: white;'},function(){
                div({class: 'bookmark-btn'}, function(){
                    span({class: 'glyphicon glyphicon-chevron-down', style: 'position: relative; left: 9px; right: 0; top: 9px;'}, function(){});
                });
            });
            //--Bookmark Button-----END---------------------------------
        });

        div({class: 'mid-block'}, function(){

        });
        div({class: 'mid-wrapper'}, function(){

            //--Upcoming Events Table----------START--------------------
            div({style: 'text-align: center;'}, function(){
                text('<h1 id="upcoming-events-table">Upcoming Events!</h1>');
                br();
              table({border: '1px solid beige', class: 'event-table', sID: 'table'}, function(){
                    tr({}, function(){
                        th({}, function(){ text('Date'); });
                        th({}, function(){ text('Event Type'); });
                        th({}, function(){ text('Distance/Time'); })
                    });
                  <?php
                  $event_query = $con->query("SELECT * FROM events ORDER BY id DESC");

                  while($row = $event_query->fetch_array()) {
                  $event_id = $row['id'];
                  $event_date = $row['event_date'];
                  $event_type = $row['event_type'];
                  $event_length = $row['event_length'];
                  $event_link = $row['event_link'];
                  
                  ?>
                    tr({}, function(){
                        td({}, function(){ text('<?php echo $event_date; ?>'); });
                        td({}, function(){ text('<?php
                                                    if($event_link == null) {
                                                        echo $event_type;
                                                    }else{
                                                        echo '<a href="'.$event_link.'" id="event_type" target="_blank">'. $event_type . '</a>';
                                                    }
                                                 ?>'); });
                        td({}, function(){ text('<?php echo $event_length; ?>'); });
                    });
                  <?php
                  }
                  ?>
              });
            });
            //--Upcoming Events Table------END----------------------------

            hr();
            div({style: 'width: 80%; margin: 0 auto;'}, function(){
                text('<h1>Want to participate in any of our events?</h1>');

                anchor({href: 'https://www.eventbrite.com/', target: '_blank'}, function(){ text('Go here'); }); text(' to sign up for ANY of our upcoming FREE events! (Must be on time!)');
            });

        });
    </script>
</div>
</body>
</html>