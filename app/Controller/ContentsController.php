<?php
class ContentsController extends AppController
{

	public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin' && in_array($this->action, array('edit', 'delete', 'logout', 'admin'))) 
        {
            return true;
        }
        /*if (isset($user['role']) && $user['role'] === 'customer' && in_array($this->action, array('view', 'index'))) 
        {
            return true;
        }*/
        // Default deny
        return false;
	}

    public function beforeFilter() 
    {
        parent::beforeFilter();

        //page pouvant être vue sans être logged in
        //mais ne marche pas
        $this->Auth->allow('index', 'view');
    }


	public function index()
	{
		$contents = $this->Content->find('all');
		$id_page_max = $this->Content->find('first', array(
		    'fields' => array('MAX(id_page)'),
		));

		//debug($contents);

		//Je balance la purée et Guillaume se débrouille avec
		$this->set('id_page_max', $id_page_max);
		$this->set(compact('contents'));
	}

	public function admin()
	{
		$contents = $this->Content->find('all');
		$id_page_max = $this->Content->find('first', array(
		    'fields' => array('MAX(id_page)')
		));

		//debug($contents);

		//Je balance la purée et Guillaume se débrouille avec
		$this->set('id_page_max', $id_page_max);
		$this->set(compact('contents'));
	}

	
	public function edit($id = NULL)
	{
		$content = $this->Content->findById($id);
		if($content)
		{
			//Je balance et Guillaume nous crée un joli form dynamique
			$this->set(compact('content'));

			if($this->request->is('post', 'put'))
			{
				$this->Content->id = $id;

				if($this->Content->save($this->request->data))
				{
					$this->Session->setFlash(__('Votre content a été mis à jour.'));
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

	/*public function view($id = NULL)
	{
		$content = $this->Content->findById($id);
		if($content)
		{
			$this->set(compact('content'));
		}
		else
		{
			die("This content doesn't exist");
		}
	}*/
}