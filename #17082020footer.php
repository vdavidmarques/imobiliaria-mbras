<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #content -->



<div class="container-fluid fundoFooter">



	<div class="container top">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

				<div class="row">


					<div class="col-xs-12 col-md-12 col-lg-12">

						<div class="space-footer-1">

							<h2 class="footer-h2"> Mbras </h2>

							<h3 class="footer-h3"> 
								Sua Boutique de Realizações <br>
								<span>CRECI 23.907-J</span>
							</h3>

							<h4 class="footer-h4"> 
								Av. Dr. Chucri Zaidan, <br>
								1550 cj. 2213 - 22º andar

							</h4>

							<?
							$compartilhar_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							?>

							<a href="https://api.whatsapp.com/send?phone=5511977998888&text=<?php  
                    
                        echo "Olá, estou visitando o Blog e gostaria de receber mais informações via whatsapp sobre : ".$compartilhar_link." ";                     
                    ?>" class="footer-tipo1 visible-xs visible-sm" target="_blank">

								<span class="whats"> </span>

								97799 8888


							</a>

							<a href="https://web.whatsapp.com/send?phone=5511977998888&text=<?php                       
                        echo "Olá, estou visitando o Blog e gostaria de receber mais informações via whatsapp sobre : ".$compartilhar_link." ";
                     
                    ?>" class="footer-tipo1 visible-md visible-lg" target="_blank">

								<span class="whats"> </span>

								97799 8888


							</a>

							


							<a href="tel:+551151856999" class="footer-tipo1">

								<span class="telefone"> </span>

								5185 6999

							</a>

							<a href="mailto:contato@mbras.com.br" class="footer-tipo1">

								<span class="contato"> </span>

								contato@mbras.com.br

							</a>

							<div class="follow">

								<h2> Follow  </h2>

								<a href="https://pt.linkedin.com/company/mbras-solu%C3%A7%C3%B5es-imobili%C3%A1rias" target="_blank">
									<img class="linkdin" src="http://www.mbras.com.br/images/icon-linkedin.png">
								</a>

								<a href="https://www.instagram.com/mbrasempreendimentos/" target="_blank">
									<img class="instagram" src="http://www.mbras.com.br/images/icon-instagram.png">
								</a>

								<a href="https://www.facebook.com/mbrasempreendimentos?fref=ts" target="_blank">
									<img class="face" src="http://www.mbras.com.br/images/icon-facebook.png">
								</a>




							</div>

						</div>

					</div>

				</div>	
			</div>


			<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 hidden-xs blog">

				<div class="bloco-blog">

					<div class="blog_titulo"> BLOG </div>
					<div class="blog_subtitulo"> Últimas Publicações  </div>

					<?php

			// Include the wp-loader
						//require_once('blog/wp-load.php');

					function limitarTexto($texto, $limite, $abreviar){



						$contador = strlen($texto);
						if ( $contador >= $limite ) {      
							$texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . $abreviar;
							return $texto;
						}
						else{
							return $texto;
						}
					} 




						$args = array(
							'post_type' => 'post',
							'cat' => '-1,-2,-7',
  				'posts_per_page'         => '6',  // Limite
  				'orderby' => 'desc',
  			);  

						$the_query = new WP_Query( $args );

			// The Loop
						if ( $the_query->have_posts() ) :
							$conta_banner = 0;
							$contar = 0;

							while ( $the_query->have_posts() ) :
								$the_query->the_post();

								//$abrevia =  limitarTexto(get_the_title(), 60, "...");  

								$abrevia = get_the_title();
								?>
								<div class="row col-xs-12 col-md-12 col-lg-12">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<div class="blog_assunto">

											<?php echo $abrevia;?>
										</div>
									</a>
								</div>


								<?php
							endwhile;
						endif;

						?> 



					
				</div>

			</div>




			<div class="col-xs-12 col-md-3 col-lg-3 footer_menu hidden-xs hidden-sm">

				<a href="http://www.mbras.com.br/empresa">MBRAS</a>
				<a href="http://www.mbras.com.br/imoveis/venda/sp/sao-paulo/">Imóveis Prontos  </a>
				<a href="http://www.mbras.com.br/comercial/venda/sp/sao-paulo/">Comercial </a>			
				<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'praia-e-campo');">Praia & Campo  </a>
				<a href="http://www.mbras.com.br/internacional">Internacional  </a>
				<a href="#">Administração de Bens  </a>


				<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'galpoes');">Galpões e Centros de Distribuição </a>
				<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'lotes-e-terrenos');">Lotes e Terrenos </a>
				<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'lajes-e-predios');">Lajes e Prédios Comerciais </a>
				<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'para-reformar');">Para Reformar </a>
				<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'prontos-e-lancamentos');">Prontos e Lançamentos  </a>

				<a href="http://www.mbras.com.br/anuncie">Anuncie seu Imóvel </a>



			</div>





		</div>
	</div>

</div>


	
<a href="https://web.whatsapp.com/send?phone=5511977998888&amp;text=Olá, estou visitando o Blog e gostaria de receber mais informações via whatsapp sobre : <?php echo $compartilhar_link?>" target="_blank" class="visible-md visible-lg visible-xl">
 	<div class="pulse2 whatsfixo" style=""><i class="fab fa-whatsapp"></i>
 	</div>
 </a>

  <a href="https://api.whatsapp.com/send?phone=5511977998888&amp;text=Olá, estou visitando o Blog e gostaria de receber mais informações via whatsapp sobre : <?php echo $compartilhar_link?>" target="_blank" class="hidden-md hidden-lg hidden-xl">
 	<div class="pulse2 whatsfixo" style=""><i class="fab fa-whatsapp"></i>
 	</div>
 </a> 



<script type="text/javascript">


	$( ".menu button" ).click(function() {


 

    if($( ".menu button" ).hasClass('click-abrir')){

        $(".menu .abrir").animate({         
        },2000, function(){
           $(".menu .abrir").addClass("abrir-tamanho");
        }); // mostra o menu se estiver escondido clicou

        $(".menu .click-abrir").removeClass("click-abrir").addClass("click-fechar");
      }else{


         $(".menu .abrir").animate({         
        },2000, function(){
           $(".menu .abrir").removeClass("abrir-tamanho");
        }); // mostra o menu se estiver escondido clicou
       
        $(".menu .click-fechar").removeClass("click-fechar").addClass("click-abrir");

      }

       

});




   $( ".buscar button.click-abrir" ).click(function() {


   


    if($( ".busca-desktop" ).hasClass('hidden')){

      $(".busca-desktop").removeClass("hidden");

       $(".buscar button.click-abrir").removeClass("click-abrir").addClass("click-fechar-busca");

             $(".menu").addClass("hidden");
             
       
    

    }else{
      $(".buscar button.click-fechar-busca").removeClass("click-fechar-busca").addClass("click-abrir");
       $(".busca-desktop").addClass("hidden");

 
       $(".menu").removeClass("hidden");
     

    }


 
});


	$( document ).ready(function() {

		


		$( ".menuDireita a#limpar" ).click(function() {

			$.post(addr_instal+"model/limpaBusca.php", function(){window.location = vseo;});

		});


		$( "#scroll-up" ).click(function() {

			$('html,body').animate({scrollTop: 0},'slow');

			

		});



		
	});


  
function cod_utilizacao(variavel, form) {

	url = "http://www.mbras.com.br/model/gravaMenu.php?action="+variavel+"&valor="+form;
	redirecionar  = "http://www.mbras.com.br/imoveis/venda/sp/sao-paulo/"

	//addr_instal+"imoveis/venda/sp/sao-paulo/";

	//alert(url);
	//alert(redirecionar);
	
      
      $.post(url, function(){window.location = redirecionar });
   
  }

</script>

<?php wp_footer(); ?>

</body>
</html>