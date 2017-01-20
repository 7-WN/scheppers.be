<?php

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-full-width.html',
    'start' => 1,
    'count' => 1,
    'sort' => perch_layout_var('sort', true) ,
    'sort-order' => perch_layout_var('sort-order', true),
    'paginate' => false,
));

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-half-width.html',
    'start' => 2,
    'count' => 2,
    'sort' => perch_layout_var('sort', true),
    'sort-order' => perch_layout_var('sort-order', true),
    'paginate' => false,
));

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-third-width-summary.html',
    'start' => 4,
    'count' => 12,
    'sort' => perch_layout_var('sort', true),
    'sort-order' => perch_layout_var('sort-order', true),
    'paginate' => false,
));

?>
