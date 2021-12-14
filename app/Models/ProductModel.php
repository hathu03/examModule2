<?php

include_once "BaseModel.php";
class ProductModel extends BaseModel
{
    protected $table = "products";

    public function store($request)
    {
        $sql = "insert into $this->table (name, category, price, quantity, description) values (?,?,?,?,?)";
       $stmt= $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["name"]);
        $stmt->bindParam(2, $request["category"]);
        $stmt->bindParam(3, $request["price"]);
        $stmt->bindParam(4, $request["quantity"]);
        $stmt->bindParam(5, $request["description"]);
        $stmt->execute();
    }
    public function update($request)
    {
        $sql = "update $this->table set name =? , category =?, price =?, quantity =?, description =? where id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["name"]);
        $stmt->bindParam(2, $request["category"]);
        $stmt->bindParam(3, $request["price"]);
        $stmt->bindParam(4, $request["quantity"]);
        $stmt->bindParam(5, $request["description"]);
        $stmt->bindParam(6, $request["id"]);
        $stmt->execute();
    }
    public function searchProduct($key)
    {
        $sql = "select * from $this->table where name like '%$key%'";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}