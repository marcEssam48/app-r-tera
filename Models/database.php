<?php


class database
{


    public $query_count = 0;
    public $dbhost = 'localhost';
    public $dbuser = 'root';
    public $dbpass = 'root';
    public $dbname = 'teradata';
    public $port = '3307';
    public $connects;


    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = 'root', $dbname = 'teradata',$port = '3307',$charset = 'utf8')
    {
        $this->connects =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname,$port);

        $this->connects->set_charset($charset);
    }

//public function connect(){
//
//
//        $connects = mysqli_connect('localhost', 'root', 'root', 'teradata','3307');
//}



}

?>
