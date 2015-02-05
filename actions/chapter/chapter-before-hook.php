<?php 

/**
 *	Chapter Before Hook
 */

add_action("aesop_chapter_before","mychapterwish");
function mychapterwish(){
echo 'Live long and prosper';