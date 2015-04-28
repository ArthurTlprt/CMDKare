<?php foreach ($legalMonitorings as $k => $legalMonitoring): ?>
	<h1><?= $legalMonitoring['LegalMonitoring']['title']; ?> </h1>
	<p><?= $legalMonitoring['LegalMonitoring']['content']; ?></p>
	<p><?= $legalMonitoring['LegalMonitoring']['date']; ?></p>
	<p><?= $this->Html->link('lire la suite', array('action' => 'view', $legalMonitoring['LegalMonitoring']['id'])); ?></p>
	<p><?= $this->Html->link('Modifier le post', array('action' => 'edit', $legalMonitoring['LegalMonitoring']['id'])); ?></p>
	<p><?= $this->Html->link('Supprimer le post', array('action' => 'delete', $legalMonitoring['LegalMonitoring']['id'])); ?></p>
<?php endforeach ?>