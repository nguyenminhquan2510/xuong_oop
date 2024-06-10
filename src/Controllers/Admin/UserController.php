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
        $page=$_GET["page"] ?? 1;
        [$users,$totalPage] = $this->user->paginate((int)$page, $perPage = 5);
       
        $this->renderViewAdmin('users.index', [
            'users' => $users,
            'totalPage'=> $totalPage
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
            'type'                  => 'required|min:0',
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
                'type' => $_POST['type'],
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
            'type'      => 'required|min:0',
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
                'type' => $_POST['type'],
                'password' => !empty($_POST['password'])
                    ? password_hash($_POST['password'],
                    PASSWORD_DEFAULT):$user['password'],
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

            if($flagUpload && $user['avatar'] && file_exists(PATH_ASSET .$user['avatar'] ) ){
                unlink(PATH_ASSET .$user['avatar']);
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
            if($user['avatar'] && file_exists(PATH_ASSET .$user['avatar'] ) ){
                unlink(PATH_ASSET .$user['avatar']);
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
