<header>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'users','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('view all Member', array('controller' => 'members','action' => 'all' )); ?></li>
		<li><?php echo $this->Html->link('view all Post', array('controller' => 'posts','action' => 'index' )); ?></li>
	</ul>
</header>
<h2>This is it</h2>
<ul>
	<li><?= $post['Post']['name']; ?></li>
	<li><?= $post['Post']['id']; ?></li>
	<li><?= $post['Post']['content']; ?></li>
	<li><?= $post['Post']['slug']; ?></li>
</ul>