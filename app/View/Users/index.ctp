<header>
	<h1>Index utilisateurs</h1>
	<ul>
		<li><?php echo $this->Html->link('add User', array('controller' => 'users','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in users', array('controller' => 'users','action' => 'login' )); ?></li>
		<li><?php echo $this->Html->link('log out users', array('controller' => 'users','action' => 'logout' )); ?></li>
		<li><?php echo $this->Html->link('edit your info', array('controller' => 'users','action' => 'edit', $user['User']['id'])); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' , $user['User']['id'])); ?></li>
	</ul>
</header>