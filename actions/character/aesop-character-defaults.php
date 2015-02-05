<?php

/** 
 *	Filter the default character attributes. 
 */

add_filter("aesop_character_defaults","mycharacterdefault");
function mycharacterdefault(){
return 1;
}