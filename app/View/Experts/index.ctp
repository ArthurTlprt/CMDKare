<?php foreach ($experts as $k => $expert): ?>
	<h1><?= $expert['Expert']['name']; ?> </h1>
	<?= $this->Html->image($expert['Expert']['avatar'], array('alt' => 'CakePHP')); ?>
<?php endforeach ?>