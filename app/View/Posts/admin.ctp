<?php foreach ($posts as $k => $post): ?>
	<h1><?= $post ['Post']['name']; ?> </h1>
	<p><?= $post['Post']['content']; ?></p>
	<p><?= $post['Post']['slug']; ?></p>
	<?= $this->Html->image($post['Post']['avatar'], array('alt' => 'CakePHP')); ?>
	<p><?= $this->Html->link('lire la suite', "view/".$post['Post']['id']); ?></p>
	<p><?= $this->Html->link('Modifier le post', "edit/".$post['Post']['id']); ?></p>
<?php endforeach ?>