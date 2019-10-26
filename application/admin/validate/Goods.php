<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/10/11
 * Time: 12:05
 */

namespace app\admin\validate;


use think\Validate;

class Goods extends Validate
{
    protected $rule=[
        'cid'=>'require',
        'gname'=>'require',
        'mprice'=>'require',
        'sprice'=>'require',
        'gstock'=>'require',
        'gthumb'=>'require',
        'gbanner'=>'require',
    ];
    protected  $scene=[
       'insert'=>['cid','gname','mprice','sprice','gstock','gthumb','gbanner'],
    ];

}