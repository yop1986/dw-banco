<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClTrestados Controller
 *
 * @property \App\Model\Table\ClTrestadosTable $ClTrestados
 *
 * @method \App\Model\Entity\ClTrestado[] paginate($object = null, array $settings = [])
 */
class ClTrestadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clTrestados = $this->paginate($this->ClTrestados);

        $this->set(compact('clTrestados'));
        $this->set('_serialize', ['clTrestados']);
    }
}
