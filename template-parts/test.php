<li>
   <?php the_title('<h4>','</h4>'); the_content('<p>','</p>'); ?>
   <?php

   if(get_post_meta($post->ID, 'experience', $single=true)) {?>
    <?php echo '<div class="'.get_post_meta($post->ID, 'experience', $single=true).'">Ma barre</div>' ?>
     <?php
   }
   ?>

</li>
