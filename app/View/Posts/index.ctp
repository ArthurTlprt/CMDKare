<header>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'users','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('add Post', array('controller' => 'posts','action' => 'add' )); ?></li>
	</ul>
</header>
<?php $this->extend('Elements'); ?>
<?php foreach ($posts as $k => $post): ?>
	<h1><?= $post ['Post']['name']; ?> </h1>
	<p><?= $post['Post']['content']; ?></p>
	<p><?= $post['Post']['slug']; ?></p>
	<?= $this->Html->image($post['Post']['avatar'], array('alt' => 'CakePHP')); ?>
<?php endforeach ?>

<?php echo $this->element('lastposts'); ?>
