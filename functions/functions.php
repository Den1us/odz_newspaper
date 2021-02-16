<?php
    $mysqli = false;
    function connectDB() {
        global $mysqli;
        $mysqli = new mysqli("127.0.0.1:3306", "root", "root", "phpodz");
        $mysqli -> query("SET NAMES 'utf-8'");
    }

    function closeDB() {
        global $mysqli;
        $mysqli -> close;
    }

    function getnews($limit, $id) {
        global $mysqli;
        connectDB();
        if ($id)
            $where = "WHERE `id` = ".$id;
        $result = $mysqli->query("SELECT*FROM  `news`  $where ORDER BY  `id` ASC LIMIT $limit");
        closeDB();
        if (!$id)
            return resulttoarray ($result);
        else
            return $result->fetch_assoc();
    }

    function resulttoarray ($result) {
        $array = array ();
        while (($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }
?>