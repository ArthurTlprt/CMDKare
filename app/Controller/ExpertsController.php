<?php
class ExpertsController extends AppController
{

	public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin' && in_array($this->action, array('edit', 'delete', 'view', 'index', 'add'))) 
        {
            return true;
        }
        if (isset($user['role']) && $user['role'] === 'customer' && in_array($this->action, array('view'))) 
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

	public function add() 
	{
		debug($this->Auth->isAuthorized);
		if ($this->request->is('post')) 
		{
			$extension = strtolower(pathinfo($this->request->data['Expert']['avatar_file']['name'], PATHINFO_EXTENSION));
			$this->request->data['Expert']['user_id'] = $this->Auth->user('id');

			$id = $this->Expert->find('first', array('fields' => array('MAX(id)')));
			$id = $id[0]['MAX(id)'];
			settype($id, "integer");
			$id++;
			settype($id, "string");
			//je prends l'id max de la table

			if (!empty($this->request->data['Expert']['avatar_file']['tmp_name'])
				&& in_array($extension, array('jpg', 'jpeg', 'png'))) 
			{
				move_uploaded_file($this->request->data['Expert']['avatar_file']['tmp_name'], IMAGES . 'experts' . DS . $id . '.' . $extension);
			}
			elseif (!empty($this->request->data['Expert']['avatar_file']['tmp_name'])) 
			{
				$this->Session->setFlash("Vous ne pouvez pas envoyer ce type de fichier");
			}

			//$id = $this->Expert->find('first', array('fields' => array('MAX(id)')));
			//je prends l'id max de la table
			$this->request->data['Expert']['avatar'] = "experts/". $id .".". $extension;
			if ($this->Expert->save($this->request->data)) 
			{
				$this->Session->setFlash(__('Your Partner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('Impossible de sauvegarder ce poste'));
			}
		}
	}

	public function index()
	{
		$experts = $this->Expert->find('all');

		$this->set(compact('experts'));
	}

	public function admin()
	{
		$experts = $this->Expert->find('all');

		//debug($experts);

		//Je balance la purée et Guillaume se débrouille avec
		$this->set(compact('experts'));
	}

	
	public function edit($id = NULL)
	{
		$expert = $this->Expert->findById($id);
		if($expert)
		{
			//Je balance et Guillaume nous crée un joli form dynamique
			$this->set(compact('expert'));

			if($this->request->is('post', 'put'))
			{
				$this->Expert->id = $id;
				unlink($this->Expert->avatar);

				$extension = strtolower(pathinfo($this->request->data['Expert']['avatar_file']['name'], PATHINFO_EXTENSION));
				if (!empty($this->request->data['Expert']['avatar_file']['tmp_name'])
				&& in_array($extension, array('jpg', 'jpeg', 'png'))) 
				{
					move_uploaded_file($this->request->data['Expert']['avatar_file']['tmp_name'], IMAGES . 'experts' . DS . $id . '.' . $extension);
				}
				elseif (!empty($this->request->data['Expert']['avatar_file']['tmp_name'])) 
				{
					$this->Session->setFlash("Vous ne pouvez pas envoyer ce type de fichier");
				}

				//$id = $this->Expert->find('first', array('fields' => array('MAX(id)')));
				//je prends l'id max de la table
				$this->request->data['Expert']['avatar'] = "experts/". $id .".". $extension;

				if($this->Expert->save($this->request->data))
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

	public function delete($id = null) 
    {
        $this->Expert->id = $id;
        unlink($this->Expert->avatar);
        
        if (!$this->Expert->exists()) 
        {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->Expert->delete()) 
        {
            $this->Session->setFlash(__('Expert deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Expert was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }


}