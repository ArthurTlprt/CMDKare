<?php foreach ($partners as $k => $partner): ?>
	<h1><?= $partner ['Partner']['name']; ?> </h1>
	<p><?= $partner['Partner']['legend']; ?></p>
	<?= $this->Html->image($partner['Partner']['avatar'], array('alt' => 'CakePHP')); ?>
<?php endforeach ?>