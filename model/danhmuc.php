<?php
function insert_danhmuc($tenloai)
{
    $sql =  "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function loadAll_danhmuc()
{
    $sql = "select *from danhmuc order by id desc";
    $query_Alldm = pdo_query($sql);
    return  $query_Alldm;
}
function delete_danhmuc()
{
    $sql = "delete from danhmuc where id=" . ($_GET['id']);
    pdo_execute($sql);
}
function loadOne_danhmuc()
{
    $sql = "select *from danhmuc where id=" . $_GET['id'];
    $query_Onedm = pdo_query_one($sql);
    return $query_Onedm;
}
function update_danhmuc($id, $tenloai)
{
    $sql = "update danhmuc set name='" . $tenloai . "' where id =" . $id;
    pdo_execute($sql);
}
