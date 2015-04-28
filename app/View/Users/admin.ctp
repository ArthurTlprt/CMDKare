<header>
	<h1>Ici vous pouvez accéder à toutes les actions propres à l'admnistrateur:</h1>
	<ul>
		<li><?php echo $this->Html->link('Ajouter un accés', array('controller' => 'users','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('Modifier un accés', array('controller' => 'users','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('Supprimer un accés', array('controller' => 'users','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('Ajouter un post', array('controller' => 'posts','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('Modifier un post', array('controller' => 'posts','action' => 'edit' )); ?></li>
		<li><?php echo $this->Html->link('Supprimer un post', array('controller' => 'posts','action' => 'delete' )); ?></li>
		<li><?php echo $this->Html->link('Ajouter une veille juridique', array('controller' => 'legalMonitorings','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('Modifier une veille juridique', array('controller' => 'legalMonitorings','action' => 'edit' )); ?></li>
		<li><?php echo $this->Html->link('Supprimer une veille juridique', array('controller' => 'legalMonitorings','action' => 'delete' )); ?></li>
	</ul>
</header>

