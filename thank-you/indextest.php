<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You</title>
        <link rel="shortcut icon" type="image/png" href="https://www.bask.com/wp-content/themes/bask/images/favicon.ico">
        <link href="https://www.bask.com/marketing/thank-you/css/bootstrap-mkto.css" rel="stylesheet">
        <link href="https://www.bask.com/marketing/thank-you/css/custom.css" rel="stylesheet">
        <script src="https://www.bask.com/marketing/thank-you/js/jquery-1.11.3.min.js"></script>
        <script src="https://www.bask.com/marketing/thank-you/js/bask-connect-mkto.js"></script>
        <script src="https://www.bask.com/marketing/thank-you/js/bootstrap.min.js"></script>
        <script src="https://www.bask.com/marketing/thank-you/js/flipclock.js"></script>	    
        <script src="https://use.typekit.net/yrb4tgz.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://www.bask.com/marketing/thank-you/js/respond.js"></script>
        <meta name="robots" content="noindex, nofollow">
    </head>

    <body>

        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M3KSZ9"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                                                              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                                    })(window,document,'script','dataLayer','GTM-M3KSZ9');</script>

        <div id="header-wrapper">
            <row>
                <div id="header-container" class="container">
                    <div id="header-logo" class="col-md-2 col-sm-3 col-xs-12">
                        <div><img src="https://www.bask.com/marketing/thank-you/images/bask-formerly-itok-logo.png" class="img-responsive center-block"></div>
                    </div>
                    <div id="header-number" class="col-md-10 col-sm-9 col-xs-12">
                        <div>Call and get help now: <span style="font-weight:400;">(855) 219-4506</span></div>
                    </div>
                </div>
            </row>
            <div class="clearfix"></div>
        </div><!-- End Header -->



        <div id="catch-wrapper">
            <row>
                <div id="catch-container" class="container">
                    <div id="catch-title" class="col-xs-12">

                        <?php
                        $h = date('G'); //set variable $h to the hour of the day
                        $d = date('w'); //set variable $d to the day of the week.

                        if ($h > 8 || $h < 6){
                            $headline = 'Do not close this page. We’ll call you in a moment.';


                            $video = '
                            <div id="catch-video" class="col-md-7 col-sm-6 col-xs-12">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/fXNkOyAk8Ws?rel=0&controls=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>                
                                </div>
                            </div>
                            ';

                            $modal = '
                            <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="myModalLabel"><img src="https://www.bask.com/marketing/thank-you/images/bask-formerly-itok-logo.png"</h2>
                    </div>
                    <div class="modal-body" style="font-size:16px; line-height:20px;">
                        <span style="font-size:36px; line-height:38px;">
                        PLEASE CALL<br />
                        <span style="color:#00b5db;">
                        (855) 219-4506
                        </span></span>
                        <br /><br />
                        <span style="font-size:28px; line-height:30px;">
                        We have agents standing by to help with all of your technical needs.
                        </span>
                        <br /><br />
                        <span style="font-size:14px; line-height:16px;">
                        In accordance with FCC rules, Bask will never make outbound phone calls after 9PM in your local time zone.  However, we are ready and available to take your call and help with all of your technical needs.
                        </span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

                            ';


                            $queue = '<div class="que-title">
                            You are <span style="color:#00b5db;">#4</span> in the queue.
                        </div>
                        <div class="advisor-info">
                            Stay by your phone. A Bask Advisor will call you within the next:

                        </div>
                        <div style="text-align:center;">
                            <div class="clock" style="display:inline-block;"></div>
                            <div class="message"></div>

                            <script type="text/javascript">
                                var clock;

                                $(document).ready(function() {

                                    // Instantiate a counter
                                    clock = new FlipClock($(\'.clock\'), 405, {
                                        clockFace: \'MinuteCounter\',
                                        autoStart: true,
                                        countdown: true
                                    });

                                });
                            </script>                
                        </div>';

                        }
                        else if($h < 8 || $h > 6){
                            $headline = 'Do not close this page. We’ll call you in a moment.';


                            $video = '
                            <div id="catch-video" class="col-md-7 col-sm-6 col-xs-12">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/fXNkOyAk8Ws?rel=0&controls=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>                
                                </div>
                            </div>
                            ';

                            $modal = ' ';

                            $queue = '<div class="que-title">
                            You are <span style="color:#00b5db;">#4</span> in the queue.
                        </div>
                        <div class="advisor-info">
                            Stay by your phone. A Bask Advisor will call you within the next:

                        </div>
                        <div style="text-align:center;">
                            <div class="clock" style="display:inline-block;"></div>
                            <div class="message"></div>

                            <script type="text/javascript">
                                var clock;

                                $(document).ready(function() {

                                    // Instantiate a counter
                                    clock = new FlipClock($(\'.clock\'), 405, {
                                        clockFace: \'MinuteCounter\',
                                        autoStart: true,
                                        countdown: true
                                    });

                                });
                            </script>                
                        </div>';
                        }?>

                        <script>
                            $(window).load(function(){
                                setTimeout(function(){
                                    $('#myModal').modal('show');
                                }, 1500);
                            });
                        </script>

                        <?php echo $modal; ?>

                        <div><?php echo $headline; ?></div>

                        <!--<div>Do not close this page. We’ll call you in a moment. If you have reched this page after 7:00pm, please call us at (866) 515-4865.</div>-->
                    </div>

                    <?php echo $video; ?>

                    <div id="catch-que-code" class="col-md-5 col-sm-6 col-xs-12">

                        <?php echo $queue; ?>

                        <div class="form-group">
                            <input id="connectCode" type="text" name="advisor_code" class="form-control" placeholder="Enter Code">
                        </div>                
                        <button id="btnSubmit" class="btn btn-bask btn-lg" style="width: 247px;">Submit</button>
                        <button id="btnLoading" class="btn btn-bask btn-lg" style="font-size:24px; display: none; width: 247px; "><i class="glyphicon glyphicon-refresh gly-spin" style="font-size:18px;"></i> Loading</button>                
                    </div>
                </div>
            </row>
            <div class="clearfix"></div>
        </div><!-- End Catch -->

        <div id="instructions-wrapper">
            <row>
                <div id="instructions-container" class="container">
                    <div id="instructions-title" class="col-md-12">
                        <div>What you need to do</div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div><img src="https://www.bask.com/marketing/thank-you/images/icon-phone.png" class="img-responsive center-block"></div>
                        <div class="instructions-info">Wait by your phone for an advisor to call and give you a code.</div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div><img src="https://www.bask.com/marketing/thank-you/images/icon-connect.png" class="img-responsive center-block"></div>
                        <div class="instructions-info">Enter the code in the box above to share your screen.</div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div><img src="https://www.bask.com/marketing/thank-you/images/icon-advisor.png" class="img-responsive center-block"></div>
                        <div class="instructions-info">Your advisor will provide a free diagnosis and offer service options.</div>
                    </div>
                </div>
            </row>
            <div class="clearfix"></div>
        </div><!-- End Instructions -->

        <footer>
            <row>
                <div id="footer-container" class="container">
                    <div class="col-xs-12">
                        <img src="https://www.bask.com/marketing/thank-you/images/bbb-logo.png" class="img-responsive"><img src="https://www.bask.com/marketing/thank-you/images/bask-footer-logo.png" class="img-responsive">
                    </div>
                </div>
            </row>
            <div class="clearfix"></div>
        </footer>


    </body>
</html>