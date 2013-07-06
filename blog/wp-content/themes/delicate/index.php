<?php get_header();?>      

<?php 
$t_show_post = t_get_option ("t_show_post");  
?>    
<style>
.recotable a {
  text-decoration: none;
}
.reco_excerpt {
  margin-left:30px;
  margin-top:7px;
  color: #555;
}
.reco_title {
  margin-top: 3px;
  font-weight: bold;
  margin-left: 10px;
}
.reco_next {
  text-align: right;
  font-weight: bold;
}
</style>
<div id="main">    
  <div class="columns">        
    <div class="narrowcolumn">
    <div style="height:150px; overflow:hidden; padding:10px; border-left:2px solid rgb(199, 193, 190)">
    <h2 class="blocktitle"><em>Recommended Reading</em></h2>
    <br />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script>
    var curslide = 1;
    var maxslide = 4;
    var intervaler = false;
    function swapslide() {
        $('#slide' + curslide).fadeTo(500, 0, function() {
            for (var i = curslide; i <= maxslide; i++) {
                $('#slide' + i).hide();
            }
            if (curslide == maxslide) {
                curslide = 1;
            } else {
                curslide ++;
            }
            $('#slide' + curslide).fadeTo(500, 1);
        });
    }
    function reco_gonext() {
        if (intervaler !== false) {
            clearInterval(intervaler);
            intervaler = false;
            swapslide();
            intervaler = setInterval(function() { swapslide(); }, 5000);
        } else {
            swapslide();
        }
    }
    function initslider() {
        intervaler = setInterval(function() { swapslide(); }, 5000);
        $('.recoslide').hover(function() {
            if (intervaler !== false) {
                clearInterval(intervaler);
                intervaler = false;
            }
        }, function() {
            if (intervaler === false) {
                intervaler = setInterval(function() { swapslide(); }, 5000);
            }
        });
    }
    $(document).ready(initslider);
    </script>
    <div id="slide1" class="recoslide">
      <table class="recotable">
      <tr>
        <td width="0px">
          <img src="http://i302.photobucket.com/albums/nn91/yuenhoe/clannad2.jpg" class="framed" width="80px" height="45px" />
        </td>
        <td width="33%" style="padding:5px"><a href="http://yuenhoe.com/blog/2012/07/clannad-people-and-a-philosophy-of-doing/">Clannad, People and a Philosophy of Doing</a></td>
        <td width="0px">
          <img src="http://i302.photobucket.com/albums/nn91/yuenhoe/reaching.jpg" class="framed" width="80px" height="45px" />
        </td>
        <td width="33%" style="padding:5px"><a href="http://yuenhoe.com/blog/2012/10/living-on-kara-no-kyoukai-04/">Living On - Kara no Kyoukai 04</a></td>
        <td width="0px">
          <img src="http://i302.photobucket.com/albums/nn91/yuenhoe/asukasama.png" class="framed" width="80px" height="45px" />
        </td>
        <td width="33%" style="padding:5px"><a href="http://yuenhoe.com/blog/2011/10/evangelion-2-0-the-evafags-monsterpost/">Evangelion 2.0 - the evafag's monsterpost</a></td>
      </tr>
      </table>
    </div>
    <div id="slide2" class="recoslide" style="display:none">
      <table class="recotable">
      <tr>
        <td width="0px" valign="top">
          <img src="http://i302.photobucket.com/albums/nn91/yuenhoe/clannad2.jpg" class="framed" width="160px" height="90px" />
        </td>
        <td>
          <p class="reco_title"><a href="http://yuenhoe.com/blog/2012/07/clannad-people-and-a-philosophy-of-doing/">Clannad, People and a Philosophy of Doing</a></p>
          <p class="reco_excerpt"><em> " ... The ability to help isn’t a privilege that you guard carefully and execute selectively, it is a means of connecting with humanity and building your life that should be used as often as possible ... "</em></p>
          <p class="reco_next"><a href="#" onclick="reco_gonext(); return false;">&gt;&gt;</a></p>
        </td>
      </tr>
      </table>
    </div>
    <div id="slide3" class="recoslide" style="display:none">
      <table class="recotable">
      <tr>
        <td width="0px" valign="top">
          <img src="http://i302.photobucket.com/albums/nn91/yuenhoe/reaching.jpg" class="framed" width="160px" height="90px" />
        </td>
        <td>
          <p class="reco_title"><a href="http://yuenhoe.com/blog/2012/10/living-on-kara-no-kyoukai-04/">Living On - Kara no Kyoukai 04</a></p>
          <p class="reco_excerpt"><em> " ... if you needed a reason to go on living at all, it is that death is so much worse, so much more meaningless, and so much more terrifying ... "</em></p>
          <p class="reco_next"><a href="#" onclick="reco_gonext(); return false;">&gt;&gt;</a></p>
        </td>
      </tr>
      </table>
    </div>
    <div id="slide4" class="recoslide" style="display:none">
      <table class="recotable">
      <tr>
        <td width="0px" valign="top">
          <img src="http://i302.photobucket.com/albums/nn91/yuenhoe/asukasama.png" class="framed" width="160px" height="90px" />
        </td>
        <td>
          <p class="reco_title"><a href="http://yuenhoe.com/blog/2011/10/evangelion-2-0-the-evafags-monsterpost/">Evangelion 2.0 - the evafag's monsterpost</a></p>
          <p class="reco_excerpt"><em> " ... [human] connection inevitably involves exposing oneself to harm and hurt. But if you back out due to it you’re going to lose to rejection, and nothing will change ... "</em></p>
          <p class="reco_next"><a href="#" onclick="reco_gonext(); return false;">&gt;&gt;</a></p>
        </td>
      </tr>
      </table>
    </div>
    <br />
    </div>
    <br />
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>              
      <div <?php post_class();?>>
              
                <div class="title">
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <small><?php the_time('F jS, Y') ?> | <?php _e('Posted by','nattywp'); ?> <span class="author"><?php natty_get_profile() ?></span> <?php _e('in','nattywp'); ?> <?php the_category(' | ');?> - (<?php comments_popup_link(__('0 Comments', 'nattywp'), __('1 Comments', 'nattywp'), __('% Comments', 'nattywp')); ?>)</small> <?php edit_post_link(__('Edit','nattywp'), ' | ', ''); ?>
                </div>                
        <div class="entry">
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail('thumbnail');} 
                if ($t_show_post == 'no') {//excerpt                    
                    the_excerpt();   
                } else { //fullpost 
                    t_show_video($post->ID);
                    the_content(); ?>  
                <div id="morepage-list"><?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?></div>                       
            <?php } ?>
            <div class="clear"></div>
      </div>              
                
        <p class="postmetadata">  
          <span class="category"><?php the_tags('', ', ', ''); ?></span>   
        </p>
      </div>      
  <?php endwhile; ?>  
        
    <div id="navigation">
    <?php natty_pagenavi(); ?>
    </div>    
        
    <?php else : 
    echo '<div class="post">';
    if ( is_category() ) { // If this is a category archive
      printf(__('<h2 class=\'center\'>Sorry, but there aren\'t any posts in the %s category yet.</h2>','nattywp'), single_cat_title('',false));
    } else if ( is_date() ) { // If this is a date archive
      _e('<h2>Sorry, but there aren\'t any posts with this date.</h2>','nattywp');
    } else if ( is_author() ) { // If this is a category archive
      $userdata = get_userdatabylogin(get_query_var('author_name'));
      printf(__('<h2 class=\'center\'>Sorry, but there aren\'t any posts by %s yet.</h2>','nattywp'), $userdata->display_name);
    } else {
      _e('<h2 class=\'center\'>No posts found.</h2>','nattywp');
    }
    get_search_form();  
    echo '</div>';    
  endif; ?>
  
</div> <!-- END Narrowcolumn -->
  <div id="sidebar" class="profile">
    <?php get_sidebar();?>
  </div>    
<div class="clear"></div>    
<?php get_footer(); ?> 