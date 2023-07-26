<main>
    <div class="forgot_password">
        <form action="index.php?btn=forgot_password" method="post" class="forgot_pw">
            <div class="forgot_password_items">
                <div class="input-group">
                    <input required="" type="email" name="email" autocomplete="off" class="input-items">
                    <label class="user-label">Email</label>
                    <!-- <p class="error">Email của bạn nhập không đúng &#9888  </p> -->
                </div>

                <p class="error">
                    <?php

                    if (isset($thong_bao) && ($thong_bao != "")) {
                        echo $thong_bao;
                    }
                    ?>

            </div>
            <div class="btn_send" style="margin: 20px auto;">
                <button class="send_items">
                    <input type="submit" name="send" value="Gửi">
                    <span><i class="fa-solid fa-paper-plane"></i></span>
                </button>
            </div>
        </form>
    </div>

    </div>
</main>