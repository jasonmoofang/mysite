<?php get_header(); ?>
<div id="main">		
	<div class="columns">
    <div class="narrowcolumn singlepage">
     <?php if (have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>							
			<div class="post">            	
         <div class="title">
          <h2><?php the_title(); ?></h2>
                <small><?php the_time('F jS, Y') ?> | <?php _e('Posted by','nattywp'); ?> <span class="author"><?php natty_get_profile() ?></span> <?php _e('in','nattywp'); ?> <?php the_category(' | ');?> <?php edit_post_link(__('Edit','nattywp'), ' | ', ''); ?></small> 
         </div>                
				<div class="entry">
             <?php t_show_video($post->ID); ?>
             <?php the_content(); ?>    
             <div class="clear"></div>
        </div>              
<style>
.recotable a {
  text-decoration: none;
}
.recoslide {
  border-top: 1px dotted #d5d5d5;
  margin-top: 10px;
  padding-top: 10px;
}
</style>
    <div id="slide1" class="recoslide">
        <h3>Read more..</h3>
      <table class="recotable">
      <tr>
        <td width="0px">
          <img src="/blog_images/clannad2.jpg" class="framed" width="80px" height="45px" />
        </td>
        <td width="33%" style="padding:5px"><a href="http://yuenhoe.com/blog/2012/07/clannad-people-and-a-philosophy-of-doing/">Clannad, People and a Philosophy of Doing</a></td>
        <td width="0px">
          <img src="/blog_images/reaching.jpg" class="framed" width="80px" height="45px" />
        </td>
        <td width="33%" style="padding:5px"><a href="http://yuenhoe.com/blog/2012/10/living-on-kara-no-kyoukai-04/">Living On - Kara no Kyoukai 04</a></td>
        <td width="0px">
          <img src="/blog_images/asukasama.png" class="framed" width="80px" height="45px" />
        </td>
        <td width="33%" style="padding:5px"><a href="http://yuenhoe.com/blog/2011/10/evangelion-2-0-the-evafags-monsterpost/">Evangelion 2.0 - the evafag's monsterpost</a></td>
      </tr>
      </table>
    </div>
                
				<p class="postmetadata">	               
                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>        			
                <span class="category"><?php the_tags('', ', ', ''); ?></span>	
				</p>
        <span id="comments"></span>
        <p><small><?php _e('You can follow any responses to this entry through the','nattywp'); ?> <?php post_comments_feed_link('RSS 2.0'); ?>
						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							<?php _e('You can <a href="#respond">leave a response</a>, or','nattywp'); ?> <a href="<?php trackback_url(); ?>" rel="trackback"><?php _e('trackback','nattywp'); ?></a>.
						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							<?php _e('Responses are currently closed, but you can','nattywp'); ?> <a href="<?php trackback_url(); ?> " rel="trackback"><?php _e('trackback','nattywp'); ?></a>.
						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>							
							<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.','nattywp'); ?>
						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							<?php _e('Both comments and pings are currently closed.','nattywp'); ?>							
						<?php }  ?>
					</small>
         </p>	
                
			</div>	
            <div class="post">
        		<?php comments_template(); ?>      	
       		</div>				
	<?php endwhile; ?>	
	<?php else : ?>
		<div class="post">
		<h2><?php _e('Not Found','nattywp'); ?></h2>
            <div class="entry"><p><?php _e('Sorry, but you are looking for something that isn\'t here.','nattywp'); ?></p>
            <?php get_search_form(); ?>
            </div>
        </div>
    <?php endif; ?>				
	
        </div> <!-- END Narrowcolumn -->
        <div id="sidebar" class="profile">
           <?php if (!function_exists('dynamic_sidebar') || (!is_active_sidebar(2))) {
                get_sidebar(); 
              } else {
                echo '<ul>';
                dynamic_sidebar('sidebar-2');
                echo '</ul>';
              } ?>
        </div>    
        <div class="clear"></div>

    
    <?php get_footer(); ?> 