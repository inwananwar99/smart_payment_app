<?php

namespace App\Controllers;
use App\Models\User;

class Home extends BaseController
{
    public function loginPage()
    {
        $data = [
             'title' => 'Login Page',
        ];
        return view('login',$data);
    }

    public function registerPage(){
        $data = [
            'title' =>'Register Page'
        ];
        return view('register',$data);
    }

    public function register(){
        helper('password');
        $validation = service('validation');

        // Get the username and password from the form input
        $name = $this->request->getPost('name');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $userModel = new User();
        $userModel->save([
            'nama' => $name,
            'username' => $username,
            'password' => $hashedPassword,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->to('/')->with('message', 'Success! Your account has been registered.');
    }

    public function login(){
        helper('password');

        // Get the username and password from the form input
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Retrieve the user from the database
        $userModel = new User();
        $user = $userModel->where('username', $username)->first();
        
        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, set the user session or whatever you need to do
            return redirect()->to('/dashboard');
        } else {
            // Password is incorrect
            return redirect()->to('/')->with('error', 'Invalid login');
        }
    }

    public function dashboardPage(){
        $data = [
            'title' =>'Dashboard Page'
        ];
        return view('dashboard',$data);
    }

}
