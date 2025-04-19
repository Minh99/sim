<style>
    .bank-info-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
        font-size: 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .bank-info-table td {
        border: 1px solid #ddd;
        padding: 15px;
        vertical-align: top;
    }

    .bank-info-table img {
        max-width: 100%;
        height: auto;
    }

    .bank-info-table strong {
        display: inline-block;
        width: 80px;
    }

    .bank-info-note {
        font-style: italic;
        color: #555;
    }

    @media screen and (max-width: 768px) {
        .bank-info-table,
        .bank-info-table tbody,
        .bank-info-table tr,
        .bank-info-table td {
            display: block;
            width: 100%;
        }

        .bank-info-table td {
            margin-bottom: 15px;
        }

        .bank-info-note {
            text-align: center;
            display: block;
        }
    }
</style>
<table class="bank-info-table">
    <tbody>
        <tr>
            <td style="text-align: center;">
                <img src="{{ asset('common/templates/site/images/logo_MB_new.png') }}" alt="Logo MBBank">
            </td>
            <td>
                <p><strong>Chủ TK:</strong> Nguyễn Đinh Trung</p>
                <p><strong>Số TK:</strong> 0934553038</p>
                <p><strong>Ngân hàng:</strong> MBBank</p>
            </td>
            <td class="bank-info-note">
                Nội dung chuyển khoản: <br><strong>“Tên [khoảng cách] Số điện thoại”</strong>
            </td>
        </tr>
    </tbody>
</table>