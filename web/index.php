<html>

    <head>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="css/roboto.min.css" rel="stylesheet">
        <link href="css/material.min.css" rel="stylesheet">
        <link href="css/ripples.min.css" rel="stylesheet">
        <link href="css/androidchile.css" rel="stylesheet">

    </head>

    <body>

        <!--div class="card center jumbotron" >
            <h1>Jumbotron</h1>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p><a class="btn btn-primary btn-lg">Learn more</a></p>
        </div-->

        <!-- Your site ends -->

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();

                /* make the API call */
                FB.api(
                    "/187694778228655/feed",
                    function (response) {
                      if (response && !response.error) {
                        /* handle the result */
                      }
                    }
                );
            });
        </script>

    </body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '843773952388352',
          xfbml      : true,
          version    : 'v2.5'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "http://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

</html>
