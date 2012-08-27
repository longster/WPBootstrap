<?php
/**
 * footer.php
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
?>
    </section><!-- #content -->
    
	<footer class="colophon">
    	<div class="container hidden">
        	<div class="row twitterfeed">
            	<div class="span4">Twitter feed</div>
                <div class="span8">Twitter output</div>
            </div>
        </div>
    	<div class="bg hidden">
            <div class="container">
                <div class="row misc">
                    <div class="span2">
                    	<h4><span class="greentxt">///</span> Archives</h4>
                        <hr/>
                        <ul class="unstyled">
                            <li><a href="#">January</a></li>
                            <li><a href="#">February</a></li>
                            <li><a href="#">March</a></li>
                            <li><a href="#">April</a></li>
                            <li><a href="#">May</a></li>
                            <li><a href="#">June</a></li>
                        </ul>
                    </div>
                    <div class="span2">
                    	<h4><span class="greentxt">///</span> Categories</h4>
                        <hr/>
                        <ul class="unstyled">
                            <li><a href="#">cat1</a></li>
                            <li><a href="#">cat2</a></li>
                            <li><a href="#">cat3</a></li>
                            <li><a href="#">cat4</a></li>
                            <li><a href="#">cat5</a></li>
                            <li><a href="#">cat6</a></li>
                        </ul>
                    </div>
                    <div class="span2">
                    	<h4><span class="greentxt">///</span> Tags</h4>
                        <hr/>
                        <ul class="unstyled">
                            <li><a href="#">tag1</a></li>
                            <li><a href="#">tag2</a></li>
                            <li><a href="#">tag3</a></li>
                            <li><a href="#">tag4</a></li>
                            <li><a href="#">tag5</a></li>
                            <li><a href="#">tag6</a></li>
                        </ul>
                    </div>
                    <div class="span2">
                    	<h4><span class="greentxt">///</span> Organization</h4>
                        <hr/>
                        <ul class="unstyled">
                            <li><a href="#">January</a></li>
                            <li><a href="#">February</a></li>
                            <li><a href="#">March</a></li>
                            <li><a href="#">April</a></li>
                            <li><a href="#">May</a></li>
                            <li><a href="#">June</a></li>
                        </ul>
                    </div>
                    <div class="span2">
                    	<h4><span class="greentxt">///</span> Organization</h4>
                        <hr/>
                        <ul class="unstyled">
                            <li><a href="#">January</a></li>
                            <li><a href="#">February</a></li>
                            <li><a href="#">March</a></li>
                            <li><a href="#">April</a></li>
                            <li><a href="#">May</a></li>
                            <li><a href="#">June</a></li>
                        </ul>
                    </div>
                    <div class="span2">
                    	<h4><span class="greentxt">///</span> Organization</h4>
                        <hr/>
                        <ul class="unstyled">
                            <li><a href="#">January</a></li>
                            <li><a href="#">February</a></li>
                            <li><a href="#">March</a></li>
                            <li><a href="#">April</a></li>
                            <li><a href="#">May</a></li>
                            <li><a href="#">June</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <small class="span5 copyright"><?php wpbootstrap_credits(); ?></small>
                <small class="span7 misc-nav">
                	<ul class="unstyled">
                    	<?php /*?><?php wp_nav_menu( array( 'container' => '', 'menu_class' => '' , 'menu_id' => '', 'theme_location' => 'misc menu', 'fallback_cb' => ''  ) ); ?><?php */?>
                    </ul>
                </small>
            </div>
        </div>
  	</footer><!-- /footer -->
    
   
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url');?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
    
  	<script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/script.js"></script>
    
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  
  
	<?php wp_footer(); ?>
        
</body>
</html>