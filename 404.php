<?php
 
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'genesis_404');
 
function genesis_404()
{
    echo genesis_html5() ? '<article class="entry">' : '<div class="post hentry">';
    printf('<h1 class="entry-title">%s</h1>', apply_filters('genesis_404_entry_title', __('Hmm... Not found, error 404', 'genesis')));
    echo '<div class="entry-content">';
    echo apply_filters('genesis_404_entry_content', '<p>' . sprintf(__('The page you are looking for no longer exists. Perhaps you can return back to the site\'s <a href="%s">homepage</a> and see if you can find what you are looking for. Or, you can try finding it by using the search form below.', 'genesis') , trailingslashit(home_url())) . '</p>');
?>
 
<h4><?php
    _e('Search more than 700 tutorials:', 'genesis'); ?></h4>
 
<form action="https://crunchify.com/search/" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-xxxxxxxxxxxxxxx:9846869911" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" class="crunchify-search" name="q" size="55" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
 
<div class="archive-page">
<br />
<h4><?php
    _e('OR - You might like reading these recent posts:', 'genesis'); ?></h4>
<ul>
<?php
    wp_get_archives('type=postbypost&limit=50'); ?>
</ul>
 
</div><!-- end .archive-page-->
<?php
}
 
genesis();