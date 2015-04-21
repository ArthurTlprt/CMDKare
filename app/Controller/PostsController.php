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
        if (isset($user['role']) && $user['role'] === 'admin' && in_array($this->action, array('edit', 'delete', 'add', 'logout', 'view', 'index'))) 
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
        $this->Auth->allow('index', 'view');
    }

	public function add() 
	{
		debug($this->Auth->isAuthorized);
		if ($this->request->is('post')) 
		{
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			if ($this->Post->save($this->request->data)) 
			{
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	function index()
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
}