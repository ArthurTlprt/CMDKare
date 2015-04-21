<?php
class Link extends AppModel
{
	/*public $validate = array(
		'url' => array(
			'isEmpty' => array(
				'rule' => 'notEmpty',
				'message' =>'Vous devez rentrer une URL' ),
			'isURL' => array(
				'rule' => 'url',
						'required' => true,
						'allowEmpty' => false,
						'message' => 'Votre url n\'est pas valide')
		));*/
	public $validate = array('url' => '/^[a-z0-0\]+$/');
}