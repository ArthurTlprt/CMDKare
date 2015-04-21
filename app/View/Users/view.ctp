<header>
	<h1>Vous êtes sur votre espace administrateur</h1>
	<ul>
		<li><?php echo $this->Html->link('add User', array('controller' => 'users','action' => 'add' )); ?></li>
		<li><?php echo $this->Html->link('log in users', array('controller' => 'users','action' => 'login' )); ?></li>
		<li><?php echo $this->Html->link('log out users', array('controller' => 'users','action' => 'logout' )); ?></li>
		<li><?php echo $this->Html->link('edit your info', array('controller' => 'users','action' => 'edit' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>
<h2>This is him/her</h2>
<ul>
	<li><?= $user['User']['username']; ?></li>
	<li><?= $user['User']['email']; ?></li>
</ul>