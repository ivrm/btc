<?php

namespace App;

use Denpa\Bitcoin\Client as JsonRPCClient;
use Denpa\Bitcoin\Exceptions\BitcoindException;



class BitcoinConnect
{

    private static $user;
    private static $pass;
    private static $scheme;
    private static $host;
    private static $port;
    private static $instance;

    /**
     * singleton
     */
    private static function connect()
    {
        try{
            $config['user'] = env('BITCOIND_USER');
            $config['pass'] = env('BITCOIND_PASSWORD');
            $config['scheme'] = env('BITCOIND_SCHEME');
            $config['host'] = env('BITCOIND_HOST');
            $config['port'] = env('BITCOIND_PORT');

            return new JsonRPCClient($config);
        }
        catch (BitcoindException $e){
            die($e->getMessage());
        }

    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if(is_null(self::$instance)){
            self::$instance = self::connect();
        }
        return self::$instance;
    }

    //singleton
    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
}
