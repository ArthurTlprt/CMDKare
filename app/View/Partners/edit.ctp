<h1>Modifier un associé</h1>

<?= $this->Form->create('Partner', array('type' => 'file')); ?>
	<?= $this->Form->input('name', array('label' => 'Le nom - prénom', 'value' => $partner['Partner']['name'])); ?>
	<?= $this->Form->input('legend', array('label' => 'Courte info', 'value' => $partner['Partner']['legned'])); ?>
	<?= $this->Form->input('avatar_file', array('label' => 'Format jpg ou png', 'type' => 'file', 'value' => $partner['Partner']['avatar'])); ?>
<?= $this->Form->end('soumettre'); ?>