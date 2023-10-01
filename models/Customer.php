<?php
require_once "db.php";
class Custommer extends Database{

    public function getCustomer()
    {
        $query = "select * from customer";
        return $this->getData($query);
    }

    public function deleteCT($id)
    {
        $query = " delete from customer where id = '$id'";
        $this->getData($query,false);

    }

    public function addCT($id,$ten,$tuoi)
    {
            $query = " insert into customer values ('$id', '$ten', '$tuoi')";
            $this->getData($query,false);
    }
    public function readCT($id){
        $query = "select * from customer where id = '$id'";
        return $this->getData($query);
    }
    public function editCT($id,$ten,$tuoi){
            $query = "update customer set ten = '$ten',tuoi = '$tuoi' where id = '$id'";
            $this->getData($query,false);
    }
}