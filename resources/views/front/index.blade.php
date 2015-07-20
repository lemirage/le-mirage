@extends('front.template')

@section('head')
		{!! HTML::style('css/reset.css') !!}
		{!! HTML::style('css/styletimeline.css') !!}
@stop
@section('main')

<!--start info service-->
<section class="info_service">
	<div class="container">
						<div class="row sub_content">
								<div class="col-sm-4 col-md-4 col-lg-4 ">
										<div class="serviceBox_2 indexwhite">
											<a href="http://cecstleu.fr/mondioring">
												<i class="fa fa-paw"></i>
												<h3>Mondioring</h3>
												<p>Le mondioring est un sport canin</p>
											</a>
										</div>
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4 ">
										<div class="serviceBox_2 indexwhite">
												<i class="fa fa-briefcase"></i>
												<h3>Works</h3>
												<p>Veille et divers travaux / forum & blog et Cv en ligne</p>
										</div>
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4 ">
										<div class="serviceBox_2 indexwhite">
												<i class="fa fa-video-camera"></i>
												<h3>Photographie</h3>
												<p>Photographe amateur cf les divers Portfolio</p>
										</div>
								</div>
						</div>
	</div>
</section>
	<section id="cd-timeline" class="cd-container">
<!--end info service

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
					<img src="img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img

			<div class="cd-timeline-content">
				<h2>Concours de Mondioring</h2>
				<p>Je Joue en Niveau 1 avec mon chien Imhotep du bois les dizy BB Malinois de 2 ans à Saint leu la forêt </p>
				<span class="cd-date">17 et 18 Octobre 2015</span>
			</div> <!-- cd-timeline-content
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>BAC +4 Concepteur Web - Option Développeur</h2>
				<p>Formation Bac + 4 Diplômante – Titre RNCP Niveau  II dans  <a href="http://www.institut-f2i.fr/courses/bac4-diplomant-concepteur-web-option-developpeur/"> l'école F2I</a> et dans l'entreprise <a href="http://www.net-sense.eu/">net-Sense</a>
				<br>	<br>
			Création de sites web et sites événementiels : avec et sans framework ( zend laravel).
				<br>Création de web view pour applications
				<br>Modification de site e-commerce sous prestashop
</p>
				<span class="cd-date">Juillet 2015</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
			<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>BAC +3 License SIL - SISW</h2>
				<p>Licence professionnelle Métiers de l'informatique : systèmes d'information et gestion des données parcours Systèmes d'informations et services web à <a href="http://www.uvsq.fr/licence-professionnelle-metiers-de-l-informatique-systemes-d-information-et-gestion-des-donnees-parcours-systemes-d-informations-et-services-web-341094.kjsp?RH=1271771445917">Iut de vélizy</a> dans la web Agency <a href="http://www.equinoa.com/fr/">Equinoa</a>
					<br><br>Tma:
		<br>Kibio (modifications/ajouts de fonctionnalités)
					<br>	Bge (refonte graphique /modifications/ajouts de fonctionnalités)
						<br>Unavf( refonte graphique /modifications/ajouts de fonctionnalités)
					<br>Reusiteschool(modifications/ajouts de fonctionnalités)
					<br>Citycosy( refonte graphique /modifications/ajouts de fonctionnalités)
			<br>	<br>
				Dev:
				<br>Monetik (développement)


</p>
				<span class="cd-date">Juin 2013</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">

					<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>BAC +2 DUT Informatique </h2>
				<p>DUT Informatique en formation initial à l’Université  <a href="http://www.iut-orsay.u-psud.fr/fr/formations/dut/info_dut_fc.html">d’Orsay</a> (Paris Sud)
				<br>Avril à Juillet 2012 Stage de fin d'étude chez Accenture Technologie Solutions
					(Java + analyse) </p>
				<span class="cd-date">Juillet 2012</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Baccalauréat Série Scientifique spécialité Maths</h2>
				<p>Baccalauréat Série Scientifique spécialité Maths au <a href="http://www.lyc-claudel-palaiseau.ac-versailles.fr/">lycée camille claudel </a> à palaiseau </p>
				<span class="cd-date">Juin 2009</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->


	</section> <!-- cd-timeline -->
	<!--start info service-->
		<section class="info_service">
			<div class="container">
				<div class="row sub_content">
					<div class="rs_box">
						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
									<i class="fa fa-laptop"></i>
									<h3>Système d’exploitation <h3>
								</div>
								<div class="fr_content">
									<p>Windows <br> Mac <br>Linux (Debian, Ubuntu )
										</p>

								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
									<i class="fa fa-keyboard-o"></i>
									<h3>Langages de programmation</h3>
								</div>
								<div class="fr_content">
									<p>PHP POO MVC<br> Framework (laravel, zend)<br> Prestashop<br>Html5<br> JavaScript<br> Ajax<br> JQuery <br>CSS 3</p>

								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
									<i class="fa fa-server"></i>
									<h3>Bureautique</h3>
								</div>
								<div class="fr_content">
									<p>Suite office <br> Photoshop<br> Illustrator<br> inDesign.</p>

								</div>
							</div>
						</div>

					</div>
				</div>
                <div class="row sub_content">
					<div class="rs_box">
						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
                  <i class="fa fa-gear"></i>
									<h3>Base de données</h3>
								</div>
								<div class="fr_content">
									<p>(PL-SQL/SQL) sur<br> Mysql<br> Oracle.</p>

								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
                  <i class="fa fa-external-link"></i>
									<h3>Réseaux</h3>
								</div>
								<div class="fr_content">
									<p>TCP<br> IP<br> DNS<br> SMTP<br> Routage<br> Parfeux</p>

								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
                  <i class="fa fa-suitcase"></i>
									<h3>Méthode d’analyse</h3>
								</div>
								<div class="fr_content">
									<p>UML2<br> Merise.</p>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
@stop
@section('scripts')

{!! HTML::script('js/maintimeline.js') !!}

{!! HTML::script('js/modernizr.js') !!}

@stop
