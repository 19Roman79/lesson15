<?php

class Database {

    protected $connection;
    /*
     * Создаем конструктор который будет подключаться к БД
     *
     * */
    public function __construct($host, $user, $password, $db)
    {
        $this->connection = new mysqli($host, $user, $password, $db);

        if (!$this->connection) {
            echo "Подключение не успешно";
        }
    }
    /*
     * Метод экранирования символов
     * */
    public function escape($str) {
        return mysqli_escape_string($this->connection, $str);
    }

    /*
     * Метод обработки запроса к БД
     * */
    public function selectAll($sql) {
        $result = $this->connection->query($sql);
        $data = [];
        foreach ($result as $item) {
            $data[] = $item;
        }

        return $data;
    }

    public function query($sql) {
        $this->query=$sql;
        $result = mysqli_query($this->connection,$sql);
        return $result;
    }



}