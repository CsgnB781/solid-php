<?php

require_once 'DatabaseInterface.php';

class JSONClient implements DatabaseInterface
{
    public function fetchAll() : array
    {
        $fileContent = file_get_contents(__DIR__ . '/../data/users.json');

        $data = json_decode($fileContent, true);

        return is_array($data) ? $data : [];
    }
}
