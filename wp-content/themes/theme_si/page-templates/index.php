<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>


<header>
	<div class="menu">
		<nav>
			<ul>
				<li><a href="#">Accueil</a></li>
				<li><a href="#">Produits</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<div class="social">
			<p>Suivez nous</p>
			<p>FB</p>
		</div>
	</div>
		<div class="row">
			<a href="#" class="small-2 large-1 columns">RWD</a>
			<h1 class="small-2 large-10 columns">Logo</h1>
			<p class="small-2 large-1 columns">Q</p>
		</div>
</header>

<main>

	<section class="slider">
		<div class="orbit" role="region" aria-label="Slider - Structures Intérieures" data-orbit>
	  <ul class="orbit-container">
	    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
	    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
	    <li class="is-active orbit-slide">
				<img src="http://localhost:8888/examen.web2/rack-a-vinyles-800x580/" alt="Produit">
				<figcaption>Rack à vinyls</figcaption>
				<a href="#">Plus de détails</a>
	    </li>
	    <li class="orbit-slide">
				<img src="http://localhost:8888/examen.web2/rack-a-vinyles-800x580/" alt="Produit">
				<figcaption>Rack à vinyls</figcaption>
				<a href="#">Plus de détails</a>
	    </li>
	    <li class="orbit-slide">
				<img src="http://localhost:8888/examen.web2/rack-a-vinyles-800x580/" alt="Produit">
				<figcaption>Rack à vinyls</figcaption>
				<a href="#">Plus de détails</a>
	    </li>
	    <li class="orbit-slide">
				<img src="http://localhost:8888/examen.web2/rack-a-vinyles-800x580/" alt="Produit">
				<figcaption>Rack à vinyls</figcaption>
				<a href="#">Plus de détails</a>
	    </li>
	  </ul>
	  <nav class="orbit-bullets">
	    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
	    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
	    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
	    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
	  </nav>
	</div>
	</section>



	<section class="produits">
		<h2>Nos produits</h2>
		<div class="grid">
			<figure class="amenagement grid-item">
				<div class="cover">
					<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/cover_amenagement.jpg" alt="Aménagement sur mesure - Structures Intérieures">
					<figcaption>Aménagement sur mesure</figcaption>
				</div>
			</figure>
			<figure class="meubles grid-item">
				<div class="cover">
					<img src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/cover_meubles.jpg" alt="Meubles - Structures Intérieures">
					<figcaption>Meubles</figcaption>
				</div>
			</figure>
			<figure class="petits grid-item">
				<div class="cover">
					<img class="petit"src="http://localhost:8888/examen.web2/wp-content/uploads/2017/06/cover_petitmob.jpg" alt="Petits mobiliers - Structures Intérieures">
					<figcaption>Petits mobiliers</figcaption>
				</div>
			</figure>
		</div>
	</section>

	<section class="apropos">
		<h2>Olivier Hess</h2>
		<p>Olivier Hass, artisant menuisier, porte une attention particulière à proposer des projets sur mesures à ses clients, intégrant aux pièces les particularités du client (environnement, personnalité) et le deseign estampillé Structures Intérieures. Chaque réalisation est un rojet à part entière; Olivier Hass rencontre le client, échange sur ses objectif et usages, propose différentes simulations avant de livrer et d’installer les pièces définitives.</p>
		<a href="#">Contactez-nous</a>
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
$('.grid').masonry({
// options
itemSelector: '.grid-item',
});
</script>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
//]]></script>
