<?php
declare(strict_types=1);

namespace App\Controller;

class CarController extends AppController{

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function index(){
        $car = $this->paginate($this->Car);
//echo '<pre>';
//print_r($car);
//die();
        $this->set(compact('car'));
    }

    public function add(){

        $car = $this->Owner->newEmptyEntity();
        if ($this->request->is('post')){
            $owner = $this->Car->patchEntity($car, $this->request->getData());
            if ($this->Car->save($car)){
                $this->Flash->success(__('Car Owner infos Submited'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Try Again !'));
        }
        $this->set(compact('car'));
    }
}
