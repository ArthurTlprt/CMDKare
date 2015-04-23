
<?= $this->Form->create('LegalMonitoring'); ?>
	<h3>Vous êtes sur le point de modifier une nouvelle veille juridique</h3>
	<?= $this->Form->input('title', array('label' => 'Votre titre' , 'value' => $legalMonitoring['LegalMonitoring']['title'])); ?>
	<?= $this->Form->textarea('content', array('label' => 'Votre contenu', 'value' => $legalMonitoring['LegalMonitoring']['content'])); ?>
	<br />
<?= $this->Form->end('Soumettre l\'ajout'); ?>