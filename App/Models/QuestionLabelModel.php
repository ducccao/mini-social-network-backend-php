<?php

namespace App\Models;

use Db;

class QuestionLabelModel
{
    public function __construct()
    {
    }

    public function all()
    {
        $db = new Db();

        $sql = "SELECT * 
        FROM `quetionqueue_labels`;";

        $db->load($sql);
        $ret = $db->Rows();
        return $ret;
    }

    public function findQuetionLabelByQueID($que_id)
    {
    }

    public function add($que_id, $label_id)
    {

        $db = new Db();

        $sql = "INSERT INTO `quetionqueue_labels`(que_id, label_id)
        VALUES ('$que_id','$label_id');
         ";

        $ret = $db->patchDb($sql);
        return $ret;
    }
}
