<?php
$connect = mysqli_connect("localhost", "root", "","tokobuku", 3307);

    function querydata($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        };
        return $rows;
    }
?>

<?php

