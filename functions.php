<?php
	 // Add support for a variety of post formats

  add_editor_style();
  
  if ( ! isset( $content_width ) )
    $content_width = 820;

	 add_filter('gallery_style', create_function('$a', 'return "<div class=\'gallery\'>";'));
	 add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

   // feed support
   add_theme_support( 'automatic-feed-links' );
   
   // navigation menu
   register_nav_menu( 'primary', 'Primary Menu' );

   // post-thumb
   add_theme_support( 'post-thumbnails' );

   

   $defaults_bg = array(
      'default-color'          => '#f3f3f3',
      'default-image'          => get_template_directory_uri() . '/background.png',
      'admin-head-callback'    => '',
      'admin-preview-callback' => ''
   );
   
   add_theme_support( 'custom-background', $defaults_bg );
   

   $header_args = array(
    'width'         => 600,
    'height'        => 50,
    'flex-width'    => true,
    'flex-height'    => true,
    
  );
  add_theme_support( 'custom-header',$header_args );

   register_sidebar( array(
      'name' => 'Footer Left Widget',
      'id' => 'sidebar-1',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
   ) );
   register_sidebar( array(
      'name' => 'Footer Right Widget',
      'id' => 'sidebar-2',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
   ) );
	function mytheme_comment($comment, $args, $depth) {
   		$GLOBALS['comment'] = $comment; 
   ?>

   <li  id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>" <?php comment_class('comment-body'); ?>>
      
      

      <?php if ($comment->comment_approved == '0') : ?>
         <em>Your comment is awaiting moderation</em>
         <br />
      <?php endif; ?>
      <div class='comment-content bubble bubble-left'>
      <?php comment_text() ?>
      </div>
       <div class='clear'><!-- --></div>
      <div class="comment-author vcard">
         <?php echo get_avatar( $comment, 16 );?>
        
         <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"> <?php comment_author(); ?>
         </a>
      </div>
      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
        }
?>