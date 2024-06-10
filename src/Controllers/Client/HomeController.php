<?php

namespace Ductong\FpolyBaseWeb3014\Controllers\Client;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Models\Home;


class HomeController extends Controller
{
    private Home $home;



    public function __construct()
    {
        $this->home = new Home();
    }
    public function index()
    {
        $home = $this->home->all();
        $newTheThao = $this->home->new_TheThao();
        $newSucKhoe = $this->home->new_SucKhoe();
        $newTrongNuoc = $this->home->new_TrongNuoc();
        $newNgoaiNuoc = $this->home->new_NgoaiNuoc();

        $this->renderViewClient('home', [
            'home' => $home,
            'newTheThao' => $newTheThao,
            'newSucKhoe' => $newSucKhoe,
            'newTrongNuoc' => $newTrongNuoc,
            'newNgoaiNuoc' => $newNgoaiNuoc
        ]);
        }
    public function tinNgoaiNuoc()
    {
        $home = $this->home->all();
        $page=$_GET["page"] ?? 1;
        [$tinNgoaiNuoc,$totalPage] = $this->home->paginate_NgoaiNuoc((int)$page, $perPage = 3);
        // Helper::debug($totalPage);
        $this->renderViewClient('ngoaiNuoc', [
            'tinNgoaiNuoc' => $tinNgoaiNuoc,
            'home' => $home,
            'totalPage'=> $totalPage,

        ]);
    }
    public function tinTrongNuoc()
    {
        $home = $this->home->all();

        $page=$_GET["page"] ?? 1;
        [$tinTrongNuoc,$totalPage] = $this->home->paginate_TrongNuoc((int)$page, $perPage = 3);

        $this->renderViewClient('trongNuoc', [
            'tinTrongNuoc' => $tinTrongNuoc,
            'home' => $home,
            'totalPage'=> $totalPage,

        ]);
    }
    public function tinSucKhoe()
    {
        $home = $this->home->all();

        $page=$_GET["page"] ?? 1;
        [$tinSucKhoe,$totalPage] = $this->home->paginate_SucKhoe((int)$page, $perPage = 3);
        // Helper::debug($tinNgoaiNuoc)
        $this->renderViewClient('sucKhoe', [
            'tinSucKhoe' => $tinSucKhoe,
            'home' => $home,
            'totalPage'=> $totalPage,

        ]);
    }
    public function tinTheThao()
    {
        $home = $this->home->all();
        $page=$_GET["page"] ?? 1;
        [$tinTheThao,$totalPage] = $this->home->paginate_TheThao((int)$page, $perPage = 3);
        // Helper::debug($tinNgoaiNuoc)
        $this->renderViewClient('theThao', [
            'tinTheThao' => $tinTheThao,
            'home' => $home,
            'totalPage'=> $totalPage,

        ]);
    }
    public function show($id, $idDirectory)
    {
        $home = $this->home->all();
        $show = $this->home->findByID_join_connent($id);
        // $lienquan = $this->home->all_idDirectory($idDirectory);
        $this->renderViewClient('show', [
            'show' => $show,
            'home' => $home,
            // 'lienquan' => $lienquan,

        ]);
    }
}
