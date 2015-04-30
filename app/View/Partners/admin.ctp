<?php foreach ($partners as $k => $partner): ?>
	<h1><?= $partner ['Partner']['name']; ?> </h1>
	<p><?= $partner['Partner']['legend']; ?></p>
	<?= $this->Html->image($partner['Partner']['avatar'], array('alt' => 'CakePHP')); ?>
	<p><?= $this->Html->link('lire la suite', "view/".$partner['Partner']['id']); ?></p>
	<p><?= $this->Html->link('Modifier le post', "edit/".$partner['Partner']['id']); ?></p>
<?php endforeach ?>