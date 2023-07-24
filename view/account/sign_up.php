<main>
    <div class="page_sign_up">
        <div class="sign_up">
            <div class="sign-title">
                <h2>
                    Đăng Ký
                </h2>
            </div>
            <form action="index.php?btn=sign_up" method="post" class="form_sign_up">
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="email" name="email" class="input-items">
                        <label class="user-label">Email</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="name_tk" class="input-items">
                        <label class="user-label">Họ tên</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="phone" class="input-items">
                        <label class="user-label">Số điện thoại</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>

                    <div class="input-group">
                        <input required="" type="text" name="pass_word" class="input-items">
                        <label class="user-label">Pass word</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                </div>
                <div class="input-group">
                    <input required="" type="text" name="address" class="input-items" style="width: 690px; margin-top: 0;">
                    <label class="user-label">Địa Chỉ</label>
                    <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                </div>
                <div class="notification">
                    <h3>
                            <?php
                            if (isset($thong_bao) && ($thong_bao != "")) {
                                echo $thong_bao;
                            }
                            ?>
                    </h3>
                </div>
                <div class="account_sign">
                    <a href="" class="sign_in">
                        <input type="submit" value="Đăng Ký" name="add_tk">
                    </a>

                </div>
            </form>
        </div>
    </div>
</main>