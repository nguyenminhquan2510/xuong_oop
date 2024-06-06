<?php

namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Models\User;
use Rakit\Validation\Validator;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        $this->renderViewAdmin('users.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('users.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
            'email'                 => 'required|email',
            'password'              => 'required|min:6',
            'avatar'                => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/users/create'));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];

            if (!empty($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {

                $from = $_FILES['avatar']['tmp_name'];
                $to   = 'uploads/' . time() . $_FILES['avatar']['name'];
                // Helper::debug(PATH_ASSET . $to);
                if (move_uploaded_file($from, PATH_ASSET . $to)) {
                    $data['avatar'] = $to;
                } else {
                    $_SESSION['errors']['avatar'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/users/create'));
                    exit;
                }
            }

            $this->user->insert($data);
            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/users'));
            exit;
        }
    }



    public function show($id)
    {
        $user = $this->user->findByID($id);
        $this->renderViewAdmin('users.show', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $user = $this->user->findByID($id);
        $this->renderViewAdmin('users.update', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $user = $this->user->findByID($id);
        $validator = new Validator();
        $validation = $validator->make($_POST + $_FILES, [
            'name'      => 'required|max:50',
            'email'     => 'required|email',
            'password'  => 'min:6',
            'avatar'    => 'uploaded_file:0,2048K,png,jpeg,jpg'
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/users/{$user['id']}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => !empty($_POST['password'])
                    ?? password_hash($_POST['password'], PASSWORD_DEFAULT)::$user['password']
            ];
            $flagUpload = false;
            if (!empty($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {
                $flagUpload = true;
                $from = $_FILES['avatar']['tmp_name'];
                $to   = 'uploads/' . time() . $_FILES['avatar']['name'];
                // Helper::debug(PATH_ASSET . $to);
                if (move_uploaded_file($from, PATH_ASSET . $to)) {
                    $data['avatar'] = $to;
                } else {
                    $_SESSION['errors']['avatar'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url("admin/users/{$user['id']}/edit"));
                    exit;
                }
            }

            $this->user->update($id, $data);

            if($flagUpload && $user['avata'] && file_exists(PATH_ASSET .$user['avata'] ) ){
                unlink(PATH_ASSET .$user['avata']);
            }
            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/users/{$user['id']}/edit"));
            exit;
        }
    }

    public function delete($id)

    {
        $user = $this->user->findByID($id);
        try {
            //code...
            $this->user->delete($id);
            if($user['avata'] && file_exists(PATH_ASSET .$user['avata'] ) ){
                unlink(PATH_ASSET .$user['avata']);
            }
            $_SESSION['status'] = true;
            $_SESSION['msg'] = "Xóa thành công";
        } catch (\Throwable $th) {
            //throw $th;
            $_SESSION['status'] = false;
            $_SESSION['msg'] = "Xóa không thành công";
        }
        header('Location: ' . url('admin/users'));
        exit();
    }
}
