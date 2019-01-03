<?php

class QueryManager
{

    private $connection;

    private $resultset;

    private $num_rows;

    function __construct($connection)
    {
        if ($connection != null) {
            $this->connection = $connection;
        } else {
            echo "Invalid connection!";
            exit();
        }
    }

    function query($sql)
    {
        $this->resultset = $this->connection->mysqli->query($sql);

        if (! $this->resultset) {
            echo "Errno: " . $this->connection->mysqli->errno . "<br>";
            echo "Error: " . $this->connection->mysqli->error . "<br>";
            exit();
        } else {
            $this->num_rows = $this->resultset->num_rows;
        }
        // echo "Rows " . $result->num_rows . "<br>";

        return $this->resultset;
    }

    function close()
    {
        $this->resultset->close();
    }

    function getNumRows()
    {
        return $this->num_rows;
    }
}

class UpdateManager
{

    private $connection;

    function __construct($connection)
    {
        $this->connection = $connection;
    }
}

class InsertManager
{

    private $connection;

    function __construct($connection)
    {
        $this->connection = $connection;
    }
}

class DeleteManager
{

    private $connection;

    function __construct($connection)
    {
        $this->connection = $connection;
    }
}

?>