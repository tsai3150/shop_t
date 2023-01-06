<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller     // 銀行受限於金管會
{
    private $money = 0;                     // 私有類別:當下這個方法只能在這個不公開的類別中使用
    public function setMoney($money){       // set設定
        // 驗證身分,系統...
        // 留log...
        $this->money += $money;
    }
    public function getMoney(){             // get取
        // 驗證身分,系統...
        // 留log...
        return $this->money;
    }
}
