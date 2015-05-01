	<?= $this->Form->create('Content'); ?>
	<?= $this->Form->input('body', array('label' => 'Votre contneu', 'value' => $content['Content']['body'])); ?>
<?= $this->Form->end('Submit the edition'); ?>