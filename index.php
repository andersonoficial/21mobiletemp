<!DOCTYPE html>
<html lang="en">
  <head>
   <title>21 Mobile</title>
	
	<!--<base href="URL_DO_SITE">-->
	<link rel="icon" type="image/png" href="img/favicon.png">
	
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<meta name="description" content="DESCRIPTION">
	<meta name="keywords" content="KEYWORDS">
	<meta name="author" content="NOME, EMAIL">

	<meta property="og:title" content="TITLE" />
	<meta property="og:description" content="DESCRIPTION" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/reset_bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	
  </head>
  <body>
	<script>
		// This is called with the results from from FB.getLoginStatus().
		function statusChangeCallback(response) {
		console.log('statusChangeCallback');
		console.log(response);
		// The response object is returned with a status field that lets the
		// app know the current login status of the person.
		// Full docs on the response object can be found in the documentation
		// for FB.getLoginStatus().
		if (response.status === 'connected') {
		  // Logged into your app and Facebook.
		  testAPI();
		} else {
		  // The person is not logged into your app or we are unable to tell.
		  document.getElementById('status').innerHTML = 'Please log ' +
			'into this app.';
		}
		}

		// This function is called when someone finishes with the Login
		// Button.  See the onlogin handler attached to it in the sample
		// code below.
		function checkLoginState() {
		FB.getLoginStatus(function(response) {
		  statusChangeCallback(response);
		});
		}

		window.fbAsyncInit = function() {
			FB.init({
			appId      : '1908088026082679',
			cookie     : true,  // enable cookies to allow the server to access 
								// the session
			xfbml      : true,  // parse social plugins on this page
			version    : 'v2.8' // use graph api version 2.8
		});

		// Now that we've initialized the JavaScript SDK, we call 
		// FB.getLoginStatus().  This function gets the state of the
		// person visiting this page and can return one of three states to
		// the callback you provide.  They can be:
		//
		// 1. Logged into your app ('connected')
		// 2. Logged into Facebook, but not your app ('not_authorized')
		// 3. Not logged into Facebook and can't tell if they are logged into
		//    your app or not.
		//
		// These three cases are handled in the callback function.

		FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
		});

		};

		// Load the SDK asynchronously
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		// Here we run a very simple test of the Graph API after login is
		// successful.  See statusChangeCallback() for when this call is made.
		function testAPI() {
		console.log('Welcome!  Fetching your information.... ');
		FB.api('/me', function(response) {
		  console.log('Successful login for: ' + response.name);
		  document.getElementById('status').innerHTML =
			'Thanks for logging in, ' + response.name + '!';
		});
		}
	</script>
    <div class="container-fluid">
		<div class="row">
			<header id="header" class="col-md-12">
				<div class="row">
					<div class="col-md-7 full768 of_header600">
						<h2 class="of_h2logo hdn replace">
							21 Mobile
						</h2>
						<h1 class="of_h1mobile raleway">
							Melhore suas vendas 
							com o SMS
						</h1>
						<p class="of_pmobile raleway">
							Veja como o Mobile Marketing pode ajudar a sua empresa
						</p>
					</div>
					<div class="col-md-5 full768">
						<div id="experimente" class="of_loginbox fr hdn">
							<div class="of_loginheader">
								<p class="raleway">
									Crie agora uma <br />
									<span>conta teste!</span>
								</p>
							</div>
							<div class="of_loginleft">
								<div class="of_loginsocial">
									<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
									</fb:login-button>

									<div id="status">
									</div>
								</div>
								<div class="of_hrou"></div>
								<div class="of_oubox raleway">
									ou
								</div>
							</div>
							<form class="of_loginform">
								<p class="onfocus lmail raleway trn">Email</p>
								<input type="email" class="inputlogin" name="lmail" id="lmail" placeholder="Email" onkeyup="insertform('lmail')" onfocusout="lostfocus()" />
								<p class="onfocus lname raleway trn">Nome</p>
								<input type="text" class="inputlogin" name="lname" id="lname" placeholder="Nome" onkeyup="insertform('lname')" onfocusout="lostfocus()" />
								<p class="onfocus lfone raleway trn">DDD + Telefone</p>
								<input type="tel" class="inputlogin" name="lfone" id="lfone" placeholder="DDD + Telefone" onkeyup="abFormatphone(this.id); insertform('lfone');" onfocusout="lostfocus()" />
								<input type="button" class="buttonlogin trn" value="Registrar" />
							</form>
						</div>
					</div>
				</div>
			</header>
		</div>
		<section class="row">
			<div class="of_destaquesbar col-md-12">
				<div class="row">
					<div class="col-md-3 of_destitem">
						<div class="of_descont">
							<h2 class="of_h2dest raleway">
								Venda Mais
							</h2>
							<p>
								Lojas físicas ou virtuais podem alavancar resultados em vendas através de SMS. Divulgue produtos, lançamentos, ofertas e promoções.
							</p>
						</div>
						<button type="button" class="of_destbutton" onclick="abScrollTo('experimente',500,0)">
							<span class="bg trn"></span>
							<span class="text raleway">Experimente grátis</span>
						</button>
					</div>
					<div class="col-md-3 of_destitem second">
						<div class="of_descont">
							<h2 class="of_h2dest raleway">
								Engaje e <br />Fidelize
							</h2>
							<p>
								Através de SMS, sua loja pode qualificar o relacionamento com clientes, gerar novas vendas e criar engajadores da marca.
							</p>
						</div>
						<button type="button" class="of_destbutton" onclick="abScrollTo('experimente',500,0)">
							<span class="bg trn"></span>
							<span class="text raleway">Experimente grátis</span>
						</button>
					</div>
					<div class="col-md-3 of_destitem">
						<div class="of_descont">
							<h2 class="of_h2dest raleway">
								Facilite<br /> Cobranças
							</h2>
							<p>
								Com SMS sua loja pode gerar alertas de pagamentos, enviar informações de cobrança, faturas, recibos e códigos.
							</p>
						</div>
						<button type="button" class="of_destbutton" onclick="abScrollTo('experimente',500,0)">
							<span class="bg trn"></span>
							<span class="text raleway">Experimente grátis</span>
						</button>
					</div>
					<div class="col-md-3 of_destitem last">
						<div class="of_descont">
							<h2 class="of_h2dest raleway">
								Comunicação<br /> Interna
							</h2>
							<p>
								Mantenha sua equipe informada, realize ações de endomarketing, informes de vendas e muitos mais através de SMS.
							</p>
						</div>
						<button type="button" class="of_destbutton" onclick="abScrollTo('experimente',500,0)">
							<span class="bg trn"></span>
							<span class="text raleway">Experimente grátis</span>
						</button>
					</div>
				</div>
			</div>
		</section>
		<section class="row">
			<div class="col-md-12 of_vantagens">
				<div class="row">
					<div class="col-md-6">
						<div class="of_vanbox">
							<div class="of_vleft">
								<img alt="Alertas" src="img/vantagens/alertas.png">
							</div>
							<div class="of_vright">
								<h3 class="of_h3vant raleway">
									Alertas
								</h3>
								<p class="of_pvant raleway">
									Envie mensagens SMS úteis, relevantes para seu público e funcionais para sua empresa.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="of_vanbox">
							<div class="of_vleft">
								<img alt="Cupons" src="img/vantagens/cupons.png">
							</div>
							<div class="of_vright">
								<h3 class="of_h3vant raleway">
									Cupons
								</h3>
								<p class="of_pvant raleway">
									Com SMS Marketing você pode distribuir cupons facilmente, sem necessidade de aplicativos, engajando e gerando vendas.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="of_vanbox">
							<div class="of_vleft">
								<img alt="Votações e Pesquisas" src="img/vantagens/votacoes-e-pesquisas.png">
							</div>
							<div class="of_vright">
								<h3 class="of_h3vant raleway bottom">
									Votações e Pesquisas
								</h3>
								<p class="of_pvant raleway">
									Conheça a opinião do seu público via SMS, qualificando relacionamentos e potencializando negócios.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="of_vanbox">
							<div class="of_vleft">
								<img alt="Chats" src="img/vantagens/chats.png">
							</div>
							<div class="of_vright">
								<h3 class="of_h3vant raleway bottom">
									Chats
								</h3>
								<p class="of_pvant raleway">
									Diretamente de um PC, atenda vários clientes simultaneamente, aumentando a produtividade de sua equipe, fidelizando público e reduzindo custos.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="row of_videobox">
			<div class="col-md-12 aligncenter">
				<p class="of_pvideo raleway auto">
					Ainda está em dúvida <br />
					sobre como o SMS pode te ajudar?
				</p> 
				<a class="fancyvideo nohover" data-fancybox-type="iframe" href="https://www.youtube.com/embed/ZWwEoxSxh8w?rel=0&autoplay=1">
					<button type="button" class="of_videobutton trn raleway">
						<span class="of_playbutton trn"></span>
						Assista ao <br />
						nosso vídeo
					</button>
				</a>
			</div>
		</section>
		<footer class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 of_aboutfooter">
						<img alt="21 Mobile" src="img/21-mobile-logo.png" class="of_logofooter">
						<p class="of_pfooabout opensans">
							Trabalhamos para simplificar a comunicação entre as pessoas. Quer conhecer melhor a nossa empresa? <br />
							Acesse <strong><a href="http://www.21mobile.com.br" class="nohover trn">www.21mobile.com.br</a></strong>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 of_copybox">
						<p class="of_pcopy raleway">
							© 2017 - <a href="http://www.21mobile.com.br" class="nohover">21 Mobile</a>. todos os direitos reservados. desenvolvido por <a href="http://oficial.ag" class="nohover">oficial.ag</a>
						</p>
					</div>
				</div>
				<div id="of_fixedbar" class="row">
					<div class="col-md-12">
						<button class="of_closefbar raleway none" onclick="openbar()" title="Fechar">
							x
						</button>
						<ul class="of_ulcontact">
							<a href="http://www.21mobile.com.br" class="nohover">
								<li class="of_lisite raleway">
									Visite <br />
									<span class="trn">Nosso Site</span>
								</li></a><li class="of_limail raleway">
								Nos envie <br />
								<span class="trn">Um Email</span>
							</li><a href="tel:1145606677" class="nohover"><li class="of_lifone raleway">
								Ligue Para <br />
								<span class="trn">(11) 4560-6677</span>
							</li></a><a href="tel:11985990098" class="nohover"><li class="of_lifone raleway">
								Ligue Para <br />
								<span class="trn">(11) 98599-0098</span>
							</li></a>
						</ul>
					</div>
				</div>
				<div id="of_fixedbarbt" class="none pointer" onclick="openbar()">
					<span class="icon1"></span><span class="icon2"></span><span class="icon3"></span><span class="icon3"></span>
				</div>
			</div>
		</footer>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	<!--	FANCYBOX	-->	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	
	<script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>
	
	<script type="text/javascript" src="plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	
	<script type="text/javascript" src="plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
	
	<script type="text/javascript" src="plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
  </body>
</html>