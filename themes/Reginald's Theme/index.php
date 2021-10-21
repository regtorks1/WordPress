
<style>
     <?php
    //include('style.css');
    ?> 
    </style> 
<!-- THIS IS COMING FROM header.php -->
<?php get_header(); ?>


<?php
global $wpdb;
$table = 'profile_table';
$user_result = $wpdb->get_results("Select * from $table");
?>
<table style = "border: 1px solid black; margin-left: auto;margin-right:auto; position: relative; top: -580px ">

<tr style = "outline: thin solid">
	<th>Name</th>
	<th>Email</th>
	<th>Age</th>
	<th>Address</th>
</tr>

<?php
foreach($user_result as $val) { ?>

	<tr>
	<td style = "padding: 8px"><?=$val->name?></td>
	<td style = "padding: 8px"><?=$val->email?></td>
	<td style = "padding: 8px"><?=$val->age?></td>
	<td style = "padding: 8px"><?=$val->address?></td>
</tr>

<?php } ?>

<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'ID',
    'post_status' => 'publish',
    'order' => 'DESC',
    'posts_per_page' => -1
);
$result = new WP_Query($args);
$count = 1;
if($result->have_posts() ) : ?>
<?php while ($result->have_posts()) : $result->the_post(); ?>
<h1><?=$count?>---<?php the_title(); ?></h1>
<h3><?php the_content(); ?></h3>
<hr>
<?php $count++; endwhile; ?>
<?php endif; wp_reset_postdata(); ?> 
?>

<!-- THIS IS COMING FROM sidebar.php --> 
<?php get_sidebar(); ?> 

<!-- THIS IS COMING FROM footer.php -->
<?php get_footer(); ?>

