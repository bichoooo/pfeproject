<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * JobApplications Controller
 *
 * @property \App\Model\Table\JobApplicationsTable $JobApplications
 */
class JobApplicationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->JobApplications->find()
            ->contain(['Jobs']);
        $jobApplications = $this->paginate($query);

        $this->set(compact('jobApplications'));
    }

    /**
     * View method
     *
     * @param string|null $id Job Application id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobApplication = $this->JobApplications->get($id, contain: ['Jobs']);
        $this->set(compact('jobApplication'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobApplication = $this->JobApplications->newEmptyEntity();
        if ($this->request->is('post')) {
            $jobApplication = $this->JobApplications->patchEntity($jobApplication, $this->request->getData());
            if ($this->JobApplications->save($jobApplication)) {
                $this->Flash->success(__('The job application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job application could not be saved. Please, try again.'));
        }
        $jobs = $this->JobApplications->Jobs->find('list', limit: 200)->all();
        $this->set(compact('jobApplication', 'jobs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Job Application id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobApplication = $this->JobApplications->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobApplication = $this->JobApplications->patchEntity($jobApplication, $this->request->getData());
            if ($this->JobApplications->save($jobApplication)) {
                $this->Flash->success(__('The job application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job application could not be saved. Please, try again.'));
        }
        $jobs = $this->JobApplications->Jobs->find('list', limit: 200)->all();
        $this->set(compact('jobApplication', 'jobs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Job Application id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobApplication = $this->JobApplications->get($id);
        if ($this->JobApplications->delete($jobApplication)) {
            $this->Flash->success(__('The job application has been deleted.'));
        } else {
            $this->Flash->error(__('The job application could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
