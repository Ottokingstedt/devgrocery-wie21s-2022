
<?php
/*
Template name: flexible content
*/

get_header();

if (have_rows('flexible_content')):
    while (have_rows('flexible_content')):
        the_row();

        if (get_row_layout() == 'block_1'): ?>

            <div class="block1">
              <h1><?php the_sub_field('title_b1'); ?></h1>
              <h3><?php the_sub_field('sub_b1'); ?></h3>
              <div class="desc">
                <?php the_sub_field('desc_b1'); ?>
              </div>
            </div>
        
        <?php
            // no rows found
            // no rows found
            // no rows found
            // no rows found
            ?>elseif (get_row_layout() == 'block_2'): ?>
         
         <div class="block2">
           <h2><?php the_sub_field('title_b2'); ?></h2>

           <?php if (have_rows('gallery_b2')):
               while (have_rows('gallery_b2')):
                   the_row(); ?>

                    <img src="<?php the_sub_field('image_b2'); ?>" alt="">

            <?php
               endwhile;
           else:
           endif; ?>
         </div>
       
        <?php elseif (get_row_layout() == 'block_3'): ?>

         <div class="block3">
           <ul>
           <?php if (have_rows('list_b3')):
               while (have_rows('list_b3')):
                   the_row(); ?>

                    <li><?php the_sub_field('item_text_b3'); ?></li>

            <?php
               endwhile;
           else:
           endif; ?>
         </ul>
         </div>
         
            
      <?php endif;
    endwhile;
else:


    // no layouts found
endif;

get_footer();
 ?>
