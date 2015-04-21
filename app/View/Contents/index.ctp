<header>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'users','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('add Post', array('controller' => 'posts','action' => 'add' )); ?></li>
	</ul>
</header>
<?php foreach ($contents as $k => $content): ?>
	<h1><?= $content ['Content']['name']; ?> </h1>
	<p><?= $content['Content']['content']; ?></p>
	<p><?= $content['Content']['slug']; ?></p>
	<p><?= $this->Html->link('lire la suite', "view/".$content['Content']['id']); ?></p>
	<p><?= $this->Html->link('Modifier le post', "edit/".$content['Content']['id']); ?></p>
<?php endforeach ?>