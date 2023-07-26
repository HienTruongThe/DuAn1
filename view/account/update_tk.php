<main>
    <div class="page_sign_up">
        <div class="sign_up">
            <div class="sign-title">
                <h2>
                    Cập Nhật Tài Khoản
                </h2>
            </div>
            <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?btn=edit_acount" method="post" class="form_sign_up">
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="email" autocomplete="off" class="input-items" value="<?= $email ?>">
                        <label class="user-label">Email</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="name_tk" autocomplete="off" class="input-items" value="<?= $ho_ten ?>">
                        <label class="user-label">Họ tên</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="phone" autocomplete="off" class="input-items" value="<?= $sdt ?>">
                        <label class="user-label">Số điện thoại</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="pass_word" autocomplete="off" class="input-items" value="<?= $mat_khau ?>">
                        <label class="user-label">Pass word</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                </div>
                <div class="input-group">
                    <input required="" type="text" name="address" autocomplete="off" class="input-items" style="width: 690px; margin-top: 0;" value="<?= $dia_chi ?>">
                    <label class="user-label">Địa Chỉ</label>
                    <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                </div>
                <p>
      
                
                </p>
                <div class="account_sign">
                <input required="" type="hidden" name="ma_tk" value="<?=$ma_tk ?>" class="input-items" >
                    <a href="" class="sign_in">
                        <input type="submit" value="Cập Nhật" name="update_tk">
                    </a>
                    <a href="index.php?btn=exit" class="sign_in">
                        <input type="button" value="Đăng Xuất">
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>