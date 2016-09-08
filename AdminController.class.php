<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {
    public function index()
    {

         
        $this->display();
    }
    public function admin()
    {
        $this->display();
    }
    //删除普通管里员
    public function dele()
    {
        $this->success("删除管里员成功", U('Index/index'));
    }
    //注册管里员
    public function zhuce()
    {
        $this->display();
    }
}