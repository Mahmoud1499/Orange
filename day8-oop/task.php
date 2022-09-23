<?php

class DB
{
    private $conn;
    protected $query;
    protected $sql;

    function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'orange');
    }
    public function selectAll($table)
    {
        $query = mysqli_query($this->conn, "SELECT * FROM `$table`");
        $data = $query->fetch_all(MYSQLI_ASSOC);

        return $data;
    }
    public function select($table, $column)
    {
        $this->sql = "SELECT $column FROM `$table`";

        return $this;
    }
    public function where($column, $compair, $value)
    {
        $this->sql  .=  "WHERE `$column`$compair $value;";

        return $this;
    }
    public function andWhere($column, $compair, $value)
    {
        $this->sql  .=  "AND `$column`$compair $value;";

        return $this;
    }
    public function orWhere($column, $compair, $value)
    {
        $this->sql  .=  "OR `$column`$compair $value;";

        return $this;
    }
    public function getALL()
    {
        $this->query = mysqli_query($this->conn, $this->sql);
        $data = mysqli_fetch_all($this->query, MYSQLI_ASSOC);

        return $data;
    }
    public function getOne()
    {
        $this->query = mysqli_query($this->conn, $this->sql);
        $data = mysqli_fetch_assoc($this->query);

        return $data;
    }

    public function insert($table, $data)
    {
        $coulmns = '';
        $values = '';

        foreach ($data as $key => $value) {
            $coulmns .= "`$key` ,";
            $values .= "'$value' ,";
        }

        $coulmns = rtrim($coulmns, ",");
        $values = rtrim($values, ",");

        $this->sql = "INSERT INTO `$table`($coulmns) VALUES ($values);";

        return $this;
    }
    public function update($tabel, $data)
    {
        $set = '';
        foreach ($data as $key => $value) {
            $set .= "`$key` = '$value' ,";
        }

        $set = rtrim($set, ",");

        $this->sql = "UPDATE $tabel SET $set ";
        return $this;
    }
    public function delete($tabel)
    {
        $this->sql = "DELETE FROM `$tabel` ";
        return $this;
    }

    public function execute()
    {
        // print_r($this->sql);
        // die;
        $this->query = mysqli_query($this->conn, $this->sql);
        if (mysqli_affected_rows($this->conn) > 0) {
            return true;
        } else {
            return false;
        }
    }
}



$db  = new DB;
echo '<pre>';
// print_r($db->selectAll('users'));
// echo '<hr/>';
// print_r($db->select('users', 'id,name'));
// echo '<hr/>';
// print_r($db->select('users', 'id,name')->getAll());
// echo '<hr/>';
// print_r($db->select('users', 'id,name')->where('id', '=', 3)->getONE());
// echo '<hr/>';
$user = [
    "name" => 'Mahmoud',
    "username" => 'mahmoud111',
];
// print_r($db->insert("users", $user)->execute());
// echo '<hr/>';

// print_r($db->delete("users")->where('id', '=', 7)->execute());
// echo '<hr/>';
print_r($db->update("users", $user)->where('id', '=', 5)->execute());
echo '<hr/>';

echo '</pre>';