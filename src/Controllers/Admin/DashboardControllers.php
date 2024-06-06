<?php
namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
class DashboardControllers extends Controller{
    public function dashboard(){
        $this->renderViewAdmin(__FUNCTION__);
    }
}