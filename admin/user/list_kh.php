<main>
  
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <div class="content-product">
            <div style="width: 10%;" class="product-title">STT</div>
            <div style="width: 10%;" class="product-title">MÃ KH</div>
            <div style="width: 20%;" class="product-title">Họ Tên</div>
            <div style="width: 15%;" class="product-title">Số ĐT</div>
            <div style="width: 15%;" class="product-title">Email</div>
            <div style="width: 20%;" class="product-title">Địa Chỉ</div>
            <div style="width: 15%;" class="product-title">Thao Tác</div>
        </div>
        <?php
        $sum = 0;
          $delete="return confirm('Bạn có chắc chắn muốn xóa')";
          foreach ($list_user as $list ) {
        
            extract($list);
            $delete_user = "index.php?btn=delete_user&ma_tk=" . $ma_tk;
            echo '
            <div  class="content-product">
            <div style="width: 10%;" class="product-items">'.$sum++.'</div>
            <div style="width: 10%;" class="product-items">'.$ma_tk.'</div>
            <div style="width: 20%;" class="product-items">'.$ho_ten.'</div>
            <div style="width: 20%;" class="product-items">'.$sdt.'</div>
            <div style="width: 15%;" class="product-items">'.$email.'</div>
            <div style="width: 20%;" class="product-items">'.$dia_chi.'</div>
            <div style="width: 15%;" class="product-items">
                <a href="'.$delete_user.'">
                    <input type="button" value="Delete" class="operation" onclick="'.$delete.'"></a>
            </div>
        </div>
            ';
          }
        ?>
       
    </div>

</main>
</div>