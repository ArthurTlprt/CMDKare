<header>
	<h1>Index utilisateurs</h1>
	<ul>
			<li><?php echo $this->Html->link('log out users', array('controller' => 'users','action' => 'logout' )); ?></li>
			<li><?php echo $this->Html->link('edit your infos', array('controller' => 'users','action' => 'edit', $user['User']['id'])); ?></li>
			<li><?php echo $this->Html->link('Voir vos infos', array('controller' => 'users','action' => 'view' , $user['User']['id'])); ?></li>
	</ul>
</header>