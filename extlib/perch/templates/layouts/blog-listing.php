<?php

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-full-width.html',
    'start' => 1,
    'count' => 1,
    'sort' => 'postDateTime',
    'sort-order' => 'DESC',
    'paginate' => false,
));

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-half-width.html',
    'start' => 2,
    'count' => 2,
    'sort' => 'postDateTime',
    'sort-order' => 'DESC',
    'paginate' => false,
));

perch_blog_custom(array(
    'filter' => perch_layout_var('filter', true),
    'match' => perch_layout_var('match', true),
    'value' => perch_layout_var('value', true),
    'template' => 'listing-third-width-summary.html',
    'start' => 4,
    'count' => 99,
    'sort' => 'postDateTime',
    'sort-order' => 'DESC',
    'paginate' => false,
));

?>
