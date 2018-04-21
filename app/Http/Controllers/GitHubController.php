<?php
/**
 * Created by PhpStorm.
 * User: xiudianbao
 * Date: 2018/4/21
 * Time: 下午3:24
 */

namespace App\Http\Controllers;


class GitHubController extends Controller
{

    /**
     * 更新分支代码
     */
    public function gitHubUpdate()
    {

        $commends = file_get_contents(base_path() . '/ftp.sh');

        $commendsArr = explode(PHP_EOL, $commends);

        $commendsArr = array_prepend($commendsArr, 'cd ' . base_path());

        $commends = implode(PHP_EOL, $commendsArr);

        system($commends, $returnvalue);

        if ($returnvalue != 0){

            logger()->error('GitHub Update error.', ['code' => $returnvalue]);

        }else{

            logger()->info('GitHub Update success');

        }
    }
}