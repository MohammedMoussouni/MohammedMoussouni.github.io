<?php

include_once 'autoload.php';

const db_name = 'id20283704_task';
const db_user = '';
const db_pass = 'Molikujy/123';
const db_host = 'localhost';



$db = new Database(db_name, db_user , db_pass, db_host);
/*$db = new PDO(db_name, db_user , db_pass, db_host);
        $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
*/

?>