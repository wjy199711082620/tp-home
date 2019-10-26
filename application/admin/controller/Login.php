<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/10/8
 * Time: 18:07
 */

namespace app\admin\controller;//前面不要写任何的代码


//use think\Db;

use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{
    public  function index(){
//        Db::
        return view();//助手函数，不用继承对象，可以传参数开该控制器下的其他页面
        //不传第一个参数参数默认开视图里面
    }
    public function  check(){
        if(!request()->isPost()){
            return json([
                'code'=>404,

            ]);
        }
        $data=input('post.');
        $username=$data['username'];
        $password=$data['password'];
        $password=md5(crypt($password,md5('wjy')));
        $captcha=$data['captcha'];
        if(!captcha_check($captcha)){
//验证失败
            return json(['code'=>404,'msg'=>'验证码错误']);
        };

        $result=Db::table('admin')->where(['username'=>$username,'password'=>$password])->find();
        if($result>0){
            Session::set('user',$result);
            return json([
                'code'=>0,
                'msg'=>"恭喜您,登录成功",
            ]);
        }else{
            return json([
                'code'=>404,
                'msg'=>"登录失败"
            ]);
        }
    }

}