//--------------------------------Custom PHP SCRIPT---------------------------------------------------------------//
function latest_postexams() {  ?>

    <?php
    $recent_posts = wp_get_recent_posts(array(
        'cat' => '1',// Id of the post Category
        'numberposts' => 5, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    )); ?>
    <!--------------------------shivam -1:22------------------------>
	<div style="width: 358px; height: 340px; background-color: #FFFABA;">
		<marquee onMouseOver="this.stop()" onMouseOut="this.start()"vscrollamount="2"style="height: 100%;" direction="up">
	<?php foreach($recent_posts as $post) : ?>
			<a style="text-decoration:none;" href="<?php echo get_permalink($post['ID']) ?>">  
				<?php echo $post['post_title'] ?>
            </a> <br>
 <?php endforeach; wp_reset_query(); ?>
			<br>
			</marquee><br>
			
	</div>
	<!--------------------------shivam -1:22------------------------>
    
<?php 
   
}

add_shortcode('latest_postexams', 'latest_postexams');





[latest_postexams]//----------------------use this shordcode to use the feature