<?php 
Class Database
{
    private $user ;
    private $host;
    private $pass ;
    private $db;

    public function __construct()
    {
       
    public function connect()
    {
        $link = mysql_connect($this->user, $this->host, $this->pass, $this->db);
        return $link;
    }
}
?>