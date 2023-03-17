<?php

namespace App\Repository;

use App\Model\User;

class UserRepository extends Repository
{
    public function store(User $user) {

        // Prepare the SQL statement to insert the user
        $stmt = $this->connection->prepare("INSERT INTO user (username, email) VALUES (:username, :email)");

        // Bind the parameters to the statement
        $username = $user->getUsername();
        $email = $user->getEmail();

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);

        // Execute the statement
        try {
            $stmt->execute();
            return true;
        } catch(\PDOException $e) {
            die("Error inserting user: " . $e->getMessage());
        }
    }
}