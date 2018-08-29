<?php
/*
Template Name: Template CV
*/
get_header();
?>
<ul>
				<?php
				$categories = [2,3];
				foreach ($categories as $categorie_id) {
					$category = get_category($categorie_id);
					global $post;
					$args = array('category' => $categorie_id);

					$myposts = get_posts( $args );
					echo "<h2>".$category->name." : "."</h2>";
					foreach ( $myposts as $post ) :
						setup_postdata( $post );
						get_template_part('template-parts/test');
				 	endforeach;
				};
				wp_reset_postdata();?>

		</ul>
