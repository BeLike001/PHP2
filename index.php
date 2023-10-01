<?php

require_once "controllers/CustommerController.php";
class hienthi extends CustommerController{

    public function sw()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "";
        switch ($url) {

            case "";
                echo $this->list_ct();
                break;
            case "del_ct";
                echo $this->delete_ct();
                break;
            case "add_ct";
                echo $this->add_ct();
                break;
            case "detail";
                echo $this->detail();
                break;    
            case "edit";
                echo $this->edit_CT();
                break;
        }
    }
}
$ht = new hienthi();
$ht->sw();

