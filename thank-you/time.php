<?php
$h = date('G'); //set variable $h to the hour of the day
$d = date('w'); //set variable $d to the day of the week.

if ($h > 19 || $h < 6){
    $headline = 'Do not close this page.'; 


    $video = '<div id="catch-video" class="col-md-7 col-sm-6 col-xs-12">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/fXNkOyAk8Ws?rel=0&controls=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>                
                                </div>
                            </div>';


    $queue = '
                            <div class="que-title" style="display:inline-block; align:center; text-align:center;">
                            We respect your time.
                        </div>
                        <div class="advisor-info" style="display:inline-block; align:center; text-align:center;">
                            As a courtesy we never make outbound phones calls after 9PM in your time zone. <br />
                            If you need immediate assistance, please contact us directly at <span style="color:#00b5db;"><b>(866) 515-4865</b></span>. Otherwise, a member of our team will contact you in the morning.

                        </div>';

}
else if($h < 19 || $h > 6){
    $headline = 'Do not close this page. We’ll call you in a moment.';


    $video = '
                            <div id="catch-video" class="col-md-7 col-sm-6 col-xs-12">
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/fXNkOyAk8Ws?rel=0&controls=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>                
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
                        }?>