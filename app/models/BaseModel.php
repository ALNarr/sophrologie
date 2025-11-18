<?php
// app/models/BaseModel.php

class BaseModel
{
    protected \PDO $db;

    public function __construct()
    {
        // À adapter plus tard avec ta vraie config
        // $this->db = new PDO('mysql:host=localhost;dbname=maeva', 'root', '');
    }
}