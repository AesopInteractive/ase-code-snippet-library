<?php

/**
 * This adds text before the character component.
 * Change "hi" to whatever you'd like.
 */

add_action('aesop_character_before', 'my_whatever');
function my_whatever(){
  echo 'hi';
}

/**
 * Could be used in combination with 'the_author_meta.'
 * Src: http://codex.wordpress.org/Function_Reference/the_author_meta
 * And: http://davidwalsh.name/add-profile-fields
 */

add_action('aesop_character_before', 'twitter_whatever');
function twitter_whatever(){
  echo '<p>My Twitter handle is <?php the_author_meta('twitter'); ?></p>';
}