<?php
/*
Template Name: Template CV
*/
get_header();
?>
<ul>
<?php
    $args = array('category'=> 2,'orderby'=> 'date',);
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <li>
        <h2><?php the_title(); ?></h2>
        <p>
            <?php the_content(); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </p>
    </li>
<?php endforeach;
wp_reset_postdata();?>
</ul>
<ul>
<?php
    $args = array('category'=> 3,'orderby'=> 'date',);
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <li>
        <h2><?php the_title(); ?></h2>
        <p>
            <?php the_content(); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </p>
    </li>
<?php endforeach;
wp_reset_postdata();?>
</ul>
