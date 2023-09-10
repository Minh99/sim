@extends('app')

@section('title', 'Điều khoản và điều kiện')

@section('content')
    <section class="contentPage">
        <div class="bodyPage">
            <h1 dir="ltr" style="text-align:justify">
                <strong>
                    <span style="font-size:14px">
                        <span style="text-transform: uppercase; font-family:arial,helvetica,sans-serif">Điều khoản và điều kiện TẠI {{ $nameSite }}</span>
                    </span>
                </strong>
            </h1>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1.&nbsp;<strong>Giới thiệu về</strong>&nbsp;<a href="{{ route('home') }}">{{$nameSite}}</a></span></span>

            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Trung t&acirc;m Sim hợp tuổi - Sim số đẹp Phong thủy Việt Nam l&agrave; đơn vị h&agrave;ng đầu trong lĩnh vực nghi&ecirc;n cứu v&agrave; ứng dụng khoa học phong thủy v&agrave; đời sống, c&aacute;c sản phẩm của ch&uacute;ng t&ocirc;i được &nbsp;giao dịch ch&iacute;nh thức tại website <a href="{{ route('home') }}">{{$nameSite}}</a></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- C&aacute;c Điều Khoản v&agrave; Điều Kiện n&agrave;y &aacute;p dụng cho c&aacute;c sản phẩm&nbsp; <a href="{{ route('home') }}">{{$nameSite}}</a> cung cấp sim hợp tuổi - sim số đẹp phong thủy trong phạm vi Website. Khi đồng &yacute; đặt&nbsp;<em>tại Sim Hợp Tuổi </em>&nbsp;quý kh&aacute;ch đ&atilde; chấp nhận sử dụng dịch vụ của ch&uacute;ng t&ocirc;i.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Ng&agrave;y l&agrave;m việc: Tất cả c&aacute;c ng&agrave;y trong tuần từ 8 giờ đến 18 giờ</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.&nbsp;<strong>Quy định về kh&aacute;ch h&agrave;ng</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- C&oacute; đủ năng lực h&agrave;nh vi v&agrave; năng lực ph&aacute;p luật d&acirc;n sự</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Kh&aacute;ch h&agrave;ng mua&nbsp;<em>sim tại Sim Hợp Tuổi </em>chịu tr&aacute;ch nhiệm về quyết định thực hiện giao dịch của m&igrave;nh.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đảm bảo thực hiện thanh to&aacute;n đơn h&agrave;ng đ&atilde; đặt mua.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Kh&aacute;ch h&agrave;ng được đảm bảo đăng k&yacute; th&ocirc;ng tin ch&iacute;nh chủ ngay sau khi thực hiện thanh to&aacute;n đơn h&agrave;ng.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>3.Sản phẩm v&agrave; phương thức giao dịch</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <a href="{{ route('home') }}">{{$nameSite}}</a> cam kết c&aacute;c sản phẩm c&oacute; nguồn gốc r&otilde; r&agrave;ng, kh&ocirc;ng c&oacute; tranh chấp về chủ sở hữu.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Cung cấp sản phẩm tới kh&aacute;ch h&agrave;ng với gi&aacute; b&aacute;n v&agrave; c&aacute;c điều kiện ưu đ&atilde;i (nếu c&oacute;) theo đ&uacute;ng th&ocirc;ng tin đ&atilde; c&ocirc;ng bố tr&ecirc;n website</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Thực hiện k&yacute; kết hợp đồng chuyển nhượng quyền sử dụng c&aacute;c sản phẩm nếu Qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; y&ecirc;u cầu theo đ&uacute;ng thể thức hợp đồng kinh tế.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">4.&nbsp;<strong>Giao h&agrave;ng</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Ch&uacute;ng t&ocirc;i nhận giao sản phẩm của ch&uacute;ng t&ocirc;i đến tận tay kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n quốc.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Kh&aacute;ch h&agrave;ng chỉ thực hiện thanh to&aacute;n khi đảm bảo sản phẩm đ&uacute;ng với đơn h&agrave;ng đ&atilde; đặt, c&aacute;c th&ocirc;ng tin k&egrave;m theo ch&uacute;ng t&ocirc;i đ&atilde; c&ocirc;ng bố tr&ecirc;n website <a href="{{ route('home') }}">{{$nameSite}}</a></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">5.&nbsp;<strong>Hủy đơn h&agrave;ng</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Trường hợp sản phẩm trong kho kh&ocirc;ng c&oacute; sẵn đối với đơn h&agrave;ng đ&atilde; đặt. Ch&uacute;ng t&ocirc;i sẽ c&oacute; x&aacute;c nhận (trực tiếp qua điện thoại/tin nhắn/email) trước khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Trường hợp qu&yacute; kh&aacute;ch h&agrave;ng đ&atilde; thực hiện chuyển khoản. Ch&uacute;ng t&ocirc;i cam kết sẽ ho&agrave;n lại tiền nếu kh&aacute;ch h&agrave;ng đ&atilde; thanh to&aacute;n m&agrave; đơn h&agrave;ng kh&ocirc;ng th&agrave;nh c&ocirc;ng</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">7.&nbsp;<strong>Hủy đơn h&agrave;ng bởi kh&aacute;ch h&agrave;ng:</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Nếu kh&aacute;ch h&agrave;ng muốn hủy đơn h&agrave;ng đ&atilde; đặt xin li&ecirc;n hệ với Hotline hoặc với nh&acirc;n vi&ecirc;n tư vấn đ&atilde; thực hiện giao dịch với bạn. Nếu Qu&yacute; kh&aacute;ch đ&atilde; thanh to&aacute;n đơn h&agrave;ng, vui l&ograve;ng li&ecirc;n hệ với nh&acirc;n vi&ecirc;n chăm s&oacute;c kh&aacute;ch h&agrave;ng để được hướng dẫn thủ tục đổi/trả h&agrave;ng.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">8.&nbsp;<strong>Cam kết về chất lượng</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Ch&uacute;ng t&ocirc;i đảm bảo rằng: C&aacute;c sản phẩm của ch&uacute;ng t&ocirc;i đ&atilde; được kiểm tra kĩ lưỡng trước khi chuyển sản phẩm cho kh&aacute;ch h&agrave;ng.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Sản phẩm sẽ được giao nguy&ecirc;n vẹn v&agrave; đ&uacute;ng với số sim đ&atilde; đặt của Q&uacute;y kh&aacute;ch</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Sản phẩm đ&atilde; được đăng k&iacute; th&ocirc;ng tin ch&iacute;nh x&aacute;c v&agrave; sử dụng ho&agrave;n to&agrave;n b&igrave;nh thường</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Ch&uacute;ng t&ocirc;i &nbsp;giao sản phẩm trong t&igrave;nh trạng nguy&ecirc;n vẹn.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">10.&nbsp;<strong>Phạm vi cam kết</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm với c&aacute;c trường hợp kh&aacute;ch h&agrave;ng cung cấp sai th&ocirc;ng tin</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Sản phẩm trong kho đ&atilde; hết m&agrave; tr&ecirc;n web chưa cập nhật kịp thời.</span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">11.&nbsp;<strong>Bảo h&agrave;nh v&agrave; quản lý khiếu nại:</strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Với mọi y&ecirc;u cầu hỗ trợ về sản phẩm dịch vụ của ch&uacute;ng t&ocirc;i,&nbsp;<strong>Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n lạc tới hotline hoặc email tới địa chỉ</strong>&nbsp;<strong>của ch&uacute;ng t&ocirc;i </strong></span></span>
            </p>

            <p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- &nbsp;Ch&uacute;ng t&ocirc;i cam kết lu&ocirc;n hỗ trợ/tư vấn Qu&yacute; kh&aacute;ch h&agrave;ng trong suốt qu&aacute; tr&igrave;nh sử dụng sản phẩm.</span></span>
            </p>

            @include('layouts.components.bank_account_info')
        </div>
    </section>
@endsection
