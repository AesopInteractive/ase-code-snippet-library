Chapter Filters
==========

`aesop_chapter_defaults`

Default chapter attributes.

`aesop_chapter_scroll_offset`

Filter or change the offset scroll distance of a Chapter marker when clicked. Here’s an example:

`add_filter("aesop_chapter_scroll_offset","myaddchapteroffset");
function myaddchapteroffset(){
return 100;
}`

`aesop_chapter_scroll_container`

Filter the css class of the parent article div used for capturing scroll-headings.

`aesop_chapter_nav_container`

Filter the css class of the div used to insert the chapter navigation elements.