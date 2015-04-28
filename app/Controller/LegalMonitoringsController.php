<?php
class LegalMonitoringsController extends AppController
{

	public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin' && in_array($this->action, array('add' ,'edit', 'delete', 'view', 'index', 'admin'))) 
        {
            return true;
        }
        if (isset($user['role']) && $user['role'] === 'customer' && in_array($this->action, array('view', 'index'))) 
        {
            return true;
        }
        // Default deny
        return false;
	}

    /*public function beforeFilter() 
    {
        parent::beforeFilter();

        //page pouvant être vue sans être logged in
        $this->Auth->allow();
    }*/


	public function index()
	{
		$legalMonitorings = $this->LegalMonitoring->find('all');
		//Je balance la purée et Guillaume se débrouille avec
		$this->set(compact('legalMonitorings'));
	}

	public function admin()
	{
		$legalMonitorings = $this->LegalMonitoring->find('all');
		$this->set(compact('legalMonitorings'));
	}

	public function add()
	{
		if ($this->request->is('post')) 
        {
            $this->LegalMonitoring->create();

            $maDate = "Le ".date('d')."/".date('m')."/".date('Y')." à ".date('H')."h";
        	$this->request->data['LegalMonitoring']['date'] = $maDate;  
         	
            if ($this->LegalMonitoring->save($this->request->data)) 
            {
            	debug($this->request->data);
                $this->Session->setFlash(__('La veille juridique a été sauvegardée'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Please, try again.')
            );
        }
	}

	public function view($id = NULL)
	{
		$legalMonitoring = $this->LegalMonitoring->findById($id);
		$this->set(compact('legalMonitoring'));
	}

	
	public function edit($id = NULL)
	{
		$legalMonitoring = $this->LegalMonitoring->findById($id);
		if($legalMonitoring)
		{
			//Je balance et Guillaume nous crée un joli form dynamique
			$this->set(compact('legalMonitoring'));

			if($this->request->is('put') || $this->request->is('post'))
			{
				$this->LegalMonitoring->id = $id;

				if($this->LegalMonitoring->save($this->request->data))
				{
					$this->Session->setFlash(__('Votre veille juridique a été mise à jour.'));
	            	return $this->redirect(array('action' => 'index'));
				}
				else
				{
					die("unable to edit your content");
				}
			}
		}
		else
		{
			die("This content doesn't exist");
		}

	}

	public function delete($id = NULL)
	{
		//$this->request->allowMethod('post');

        $this->LegalMonitoring->id = $id;
        if (!$this->LegalMonitoring->exists()) 
        {
            throw new NotFoundException(__('Invalid LegalMonitoring'));
        }
        if ($this->LegalMonitoring->delete()) 
        {
            $this->Session->setFlash(__('LegalMonitoring deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('LegalMonitoring was not deleted'));
        return $this->redirect(array('action' => 'index'));
	}
}