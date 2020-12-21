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

			<div class="col-xs-12 col-md-3 col-lg-3">
			
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12 logo">

					<img src="/images/logo_footer.png" class="img-responsive" alt="logo">

				</div>

				<div class="col-xs-12 col-md-12 col-lg-12 texto">

				A MBRAS é uma Boutique Imobiliá-ria atuante nos mercados e alto e altíssimo padrão há mais de 10 anos. Seu nascimento se deu pela percepção da falta de qualidade que os clientes desse segmento enfrentavam. Focando sempre na discrição e na confidencialidade,  a MBRAS tem crescido gradualmente em todos esses anos. 

				</div>

				<div class="col-xs-12 col-md-12col-lg-12 texto texto2">

					Quer saber um pouco <br>

					mais sobre a nossa história?
				</div>

				<div class="col-xs-12 col-md-12 col-lg-12 footer_endereco">

					<span> </span>

					<div class="col">
						<p> Av. Dr. Chucri Zaidan, 1550</p>
						<p> cj. 2213 - 22º andar </p>
					</div>


				</div>

				<div class="col-xs-12 col-md-12 col-lg-12 footer_contato">

					<a href="tel:+551151856999">
					<span> </span>
					
					<div class="col">
						<p> 11  5185 6999 </p>
						
					</div>
				</a>


				</div>

				<div class="col-xs-12 col-md-12 col-lg-12 footer_email">

					<a href="mailto:mbras@mbras.com.br">
					<span> </span>
					
					<div class="col">
						<p> mbras@mbras.com.br  </p>
						
					</div>
				</a>


				</div>


				</div>	
			</div>


			<div class="col-xs-12 col-md-3 col-lg-3 footer_blog">

			<div class="bold titulo"> BLOG </div>
			<div class="bold titulo final-tit"> ÚLTIMAS PUBLICAÇÕES </div>

			<?php

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

					$abrevia =  limitarTexto(get_the_title(), 60, "...");  


		?>

					
			<div class="row col-xs-12 col-md-12 col-lg-12">
				<a href="<?php the_permalink(); ?>">
					<div class="assunto">
						<?php echo $abrevia;?>
					</div>
				</a>
			</div>

			<?php
				endwhile;
			endif;

			?> 

						

		</div>




		<div class="col-xs-12 col-md-3 col-lg-3 footer_menu">

			<a href="/empresa">A MBRAS</a>
			<a href="/imoveis/venda/sp/sao-paulo/">IMÓVEIS PRONTOS  </a>
			<a href="/novos/venda/sp/sao-paulo/">NOVOS  </a>
			<a href="/comercial/venda/sp/sao-paulo/">COMERCIAL  </a>
			<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'praia-e-campo');">PRAIA & CAMPO  </a>
			<a href="/internacional">INTERNACIONAL  </a>
			<a href="#">Administração de Bens  </a>


			<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'galpoes');">GALPÕES E CENTROS DE DISTRIBUIÇÃO </a>
			<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'lotes-e-terrenos');">LOTES E TERRENOS </a>
			<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'lajes-e-predios');">LAJES E PRÉDIOS COMERCIAIS </a>
			<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'para-reformar');">PARA REFORMAR </a>
			<a href="javascript:void();" onclick="cod_utilizacao('boxtag', 'prontos-e-lancamentos');">PRONTOS E LANÇAMENTOS  </a>

			<a href="/anuncie">ANUNCIE SEU IMÓVEL </a>
			
			<a href="/contato">CONTATO </a>
			
		</div>


		<div class="col-xs-12 col-md-3 col-lg-2 footer_redes">

			<p>&nbsp;</p>
			<p>FOLLOW</p>

			<div class="boxRedes">
				<a href="https://www.instagram.com/mbrasempreendimentos/" target="_blank">
					<img src="/images/istagram.jpg">
				</a>

				<a href="https://www.facebook.com/mbrasempreendimentos?fref=ts" target="_blank">
					<img src="/images/facebook.jpg">
				</a>

				<a href="https://pt.linkedin.com/company/mbras-solu%C3%A7%C3%B5es-imobili%C3%A1rias" target="_blank">
					<img src="/images/linkdin.jpg">
				</a>

			</div>

			<div class="boxParceiros">

				<a href="http://www.nido.com.br" target="_blank">
					<img src="/images/nido.png" class="nido">
				</a>

				<a href="http://www.ra3n.com.br" target="_blank">
					<img src="/images/ra3n.png" class="ra3n">
				</a>

				

			</div>


	</div>


	</div>
</div>

</div>



<div class="container-fluid fundo-footer">
	<div class="row">
		
		<div class="container">
			<div class="row">
			
			<div class="col-xs-12 col-md-6 col-lg-7 fundo-footer-top">
				MBRAS - Sua Boutique de realizações. CRECI 23.907-J			</div>

			<div class="col-xs-12 col-md-6 col-lg-5 fundo-footer-top">

				<div class="hidden-xs hidden-md col-lg-2"> &nbsp;</div>

				<div class="col-xs-4 col-md-4 col-lg-4 contanoBorda">

					<a href="tel:+551151856999">

					<span class="tel"> </span>

					<div class="visible-xs hidden-sm hidden-md hidden-lg">  </div> 
					11 5185 6999					</a>

				 </div>


				<div class="col-xs-4 col-md-4 col-lg-4 contanoBorda">

					<a href="tel:+551196645 3348">

					<span class="whats"> </span>

					<div class="visible-xs hidden-sm hidden-md hidden-lg">  </div> 
					11 966453348
					</a>



				 </div>


				<div class="col-xs-4 col-md-4 col-lg-2 nopadding1200 contanoBorda">

					<div class="conteudoDireita">

					<a href="mailto:mbras@mbras.com.br">

					<span class="contato"> </span>

					<div class="visible-xs hidden-sm hidden-md hidden-lg">  </div> 
					Contato

					</a>
				</div>


				 </div>

			</div>

		</div>
		
	</div>
</div>
</div>



	

</div><!-- #page -->


<script type="text/javascript">

	$( document ).ready(function() {
		$( ".menuDireita a#limpar" ).click(function() {

			$.post(addr_instal+"model/limpaBusca.php", function(){window.location = vseo;});

		});


		$( "#scroll-up" ).click(function() {

			$('html,body').animate({scrollTop: 0},'slow');

			

		});



		
	});


  
function cod_utilizacao(variavel, form) {

	url = "http://mbras.com.br/model/gravaMenu.php?action="+variavel+"&valor="+form;
	redirecionar  = "http://mbras.com.br/imoveis/venda/sp/sao-paulo/"

	//addr_instal+"imoveis/venda/sp/sao-paulo/";

	//alert(url);
	//alert(redirecionar);
	
      
      $.post(url, function(){window.location = redirecionar });
   
  }

</script>

<?php wp_footer(); ?>

</body>
</html>