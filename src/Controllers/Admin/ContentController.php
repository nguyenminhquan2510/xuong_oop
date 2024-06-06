<?php

namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Models\Content;
use Rakit\Validation\Validator;

class ContentController extends Controller
{
    private $content;
    public function __construct()
    {
        $this->content = new Content();
    }
    public function index()
    {
        $contents = $this->content->all_join_connent();
        $this->renderViewAdmin('content.index', [
            'contents' => $contents,
        ]);
    }
    public function create()
    {
        $name_directory = $this->content->name_directory();
        $this->renderViewAdmin('content.create', [
            'name_directory' => $name_directory,
        ]);
    }
    public function store()
    {

        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'content'                  => 'required|max:50',
            'idDirectory'              => 'required|max:50',
            'image'                    => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/content/create'));
            exit;
        } else {
            $data = [
                'content' => $_POST['content'],
                'idDirectory' => $_POST['idDirectory'],
            ];

            if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {

                $from = $_FILES['image']['tmp_name'];
                $to   = 'uploads/' . time() . $_FILES['image']['name'];
                // Helper::debug(PATH_ASSET . $to);
                if (move_uploaded_file($from, PATH_ASSET . $to)) {
                    $data['image'] = $to;
                } else {
                    $_SESSION['errors']['image'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/content/create'));
                    exit;
                }
            }

            $this->content->insert($data);
            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/content'));
            exit;
        }
    }

    public function show($id)
    {
        $content = $this->content->findByID_join_connent($id);
        $this->renderViewAdmin('content.show', [
            'content' => $content,
        ]);
    }
    public function edit($id)
    {
        $content = $this->content->findByID_join_connent($id);
        $this->renderViewAdmin('content.update', [
            'content' => $content,
        ]);
    }
    public function update($id)
    {
        $content = $this->content->findByID_join_connent($id);
        $validator = new Validator;
        $validation = $validator->make($_POST +$_FILES, [
            'content'                  => 'required|max:50',
            'idDirectory'              => 'required|max:50',
            'image'                    => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/content/{$content['id']}/edit"));
            exit;
        } else {
            $data = [
                'content' => $_POST['content'],
                'idDirectory' => $_POST['idDirectory'],
            ];
            $flagUpload = false;
            if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {
                $flagUpload = true;
                $from = $_FILES['image']['tmp_name'];
                $to   = 'uploads/' . time() . $_FILES['image']['name'];
                // Helper::debug(PATH_ASSET . $to);
                if (move_uploaded_file($from, PATH_ASSET . $to)) {
                    $data['image'] = $to;
                } else {
                    $_SESSION['errors']['image'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url("admin/content/{$content['id']}/edit"));
                    exit;
                }
            }

            $this->content->update($id, $data);
            if($flagUpload && $content['avata'] && file_exists(PATH_ASSET .$content['avata'] ) ){
                unlink(PATH_ASSET .$content['avata']);
            }
            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/content/{$content['id']}/edit"));
            exit;
        }
    }
}
