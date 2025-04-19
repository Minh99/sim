<style>
    .transfer-container {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        max-width: 900px;
        margin: auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .qr-section {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .qr-section img {
        max-width: 180px;
        height: auto;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .info-section {
        display: flex;
        flex-direction: column;
        gap: 12px;
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
    }

    @media (min-width: 768px) {
        .transfer-container {
            flex-direction: row;
            align-items: flex-start;
        }

        .qr-section,
        .info-section {
            flex: 1;
        }

        .qr-section {
            justify-content: flex-start;
        }
    }
</style>
<div class="transfer-container">
    <!-- QR Code -->
    <div class="qr-section">
        <img src="{{ asset('path/to/your-qr-code.png') }}" alt="QR chuyển khoản" />
    </div>

    <!-- Thông tin tài khoản + nội dung -->
    <div class="info-section">
        <div class="account-info">
            <p><strong>Chủ TK:</strong> Nguyễn Đinh Trung</p>
            <p><strong>Số TK:</strong> 2345683131</p>
            <p><strong>Ngân hàng:</strong> MBBank</p>
        </div>
        <div class="note">
            Nội dung chuyển khoản: <br>
            <strong>“Tên [khoảng cách] Số điện thoại”</strong>
        </div>
    </div>
</div>
<div class="transfer-container">
    <!-- Logo -->
    <div class="transfer-section">
        <img src="{{ asset('common/templates/site/images/qr.png') }}" alt="MBBank Logo" />
    </div>

    <!-- Thông tin tài khoản -->
    <div class="transfer-section account-info">
        <p><strong>Chủ TK:</strong> Nguyễn Đinh Trung</p>
        <p><strong>Số TK:</strong> 2345683131</p>
        <p><strong>Ngân hàng:</strong> MBBank</p>
    </div>

    <!-- Nội dung chuyển khoản -->
    <div class="transfer-section">
        <div class="note">
            Nội dung chuyển khoản: <br>
            <strong>“Tên [khoảng cách] Số điện thoại”</strong>
        </div>
    </div>
</div>
