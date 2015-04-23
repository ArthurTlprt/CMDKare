<header>
	<h1>Veille juridique</h1>
	<ul>
		<li><?php echo $this->Html->link('add User', array('controller' => 'users','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in users', array('controller' => 'users','action' => 'login' )); ?></li>
		<li><?php echo $this->Html->link('log out users', array('controller' => 'users','action' => 'logout' )); ?></li>
		<li><?php echo $this->Html->link('edit your info', array('controller' => 'users','action' => 'edit' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>
<?= $this->Form->create('LegalMonitoring'); ?>
	<h3>Vous êtes sur le point d'ajouter une nouvelle veille juridique</h3>
	<?= $this->Form->input('title', array('label' => 'Votre titre' )); ?>
	<?= $this->Form->textarea('content', array('label' => 'Votre contenu')); ?>
	<br />
<?= $this->Form->end('Soumettre l\'ajout'); ?>