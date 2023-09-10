@extends('app')

@section('title', 'Mua hàng và thanh toán')

@section('content')
    <section class="contentPage">
        <div class="bodyPage">
            <h1 dir="ltr" style="text-align:justify">
                <strong>
                    <span style="font-size:14px">
                        <span style="text-transform: uppercase; font-family:arial,helvetica,sans-serif">MUA HÀNG VÀ THANH TOÁN TẠI {{ $nameSite }}</span>
                    </span>
                </strong>
            </h1>
            <p><strong>Bước 1</strong><strong>:&nbsp;ĐẶT SIM</strong></p>

            <p>Qu&yacute; kh&aacute;ch chọn số sim v&agrave;&nbsp;<a href="{{ route('home')}}">đặt h&agrave;ng tr&ecirc;n web</a>&nbsp;hoặc gọi điện đến một trong c&aacute;c số hotline hỗ trợ kh&aacute;ch h&agrave;ng của
                website <a href="{{ route('home') }}">{{ $nameSite }}</a></p>

            <p><strong>Bước 2</strong><strong>:&nbsp;X&Aacute;C NHẬN</strong></p>

            <p>Khi nhận được đơn h&agrave;ng nh&acirc;n vi&ecirc;n b&aacute;n h&agrave;ng sẽ kiểm tra số trong kho v&agrave; gọi điện lại b&aacute;o cho Qu&yacute; kh&aacute;ch biết th&ocirc;ng tin về đơn h&agrave;ng m&agrave;
                qu&yacute; kh&aacute;ch đ&atilde; đặt tr&ecirc;n trang web ch&uacute;ng t&ocirc;i hoặc đ&atilde; gọi điện đến hotline của Trung t&acirc;m.</p>

            <p><strong>Bước 3</strong><strong>:&nbsp;GIAO H&Agrave;NG</strong></p>

            <p><strong>&bull; Kh&aacute;ch h&agrave;ng ở H&agrave; Nội:&nbsp;</strong>Kh&aacute;ch h&agrave;ng qua điểm giao dịch của cửa h&agrave;ng tại :</p>

            <p>Hoặc ch&uacute;ng t&ocirc;i c&oacute; nh&acirc;n vi&ecirc;n giao sim tận tay &nbsp;Q&uacute;y kh&aacute;ch ,sau khi &nbsp;Q&uacute;y kh&aacute;ch chốt đơn h&agrave;ng, nh&acirc;n vi&ecirc;n giao sim sẽ mang sim
                đến địa chỉ m&agrave; Q&uacute;y kh&aacute;ch h&agrave;ng &nbsp;cung cấp . Nh&acirc;n vi&ecirc;n giao sim sẽ hướng dẫn Q&uacute;y kh&aacute;ch kiểm tra đ&uacute;ng th&ocirc;ng tin của Q&uacute;y kh&aacute;ch.Sau
                đ&oacute; Qu&yacute; kh&aacute;ch mới phải thanh to&aacute;n &nbsp;tiền sim cho nh&acirc;n vi&ecirc;n giao sim .</p>

            <p><strong>&bull; Kh&aacute;ch h&agrave;ng ở tỉnh th&agrave;nh kh&aacute;c:</strong></p>

            <ol>
                <li>Qu&yacute; kh&aacute;ch c&oacute; thể nhận sim nhanh hơn bằng c&aacute;ch&nbsp;chuyển tiền mua sim v&agrave;o t&agrave;i khoản ng&acirc;n h&agrave;ng của&nbsp;Sim Hợp Tuổi &nbsp;v&agrave; mang theo CMND ra điểm
                    giao dịch của nh&agrave; mạng để y&ecirc;u cầu cấp lại sim (sau khi Sim Hợp Tuổi đ&atilde; ho&agrave;n tất việc sang t&ecirc;n)</li>
                <li>Trung t&acirc;m sẽ gửi sim về tận tay kh&aacute;ch h&agrave;ng &nbsp;qua chuyển ph&aacute;t nhanh ( chuyển COD) &nbsp;từ 24h - 48h.Sau khi bưu phẩm của Q&uacute;y kh&aacute;ch đến Bưu điện. Nh&acirc;n vi&ecirc;n
                    ph&aacute;t thư sẽ mang bưu phẩm &nbsp;&nbsp;đến địa chỉ m&agrave; qu&yacute; kh&aacute;ch h&agrave;ng th&ocirc;ng b&aacute;o . Sau khi kh&aacute;ch h&agrave;ng kiểm tra đơn h&agrave;ng th&igrave; thanh
                    to&aacute;n &nbsp;cho &nbsp;bưu t&aacute; số tiền m&agrave; qu&yacute; kh&aacute;ch v&agrave; nh&acirc;n vi&ecirc;n của web đ&atilde; thống nhất khi chốt đơn h&agrave;ng.</li>
                <li>Th&ocirc;ng tin về t&agrave;i khoản ng&acirc;n h&agrave;ng xem ph&iacute;a dưới đ&acirc;y.</li>
            </ol>

            <p>Lưu &yacute;:</p>

            <ul>
                <li>&nbsp;Kh&aacute;ch h&agrave;ng cần chuẩn bị trước th&ocirc;ng tin c&aacute; nh&acirc;n (tr&ecirc;n CMND) để được v&agrave;o t&ecirc;n ch&iacute;nh chủ sở hữu sim.</li>
            </ul>

            <p>&bull;&nbsp;<a href="{{ route('home') }}">{{ $nameSite }}</a><strong> sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm nếu Qu&yacute; kh&aacute;ch gửi tiền mua sim v&agrave;o số t&agrave;i khoản kh&ocirc;ng nằm trong danh s&aacute;ch dưới đ&acirc;y:</strong></p>

            @include('layouts.components.bank_account_info')
        </div>
    </section>
@endsection
