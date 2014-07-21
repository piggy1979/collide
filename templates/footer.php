<div id="socialbar">
<div class="wrap container">
<div class="socialcontainer col-sm-12">
	<div class="socialicons col-sm-7">
		<ul>
			<li><a class="facebook" href="https://www.facebook.com/halifaxpopexplosion"><img src="/img/btn-facebook.jpg" alt="Facebook"></a></li>
			<li><a class="twitter" href="https://twitter.com/HalifaxPopX"><img src="/img/btn-twitter.jpg" alt="Twitter"></a></li>
			<li><a class="youtube" href="https://www.youtube.com/user/HPXHFX"><img src="/img/btn-youtube.jpg" alt="Youtube"></a></li>
			<li><a class="tumblr" href="http://halifaxpopexplosion.tumblr.com/"><img src="/img/btn-tumblr.jpg" alt="Tumblr"></a></li>
			<li><a class="flickr" href="https://www.flickr.com/search/?q=halifax+pop+explosion&f=hp"><img src="/img/btn-flickr.jpg" alt="Flickr"></a></li>
		</ul>

	</div>


<?php 

$emailform = new Impact_Get_Response();

$emailform->creategetresponseMiniForm();

?>


<!--
	<form id="emailform" class="col-sm-5">
		<h3>Get Email Updates</h3>
		<input type="text" placeholder="Your Email" name="email">
		<input type="submit" value="GO">
	</form>
-->

</div>
</div><!-- socialcontainer -->
</div><!-- end of social bar -->

<div id="sponsorbar">
	<div class="wrap container">
		<div class="col-sm-12">
			<ul>
				<li><img style="width: 105px;" src="/img/live105.png" ></li>
				<li><img style="width: 83px;"  src="/img/lixar.png" ></li>
				<li><img style="width: 144px;" src="/img/molson.png" ></li>
				<li><img style="width: 113px;" src="/img/impact.png" ></li>
				<li><img style="width: 132px;" src="/img/thecoast.png" ></li>
			</ul>
		</div>
	</div>
</div><!-- end of sponsorbar -->


<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <section id="copyright">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <ul>
    	<li><a href="http://collidehalifax.com">Collide</a></li>
		<li class="hide">/</li>
		<li><a href="http://halifaxpopexplosion.com">Halifax Pop Explosion</a></li>

    </ul>
	</section>
  </div>
</footer>
<?php  if(wpmd_is_phone()) : ?>
</div><!-- end of mobile holder -->
<?php endif; ?>

<?php wp_footer(); ?>
<div style="display:none;">
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980490091;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="position:absolute">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/980490091/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</div>