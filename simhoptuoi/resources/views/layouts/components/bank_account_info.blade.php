<style>
    .transfer-info {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 20px;
        max-width: 900px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: flex-start;
    }

    .logo-box {
        flex: 1 1 150px;
        text-align: center;
    }

    .logo-box img {
        max-width: 100%;
        height: auto;
    }

    .account-details {
        flex: 2 1 250px;
    }

    .account-details p {
        margin: 8px 0;
        font-size: 16px;
    }

    .account-details strong {
        color: #333;
    }

    .transfer-note {
        flex: 2 1 250px;
        background: #f1f1f1;
        border-left: 4px solid #007bff;
        padding: 15px;
        border-radius: 8px;
        font-style: italic;
        color: #333;
    }

    @media (max-width: 768px) {
        .transfer-info {
            flex-direction: column;
            padding: 15px;
        }

        .transfer-note {
            border-left: none;
            border-top: 4px solid #007bff;
        }
    }
</style>

<div class="transfer-info">
    <div class="logo-box">
        <img src="{{ asset('common/templates/site/images/logo_MB_new.png') }}" alt="MBBank Logo" />
    </div>

    <div class="account-details">
        <p><strong>Chủ TK:</strong> Nguyễn Đinh Trung</p>
        <p><strong>Số TK:</strong> 0934553038</p>
        <p><strong>Ngân hàng:</strong> MBBank</p>
    </div>

    <div class="transfer-note">
        Nội dung chuyển khoản: <br>
        <strong>“Tên [khoảng cách] Số điện thoại”</strong>
    </div>
</div>
