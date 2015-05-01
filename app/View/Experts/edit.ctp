<h1>Modifier un partenaire</h1>

<?= $this->Form->create('Expert', array('type' => 'file')); ?>
	<?= $this->Form->input('name', array('label' => 'Le nom - prénom', 'value' => $expert['Expert']['name'])); ?>
	<?= $this->Form->input('avatar_file', array('label' => 'Format jpg ou png', 'type' => 'file', 'value' => $expert['Expert']['avatar'])); ?>
<?= $this->Form->end('soumettre'); ?>