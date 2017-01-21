<?php

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-full-width.html',
    'start' => 1,
    'count' => 2,
    'sort' => perch_layout_var('sort', true) ,
    'sort-order' => perch_layout_var('sort-order', true),
    'paginate' => false,
));

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-half-width-summary.html',
    'start' => 3,
    'count' => 10,
    'sort' => perch_layout_var('sort', true),
    'sort-order' => perch_layout_var('sort-order', true),
    'paginate' => false,
));

?>
