<main>
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <div class="product_title">
            <h1>
                Thêm Sản Phẩm
            </h1>
        </div>
        <div class="product_items">
            <form action="index.php?btn=add_dm" method="post">
                <div class="content_items">
                    <div class="">

                        <div class="input-group" style="margin-left: 60px;">
                            <input required="" type="text" name="text" autocomplete="off" class="items_input">
                            <label class="user-label">Mã Sản Phẩm</label>
                            <!-- <p class="error">Bạn không để trống ô này &#9888;</p> -->
                        </div>

                        <div class="input-group" style="margin-left: 60px;">
                            <input required="" type="text" name="text" autocomplete="off" class="items_input">
                            <label class="user-label">Tên Sản Phẩm</label>
                        </div>

                        <div class="input-group" style="margin-left: 60px;">
                            <input required="" type="text" name="text" autocomplete="off" class="items_input">
                            <label class="user-label">Giá Sản Phẩm</label>
                        </div>
                    </div>
                    <div class="" style="margin-left: 60px;">
                 
                        <div class="input-group">
                            <p>Size Sản Phẩm</p>
                            <input type="checkbox">43
                            <input type="checkbox">44
                            <input type="checkbox">44
                            <input type="checkbox">44
                            <input type="checkbox">44

                        </div>
                        <div class="input-group">
                            <p>Hình ảnh Sản Phẩm</p>
                            <div class="">
                                <img src="" id="img" height="30px" >
                            </div>
                            <input type="file" id="file_img " multiple >
                        </div>
                    </div>
                </div>
                <div class="input-group" style="margin:0 60px;">
                    <p>Mô tả Sản Phẩm</p>
                    <textarea name="" id="" cols="65" rows="10"></textarea>
                </div>
                <div class="" style="margin-left: 60px; margin-top: 20px;">
                    <input type="submit" name="add_new" value="Thêm Sản Phẩm" class="btn_submit" style="border: none;">
                    <input type="reset" value="Nhập Lại" class="btn_submit">
                    <a href="index.php?btn=list_sp"><input type="button" name="list_dm" value="Danh Sách" class="btn_submit" style="border: none;"></a>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        let img = document.getElementById('img');
        let fifile_imgle = document.getElementById('file_img');
        file_img.onchange = (e) => {
            if (file_img.files[0])
                img.src = URL.createObjectURL(file_img.files[0])
        }
    </script>
</main>
</div>