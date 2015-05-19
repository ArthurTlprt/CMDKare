<?php
class PostsController extends AppController
{

	public function isAuthorized($user) {
    // Tous les users inscrits peuvent ajouter les posts
    /*if ($this->action === 'add') {
        return true;
    }*/

    // Le propriétaire du post peut l'éditer et le supprimer
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin' && in_array($this->action, array('index', 'edit', 'delete', 'add', 'logout', 'view', 'index', 'admin'))) 
        {
            return true;
        }
        // Default deny
        return false;
        
    //return parent::isAuthorized($user);
}

    public function beforeFilter() 
    {
        parent::beforeFilter();

        //page pouvant être vue sans être logged in
        $this->Auth->allow('index', 'view', 'getLastPosts');
    }

	public function add() 
	{
		debug($this->Auth->isAuthorized);
		if ($this->request->is('post')) 
		{
			$extension = strtolower(pathinfo($this->request->data['Post']['avatar_file']['name'], PATHINFO_EXTENSION));
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');

			$id = $this->Post->find('first', array('fields' => array('MAX(id)')));
			$id = $id[0]['MAX(id)'];
			settype($id, "integer");
			$id++;
			settype($id, "string");
			//je prends l'id max de la table

			if (!empty($this->request->data['Post']['avatar_file']['tmp_name'])
				&& in_array($extension, array('jpg', 'jpeg', 'png'))) 
			{
				move_uploaded_file($this->request->data['Post']['avatar_file']['tmp_name'], IMAGES . 'avatars' . DS . $id . '.' . $extension);
			}
			elseif (!empty($this->request->data['Post']['avatar_file']['tmp_name'])) 
			{
				$this->Session->setFlash("Vous ne pouvez pas envoyer ce type de fichier");
			}

			//$id = $this->Post->find('first', array('fields' => array('MAX(id)')));
			//je prends l'id max de la table
			$this->request->data['Post']['avatar'] = "avatars/". $id .".". $extension;
			if ($this->Post->save($this->request->data)) 
			{
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('Impossible de sauvegarder ce poste'));
			}
		}
	}

	function index()
	{
		$posts = $this->Post->find('all');
		$this->set(compact('posts'));
	}

	function getLastPosts()
	{
		$posts = $this->Post->find('all', array('limit' => '4'));
		return $posts;
	}

	function admin()
	{
		$posts = $this->Post->find('all');
		$this->set(compact('posts'));
	}


	public function view($id = NULL)
	{
		$post = $this->Post->findById($id);
		if($post)
		{
			$this->set(compact('post'));
		}
		else
		{
			die("This post doesn't exist");
		}
	}
	
	// + gerer la modif image avec edit
	public function edit($id = NULL)
	{
		$post = $this->Post->findById($id);
		if($post)
		{
			$this->set(compact('post'));

			if($this->request->is('post', 'put'))
			{
				$this->Post->id = $id;

				if($this->Post->save($this->request->data))
				{
					$this->Session->setFlash(__('Votre post a été mis à jour.'));
	            	return $this->redirect(array('action' => 'index'));
				}
				else
				{
					die("unable to edit your post");
				}
			}
		}
		else
		{
			die("This post doesn't exist");
		}

	}

	public function delete($id = null) 
    {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');
        //debug($this->Auth->login());
        //$this->request->allowMethod('post');

        $this->Post->id = $id;
        if (!$this->Post->exists()) 
        {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->Post->delete()) 
        {
            $this->Session->setFlash(__('Post deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Post was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
}