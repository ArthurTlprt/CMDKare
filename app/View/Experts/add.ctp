<h1>Ajouter un partenaire</h1>

<?= $this->Form->create('Expert', array('type' => 'file')); ?>
	<?= $this->Form->input('name', array('label' => 'Le nom - prénom' )); ?>
	<?= $this->Form->input('avatar_file', array('label' => 'Format jpg ou png', 'type' => 'file')); ?>
<?= $this->Form->end('soumettre'); ?>