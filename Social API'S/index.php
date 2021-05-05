<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <title>Social Networks API's</title>
      
    <style>
        body{
            background: url(balloons.jpg) center center fixed;
            background-size: cover;
            text-align: center;
            font-family: Arvo, serif;
        }
        
        .jumbotron{
            background-color: transparent;
            color: white;
        }
        .jumbotron h1{
            letter-spacing: 2.5px;
        }
        
        .form-horizontal{
            margin-top: 50px;
        }
        .row{
            margin-top: 30px;
        }
        .col-sm-2{
            margin-bottom: 10px;
        }
    </style>
  </head>
  <body>
    <!--Facebook code-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="ARdGQY3Z"></script>
      
    <!--Instagram code-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="u1fqKGNS"></script>
      
    <div class="jumbotron">
      <div class="container-fluid">
        <h1>Join us and build Freedom</h1>
        <p>We make freedom, we love freedom, we spread freedom.</p>
      </div>
        
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-xs-offset-2 col-xs-8">
            <input type="email" id="email" placeholder="Your Email" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-6">
            <input type="submit" id="submit" value="Subscribe" class="btn btn-info btn-lg">
          </div>
        </div>
      </form>
        
      <div class="row">
          <!--Facebook button-->
        <div class="col-sm-offset-3 col-sm-2">
          <div class="fb-like" data-href="https://completewebdevelopmentcourse.com" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
        </div>
          <!--Instaggram+ button-->
        <div class="col-sm-2">
          <div class="fb-share-button" data-href="https://thecompletewebdevelopmentcourse.com" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fthecompletewebdevelopmentcourse.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
        </div>
          <!--Twitter button-->
        <div class="col-sm-2">
          <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet">
Tweet</a>
        </div>
      </div>  
        
      <!--twitter timeline-->
      <div>
          <a class="twitter-timeline" data-width="300" data-height="600" data-dnt="true" data-theme="dark" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
      
    <!--Twitter-->
    <script>window.twttr = (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
          if (d.getElementById(id)) return t;
          js = d.createElement(s);
          js.id = id;
          js.src = "https://platform.twitter.com/widgets.js";
          fjs.parentNode.insertBefore(js, fjs);

          t._e = [];
          t.ready = function(f) {
            t._e.push(f);
          };

          return t;
        }(document, "script", "twitter-wjs"));</script>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
    
  </body>
</html>