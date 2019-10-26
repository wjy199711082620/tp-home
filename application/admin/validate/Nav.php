<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/10/10
 * Time: 16:15
 */

namespace app\admin\validate;


use think\Validate;

class Nav extends Validate
{     //验证器的名字需要和控制器的名字相同
     protected $rule=[
//         'id'=>'number',
         'nname'=>'require' ,
         'ename'=>'require',
         'nsort'=>'number',
         'ntpl'=>'require',
         'field'=>'require',
         'value'=>'require'
         ];
     //场景设置，不同场景下验证的字段不一样
     protected  $scene=[
         'insert'=>['nname','ename','nsort','ntpl'],
         'del'=>['id'],
         'exit'=>['field','value','id']
     ];
}