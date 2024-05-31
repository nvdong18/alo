<?php
function  insert_sanpham($iddm, $tensp, $giasp, $upfile, $motasp)
{
    $sql =  "insert into sanpham(iddm , name,price , img ,mota ) values('$iddm', '$tensp' , '$giasp' , '$upfile' , '$motasp' )";
    pdo_execute($sql);
}
function loadAll_sanpham($kyw, $iddm)
{
    $sql = "select *from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $query_Allsp = pdo_query($sql);
    return $query_Allsp;
}
function delete_sanpham()
{
    $sql = "delete from sanpham where id=" . ($_GET['id']);
    pdo_execute($sql);
}
function loadOne_sanpham()
{
    $sql = "select *from sanpham where id=" . $_GET['id'];
    $query_Onesp = pdo_query_one($sql);
    return $query_Onesp;
}
function update_sanpham($id, $tenloai)
{
    $sql = "update sanpham set name='" . $tenloai . "' where id =" . $id;
    pdo_execute($sql);
}
