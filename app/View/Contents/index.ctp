<header>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'users','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('add Post', array('controller' => 'posts','action' => 'add' )); ?></li>
	</ul>
</header>

<?php $end = $id_page_max[0]['MAX(id_page)']; 
//debug($end); 
		for ($i=0; $i <= $end; $i++) { 
			foreach ($contents as $content){ ?>

					//dans ce switch j'applique 
					//le html au bon contenu
					//  $content['Content']['body'] contient le texte
					// et $content['Content']['type'] contient le type de style à appliquer
					// ces deux champs du tableau viennent de la table "contents"
					switch ($content['Content']['type']) {
						case 'h1-"blue-text"':
							?>
							<h1 class="blue-text"><?= $content['Content']['body']; ?></h1>
							<?php
							break;
						case 'p':
							?>
							<p><?= $content['Content']['body']; ?> </p>
							<?php
							break;
						case 'h3-"blue-text-darken"':
							?>
							<h3 class="blue-text darken"> <?= $content['Content']['body']; ?> </h3>
							<?php
							break;
						case 'article2':
							?>
							<article><p><?= $content['Content']['body']; ?> </article></p>
							<?php
							break;
						case 'li1':
							?>
							<h2><?= $content['Content']['body']; ?> </h2>
							<?php
							break;
						default:
							echo "ce type n'est pas prévu";
							break;

					?>

					<?php } ?>

			<?php } ?>
			<p><?= $this->Html->link('lire la suite',  array('action' => 'view', $content['Content']['id_page'])); ?></p>
		<?php }?>