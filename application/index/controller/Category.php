<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/10/8
 * Time: 17:56
 */

namespace app\index\controller;


use think\Db;

class Category extends Base//与文件命名一直
{
    public function index(){
        $data=input('get.');
        $id=$data['id'];
        $navRes=Db::table('nav')->where('id',$id)->find();
        $tpl=$navRes['ntpl'];
        $this->assign('navRes',$navRes);
        $this->assign('id',$id);
        switch ($tpl){
            case 'aoout':
                break;
            case 'list':
                break;
            case 'list':
                break;
            case 'list':
                break;
            case 'list':
                break;
        }
        return $this->fetch($tpl);//fetch是开页面，assign是挂载数据
    }
    public function index1(){
        return 'hello';
    }
    public function index2(){
        return 'world';
    }


}