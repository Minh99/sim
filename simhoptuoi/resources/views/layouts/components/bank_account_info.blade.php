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

    .transfer-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .transfer-section img {
        max-width: 180px;
        height: auto;
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
        text-align: center;
    }

    @media (min-width: 768px) {
        .transfer-container {
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            text-align: left;
        }

        .transfer-section {
            flex: 1;
            align-items: flex-start;
            text-align: left;
        }

        .note {
            text-align: left;
        }
    }
</style>
<div class="transfer-container">
    <!-- Logo -->
    <div class="transfer-section">
        <img src="{{ asset('common/templates/site/images/logo_MB_new.png') }}" alt="MBBank Logo" />
    </div>

    <!-- Thông tin tài khoản -->
    <div class="transfer-section account-info">
        <p><strong>Chủ TK:</strong> Nguyễn Đinh Trung</p>
        <p><strong>Số TK:</strong> 0934553038</p>
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
