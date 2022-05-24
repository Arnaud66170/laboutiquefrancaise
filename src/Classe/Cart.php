<?php

namespace App\Classe;

use Symfony\Component\HttpFoundation\RequestStack;


class Cart
{
    private $session;
    
    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
    }
    
    public function add($id)
    {
        $this->session->set('cart',[
            [
                'id'=>$id,
                'quantity'=>1,
            ]
        ]);       
    }

    public function get()
    {
        return $this->session->get('cart');
    }

    public function remove()
    {
        return $this->session->remove('cart');
    }
   
}