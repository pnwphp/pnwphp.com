<?php
/**
* @package App/Http
*/

class Dryfta {

    private $baseUrl = 'https://pnwphp2016.dryfta.com/en';

    public function redirect($path=''){
        header('HTTP/1.1 301 Moved Permanently');
        header("Location: {$base}/{$path}");

        exit;
    }
}

