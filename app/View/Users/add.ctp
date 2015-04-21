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
<?= $this->Form->create('User'); ?>
	<h3>Vous êtes sur le point d'ajouter un nouvel accés</h3>
		<?= $this->Form->input('email', array('label' => 'Le nouveau mail','type' => 'email', 'placeholder' => 'destinataire' )); ?>
	<?= $this->Form->input('username', array('label' => 'Le nouvel identifiant', 'placeholder' => 'id' , 'value' => $user['username'])); ?>
	<?= $this->Form->input('password', array('label' => 'Le nouveau mots de passe', 'placeholder' => 'id', 'type' => 'text' ,'value' => $user['password'])); ?>
	<br />
<?= $this->Form->end('Soumettre l\'inscription'); ?>