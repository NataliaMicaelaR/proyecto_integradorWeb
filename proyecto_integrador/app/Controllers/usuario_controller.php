<?php
namespace App\Controllers;
 Use App\Models\usuario_Model;
 use CodeIgniter\Controller;

 class usuario_controller extends Controller{

    public function __construct (){
        helper (['form', 'url']);
    
    }
    public function create() {

        $dato ['titulo']='Registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
    public function formValidation() {
        $input = $this->validate([
            'nombre'    => 'required|min_length[3]',
            'apellido'  => 'required|min_length[3]|max_length[25]',
            'email'     => 'required|min_length[4]|max_length[100] |valid_email|is_unique[usuarios.email]',
            'usuario'   => 'required|min_length[3]',
            'pass'      =>'required|min_length[3]|max_length[30]',
            ],
            );
            $formModel = new usuario_Model();

            if (!$input){
                $data ['titulo']='Registro';
                echo view('front/head_view',$data);
                echo view('front/navbar_view');
                echo view('back/usuario/registro', ['validation' => $this->validator]);
                echo view('front/footer_view');
        
            } else {
                $formModel->save([
                    'nombre'    => $this->request->getVar ('nombre'),
                    'apellido'  => $this->request->getVar ('apellido'),
                    'email'     => $this->request->getVar ('email'),
                    'usuario'   => $this->request->getVar ('usuario'),
                    'pass'      => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),

                ]);
                session()->setFlashdata('msg', 'Usuario registrado con exito');
                    return redirect()->to(base_url('/login'));

            }
        
    }
 }
