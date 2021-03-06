<?php 

if ( have_comments() && post_password_required() == false ) : 

	echo comments_number( 
		'<h3 class="comments">' . esc_html__( "No comments","anna-lite") . '</h3>', 
		'<h3 class="comments">1 ' . esc_html__( "comment","anna-lite") . '</h3>', 
		'<h3 class="comments">% ' . esc_html__( "comments","anna-lite") . '</h3>' 
	); 
	
?>

	<div id="comments">
	
    	<ul class="commentlist">
	
    		<?php wp_list_comments('type=comment&callback=anna_lite_comments'); ?>
	
    	</ul>
	
    </div>

<?php 

	endif;
	
	function anna_lite_comments ($comment, $args, $depth) {
	
		$GLOBALS['comment'] = $comment; ?>
   
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
 
		<div id="comment-<?php comment_ID(); ?>" class="comment-container">
         
			<div class="comment-avatar">
				<?php echo get_avatar( $comment->comment_author_email, 80 ); ?>
			</div>
         
			<div class="comment-text">
			
            	<header class="comment-author">
                
                    <span class="author"><cite><?php printf( esc_html__('%s','anna-lite'), get_comment_author_link());?> </cite> </span>
                    <time datetime="<?php echo get_comment_date("c")?>" class="comment-date">  
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(esc_html__('%1$s at %2$s','anna-lite'), get_comment_date(),  get_comment_time()) ?></a> - 
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    <?php edit_comment_link(esc_html__('(Edit)','anna-lite')) ?>
                    </time>
                
				</header>
    
				<?php if ($comment->comment_approved == '0') : ?>
				<br /><em><?php esc_html_e('Your comment is awaiting approval.','anna-lite') ?></em>
				<?php endif; ?>
          
				<?php comment_text() ?>
          
			</div>
        
			<div class="clear"></div>
        
		</div>

<?php 

	} 
	
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<div class="wp-pagenavi">
        
			<div class="alignleft"><?php previous_comments_link(esc_html__('&laquo;','anna-lite')) ?></div>
			<div class="alignright"><?php next_comments_link(esc_html__('&raquo;','anna-lite')) ?></div>
		
        </div> 

<?php 

	endif;

?>

<div class="clear"></div>

<div class="contact-form">

	<?php 
	
		comment_form(
			array(
				'label_submit' =>  esc_attr__('Comment','anna-lite'),
				'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html_x( 'Comment', 'Comment field textarea.', 'anna-lite' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
			) 
		); 
	
	?>
    
    <div class="clear"></div>

</div>