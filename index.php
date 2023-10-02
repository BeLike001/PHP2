<?php

require_once "controllers/CustommerController.php";
class hienthi{
    public $custommer;
    public function __construct()
    {
        $this->custommer = new CustommerController();
    }
    public function sw()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "";
        switch ($url) {

            case "";
                echo $this->custommer->list_ct();
                break;
            case "del_ct";
                echo $this->custommer->delete_ct();
                break;
            case "add_ct";
                echo $this->custommer->add_ct();
                break;
            case "detail";
                echo $this->custommer->detail();
                break;    
            case "edit_ct";
                echo $this->custommer->edit_CT();
                break;
        }
    }
}
$ht = new hienthi();
$ht->sw();

