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

				<?php if($content['Content']['id_page'] == $i){
					switch ($content['Content']['type']) {
						case 'titre1':
							?>
							<h1><?= $content['Content']['body']; ?> </h1>
							<?php
							break;
						case 'titre2':
							?>
							<h3><?= $content['Content']['body']; ?> </h3>
							<?php
							break;
						case 'article1':
							?>
							<article><p><?= $content['Content']['body']; ?> </article></p>
							<?php
							break;
						case 'article2':
							?>
							<article><p><?= $content['Content']['body']; ?> </article></p>
							<?php
							break;
						case 'li1':
							?>
							<h2><?= $content['Content']['body']; ?> </h2>
							<?php
							break;
						default:
							echo "ce type n'est pas prévu";
							break;
					}?>
				<?php } ?>

			<?php } ?>
			<p><?= $this->Html->link('lire la suite',  array('action' => 'view', $content['Content']['id_page'])); ?></p>
		<?php }?>