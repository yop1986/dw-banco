<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClMonedas Controller
 *
 * @property \App\Model\Table\ClMonedasTable $ClMonedas
 *
 * @method \App\Model\Entity\ClMoneda[] paginate($object = null, array $settings = [])
 */
class ClMonedasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clMonedas = $this->paginate($this->ClMonedas);

        $this->set(compact('clMonedas'));
        $this->set('_serialize', ['clMonedas']);
    }

    /**
     * View method
     *
     * @param string|null $id Cl Moneda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clMoneda = $this->ClMonedas->get($id, [
            'contain' => []
        ]);

        $this->set('clMoneda', $clMoneda);
        $this->set('_serialize', ['clMoneda']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clMoneda = $this->ClMonedas->newEntity();
        if ($this->request->is('post')) {
            $clMoneda = $this->ClMonedas->patchEntity($clMoneda, $this->request->getData());
            if ($this->ClMonedas->save($clMoneda)) {
                $this->Flash->success(__('The cl moneda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cl moneda could not be saved. Please, try again.'));
        }
        $this->set(compact('clMoneda'));
        $this->set('_serialize', ['clMoneda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cl Moneda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clMoneda = $this->ClMonedas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clMoneda = $this->ClMonedas->patchEntity($clMoneda, $this->request->getData());
            if ($this->ClMonedas->save($clMoneda)) {
                $this->Flash->success(__('The cl moneda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cl moneda could not be saved. Please, try again.'));
        }
        $this->set(compact('clMoneda'));
        $this->set('_serialize', ['clMoneda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cl Moneda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clMoneda = $this->ClMonedas->get($id);
        if ($this->ClMonedas->delete($clMoneda)) {
            $this->Flash->success(__('The cl moneda has been deleted.'));
        } else {
            $this->Flash->error(__('The cl moneda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
