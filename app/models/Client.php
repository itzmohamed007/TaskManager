<?php

class Client {
    private $name;
    private $email;
    private $company;
    private $phone;
    private $password;

    public function signUp($postName, $postEmail, $postCompany, $postPhone, $postPassword){
        $this->name = $postName;
        $this->email = $postEmail;
        $this->company = $postCompany;
        $this->phone = $postPhone;
        $this->password = $postPassword;

        // connecting to database
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("INSERT INTO `client`(`name`, `email`, `company`, `phone`, `password`) 
        VALUES ( ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss', $this->name, $this->email, $this->company, $this->phone, $this->password);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    public function signIn($email){
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("SELECT * FROM Client WHERE email = ?");

        // Bind the parameters to the prepared statement
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();

        return $row;
    }
}