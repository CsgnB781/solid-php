<?php

require_once 'RepositoryInterface.php';
require_once 'DatabaseInterface.php';
require_once 'User.php';

class UserRepository implements RepositoryInterface
{
    private DatabaseInterface $client;

    public function __construct(DatabaseInterface $client)
    {
        $this->client = $client;
    }

    public function getUser(string $userEmail) : User
    {
        foreach ($this->client->fetchAll() as $row) {
            if (isset($row['email']) && $row['email'] === $userEmail) {
                return new User($row['full_name'], $row['email']);
            }
        }

        
        throw new Exception("Utilisateur introuvable : {$userEmail}");
    }

    public function getUsers() : array
    {
        $users = [];

        foreach ($this->client->fetchAll() as $row) {
            $users[] = new User($row['full_name'], $row['email']);
        }

        return $users;
    }
}
