<?php get_header(); ?>

<main class="single-main">
  <div class="container">			
    <article class="pagina">
     
                  
      <div class="row"> 

        <div class="share single-page-share col-md-1"> 
          <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
            ADDTOANY_SHARE_SAVE_KIT( array( 
              'buttons' => array( 'facebook', 'twitter', 'pinterest' ),
            ) );
          } ?>
        </div>

        <div class="content-sigle-page col-xs-12 col-md-8">
          <h1 class="pagina-titulo">
            <?php the_title(); ?>
          </h1>
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
            
          </p>
          <hr class="hr-2"> 
          <?php                         
            while (have_posts()) : the_post();               
          ?>
          <div class="materia">
            <p><?php the_content(); ?></p>
          </div>
          
          <div class="comentario">
            <?php comments_template(); ?> 
          </div>

        </div> 
        <?php
          endwhile;
        ?>

    </article>
   
 
      
  </div>
</main>

<?php get_footer(); ?>