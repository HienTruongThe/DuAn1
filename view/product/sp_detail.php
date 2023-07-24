<div class="container">
        <main class="main_total">
            <div class="product_left">
                <img id="slider" src="img/products_1.jpeg" alt="">
                <div class="img_items">
                    <img id="slider_productdetails" class="active_boder_pi" onclick="nb_1()" src="img/products_1.jpeg"
                        alt="">
                    <img id="slider_productdetails1" onclick="nb_2()" src="img/products_1(2).jpeg" alt="">
                    <img id="slider_productdetails2" onclick="nb_3()" src="img/products_1(3).jpeg" alt="">
                    <img id="slider_productdetails3" onclick="nb_4()" src="img/products_1(4).jpeg" alt="">
                </div>
                <script>
                    var images = [
                        "img/products_1.jpeg",
                        "img/products_1(2).jpeg",
                        "img/products_1(3).jpeg",
                        "img/products_1(4).jpeg"
                    ];
                    function nb_1() {
                        slider.src = images[0];
                        var addClass = document.getElementById("slider_productdetails");
                        addClass.classList.add('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails1");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails2");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails3");
                        removeClass.classList.remove('active_boder_pi');
                    }
                    function nb_2() {
                        slider.src = images[1];
                        var addClass = document.getElementById("slider_productdetails1");
                        addClass.classList.add('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails2");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails3");
                        removeClass.classList.remove('active_boder_pi');
                    }
                    function nb_3() {
                        slider.src = images[2];
                        var addClass = document.getElementById("slider_productdetails2");
                        addClass.classList.add('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails1");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails3");
                        removeClass.classList.remove('active_boder_pi');
                    }
                    function nb_4() {
                        slider.src = images[3];
                        var addClass = document.getElementById("slider_productdetails3");
                        addClass.classList.add('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails1");
                        removeClass.classList.remove('active_boder_pi');
                        var removeClass = document.getElementById("slider_productdetails2");
                        removeClass.classList.remove('active_boder_pi');
                    }
                </script>
            </div>
            <div class="product_right">
                <h3>Giày Nike Air Force 1 Low Shadow Sunset Pulse</h3>
                <p>Danh mục: <a href="">Nike Air force</a></p>
                <p>Giá sản phẩm: <span>2,999,000 ₫</span></p>
                <p>Size:
                <form action="">
                    <input id="size_productdetails1" onclick="sp_1()" class="product_size" type="button" value="38">
                    <input id="size_productdetails2" onclick="sp_2()" class="product_size" type="button" value="39">
                    <input id="size_productdetails3" onclick="sp_3()" class="product_size" type="button" value="40">
                    <input id="size_productdetails4" onclick="sp_4()" class="product_size" type="button" value="41">
                    <input id="size_productdetails5" onclick="sp_5()" class="product_size" type="button" value="42">
                </form>
                <script>
                    function sp_1() {
                        var addClass = document.getElementById("size_productdetails1");
                        addClass.classList.add('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails2");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails3");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails4");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails5");
                        removeClass.classList.remove('ps_useronclick');
                    }
                    function sp_copy1() {
                        var removeClass = document.getElementById("size_productdetails1");
                        removeClass.classList.remove('ps_useronclick');
                    }
                    function sp_2() {
                        var addClass = document.getElementById("size_productdetails2");
                        addClass.classList.add('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails1");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails3");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails4");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails5");
                        removeClass.classList.remove('ps_useronclick');
                    }
                    function sp_3() {
                        var addClass = document.getElementById("size_productdetails3");
                        addClass.classList.add('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails1");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails2");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails4");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails5");
                        removeClass.classList.remove('ps_useronclick');
                    }
                    function sp_4() {
                        var addClass = document.getElementById("size_productdetails4");
                        addClass.classList.add('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails1");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails2");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails3");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails5");
                        removeClass.classList.remove('ps_useronclick');
                    }
                    function sp_5() {
                        var addClass = document.getElementById("size_productdetails5");
                        addClass.classList.add('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails1");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails2");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails3");
                        removeClass.classList.remove('ps_useronclick');
                        var removeClass = document.getElementById("size_productdetails4");
                        removeClass.classList.remove('ps_useronclick');
                    }
                </script>
                </p>
                <p>Số lượng: </p>
                <div class="buttons_added">
                    <input class="minus is-form" type="button" value="-">
                    <input aria-label="quantity" class="input-qty" max="100" min="1" name="" type="number" value="1">
                    <input class="plus is-form" type="button" value="+">
                </div> <br>
                <button type="submit" class="product_cart"><i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ
                    hàng</button>
                <button type="submit" class="product_buynow">Mua ngay</button>
                <button class="product_selectsize" onclick="alert('Hướng dẫn chọn size giày phù hợp !')">+ Hướng dẫn
                    chọn
                    size</button>
                <script>
                    $('input.input-qty').each(function () {
                        var $this = $(this),
                            qty = $this.parent().find('.is-form'),
                            min = Number($this.attr('min')),
                            max = Number($this.attr('max'))
                        if (min == 0) {
                            var d = 0
                        } else d = min
                        $(qty).on('click', function () {
                            if ($(this).hasClass('minus')) {
                                if (d > min) d += -1
                            } else if ($(this).hasClass('plus')) {
                                var x = Number($this.val()) + 1
                                if (x <= max) d += 1
                            }
                            $this.attr('value', d).val(d)
                        })
                    })
                </script>
            </div>
        </main>
        <div class="mc_right mg_bottomall">
            <button class="items_detail">Mô tả</button>
            <p class="detail_bold">Giày Nike Air Force 1 <span>Low Shadow Sunset Pulse (W)</span></p>
            <p class="mc_productdetails">*Thông tin sản phẩm</p>
            <p class="detail_pi">Nike Air Force 1 Low Shadow Sunset Pulse – Mẫu giày thể thao giúp bạn khẳng định cá
                tính, sự trẻ
                trung và năng lượng
                tích cực. Được thiết kế bởi Bruce Kilgore, Sunset Pulse là một bữa tiệc màu sắc với tông trắng-xanh
                xám chủ đạo, nổi bật
                trên đó là logo Nike hồng-đen và miếng lót giày cùng name tag xanh nõn chuối. Phần upper là sự kết
                hợp từ các chất liệu
                da, da lộn, vải cùng đế giày sản xuất theo công nghệ Air cho bạn sự thoải mái mỗi khi vận động. Đây
                thực sự là mẫu giày
                không thể bỏ qua với những tín đồ yêu thích dòng giày lifestyle gọn nhẹ, bền bỉ nhưng vẫn vô cùng
                đẹp mắt.
            </p>
        </div>
        <div class="evaluate_right">
            <button class="er_detail">Đánh giá</button>
            <div class="er_comment">
                <!-- <div class="er_signin">
                    <button class="er_dangnhap">Đăng nhập để đánh giá</button>
                </div> -->
                <div class="er_signin_success">
                    <button class="er_dangnhap"
                        onclick="alert('Chân thành cảm ơn bạn đã đánh giá sản phẩm của chúng tôi')">Gửi đánh
                        giá</button>
                </div>
                <div class="er_usercomment">
                    <textarea class="er_usercomment_items" name="" id="" cols="50" rows="8"
                        placeholder="Nhập nội dung"></textarea>
                </div>
            </div>
            <h4 class="mg_topall">Đánh giá sản phẩm:</h4>
            <p class="mg_topall mg_leftall">Chưa có đánh giá sản phẩm nào.</p>
        </div>
    </div>
    <div class="container">
        <div class="product mg_topall">
            <div class="product_title">
                <h1>
                    <hr class="before" width="250px" align="left" color="black" size="4px">
                    <span>CÓ THỂ BẠN QUAN TÂM</span>
                    <hr class="after" width="250px" align="right" color="black" size="4px">
                </h1>
            </div>
            <div class="box-products mg_bottomall">
                <div class="items-product">
                    <a href="#"> <img src="img/20220315_w7EFPGZ049S1i6yguUbps91Y.jpg" alt=""></a>
                    <div class="text">
                        <p>Giày Nike Air Jordan 1 Mid SE ‘Varsity Purple’ </p>
                        <span>4,290,000đ</span>
                    </div>
                    <a class="view" href="#"><i class="fa-solid fa-money-bill-1-wave"> Mua Ngay </i></a>
                </div>
                <div class="items-product">
                    <a href="#"> <img src="img/20220315_w7EFPGZ049S1i6yguUbps91Y.jpg" alt=""></a>
                    <div class="text">
                        <p>Giày Nike Air Jordan 1 Mid SE ‘Varsity Purple’ </p>
                        <span>4,290,000đ</span>
                    </div>
                    <a class="view" href="#"><i class="fa-solid fa-money-bill-1-wave"> Mua Ngay </i></a>
                </div>
                <div class="items-product">
                    <a href="#"> <img src="img/20220315_w7EFPGZ049S1i6yguUbps91Y.jpg" alt=""></a>
                    <div class="text">
                        <p>Giày Nike Air Jordan 1 Mid SE ‘Varsity Purple’ </p>
                        <span>4,290,000đ</span>
                    </div>
                    <a class="view" href="#"><i class="fa-solid fa-money-bill-1-wave"> Mua Ngay </i></a>
                </div>
                <div class="items-product">
                    <a href="#"><img src="img/20220315_w7EFPGZ049S1i6yguUbps91Y.jpg" alt=""></a>
                    <div class="text">
                        <p>Giày Nike Air Jordan 1 Mid SE ‘Varsity Purple’ </p>
                        <span>4,290,000đ</span>
                    </div>
                    <a class="view" href="#"><i class="fa-solid fa-money-bill-1-wave"> Mua Ngay </i></a>
                </div>
                <div class="items-product">
                    <a href="#"> <img src="img/20220315_w7EFPGZ049S1i6yguUbps91Y.jpg" alt=""></a>
                    <div class="text">
                        <p>Giày Nike Air Jordan 1 Mid SE ‘Varsity Purple’ </p>
                        <span>4,290,000đ</span>
                    </div>
                    <a class="view" href="#"><i class="fa-solid fa-money-bill-1-wave"> Mua Ngay </i></a>
                </div>
            </div>
        </div>
    </div>