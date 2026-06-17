<?php

class User
{
    public function  login($username, $password){
    include __DIR__ . '/../database/students.php';
    foreach ($students as $student) {
        // Ensure the student record actually contains login credentials before checking them
        if (isset($student['username'], $student['password'])) {
            if ($student['username'] === $username && $student['password'] === $password) {
              return true;
            }
        }
    }
    return false;
    } 
}
