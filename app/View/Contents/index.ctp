<header>
	<ul>
		<li><?php echo $this->Html->link('view Member', array('controller' => 'users','action' => 'index' )); ?></li>
		<li><?php echo $this->Html->link('add Post', array('controller' => 'posts','action' => 'add' )); ?></li>
	</ul>
</header>

<?php $end = $id_page_max[0]['MAX(id_page)']; 
//debug($end); 
		for ($i=0; $i <= $end; $i++) { 
			foreach ($contents as $content){ ?>

			<?php if($content['Content']['id_page'] == $i){ //echo $i;?>
			<h1><?= $content['Content']['body']; ?> </h1>
			<?php } ?>

		<?php } ?>


			<p><?= $this->Html->link('lire la suite',  array('action' => 'view', $content['Content']['id_page'])); ?></p>
			<p><?= $this->Html->link('Modifier le post', array('action' => 'edit', $content['Content']['id_page'])); ?></p>
			<?php
		}
		?>