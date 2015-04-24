<header>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'users','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('add Post', array('controller' => 'posts','action' => 'add' )); ?></li>
	</ul>
</header>

<?php debug($contents); ?>
	//ajouter boucle for avec compteur pour différencier $id_page
<?php for($i=0; $i++; $i<$length)
	<?php foreach ($contents as $k => $content): ?>
		<h1><?= $content['Content']['body']; ?> </h1>
	<?php endforeach ?>
		<p><?= $this->Html->link('lire la suite', "view/".$content['Content']['id_page']); ?></p>
		<p><?= $this->Html->link('Modifier le post', "edit/".$content['Content']['id_page']); ?></p>