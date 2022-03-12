<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Outputs Controller
 *
 * @property \App\Model\Table\OutputsTable $Outputs
 * @method \App\Model\Entity\Output[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OutputsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores', 'Stocks'],
        ];
        $outputs = $this->paginate($this->Outputs);

        $this->set(compact('outputs'));
    }

    /**
     * View method
     *
     * @param string|null $id Output id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $output = $this->Outputs->get($id, [
            'contain' => ['Stores', 'Stocks'],
        ]);

        $this->set(compact('output'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $output = $this->Outputs->newEmptyEntity();
        if ($this->request->is('post')) {
            $output = $this->Outputs->patchEntity($output, $this->request->getData());
            if ($this->Outputs->save($output)) {
                $this->Flash->success(__('The output has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The output could not be saved. Please, try again.'));
        }
        $stores = $this->Outputs->Stores->find('list', ['limit' => 200])->all();
        $stocks = $this->Outputs->Stocks->find('list', ['limit' => 200])->all();
        $this->set(compact('output', 'stores', 'stocks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Output id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $output = $this->Outputs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $output = $this->Outputs->patchEntity($output, $this->request->getData());
            if ($this->Outputs->save($output)) {
                $this->Flash->success(__('The output has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The output could not be saved. Please, try again.'));
        }
        $stores = $this->Outputs->Stores->find('list', ['limit' => 200])->all();
        $stocks = $this->Outputs->Stocks->find('list', ['limit' => 200])->all();
        $this->set(compact('output', 'stores', 'stocks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Output id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $output = $this->Outputs->get($id);
        if ($this->Outputs->delete($output)) {
            $this->Flash->success(__('The output has been deleted.'));
        } else {
            $this->Flash->error(__('The output could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
