<?php get_header(); ?>

<main class="category-main">

  <div class="container">			
                  
    <div class="row">                                      
            <h2 class="cat_title col-md-12">
              <?php single_cat_title();?> 
              <hr>
            </h2>
            <?php                      
              while (have_posts()) : the_post();                    
            ?>
          <div class="materia-listagem col-12 col-sm-12 col-md-6">        
            <div class="materia-listagem-item">                    
                        
              <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"> 
                <?php the_post_thumbnail(); ?> 
              </a>             
              <div class="caption"> 
                <p class="categoria-data">
                    <?php
                      $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                    ?>      
                    <span class="categoria"> 
                      <?php 
                        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                        } 
                      ?> 
                    </span> - <span class="data"><?php echo get_the_date(); ?></span>            
                    <hr>
                </p> 
                <h2><?php the_title(); ?></h2>
                <p><?php echo excerpt(50); ?></p>
                <button class="btn botao-padrao" type="button">
                  <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">LER MAIS</a>
                </button>
              </div>
                                    
              <div class="share col-md-12"> 
                <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
                    ADDTOANY_SHARE_SAVE_KIT( array( 
                        'buttons' => array( 'facebook', 'twitter', 'pinterest' ),
                    ) );
                } ?>
              </div>
                        
            </div>
          </div>
              
          <?php endwhile; ?>
        
          <div class="col-md-12 paginacao-site">
            <?php 
              the_posts_pagination( array(
                'screen_reader_text' => ' ',                                     
                'prev_text' => __( 'Anterior', 'textdomain' ),
                'next_text' => __( 'Próximo', 'textdomain' ),                  
              ) );
              ?>              
          </div>   

    </div>
  </div>
</main><!-- #main -->

<?php get_footer();
