<?php
namespace MyConnection;
class database
{
    public static function getconnection()
    {
        return new \mysqli("localhost", "root", "", "machine_test");
    }
}
