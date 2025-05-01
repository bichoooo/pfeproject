<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Recruitments Controller
 *
 * @property \App\Model\Table\RecruitmentsTable $Recruitments
 */
class RecruitmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Recruitments->find()
            ->contain(['Jobs', 'Departments', 'Users']);
        $recruitments = $this->paginate($query);

        $this->set(compact('recruitments'));
    }

    /**
     * View method
     *
     * @param string|null $id Recruitment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recruitment = $this->Recruitments->get($id, contain: ['Jobs', 'Departments', 'Users']);
        $this->set(compact('recruitment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recruitment = $this->Recruitments->newEmptyEntity();
        if ($this->request->is('post')) {
            $recruitment = $this->Recruitments->patchEntity($recruitment, $this->request->getData());
            if ($this->Recruitments->save($recruitment)) {
                $this->Flash->success(__('The recruitment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recruitment could not be saved. Please, try again.'));
        }
        $jobs = $this->Recruitments->Jobs->find('list', limit: 200)->all();
        $departments = $this->Recruitments->Departments->find('list', limit: 200)->all();
        $users = $this->Recruitments->Users->find('list', limit: 200)->all();
        $this->set(compact('recruitment', 'jobs', 'departments', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recruitment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recruitment = $this->Recruitments->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recruitment = $this->Recruitments->patchEntity($recruitment, $this->request->getData());
            if ($this->Recruitments->save($recruitment)) {
                $this->Flash->success(__('The recruitment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recruitment could not be saved. Please, try again.'));
        }
        $jobs = $this->Recruitments->Jobs->find('list', limit: 200)->all();
        $departments = $this->Recruitments->Departments->find('list', limit: 200)->all();
        $users = $this->Recruitments->Users->find('list', limit: 200)->all();
        $this->set(compact('recruitment', 'jobs', 'departments', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recruitment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recruitment = $this->Recruitments->get($id);
        if ($this->Recruitments->delete($recruitment)) {
            $this->Flash->success(__('The recruitment has been deleted.'));
        } else {
            $this->Flash->error(__('The recruitment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
