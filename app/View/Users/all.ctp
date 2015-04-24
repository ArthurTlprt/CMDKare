<header>
	<h1>Voici tous les utilisateurs</h1>
	<h2>vous pouvez les supprimer ou les éditer.</h2>
</header>
<table>
        <tr>
            <th>Username</th>
            <th>e-mail</th>
            <th>Modifier</th>
            <th>Spprimer</th>
        </tr>
		<?php foreach ($users as $k => $user) : ?>
			<tr>
			<td><?= $user['User']['username']; ?></td>
			<td><?= $user['User']['email']; ?></td>
			<td><?= $this->Html->link('Modifier' ,array('controller' => 'users','action' => 'edit', $user['User']['id'])); ?></td>
			<td><?= $this->Html->link('Supprimer', array('controller' => 'users','action' => 'delete', $user['User']['id'])); ?></td>
			</tr>
		<?php endforeach; ?>

