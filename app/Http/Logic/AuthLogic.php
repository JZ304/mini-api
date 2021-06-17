<?php
namespace App\Http\Logic;

use EasyWeChat\Factory;

/**
 * Created by :
 * User zjx
 * Date 2021/6/17
 * Time 下午 7:26
 */

class AuthLogic extends BaseLogic
{
    public function userAuth($request)
    {
        $config = [
            'app_id' => 'wx8ca0027caf6da91a',
            'secret' => 'c0ac59b7049a43cd653544be4db796a0',

            // 下面为可选项
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];

        $app = Factory::miniProgram($config);

        $code = '033eyrFa1cpxeB0rISFa1apAZD3eyrFO';
        $openid = 'opB2s5B1Rgm0aG99mc1eXlmIUl2o';
        // 授权
        $res = $app->auth->session($code);
        dd($res);
        if(isset($res['openid'])){
            $userInfo = $app->user->get($res['openid']);
            dd($userInfo);
        }else{
            dd($res);
        }

    }
}

