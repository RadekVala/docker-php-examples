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

        $stmt->bindParam(':name', $username);
        $stmt->bindParam(':surname', $email);

        // Execute the statement
        try {
            $stmt->execute();
            echo "User inserted successfully!";
        } catch(\PDOException $e) {
            die("Error inserting user: " . $e->getMessage());
        }
    }
}