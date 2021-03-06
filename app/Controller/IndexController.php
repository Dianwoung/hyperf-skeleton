<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use Elasticsearch\Endpoints\DeleteByQuery;
use Hyperf\DbConnection\Db;
use Hyperf\Utils\Collection;

class IndexController extends AbstractController
{
    public function index()
    {

        $res = Db::table("goods_order")
            ->where([
                "order_status" => 2,
            ])->limit(1000)
            ->select("order_id")
            ->get();

        return [
            'data' => $res,
        ];
    }

    public function hello()
    {

        return ['data' => 'hello world fix bug3'];
    }

    public function newFuture()
    {
        return [
            'data' => 'new future fix bug2'
        ];
    }

    public function future2()
    {
        return [
            'data' => 'new future2 fix bug'
        ];
    }

    public function future3()
    {
        return [
            'data' => '新功能3'
        ];
    }

    public function future4()
    {
        return [
            'data' => '新功能2'
        ];
    }
    public function future5()
    {
        return [
            'data' => '新功能5 issue'
        ];
    }
}
