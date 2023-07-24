<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <?php if (isset($thongbao)) {
            echo $thongbao;
        }
        ?>
        <form action="index.php?act=updatedm&id=<?=$dmedit['ma_loai']?>" method="POST">
            <div class="row mb10">
                <label for="">Mã loại</label><br>
                <input type="text" name="maloai" disabled value="<?=$dmedit['ma_loai']?>" ><br>
            </div>
            <div class="row mb10">
                <label for="">Tên loại</label><br>
                <input type="text" name="tenloai" value="<?=$dmedit['ten_loai']?>"><br>
            </div>
            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cap Nhat">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php if (isset($error['loai'])) {
                echo $error['loai'];
            }
            ?>
        </form>
    </div>
</div>
</div>