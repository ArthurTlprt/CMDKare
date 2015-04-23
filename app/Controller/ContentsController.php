<?php
class ContentsController extends AppController
{

	public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin' && in_array($this->action, array('edit', 'delete', 'logout', 'view', 'index'))) 
        {
            return true;
        }
        // Default deny
        return false;
	}

    public function beforeFilter() 
    {
        parent::beforeFilter();

        //page pouvant être vue sans être logged in
        $this->Auth->allow('index');
    }


	public function index()
	{
		$contents = $this->Content->find('all');
		//Je balance la purée et Guillaume se débrouille avec
		$this->set(compact('contents'));
	}

	
	public function edit($id_page = NULL)
	{
		$content = $this->Content->findById($id_page);
		if($content)
		{
			//Je balance et Guillaume nous crée un joli form dynamique
			$this->set(compact('content'));

			if($this->request->is('content', 'put'))
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
}