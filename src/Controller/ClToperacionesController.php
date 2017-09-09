<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClToperaciones Controller
 *
 * @property \App\Model\Table\ClToperacionesTable $ClToperaciones
 *
 * @method \App\Model\Entity\ClToperacione[] paginate($object = null, array $settings = [])
 */
class ClToperacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clToperaciones = $this->paginate($this->ClToperaciones);

        $this->set(compact('clToperaciones'));
        $this->set('_serialize', ['clToperaciones']);
    }
}
