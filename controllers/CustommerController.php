<?php
require_once "models/Customer.php";
class CustommerController{
    public $custommer;
    public function __construct(){
        $this->custommer = new Custommer();
    }

    public function list_ct()
    {
        // $custommer = new Custommer();
        $customers = $this->custommer->getCustomer();
        include_once "views/custommer/list_custommer.php";
    }

    public function delete_ct()
    {
        $id = $_GET['id'];
        $this->custommer->deleteCT($id);
        header("location:index.php");  
    }

    public function add_ct()
    {
        if (isset($_POST['add'])) {
            $id = null;
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi'];
            $this->custommer->addCT($id, $ten, $tuoi);
            header("location:index.php");
        }
        include "views/custommer/add_ct.php";
    }

    public function detail(){        
        $id = $_GET['id'];
        $CT_detal = $this->custommer->readCT($id);
        if (isset($_POST['edit'])){
            $id = $_GET['id'];
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi'];
            $this->custommer->editCT($id, $ten, $tuoi);
            header("location: index.php");
        }
        include "views/custommer/edit_ct.php";

    }
}