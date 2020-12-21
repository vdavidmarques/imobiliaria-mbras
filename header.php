<script>var addr_instal= '../';</script>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>


<!-- Font Awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- CSS GOOGLE FONTS -->	
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  
<?php wp_head(); ?>
</head>


<div class="container-fluid header-branco">

    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
          <a href="https://www.mbras.com.br">
          <img src="https://www.mbras.com.br/images/Logo-Site.svg" alt="logo" class="logo img-responsive">
          </a>                
        
        </div>

        <div class="col-xs-6 col-sm-9 col-md-9">    	
          
          <div class="menu">
            <button class="click-abrir"> </button>      
          </div>

          <div class="buscar ">
            <a href="https://www.mbras.com.br/imoveis/venda/sp/sao-paulo/">
              <button class="click-abrir">   </button>   
            </a>
          </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="menu">
              <div class="abrir">          

                <a href="https://www.mbras.com.br/empresa">MBRAS</a>
                <a href="https://www.mbras.com.br/gerenciamento-de-propriedades">Gerenciamento de Propriedades</a>
                <a href="https://www.mbras.com.br/imoveis/venda/sp/sao-paulo/">Imóveis Prontos</a>
                <a href="https://www.mbras.com.br/novos/venda/sp/sao-paulo/">Novos</a>           
                <a href="javascript:void(0);" onclick="cod_utilizacao('boxtag', 'praia-e-campo');">Praia & Campo</a>
                <a href="https://www.mbras.com.br/internacional">Internacional</a>           
                <a href="javascript:void(0);" onclick="cod_utilizacao('boxtag', 'galpoes');">Galpões e Centros de Distribuição</a>
                <a href="javascript:void(0);" onclick="cod_utilizacao('boxtag', 'lotes-e-terrenos');">Lotes e Terrenos</a>
                <a href="javascript:void(0);" onclick="cod_utilizacao('boxtag', 'lajes-e-predios');">Lajes e Prédios Comerciais</a>
                <a href="javascript:void(0);" onclick="cod_utilizacao('boxtag', 'para-reformar');">Para Reformar</a>           
                <a href="https://www.mbras.com.br/anuncie">Anuncie seu Imóvel</a>
                <a href="https://www.mbras.com.br/contato">Contato</a>
              </div>
            </div>
        </div>

      </div>   

    </div>
</div>

<div class="col-md-12 imagem-principal">
  <!--<img src="<?php bloginfo('template_url'); ?>/image/blog-mbras.jpg" alt="">-->
  <img src="https://www.mbras.com.br/blog/wp-content/uploads/2020/10/blog-mbras.png" alt="">
</div>

<div class="container">
  <div class="col-md-12 categorias">
      <?php 
      $args = array(
        'theme_location' => 'minhas-categorias',      
        'container_class' => 'col-xs-12 col-sm-12 col-md-12 minhas-categorias'					
      );
              
      wp_nav_menu($args); 			
      ?>							
     
  </div>
</div>

    
<div id="content" class="site-content">
	<div class="inner-wrap">
