<?php

perch_blog_custom(array(
    'category' => perch_layout_var('category', true),
    'template' => 'listing-full-width.html',
    'start' => 1,
    'count' => 2,
    'sort' => perch_layout_var('sort', true) ,
    'sort-order' => perch_layout_var('sort-order', true),
    'paginate' => false,
));

perch_blog_custom(array(
    'category' => perch_layout_var('category', true),
    'template' => 'listing-half-width-summary.html',
    'start' => 3,
    'count' => 99,
    'sort' => perch_layout_var('sort', true),
    'sort-order' => perch_layout_var('sort-order', true),
    'paginate' => false,
));

?>
