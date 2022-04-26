<?php
class IndexModel{
    // test
    public function test(){
        $db = M();
        $ret = $db->query("SELECT * FROM `test` WHERE `id` = 1;");
        return $ret;
    }
}
