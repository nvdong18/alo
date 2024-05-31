<?php

if (is_array($query_Onesp)) {
    extract($query_Onesp);
}

?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" disabled name="maloai" placeholder="nhập vào mã loại">
            </div>
            <div class="row2 mb10">
                <label>Tên SP </label> <br>
                <input type="text" name="tensp" value="<?= $name ?>   " placeholder="nhập vào tên">
            </div>
            <div class="row2 mb10">
                <label>Giá SP </label> <br>
                <input type="text" name="price" value="<?= $price ?>" placeholder=" nhập vào tên">
            </div>
            <div class="row2 mb10">
                <label>Ảnh SP </label> <br>
                <input type="file" name="anhsp" placeholder="nhập vào tên">
            </div>

            <div class="row2 mb10">
                <label>Mô tả SP </label> <br>
                <input type="text" name="mota" value="<?= $mota ?>" placeholder=" nhập vào tên">
            </div>


            <div class="row mb10 ">
                <input type="hidden" name="id">
                <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>

            </div>
        </form>
        <?php
        if (isset($thongbao) && ($thongbao) != "") echo $thongbao;
        ?>
    </div>
</div>