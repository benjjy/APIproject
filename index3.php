<html>
  <head>
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
    <link href="css/styletwitter.css" rel="stylesheet">
      
    <div class="col-md-12"> 
        <div id="header">
            <a href="index.php"><h1>SUMMER MUSIC FESTIVALS</h1></a>
        </div>
    </div> 
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div id="nav" style="text-align:center;">
                        <span class="navCenter">
                            <a href="index1.php"><img src="images/nav1.png" alt="coachella" align="middle"></a>
                            <a href="index2.php"><img src="images/nav2.png" alt="bonaroo" align="middle"></a>
                            <a href="index3.php"><img src="images/nav3.png" alt="lollapalooza" align="middle"></a>
                        </span>
                    </div>
        
            </div>
        </div>
    </div>
   
  </head>
  
  <body background="images/confetti.png" width=100% height="200%">
    <script type="text/javascript" src="js/instafeed.min.js"></script>

    <script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'lollapalooza',
        clientId: '3b4829d3b5304e32924d7ea8ede1cf82',
        limit: '12',
        template: '<a class="animation" href="{{link}}"><img src="{{image}}"/></a>'
     

        });
        feed.run();
    </script>

    
    <div class="container">
        <div class="row">
                <div class="col-md-7">
                    <div id="instafeed" style="text-align:center;"></div>
                </div>
            
                <div class="col-md-5">
                
                    <div id="twitterBox">
            <!--TWEETS -->
            <!--this is the code that adds hyperlinks to tweets -->
            <script src="js/jquery-1.11.0.min.js"></script>
            <script src="js/jquery.tweet-linkify.js"></script>

        <script>
            function pageReady(){
            console.log("inside pageReady()");
            $('p.tweet').tweetLinkify();
            };

        </script>

    <!--start of twitter php -->
<?php


        ini_set('display_errors', 1);
        require_once('TwitterAPIExchange.php');

        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token' => "1620813518-Mh0oumtU7RDXHseO4mx66n2WNN39o1qwITP5lmk",
            'oauth_access_token_secret' => "UDXnxdotOc66gnCjlqjHttFmFl2iZ53k7uldtVuUy5rqj",
            'consumer_key' => "zVncgM6iQHRnTNvtLzNPG9rcH",
            'consumer_secret' => "umO297ItoormgfrHildFLv390OypRsBVufdI6cJF5VTFkSXLhZ"
        );

        /** Perform a GET request and echo the response **/
        /** Note: Set the GET field BEFORE calling buildOauth(); **/
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q=%23lollapalooza&count=5';

        /**This code gets the tweets**/
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        
        /*
            echo $twitter->setGetfield($getfield)
                ->buildOauth($url, $requestMethod)
                ->performRequest();
        */
             $string = json_decode($twitter->setGetfield($getfield)
                      ->buildOauth($url, $requestMethod)
                      ->performRequest(),$assoc = TRUE);

    foreach($string['statuses'] as $items)
        {
            echo '<script>console.log("running loop");</script>';
            $tweetText = $items['text'];
            $users = $items['user'];
            $date = new DateTime( $tweet->created_at, new DateTimeZone('America/New_York'));
            
            
            echo "<p class='time'> " .$date->format( 'jS F Y h:i' ) ."'</p>";

            echo "<img class='t' src='" .$users['profile_image_url'] . "'>";
            echo "<p class='tweet'> @" .$users['screen_name']. ": ";
            echo "" .$tweetText . "</p>";
            echo "<hr/>";
        }
    
            echo '<script>pageReady();</script>';


?>
        
    
    </div>  <!--closes twitterBox -->
    </div>  <!--closes twitter column -->
    
    
    
    
</div>  <!--closes twitter row --> 
</div> <!-- closes twitter container -->


    <div class="container">
        <div class="row" style="text-align:left;">
            <iframe src="googlemap4.html" width="90%" height=500px></iframe>
            <div id="textBox" style="text-align:center;">
                <h3>Lollapalooza</h3>
                <p>Lollapalooza is an annual music festival held in Grant Park in Chicago, Illinois featuring popular alternative rock,
                heavy metal, punk rock and hip hop bands, dance and comedy performances, and craft booths.
                Conceived and created in 1991 by Jane's Addiction singer Perry Farrell as a farewell tour for his band, Lollapalooza ran annually
                until 1997, and was revived in 2003.</p>
                <p>The 2014 lolla <a href="http://www.lollapalooza.com/2014-lineup/" target="_blank">lineup</a> includes Outkast, Eminem, and Lorde. </p>
            </div>
        </div>
        
        
        
        <div id="bottom"></div>
        
        
    </div>
    
  </body>
  
</html>    
