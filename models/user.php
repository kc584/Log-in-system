<?php

class User {
    public $email = "";
    public $password = "";
    public $password_hash = "";
    public $token = "";
    public $connection;

    function __construct($connection, $email, $password) {
        $this->email = mysqli_real_escape_string($connection, $email);
        $this->password = mysqli_real_escape_string($connection, $password);

        $this->token = md5(rand().time());
        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);

        $this->connection = $connection;
    }

    function insert() {
        $sql = "
        INSERT INTO users(
            email,
            password,
            token
            is_active
            ) VALUES (
                '{$this->email}',
                '{$this->paswod_hash}',
                '{$this->token}',
                '0'
            )
        ";

        $sqlQuery = $this->connection->qery($sql);
        if (! $sqlQuery) {
            die("MySql query failed" . mysqli_error($this->connection));
        };
    }
}