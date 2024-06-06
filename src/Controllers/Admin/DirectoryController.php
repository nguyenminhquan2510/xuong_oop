<?php

namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Models\Directory;
use Rakit\Validation\Validator;

class DirectoryController extends Controller
{
    private $directory;
    public function __construct()
    {
        $this->directory = new Directory();
    }
    public function index()
    {
        $directorys = $this->directory->all_directory();
        $this->renderViewAdmin('directory.index', [
            'directorys' => $directorys,
        ]);
    }
    public function create()
    {
        $this->renderViewAdmin('directory.create');
    }
    public function store()
    {
        $validator = new Validator();
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('Location: ' . url('admin/directory/create'));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];
        }
        $this->directory->insert($data);
        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công!';

        header('Location: ' . url('admin/directory'));
        exit;
    }
    public function show($idDirectory)
    {
        $directory = $this->directory->findByID_directory($idDirectory);
        $this->renderViewAdmin('directory.show',[
            'directory'=> $directory
        ]);
    }
    public function edit($idDirectory)
    {
        $directory = $this->directory->findByID_directory($idDirectory);
        $this->renderViewAdmin('directory.update',[
                'directory'=> $directory
        ]);
    }
    public function update($idDirectory)
    {
        $directory = $this->directory->findByID_directory($idDirectory);
        $validator = new Validator();
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('Location: ' . url("admin/directory/{$directory['idDirectory']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];
        }
        $this->directory->update($idDirectory,$data);
        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công!';
        header('Location: ' . url("admin/directory/{$directory['idDirectory']}/edit"));
        exit;
       
    }
    public function delete($idDirectory){
        try {
            //code...
            $directorys = $this->directory->all_directory();
            $this->directory->delete($idDirectory);
            $_SESSION['status']=true;
            $_SESSION['msg'] = 'Xóa thành công';
        } catch (\Throwable $th) {
            //throw $th;
            $_SESSION['status']=false;
            $_SESSION['msg'] = 'Xóa thành công';
        }
        header('Location: ' . url('admin/directory'));
        exit();
    }
}
