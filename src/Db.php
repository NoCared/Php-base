<?php
class DB_Con extends PDO
{
    function __construct()
    {
        parent::__construct('mysql:dbname=blog;host=mariadb','root','root');
    }
}
