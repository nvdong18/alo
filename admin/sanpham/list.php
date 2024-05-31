<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input style="margin-top:10px; margin-bottom: 10px;" name="kyw" type="text">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($query_Alldm as $key) {
                extract($key);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input style="margin-left: 10px;" type="submit" name="timkiem">
    </form>
    <div class="row2 form_content ">
        <form action="index.php?act=listsp" method="POST">
            <div class="row2 mb10 formds_loai">
                <table border="1">
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>GIÁ</th>
                        <th>HÌNH</th>
                        <th>MÔ TẢ</th>
                        <th>LƯỢT XEM</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
                    foreach ($query_Allsp as $key) {
                        extract($key);
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $suasp = "index.php?act=suasp&id=" . $id;
                        echo '  <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $price . '</td>
                        <td><img width = "150px" height ="100px" src="' . $img . '" alt=""></td>
                        <td>' . $mota . '</td>
                        <td>' . $luotxem . '</td>

                        <td><a href = "' . $suasp . '"><input type="button" value="Sửa"></a> <a href="' . $xoasp . '"> <input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>