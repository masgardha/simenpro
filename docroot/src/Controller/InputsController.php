<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Inputs Controller
 *
 * @property \App\Model\Table\InputsTable $Inputs
 * @method \App\Model\Entity\Input[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InputsController extends AppController
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
        $inputs = $this->paginate($this->Inputs);

        $this->set(compact('inputs'));
    }

    /**
     * View method
     *
     * @param string|null $id Input id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $input = $this->Inputs->get($id, [
            'contain' => ['Stores', 'Stocks'],
        ]);

        $this->set(compact('input'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $input = $this->Inputs->newEmptyEntity();
        if ($this->request->is('post')) {
            $param = $this->request->getData();
            $stockTables = TableRegistry::getTableLocator()->get('Stocks');
            $stocks = $stockTables->get($param['stock_id']);
            if (!empty($stocks)) {
                $stock = $stocks->stocks;
                $updateStock = $stock + $param['quantity'];
                $stocks->stocks = $updateStock;
                $stockTables->save($stocks);
            }

            $input = $this->Inputs->patchEntity($input, $param);
            if ($this->Inputs->save($input)) {
                $this->Flash->success(__('The input has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The input could not be saved. Please, try again.'));
        }
        $stores = $this->Inputs->Stores->find('list', ['limit' => 200])->all();
        $stocks = $this->Inputs->Stocks->find('list', ['limit' => 200])->all();
        $this->set(compact('input', 'stores', 'stocks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Input id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $input = $this->Inputs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $input = $this->Inputs->patchEntity($input, $this->request->getData());
            if ($this->Inputs->save($input)) {
                $this->Flash->success(__('The input has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The input could not be saved. Please, try again.'));
        }
        $stores = $this->Inputs->Stores->find('list', ['limit' => 200])->all();
        $stocks = $this->Inputs->Stocks->find('list', ['limit' => 200])->all();
        $this->set(compact('input', 'stores', 'stocks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Input id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $input = $this->Inputs->get($id);
        if ($this->Inputs->delete($input)) {
            $this->Flash->success(__('The input has been deleted.'));
        } else {
            $this->Flash->error(__('The input could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
