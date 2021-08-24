<?php

namespace Model;

use Model\Database;

class Customer
{
    private $conn;
    public function __construct(
        Database $data
    ) {
        $this->conn = $data;
    }
    public function getAll()
    {
        $sql = "SELECT * FROM employee";
$result = $this->conn->connect()->query($sql);

if ($result->rowCount() > 0) {
    // output data of each row
    while($row = $result->fetch()) {
        echo "id: " . $row["employee_id"]. " - Name: " . $row["name"]. " -Age: " . $row["age"]. "-Gender: " . $row["gender"]." -Position:".$row["position"]." <br>";
    }
} else {
    echo "0 results";
}
    }
    public function getById($id)
    {
        $conn = $this->conn->connect();

        $sql = "Select * FROM employee WHERE employee_id = ?";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$id]);

        while($row= $stmt->fetch()){
            echo "id: " . $row["employee_id"]. " - Name: " . $row["name"]. " -Age: " . $row["age"]. "-Gender: " . $row["gender"]." -Position:".$row["position"]." <br>";
        }
    }
}