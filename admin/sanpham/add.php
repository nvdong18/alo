<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Danh mục </label> <br>
                <select name="iddm">
                    <?php
                    foreach ($query_Alldm as $key) {
                        extract($key);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="row2 mb10">
                <label>Tên SP </label> <br>
                <input type="text" name="tensp" placeholder="nhập vào tên">
            </div>
            <div class="row2 mb10">
                <label>Giá SP </label> <br>
                <input type="text" name="giasp" placeholder="nhập vào tên">
            </div>
            <div class="row2 mb10">
                <label>Ảnh SP </label> <br>
                <input type="file" name="anhsp" placeholder="nhập vào tên">
            </div>

            <div class="row2 mb10">
                <label>Mô tả SP </label> <br>
                <input type="text" name="motasp" placeholder="nhập vào tên">
            </div>


            <div class="row mb10 ">
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