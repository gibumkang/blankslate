<div class="content-container">
<?php $args = array(
'prev_text' => '<span class="meta-nav">&larr;</span> <span class="post-title-hide">%title</span>',
'next_text' => '<span class="post-title-hide">%title</span> <span class="meta-nav">&rarr;</span>'
);
the_post_navigation( $args ); ?>
</div>