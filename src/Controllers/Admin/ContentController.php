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
        $page=$_GET["page"] ?? 1;
        [$contents,$totalPage] = $this->content->paginate_Directory((int)$page, $perPage = 5);
       
        $this->renderViewAdmin('content.index', [
            'contents' => $contents,
            'totalPage'=> $totalPage
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
            'content'                  => 'required|min:10',
            'title'                  => 'required|min:1',
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
                'title' => $_POST['title'],
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
        $name_directory = $this->content->name_directory();
        $content = $this->content->findByID_join_connent($id);
        $this->renderViewAdmin('content.update', [
            'content' => $content,
            'name_directory'=> $name_directory,
        ]);
    }
    public function update($id)
    {
        $content = $this->content->findByID_join_connent($id);
        $validator = new Validator;
        $validation = $validator->make($_POST +$_FILES, [
            'content'                  => 'required|min:10',
            'idDirectory'              => 'required|max:50',
            'title'                  => 'required|min:1',
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
                'title' => $_POST['title'],
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

            header('Location: ' . url("admin/content/"));
            exit;
        }
    }
    public function delete($id) {
        $content = $this->content->findByID_join_connent($id);
        try {
            //code...
            $this->content->delete($id);
            if($content['image'] && file_exists(PATH_ASSET .$content['image'] ) ){
                unlink(PATH_ASSET .$content['image']);
            }
            $_SESSION['status'] = true;
            $_SESSION['msg'] = "Xóa thành công";
        } catch (\Throwable $th) {
            //throw $th;
            $_SESSION['status'] = false;
            $_SESSION['msg'] = "Xóa không thành công";
        }
        header('Location: ' . url('admin/content'));
        exit();
    }
}
