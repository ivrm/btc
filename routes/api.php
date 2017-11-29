<?php

use App\Bitcoin;
use App\BitcoinConnect;
use Illuminate\Support\Facades\Route;


Route::get('/connect', function(){
    return BitcoinConnect::getInstance() ? 'ok' : false ;
});

/**
 * @return string new address
 */
Route::get('/addr/new',function(){
    $bitcoind = new Bitcoin();
    $res = $bitcoind->getNewAddress();
    return $res ?? false ;
});


/**
 * @return array last block info
 */
Route::get('/block/last',function(){
    $bitcoind = new Bitcoin();
    $res = $bitcoind->getLastBlock();
    return $res ?? false ;
});
