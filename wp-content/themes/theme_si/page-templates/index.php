<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


</script>

<header>
<div class="row">
	<div class="menu small-4 large-1 columns">
		<nav id="nav" class="overlay">

			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


			<ul class="overlay-content">
				<li><a href="#">Accueil</a>/li>
				<li><a href="#">Produits</a>/li>
				<li><a href="#">À propos</a>/li>
				<li><a href="#">Contact</a>/li>
				<div class="social">
					<p>Suivez nous</p>
					<p>FB</p>
				</div>
			</ul>
			</nav>
		<span onclick="openNav()">open</span>
	</div>

		<h1 class="logo small-4 large-offset-4 large-1 columns"><img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/logo_final_structures_interieures.png" alt="Structures Intérieures"></h1>
		<p class="small-4 large-1 columns">Q</p>
</div>
</header>

<main>

<section class="caroussel">
		<ul class="slide">
			<li>
				<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/rack-a-vinyles-800x580.jpg" alt="Produit">
				<div class="texte-slider">
					<figcaption>Rack à vinyls</figcaption>
					<a href="#" class="button">Plus de détails</a>
				</div>
			</li>
			<li>
				<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/rack-a-vinyles-800x580.jpg" alt="Produit">
				<div class="texte-slider">
					<figcaption>Rack à vinyls</figcaption>
					<a href="#">Plus de détails</a>
				</div>
			</li>
			<li>
				<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/rack-a-vinyles-800x580.jpg" alt="Produit">
				<div class="texte-slider">
					<figcaption>Rack à vinyls</figcaption>
					<a href="#">Plus de détails</a>
				</div>
			</li>
			<li>
				<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/rack-a-vinyles-800x580.jpg" alt="Produit">
				<div class="texte-slider">
					<figcaption>Rack à vinyls</figcaption>
					<a href="#">Plus de détails</a>
				</div>
			</li>
		</ul>
</section>



<section class="produits">
	<h2>Nos produits</h2>
	<div class="row">
		<div class="gauche large-6 column">
			<figure class="amenagement">
				<div class="cover">
					<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/cover_amenagement.jpg" alt="Aménagement sur mesure - Structures Intérieures">
					<figcaption>Aménagement sur mesure</figcaption>
				</div>
			</figure>
		</div>
		<div class="droit large-6 column">
			<figure class="meubles">
				<div class="cover">
					<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/cover_meubles.jpg" alt="Meubles - Structures Intérieures">
					<figcaption>Meubles</figcaption>
				</div>
			</figure>
			<figure class="petits">
				<div class="cover">
					<img class="petit"src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/cover_petitmob.jpg" alt="Petits mobiliers - Structures Intérieures">
					<figcaption>Petits mobiliers</figcaption>
				</div>
			</figure>
		</div>
	</div>
</section>

<section class="apropos">

	<div class="row">
		<div class="texte-droite large-offset-6 columns">
			<h2>Olivier Hess</h2>
			<p>Olivier Hass, artisant menuisier, porte une attention particulière à proposer des projets sur mesures à ses clients, intégrant aux pièces les particularités du client (environnement, personnalité) et le deseign estampillé Structures Intérieures. Chaque réalisation est un rojet à part entière; Olivier Hass rencontre le client, échange sur ses objectif et usages, propose différentes simulations avant de livrer et d’installer les pièces définitives.</p>
			<a href="#">Contactez-nous</a>
		</div>
	</div>


</section>

<section class="contact">

</section>
</main>

<footer>
<div class="gauche">
	<nav>
		<ul>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Mentions légales</a></li>
		</ul>
	</nav>
	<p>© 2017 Structures Intérieures</p>
</div>
<div class="droit">
	<a href="#">FB</a>
</div>

</footer>
<script>
function openNav() {
	document.getElementById("nav").style.width = "100%";
}

function closeNav() {
	document.getElementById("nav").style.width = "0%";
}

$(document).ready(function(){
$('.slide').slick({

});
});
</script>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
//]]></script>
