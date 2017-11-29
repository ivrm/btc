<?php

namespace App;

use Denpa\Bitcoin\Exceptions\BitcoindException;
use Illuminate\Database\Eloquent\Model;

class Bitcoin extends Model
{

    private $bitcoind;

    public function __construct()
    {
        parent::__construct();
        try{
            $this->bitcoind = BitcoinConnect::getInstance();
        }
        catch(BitcoindException $e)
        {
            die($e->getMessage());
        }
    }


    public function getLastHash(){
        $res = $this->bitcoind->request('getbestblockhash')->result();
        return $res;
    }

    public function getBlock($hash){
        $blockInfo = $this->bitcoind->getBlock($hash);
        return response()->json($blockInfo->get());
    }

    public function getLastBlock(){
        $hash = $this->getLastHash();
        $res = $this->getBlock($hash);
        return $res;
    }

    public function getNewAddress(){
        $res = $this->bitcoind->request('getnewaddress',[env('BITCOIND_USER')])->result();
        return $res;
    }


}
