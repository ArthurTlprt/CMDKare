<?php
App::uses('AppController', 'Controller');
//AuthComponent::user('id');

class UsersController extends AppController {

    public function beforeFilter() 
    {
        parent::beforeFilter();

        //page pouvant être vue sans être logged in
        $this->Auth->allow('index', 'view');
    }

    public function isAuthorized($user) 
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin' && in_array($this->action, array('edit', 'delete', 'add', 'logout', 'view', 'index'))) 
        {
            return true;
        }
        // Default deny
        return false;
    }

    //////////////////////////////    vues    ////////////////////////////////

    public function login() 
    {
        if ($this->request->is('post')) 
        {
            debug($this->request->data);
            debug($this->Auth->login());
            if ($this->Auth->login()) 
            {
                echo "$this->Auth->login()";
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() 
    {
        $this->Auth->logout();
        return $this->redirect($this->Auth->logout());
    }

    public function index() 
    {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        debug($this->Auth->login());
    }

    public function view() 
    {
        debug($this->Auth->user('id'));
        $this->User->id = $this->Auth->user('id');
        if (!$this->User->exists())
         {
            throw new NotFoundException(__('Invalid user'));
        }
        $user = $this->User->findById($this->Auth->user('id'));
        $this->set(compact('user'));

        $this->set('user', $this->User->read(null, $this->Auth->user('id')));
    }

    public function add() 
    {
        $user = array('username' => 'ID'.rand(1000, 9999) , 'password' => $this->generateRandomString(6).'.'.rand(0, 9));
        $this->set(compact('user'));
        if ($this->request->is('post')) 
        {
            $this->User->create();
            if ($this->User->save($this->request->data)) 
            {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }
    
    public function edit() 
    {
        debug($this->Auth->user('id'));
        $this->User->id = $this->Auth->user('id');
        if (!$this->User->exists()) 
        {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) 
        {
            if ($this->User->save($this->request->data)) 
            {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } 
        else 
        {
            $this->request->data = $this->User->read(null, $this->User->id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) 
    {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');
        debug($this->Auth->login());
        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) 
        {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) 
        {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
    
}
?>