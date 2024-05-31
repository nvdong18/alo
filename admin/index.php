    <?php
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/pdo.php";
    include "header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "insert thanh cong !";
                }
                include "./danhmuc/add.php";
                break;
            case 'listdm':
                $query_Alldm = loadAll_danhmuc();
                include "./danhmuc/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_danhmuc();
                }
                $query_Alldm = loadAll_danhmuc();
                include "./danhmuc/list.php";
                break;
            case 'suadm':
                $query_Onedm  = loadOne_danhmuc();
                include "./danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tenloai = $_POST['tenloai'];
                    update_danhmuc($id, $tenloai);
                }
                $query_Alldm = loadAll_danhmuc();
                include "./danhmuc/list.php";
                break;


                //Controller Của Sản Phẩm 

            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $motasp = $_POST['motasp'];
                    $dir = "../upload/";
                    $upname = basename($_FILES['anhsp']['name']);
                    $upfile = $dir . $upname;
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $upfile);

                    insert_sanpham($iddm, $tensp, $giasp, $upfile, $motasp);
                    $thongbao = "insert thanh cong !";
                }
                $query_Alldm = loadAll_danhmuc();
                include "./sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $query_Alldm = loadAll_danhmuc();
                $query_Allsp = loadAll_sanpham($kyw, $iddm);
                include "./sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_sanpham();
                }
                $query_Alldm = loadAll_danhmuc();
                $query_Allsp = loadAll_sanpham("", 0);
                include "./sanpham/list.php";
                break;
            case 'suasp':
                $query_Onesp  = loadOne_sanpham();
                include "./sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tenloai = $_POST['tenloai'];
                    update_sanpham($id, $tenloai);
                }
                $query_Allsp = loadAll_sanpham("", 0);
                include "./sanpham/list.php";
                break;
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
