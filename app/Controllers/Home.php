<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()

    {
        $data ['titulo'] = 'Pagina Principal';
        
        echo view( 'front/head_view',   $data);
        echo view( 'front/navbar_view');
        echo view( 'front/principal');
        echo view( 'front/footer_view');
    }

    public function quienes_somos()
    {
        $data ['titulo'] = 'Quienes Somos';
        echo view( 'front/head_view',  $data);
        echo view( 'front/navbar_view');
        echo view( 'front/quienes_somos');
        echo view( 'front/footer_view');
    }
    public function login(): void
    {
        $data ['titulo'] = 'Login';
        echo view( 'front/head_view',  $data);
        echo view( 'front/navbar_view');
        echo view( 'front/login');
        echo view( 'front/footer_view');
    }
    public function registro(): void
    {
        $data ['titulo'] = 'registro';
        echo view('front/head_view',  $data);
        echo view('front/navbar_view');
        echo view('front/registro');
    }

    
        public function acercade(): void
    {
        $data ['titulo'] = 'Acerca de';
        echo view('front/head_view',  $data);
        echo view( 'front/navbar_view');
        echo view( 'front/acercade');
    }
}
