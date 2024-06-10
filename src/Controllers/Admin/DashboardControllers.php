<?php
namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;


use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Models\Content;
use Ductong\FpolyBaseWeb3014\Models\Directory;
use Ductong\FpolyBaseWeb3014\Models\User;

class DashboardControllers extends Controller{
    private Content $content;
    private Directory $directory;
    private User $user;

    public function __construct()
    {
        $this->content = new Content();
        $this->directory = new Directory();
        $this->user = new User();

    }
    public function dashboard(){
        $content = $this->content->all();
        $directory = $this->directory->all_directory();
        $user = $this->user->all();

        $dem_content = count($content);
        $dem_directory = count($directory);
        $dem_user = count($user);
        
        $this->renderViewAdmin('dashboard',[
            'dem_content'=>$dem_content,
            'dem_directory'=>$dem_directory,
            'dem_user'=>$dem_user,

        ]);
    }
}