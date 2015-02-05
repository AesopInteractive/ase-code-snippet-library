<?php

/**
 *	Audio After Hook 
 */

add_action("aesop_chapter_before","myaudoioafterdownload");
function myaudoioafterdownload(){
echo 'Download here: My Site';