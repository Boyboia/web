<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lịch Sử Mua Hàng</title>

  <!-- Thêm favicon -->
  <link href='./assets/img/favicon.png' rel='icon' type='image/x-icon' />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fdecea; /* Light red background */
      margin: 0;
      padding: 20px;
      color: #333;
      display: flex;
      justify-content: center;
    }
    .container {
      max-width: 800px;
      width: 100%;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    h1 {
      color: #c0392b; /* Darker red for the title */
      display: flex;
      align-items: center;
      gap: 10px;
    }
    h1 i {
      color: #c0392b;
    }
    a.home-link {
      text-decoration: none;
      color: #fff;
      background-color: #c0392b; /* Red button */
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 6px;
      transition: background-color 0.3s;
    }
    a.home-link:hover {
      background-color: #e74c3c; /* Darker red on hover */
    }
    .invoice {
      background-color: #fff5f5; /* Soft red background for invoices */
      border: 1px solid #f5b7b1; /* Soft red border */
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .invoice:hover {
      background-color: #fce6e6; /* Slightly darker red hover effect */
    }
    .invoice h2 {
      margin-top: 0;
      color: #b03a2e; /* Dark red for the heading */
    }
    .item {
      padding: 5px 0;
      border-bottom: 1px solid #f5b7b1;
      color: #7b241c; /* Darker red for food items */
    }
    .item:last-child {
      border-bottom: none;
    }
    .total {
      text-align: right;
      font-weight: bold;
      margin-top: 10px;
      color: #b03a2e; /* Dark red for total */
    }
    .details {
      display: none;
      margin-top: 10px;
      font-style: italic;
      color: #8e3b3b; /* Soft brown for details */
    }
  </style>
  <script>
    function toggleDetails(id) {
      const detail = document.getElementById(id);
      if (detail.style.display === 'none' || detail.style.display === '') {
        detail.style.display = 'block';
      } else {
        detail.style.display = 'none';
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <header>
      <h1><i class="fas fa-receipt"></i> Lịch Sử Mua Hàng</h1>
      <a class="home-link" href="index.php">Trang chủ</a>
    </header>

    <div class="invoice" onclick="toggleDetails('details1')">
      <h2>Hóa đơn #5678 - Ngày: 02/05/2025</h2>
      <div class="item">Phở bò - 45.000đ</div>
      <div class="item">Bánh mì thịt - 20.000đ</div>
      <div class="item">Trà đá - 5.000đ</div>
      <div class="total">Tổng: 70.000đ</div>
      <div class="details" id="details1">Địa chỉ: 123 Lê Lợi, Q.1, TP.HCM<br>SĐT: 0909 123 456</div>
    </div>

    <div class="invoice" onclick="toggleDetails('details2')">
      <h2>Hóa đơn #5679 - Ngày: 04/05/2025</h2>
      <div class="item">Cơm tấm sườn - 50.000đ</div>
      <div class="item">Canh chua cá - 30.000đ</div>
      <div class="item">Nước ngọt - 15.000đ</div>
      <div class="total">Tổng: 95.000đ</div>
      <div class="details" id="details2">Địa chỉ: 456 Nguyễn Trãi, Q.5, TP.HCM<br>SĐT: 0912 345 678</div>
    </div>

    <div class="invoice" onclick="toggleDetails('details3')">
      <h2>Hóa đơn #5680 - Ngày: 06/05/2025</h2>
      <div class="item">Bún bò Huế - 40.000đ</div>
      <div class="item">Chè đậu xanh - 10.000đ</div>
      <div class="item">Nước suối - 10.000đ</div>
      <div class="total">Tổng: 60.000đ</div>
      <div class="details" id="details3">Địa chỉ: 789 Trần Hưng Đạo, Q.1, TP.HCM<br>SĐT: 0987 654 321</div>
    </div>
  </div>
</body>
</html>
