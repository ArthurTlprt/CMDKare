<?php
App::uses('AppModel', 'Model');

class LegalMonitoring extends AppModel {

    /*public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );*/

    /*public function beforeSave($options = array()) 
    {
        $maDate = "Le ".date('d')."/".date('m')."/".date('Y')." à ".date('H')."h";
        $this->data[$this->alias]['date'] = $maDate;         
        return true;
    }*/
}

?>