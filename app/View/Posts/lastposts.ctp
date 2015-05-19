<?php $posts = $this->requestAction(array('controller' => 'posts', 'action' => 'getLastPosts')); ?>


<?php foreach ($posts as $k => $post): ?>
	<h1><?= $post ['Post']['name']; ?> </h1>
	<p><?= $post['Post']['content']; ?></p>
	<p><?= $post['Post']['slug']; ?></p>
	<?= $this->Html->image($post['Post']['avatar'], array('alt' => 'CakePHP')); ?>
<?php endforeach ?>