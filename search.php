<?php
/*
Template Name: Search Page
*/

get_header();

global $wp_query;
$total_results = $wp_query->found_posts;
echo $total_results;

get_footer();
?>