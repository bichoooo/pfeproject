<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Attendences Controller
 *
 * @property \App\Model\Table\AttendencesTable $Attendences
 */
class AttendencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Attendences->find()
            ->contain(['Users']);
        $attendences = $this->paginate($query);

        $this->set(compact('attendences'));
    }

    /**
     * View method
     *
     * @param string|null $id Attendence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attendence = $this->Attendences->get($id, contain: ['Users']);
        $this->set(compact('attendence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attendence = $this->Attendences->newEmptyEntity();
        if ($this->request->is('post')) {
            $attendence = $this->Attendences->patchEntity($attendence, $this->request->getData());
            if ($this->Attendences->save($attendence)) {
                $this->Flash->success(__('The attendence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendence could not be saved. Please, try again.'));
        }
        $users = $this->Attendences->Users->find('list', limit: 200)->all();
        $this->set(compact('attendence', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendence = $this->Attendences->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendence = $this->Attendences->patchEntity($attendence, $this->request->getData());
            if ($this->Attendences->save($attendence)) {
                $this->Flash->success(__('The attendence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendence could not be saved. Please, try again.'));
        }
        $users = $this->Attendences->Users->find('list', limit: 200)->all();
        $this->set(compact('attendence', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendence id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendence = $this->Attendences->get($id);
        if ($this->Attendences->delete($attendence)) {
            $this->Flash->success(__('The attendence has been deleted.'));
        } else {
            $this->Flash->error(__('The attendence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
