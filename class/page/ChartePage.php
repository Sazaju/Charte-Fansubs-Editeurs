<?php
class ChartePage extends Page {
	public function getId() {
		return 'charte';
	}
	
	public function getMenuRank() {
		return 2;
	}
	
	public function getMenuTitle() {
		return 'Charte';
	}
	
	public function getContent() {
		$content = "<p>Aucune charte n'existe pour l'instant. Cependant, certains points ont déjà été proposés. En voici un aperçu.</p>
		<div id='convention-fansubs'>
			<p>Suggestions pour les teams de fansub :</p>
			<ul>
				<li>attendre quelques semaines après la sortie d'une série au Japon avant de la fansubber, dire de laisser le temps aux éditeurs de prendre les licences</li>
				<li>quand déjà commencée, arrêter le fansub et la distribution d'une série lors de la confirmation de l'acquisition de sa licence par un éditeur</li>
				<li>l'utilisation de moyens (DRM ?) pour faire périmer les vidéos pour que, quand la distribution s'arrête pour laisser place à l'offre légale, ce ne soit plus qu'une question de temps avant que les fichiers illégaux ne disparaissent (tant que la licence n'est pas acquise, les fichiers peuvent toujours être retéléchargés, ça entretient aussi les communautés vu que ça fait revenir les gens)</li>
			</ul>
		</div>
		<div id='convention-editeurs'>
			<p>Suggestions pour les éditeurs :</p>
			<ul>
				<li>reconnaissance de l'expérience acquise dans le fansub par les boîtes légales, pour favoriser un transfert de compétences du fansub vers les boites</li>
				<li>faire preuve d'une certaine transparence sur le choix des prix, tout au moins quand ceux-ci suscitent des incompréhensions (je parle pas de donner tous les chiffres, mais seulement de savoir justifier les prix en expliquant les processus et les ordres de grandeurs, enfin ce que Wakanim fait déjà plutôt bien je trouve)</li>
			</ul>
		</div>
		<p style='clear: both;'>Pour discuter des différents points ou en proposer d'autres : ".Format::toHtmlUrl('http://www.wakanim.tv/forum/news-5/HK/0').'</p>';
		return $content;
	}
}
?>