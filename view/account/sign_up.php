<main>
    <div class="page_sign_up">
        <div class="sign_up">
            <div class="sign-title">
                <h2>
                    Đăng Ký
                </h2>
            </div>       
            <p class="notification">
                        <?php
                        
                        if (isset($thong_bao) && ($thong_bao != "")) {
                            echo $thong_bao;
                        }
                        ?>
                        
                    </p>
           <form action=" index.php?btn=sign_up " method="post" class="form_sign_up">
                <div class="items_sign_up">
                    <div class="input-group">
                        <input  type="text" name="email" class="input-items">
                        <label class="user-label">Email</label>
                        <?php
                        if (!empty($errors['email'])) {
                            echo '<p class="error">' . $errors['email'] . '</p>';
                        }
                        
                        ?>
                    </div>
                    <div class="input-group">
                        <input  type="text" name="name_tk" class="input-items">
                        <label class="user-label">Họ tên</label>
                        <?php
                        if(!empty($errors['name_tk'])){
                            echo '<p class="error">' .$errors['name_tk'] . '</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input  type="text" name="phone" class="input-items">
                        <label class="user-label">Số điện thoại</label>
                        <?php
                        if(!empty($errors['phone'])){
                            echo '<p class="error">' . $errors['phone'] . '</p>';
                        }
                        ?>
                    </div>
                    <div class="input-group">
                        <input  type="text" name="pass_word" class="input-items">
                        <label class="user-label">Pass word</label>
                        <?php
                        if(!empty( $errors['pass_word'])){
                            echo '<p class="error">' . $errors['pass_word'] . '</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="input-group">
                    <input  type="text" name="address" class="input-items" style="width: 690px; margin-top: 0;">
                    <label class="user-label">Địa Chỉ</label>
                    <?php
                        if(!empty( $errors['address'])){
                            echo '<p class="error">' . $errors['address'] . '</p>';
                        }
                        ?>
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