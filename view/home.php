     <main class="catalog  mb ">

        <div class="boxleft">
           <div class="banner">
              <div class="slideshow-container">          

                 <!-- Full-width images with number and caption text -->
                 <div class="mySlides fade">
                    <img src="view/img/anh0.jpg" style="width:100%">
                 </div>

                 <div class="mySlides fade">
                    <img src="view/img/anh1.jpg" style="width:100%">
                 </div>

                 <div class="mySlides fade">
                    <img src="view/img/anh2.jpg" style="width:100%">
                 </div>

                 <!-- Next and previous buttons -->
                 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                 <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>

              <!-- The dots/circles -->
              <div style="text-align:center">
                 <span class="dot" onclick="currentSlide(1)"></span>
                 <span class="dot" onclick="currentSlide(2)"></span>
                 <span class="dot" onclick="currentSlide(3)"></span>
              </div>
           </div>

           <div class="items">
               
           <?php
           foreach($loadsp_home as $key){
            extract($key);
            $hinh = "upload/".$img;
            echo '<div class="box_items"> 
            <div class="box_items_img">
               <img src="'.$hinh.'" alt="">
               <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">'.$name.'</a>
            <p class="price">'.$price.'</p>
         </div>';
           }
           ?>
              
             


           </div>
        </div>
        <div class="boxright">

           <div class="mb">
              <div class="box_title">TÀI KHOẢN</div>
              <div class="box_content form_account">
                 <form action="#" method="POST"></form>
                 <h4>Tên đăng nhập</h4><br>
                 <input type="text" name="user" id="">
                 <h4>Mật khẩu</h4><br>
                 <input type="password" name="pass" id=""><br>
                 <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                 <br><input type="submit" value="Đăng nhập">
                 <li class="form_li"><a href="#">Quên mật khẩu</a></li>
                 <li class="form_li"><a href="#">Đăng kí thành viên</a></li>

              </div>
           </div>
           <div class="mb">
              <div class="box_title">DANH MỤC</div>
              <div class="box_content2 product_portfolio">
               <?php
               foreach($load_danhmuc_home as $key){
                  extract($key);
                  $linkdmsp = "index.php?act=danhmuc&chitiet=".$id;
                  echo '<ul>
                  <li><a href="'.$linkdmsp.'">'.$name.'</a></li>
                  </ul>';
               }
               ?>
                 <!-- <ul>
                    <li><a href="">Đồng hồ </a></li>
                    <li><a href="">Laptop</a></li>
                    <li><a href="">Điện thoại</a></li>
                    <li><a href="">Ipad</a></li>
                    <li><a href="">Tivi</a></li>
                 </ul> -->
              </div>
              <div class="box_search">
                 <form action="#" method="POST">
                    <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
                 </form>
              </div>
           </div>
           <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
           <div class="mb">
              <div class="box_title">SẢN PHẨM TOP 10 LƯỢT XEM </div>
              <div class="box_content">
               <?php
               foreach($loadsp_top10_luotxem as $key){
                  extract($key);
                  $hinh = "upload/".$img;
                  $linksp = "index.php?act=linksp&chitiet=".$id;
                  echo ' <div class="selling_products" style="width:100%;">
                  <img src="'.$hinh.'" alt="anh">
                  <a href="'.$linksp.'">'.$name.'</a>
               </div>';
               }
               ?>
                 <!-- <div class="selling_products" style="width:100%;">
                    <img src="view/img/clockforgirl.jpg" alt="anh">
                    <a href="">Đồng hồ đeo tay nữ</a>
                 </div>
                 <div class="selling_products" style="width:100%;">
                    <img src="view/img/clockforgirl.jpg" alt="anh">
                    <a href="">Đồng hồ đeo tay nữ</a>
                 </div>
                 <div class="selling_products" style="width:100%;">
                    <img src="view/img/clockforgirl.jpg" alt="anh">
                    <a href="">Đồng hồ đeo tay nữ</a>
                 </div>
                 <div class="selling_products" style="width:100%;">
                    <img src="view/img/clockforgirl.jpg" alt="anh">
                    <a href="">Đồng hồ đeo tay nữ</a>
                 </div>
                 <div class="selling_products" style="width:100%;">
                    <img src="view/img/clockforgirl.jpg" alt="anh">
                    <a href="">Đồng hồ đeo tay nữ</a>
                 </div> -->
              </div>
           </div>
        </div>

     </main>