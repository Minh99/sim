<style>
    .transfer-container {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      max-width: 400px;
      margin: auto;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
      text-align: center;
    }

    .qr-section img {
      max-width: 333px;
      height: auto;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    .account-info {
      font-size: 16px;
      line-height: 1.6;
    }

    .account-info p {
      margin: 6px 0;
    }

    .note {
      background-color: #f0f4ff;
      padding: 15px;
      border-left: 4px solid #007bff;
      border-radius: 8px;
      font-style: italic;
      color: #333;
      width: 100%;
    }   
</style>

<div class="transfer-container">
    <!-- QR Code -->
    <div class="qr-section">
      <img src="{{ asset('common/templates/site/images/qr.png') }}" alt="QR chuyển khoản" />
    </div>
  
    <!-- Thông tin tài khoản -->
    <div class="account-info">
      <p><strong>Chủ TK:</strong> Nguyễn Đinh Trung</p>
      <p><strong>Số TK:</strong> 2345683131</p>
      <p><strong>Ngân hàng:</strong> MBBank</p>
    </div>
  
    <!-- Nội dung chuyển khoản -->
    <div class="note">
      Nội dung chuyển khoản: <br>
      <strong>“Tên [khoảng cách] Số điện thoại”</strong>
    </div>
</div>
