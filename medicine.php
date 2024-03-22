<?php 
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý thuốc</title>
        <link rel="stylesheet" href="medicine.css">
        <link rel="stylesheet" href="general.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>
        <div class="header"> 
            <div onclick="home()" class="left">Hospital</div>
            <script>
                function home(){
                    window.location = "home.php";
                }
            </script>
            <div class="middle">
                <div></div>
                <button onclick="general()" class="general">
                    <div>TỔNG QUAN</div>
                </button>
                <button onclick="contact()" class="contact">
                    <div>THÔNG TIN LIÊN HỆ</div>
                </button>
                <button onclick="treatment()" class="treatment">
                    <div>QUẢN LÝ BÁC SĨ</div>
                </button>
                <button onclick="patient()" class="patient">
                    <div>QUẢN LÝ NGƯỜI BỆNH</div>
                </button>
                <button onclick="medicine()" class="medicine">
                    <div>QUẢN LÝ THUỐC</div>
                </button> 
                <button onclick="device()" class="device">
                    <div>THIẾT BỊ Y TẾ</div>
                </button>
                <script>
                    function general(){
                        window.location = "generalPage.php";
                    }
                    function contact(){
                        window.location = "contact.php";
                    }
                    function treatment(){
                        window.location = "doctor.php";
                    }
                    function patient(){
                        window.location = "patient.php";
                    }
                    function medicine(){
                        window.location = "medicine.php";
                    }
                    function device(){
                        window.location = "device.php";
                    }
                </script>
            </div>
            <div class="right">
                <div class="login">Xin chào <?php echo $_SESSION['user']['Username'];?>, <a class="login logout" href="logout.php">Thoát</a></div>
            </div>
        </div>
        <div class="find">
            <h2>TÌM THUỐC</h2> <br> <br>
            <p>Vui lòng loại thuốc cần tìm, viết ra tên thuốc để tìm nhanh hơn</p> <br>
            <form action="/medicine.php" method="get">
                <select class="select" name="purpose-medicine-select">
                    <option value="All" class="doctor">Theo mục đích sử dụng</option>
                    <option value="Thuốc giảm đau" class="doctor">Thuốc giảm đau</option>
                    <option value="Thuốc để phòng ngừa bệnh" class="doctor">Thuốc để phòng ngừa bệnh</option>
                    <option value="Thuốc để tránh lo âu" class="doctor">Thuốc để tránh lo âu</option>
                    <option value="Thuốc chẩn đoán" class="doctor">Thuốc chẩn đoán</option>
                    <option value="Thuốc điều trị" class="doctor">Thuốc điều trị</option>
                    <option value="Thuốc phòng ngừa" class="doctor">Thuốc phòng ngừa</option>
                </select>
                <select class="select" name="func-medicine-select">
                    <option value="All" class="doctor">Theo cơ chế hoạt động</option>
                    <option value="Chất giảm đau" class="doctor">Chất giảm đau</option>
                    <option value="Chất chống vi khuẩn" class="doctor">Chất chống vi khuẩn</option>
                    <option value="Chất chống cơ thắt cơ" class="doctor">Chất chống cơ thắt cơ</option>
                    <option value="Chất chống vi rút" class="doctor">Chất chống vi rút</option>
                    <option value="Chất chống viêm" class="doctor">Chất chống viêm</option>
                    <option value="Chất gây mê, gây tê" class="doctor">Chất gây mê, gây tê</option>
                </select>
                <select class="select" name="toxic-medicine-select">
                    <option value="All" class="doctor">Tìm kiếm theo độc tính</option>
                    <option value="An toàn" class="doctor">An toàn</option>
                    <option value="Nguy hiểm" class="doctor">Nguy hiểm</option>
                </select>
                <input type = "text" placeholder="Tìm kiếm tên thuốc">
            </form>
        </div>
        <div class="medicine1">
            <h2>Paracetamol (Acetaminophen)</h2>
            <p>Công dụng: Paracetamol thường được sử dụng để giảm đau và hạ sốt. 
            Nó cũng có thể được sử dụng trong điều trị 
            đau nhức do viêm nhiễm như viêm họng hoặc đau đầu.</p>
            <p>Nhập kho: 11/11/2023</p>
            <p>Xuất kho: chưa xuất</p>
            <p>Hạn sử dụng: còn 3 tháng nữa</p>
        </div>
        <div class="medicine1">
            <h2>Amoxicillin</h2>
            <p>Công dụng: Amoxicillin là một loại kháng sinh thuộc nhóm penicillin, 
            thường được sử dụng để điều trị các nhiễm trùng do vi khuẩn như viêm họng, 
            viêm phổi, viêm tai, nhiễm khuẩn đường tiểu, và nhiễm trùng da.</p>
            <p>Nhập kho: 10/10/2023</p>
            <p>Xuất kho: chưa xuất</p>
            <p>Hạn sử dụng: còn 6 tháng nữa</p>
        </div>
        <div class="order-container">
            <button class="order">&lt</button>
            <button class="number">1</button>
            <button class="order">&gt</button>
        </div> <br> <br>
        <div class="end-of-page">
            <div class="modern">
                <i class='bx bxs-devices'></i>
                <p class="adver">Thiết bị y tế hiện đại</p>
                <p class="adver-detail">Đường dẫn tới sức khỏe bền vững: Kết nối công nghệ, chăm sóc y tế tận tâm.</p>
            </div>
            <div class="qualification">
                <i class='bx bxs-shopping-bag-alt'></i>
                <p class="adver">Bác sĩ có chuyên môn cao</p>
                <p class="adver-detail">Chất lượng dịch vụ y tế vượt trội với đội ngũ bác sĩ có trình độ cao và tâm huyết.</p>
            </div>
            <div class="heart">
                <i class='bx bxs-donate-heart'></i>
                <p class="adver">Nhân viên y tế tận tình</p>
                <p class="adver-detail">Chăm sóc từ trái tim: Đội ngũ y tế với tâm hồn của người chăm sóc.</p>
            </div>
            <div class="phone">
                <i class='bx bxs-phone'></i>
                <p class="adver">0385484729</p>
                <p class="adver-detail">Kết nối chăm sóc sức khỏe mọi lúc, mọi nơi: Bệnh viện luôn sẵn lòng lắng nghe và hỗ trợ.</p>
            </div>
        </div>
    </body>
    </html>