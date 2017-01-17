<?php

perch_blog_custom(array(
    'category' => perch_layout_var('category', true),
    'template' => 'listing-full-width.html',
    'start' => 1,
    'count' => 1,
    'sort' => 'postDateTime',
    'sort-order' => 'DESC',
    'paginate' => false,
));

perch_blog_custom(array(
    'category' => perch_layout_var('category', true),
    'template' => 'listing-half-width.html',
    'start' => 2,
    'count' => 2,
    'sort' => 'postDateTime',
    'sort-order' => 'DESC',
    'paginate' => false,
));

perch_blog_custom(array(
    'category' => perch_layout_var('category', true),
    'template' => 'listing-third-width-summary.html',
    'start' => 4,
    'count' => 99,
    'sort' => 'postDateTime',
    'sort-order' => 'DESC',
    'paginate' => false,
));

?>
