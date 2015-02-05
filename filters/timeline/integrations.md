Timeline Component Integration
==========

This component will not function properly without the the following hook and container classes.

1. Right after the opening body tag, in your WordPress theme template, add the following hook. Aesop uses this hook to inject markup.

### Pre 1.0.5

`do_action(‘aesop_inside_body_top’);`

### 1.0.5+

`do_action(‘ase_theme_body_inside_top’);`

2. Add this CSS class to your article/container div that holds the actual post.

`.aesop-entry-content`