<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="IMAGE/MainLogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/MainPage.css">
   
    <title>Cay Thuoc Nam</title>
</head>

<body>
<header>
        <div class="logo">
            <a href="index.php"><img src="IMAGE/MainLogo.png" alt="" height="50px" width="70px"></a>
        </div>
        <div class="menu">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="Cartegory.php">Sản Phẩm</a>
                <ul class="sub-menu">
                    <li><a href="">Mất Ngủ - Stress</a></li>
                    <li><a href="">Giải Độc Gan - Mát Gan</a></li>
                    <li><a href="">Bồi Bổ Cơ Thể</a></li>
                    <li><a href="">Huyết Áp - Tim Mạch</a></li>
                    <li><a href="">Dạ Dày - Tiêu Hoá</a></li>
                    <li><a href="">Giảm Cân - Làm Đẹp</a></li>
                    <li><a href="">Xương Khớp - Đau Nhức</a></li>
                </ul>
            </li>
            <li><a href="">Sống Khoẻ</a></li>
            <li><a href="">Thông Tin</a></li>
        </div>
        <div class="orthers">
            <li><input placeholder="Tìm Kiếm" type="text"> <i class="fas fa-search"></i></li>
            <li><a href="Cart.php"><i class="fas fa-cart-plus"></a></i></li>
            <li><a href="Login_Register/login.php"><i class="fa-solid fa-user"></i></a></li>
        </div>
    </header>
    <!-- product -->
    <section class="product">
        <div class="container">
            <div class="product-top row">
                <p>Trang Chủ</p> <span>&#10230</span>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="IMAGE/SP/Bo-cong-anh.png" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="IMAGE/SP/Bo-cong-anh.png" alt="">
                        <img src="IMAGE/SP/Bo-cong-anh-1.png" alt="">
                        <img src="IMAGE/SP/Bo-cong-anh-2.png" alt="">
                        <img src="IMAGE/SP/Bo-cong-anh-3.png" alt="">
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1>Bồ Công Anh – Giải độc gan, thanh lọc cơ thể, ngừa Ung thư</h1>
                    </div>
                    <div class="product-content-right-product-price">
                        <p>150.000<sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product-quantity">
                        <p style="font-weight: bold;">Số Lượng:</p>
                        <input type="number" min="0" value="1">
                        <p></p>
                    </div>
                    <div class="product-content-right-product-button">
                        <button><i class="fas fa-shopping-cart"></i>
                            <p>MUA HÀNG</p>
                        </button>
                    </div>

                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item mota">
                                    <p>Mô Tả</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item thanhphan">
                                    <p>Thành Phần</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item congdung">
                                    <p>Công Dụng</p>
                                </div>
                            </div>
                            
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-mota">
                                    Nếu để ý bạn sẽ thấy bồ công anh là loài hoa mọc dại rất phổ biến ở nhiều vùng miền
                                    nước ta, nhiều nhất là các tỉnh miền núi phía Bắc. Không chỉ mang vẻ đẹp hoang dại
                                    mạnh mẽ, bồ công anh còn được biết đến với nhiều lợi ích giành cho sức khỏe con
                                    người. Bài viết dưới đây, hãy cùng chúng tôi làm rõ tác dụng giải độc gan, thanh lọc
                                    cơ thể của thảo dược này. <br>
                                    Bồ công anh có tên khoa học là Lactuca thuộc họ Cúc, còn được biết được biết đến với
                                    tên gọi khác như cây diếp trời, cây mũi mác hay cây diếp hoang… Tuy nhiên, ở Việt
                                    Nam, tên bồ công anh vẫn thân thuộc và hữu dụng nhất. Đây là loại cây thân thảo, như
                                    bụi cỏ dại thấp khoảng 50 -70 cm. Lá mọc so le nhau, hoa màu vàng rực rỡ. Loài thực
                                    vật này thường ra hoa vào tháng 6 và kết quả vào tháng 9 hàng năm. <br>
                                </div>
                                <div class="product-content-right-bottom-content-thanhphan">
                                    Thảo dược là loại thực vật lành tính, có thể sử dụng để làm thức ăn trong món salad
                                    bởi trong lá chứa nhiều protein hơn rau bina (rau chân vịt). Lá bồ công anh rất giàu
                                    canxi, sắt, magiê, phốt pho, kali và các loại vitamin khác. <br>
                                    Trong Đông y, cây thuốc có tác dụng thanh nhiệt, giải độc, lợi thấp thông lâm. Đây
                                    là một vị thuốc đầu bảng trong lĩnh vực thanh nhiệt giải độc của Đông y do tác dụng
                                    tiêu độc kháng viêm mà không gây tác dụng phụ. Đây còn được ví như thuốc kháng sinh
                                    thực vật.
                                </div>
                                <div class="product-content-right-bottom-content-congdung">
                                    Bộ phận dùng làm thuốc từ bồ công anh gần như là tất cả các bộ phận. Do đó nhiều
                                    người thu hái nguyên cây về, bỏ đất, rửa sạch, để ráo rồi cắt nhỏ, phơi hoặc sấy
                                    khô. Cũng có người chỉ lấy phần lá về phơi khô làm thuốc. <br>

                                    Theo nghiên cứu y học, chất nhựa và chất đắng của dược liệu là từ nhiều hoạt chất
                                    tạo nên, các thành phần này mang đến nhiều lợi ích cho sức khỏe người dùng. Đặc biệt
                                    là các công dụng mát gan, đẹp da và giải độc gan từ loài hoa dại này.<br>

                                    Bồ công anh mát gan, giải độc gan<br>
                                    Có chứa nhiều hoạt chất kháng khuẩn, chống viêm và tăng cường đào thải các độc tố
                                    trong gan, tính mát từ cây thuốc còn giúp thanh nhiệt cơ thể, rất hiệu quả trong
                                    việc giải độc gan.<br>

                                    Không chỉ thế vị thảo dược này còn giúp đào thải axit uric gây ra bệnh Gout ở người
                                    và giảm thiểu tích tụ mỡ thừa giúp điều trị hiệu quả bệnh gan nhiễm mỡ.<br>

                                    Bồ công anh trị mụn, làm đẹp da<br>
                                    Uống trà bồ công anh mỗi ngày là giải pháp giúp bạn chăm sóc da từ bên trong vô cùng
                                    hiệu quả, lại đơn giản không mất nhiều công sức, tiền bạc. Các hoạt chất có trong
                                    thảo dược giúp thanh nhiệt cơ thể, mát gan đẩy lùi tình trạng mụn, giúp làn da luôn
                                    căng bóng, mịn màng.<br>

                                    Và rất nhiều công dụng khác từ bồ công anh<br>
                                    Ngoài tác dụng mát gan, đẹp da và giải độc gan, thảo dược này còn mang đến nhiều
                                    công dụng khác, bao gồm:<br>

                                    Cải thiện chức năng thận: giúp lợi tiểu, thanh lọc cơ thể, ngăn ngừa sỏi đường tiết
                                    niệu, sỏi thận<br>
                                    Ngăn ngừa, phòng chống ung thư: chiết xuất thảo dược có chứa hoạt chất taraxacum
                                    officinale có khả năng ngăn chặn sự phát triển của các khối u, tế bào gây ung
                                    thư<br>
                                    Giảm cân: sử dụng trà bồ công anh mỗi ngày là giải pháp giúp chị em phụ nữ giảm cân
                                    giữ dáng và kiểm soát cân nặng vừa an toàn, vừa hiệu quả<br>
                                    Cải thiện chức năng tiêu hóa, nhuận tràng, điều trị chứng ăn uống khó tiêu<br>
                                    Giúp xương chắc khỏe: dược liệu có chứa nhiều khoáng chất thiết yếu cần thiết cho
                                    xương như canxi, photpho, magie giúp xương chắc khỏe, đồng thời ngăn ngừa loãng
                                    xương ở người cao tuổi<br>
                                    Lợi sữa: phụ nữ cho con bú sử dụng vị thuốc này có thể thông sữa, lợi sữa cho bé
                                    bú<br>
                                    Dùng trà bồ công anh hỗ trợ điều trị tiểu đường<br>
                                    Làm lành các vết thương ngoài da do côn trùng đốt<br>
                                    Điều trị đau dạ dày<br>
                                    Chống suy nhược cơ thể<br>
                                    Giảm đau mắt<br>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>








    <!-- footer -->
    <div class="footer-top">
        <li><a href="IMAGE/MainLogo.png"></a></li>
        <li><a href="https://www.facebook.com/100030450396901/">Liên Hệ</a></li>
        <li><a href="https://www.facebook.com/100030450396901/">Tuyển Dụng</a></li>
        <li><a href="">Giới Thiệu</a></li>
        <li>
            <a href="https://www.facebook.com/profile.php?id=100024832020852" class="fab fa-facebook"></a>
            <a href="https://studio.youtube.com/channel/UCVYspzJwBKi7nrjCiuT7Wbg/editing/images"
                class="fab fa-youtube"></a>
            <a href="https://twitter.com/tn28112017" class="fab fa-twitter"></a>
        </li>
    </div>
    <div class="footer-center">
        <p> Trồng và cung cấp sản phẩm cây thuốc, dược liệu. Chúng tôi luôn đảm bảo nguồn dược liệu sạch và an toàn đến
            tay khách hàng.<br>
            <br>
            VỀ CHÚNG TÔI <br>
            Công ty TNHH Dược Liệu<br>
            Số Điện Thoại: <b>0335332438</b> <br>
            Mã số thuế: 0801215631<br>
            Email: tn28112017@gmail.com<br>
            Đại diện pháp luật: Nguyễn Xuân Nhân<br>
        </p>
    </div>

    <div class="footer-bottom">
        <p>Bản quyền 2023 © Thông tin trên website chỉ mang tính chất tham khảo, khi sử dụng vui lòng hỏi ý kiến bác sĩ.
        </p>
    </div>
</body>
<script>
    const header = document.querySelector("header")
    window.addEventListener("scroll", function () {
        x = window.pageYOffset
        if (x > 0) {
            header.classList.add("sticky")
        }
        else {
            header.classList.remove("sticky")
        }
    })

    const bigImg = document.querySelector(".product-content-left-big-img img")
    const smallImg = document.querySelectorAll(".product-content-left-small-img img")
    smallImg.forEach(function(imgItem, x){
        imgItem.addEventListener("click", function(){
            bigImg.src = imgItem.src
        })
    });


    const mota = document.querySelector(".mota")
const thanhphan = document.querySelector(".thanhphan")
const congdung = document.querySelector(".congdung")
if(mota){
    mota.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "block"
    })
}
if(thanhphan){
    thanhphan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "block"
    })
}
if(congdung){
    congdung.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "block"
    })
    const button = document.querySelector(".product-content-right-bottom-top")
    if(button){
        button.addEventListener("click", function(){
            document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
        })
    }
}
</script>


</html>