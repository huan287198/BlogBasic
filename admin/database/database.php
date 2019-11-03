<?php
require_once("admin/configs/db.php");
global $conf;
function connect_db()
{
    global $conf;
    $conn = mysqli_connect($conf["host"], $conf["user"], $conf["password"], $conf["db"]) or die("Cannot connect to db: " . mysqli_connect_error());
    mysqli_set_charset($conn, "utf8");

    return $conn;
}

function close($conn)
{
    if ($conn) {
        mysqli_close($conn);
    }
}

// Hàm truy vấn
function query($conn, $sql)
{
    if ($conn)
    {
        return mysqli_query($conn, $sql);
    }
}

// Hàm đếm số hàng
function num_rows($conn, $sql)
{

    $query = mysqli_query($conn, $sql);
    if ($query) {
        $row = mysqli_num_rows($query);
        return $row;
    }

}

// Hàm lấy dữ liệu
function fetch_assoc($conn, $sql = null, $type)
{
    $data = [];
    if ($conn) {
        $query = mysqli_query($conn, $sql);
        if ($query) {
            if ($type == 0) {
                // Lấy nhiều dữ liệu gán vào mảng
                while ($row = mysqli_fetch_assoc($query)) {
                    $data[] = $row;
                }
                return $data;
            } else if ($type == 1) {
                // Lấy một hàng dữ liệu gán vào biến
                $data = mysqli_fetch_assoc($query);
                return $data;
            }
        }
    }
}

//// Hàm lấy ID cao nhất
//function insert_id($conn)
//{
//    if ($this->cn) {
//        $count = mysqli_insert_id($this->cn);
//        if ($count == '0') {
//            $count = '1';
//        } else {
//            $count = $count;
//        }
//        return $count;
//    }
//}
