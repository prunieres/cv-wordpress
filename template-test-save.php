<?php
/*
Template Name: Template CV
*/
get_header();
?>
<ul>
<?php
    $category_id = 2;
    $category = get_category($category_id);
    echo '<h2>'.$category->name.'</h2>';
    $args = array('category'=> 2,'orderby'=> 'date',);
    $myposts = get_posts( $args );

    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <li>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </li>
    <?php endforeach;
    wp_reset_postdata();?>
</ul>

<ul>
<?php
    $category_id = 3;
    $category = get_category($category_id);
    echo '<h2>'.$category->name.'</h2>';
        $args = array('category'=> 3);
        $myposts = get_posts( $args );

        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </li>
        <?php endforeach;
        wp_reset_postdata();?>
</ul>
<ul>
<?php
$categories_id = array(2,3);

    foreach ($categories_id as $category_id) {
        // $category = get_category($category_id);
        // echo '<h2>'.$category->name.'</h2>';
        $args = array('category'=> 3);
        $myposts = get_posts( $args );

        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </li>
        <?php endforeach;

        wp_reset_postdata();//
    }
    ?>
</ul>
