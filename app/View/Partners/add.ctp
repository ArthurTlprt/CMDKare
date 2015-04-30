<h1>Ajouter un associé</h1>

<?= $this->Form->create('Partner', array('type' => 'file')); ?>
	<?= $this->Form->input('name', array('label' => 'Le nom - prénom' )); ?>
	<?= $this->Form->input('legend', array('label' => 'Courte info' )); ?>
	<?= $this->Form->input('avatar_file', array('label' => 'Format jpg ou png', 'type' => 'file')); ?>
<?= $this->Form->end('soumettre'); ?>