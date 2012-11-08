<?php
class HomePage extends Page {
	public function getId() {
		return 'home';
	}
	
	public function getMenuRank() {
		return 1;
	}
	
	public function getMenuTitle() {
		return 'Home';
	}
	
	public function getContent() {
		$content = "
		<p>Nombre de débats ont été menés sur nombre de forums. Le fansub, activité amateur visant à sous-titrer des médias étrangers (notamment dans l'animation japonaise) pour les partager gratuitement via Internet, est un vecteur potentiel de pertes financières pour les éditeurs français et créateurs japonais, qui doivent faire face à une concurrence déloyale. D'un autre côté, le fansub est aussi un fort vecteur de promotion des différentes séries, ce qui peut entretenir de manière notable la demande en France en faisant de la publicité gratuite. Nombre de débats ont déjà été mené, mais peu de chiffres ont été donnés pour appuyer les dires des uns et des autres (bien que quelques travaux sont déjà sortis sur le sujet, cf. la <a href='?page=works'>liste des travaux</a>).</p>
		
		<p>Bien que tout le monde ne le sache pas, le fansub est une activité illégale : c'est un acte de contrefaçon puni par la loi (ceux qui ont les références, merci de les faire passer {^_^}). Il n'a donc pas lieu d'être si l'on s'en tient à la perspective légale du problème. Cependant, le fansub est aujourd'hui largement banalisé et, vivant principalement sur la neutralité du net, voit chaque jour plus de monde s'intéresser à ses productions. De plus, malgré son statut d'activité illégale, la demande est suffisamment forte pour générer beaucoup de trafic sur la toile. On peut donc se douter que d'autres reprendront le flambeau si certaines teams de fansub venaient à fermer leurs portes. Dans ce contexte, qu'il soit question d'éradication, de réduction ou même simplement de régulation des communautés de fansub n'est donc plus à la portée des autorités. Quant aux éditeurs légaux, la chasse aux piratage pour leurs licences a un coût en ressources (temps, argent, ...) suffisamment imposant pour ne pas être qu'une activité subsidiaire.</p>
		
		<p>L'idée derrière une charte entre éditeurs et fansubbeurs est d'entretenir un contexte favorable entre offres légales et activités amateurs. En effet, le fansub en lui-même est avant tout à base de partage, et non de concurrence, ce qui n'est pas en contradiction avec l'idée d'avoir des éditeurs légaux pouvant vivre de leur activité et prendre des parts de marché. L'objectif de cette charte est donc de promouvoir des perspectives compatibles entre les deux domaines, de façon à montrer qu'il est possible de faire cohabiter les deux activités en réduisant considérablement la concurrence déloyale.</p>
		
		<p>Autrement dit, cette charte vise à favoriser :<br/>
		- l'alignement des teams de fansub sur le rythme des éditeurs légaux pour promouvoir le développement du marché de la japanimation en France<br/>
		- la transparence des éditeurs légaux vis-à-vis du public pour informer et responsabiliser les internautes dans leur consommation</p>
		
		<p>La discussion est en cours à cette adresse : ".Format::toHtmlUrl('http://www.wakanim.tv/forum/news-5/HK/0').", mais pour tout commentaire sur ce site vous pouvez envoyer un mail à ".Format::toHtmlEmail('sazaju@gmail.com', "l'administrateur").".</p>";
		return $content;
	}
}
?>