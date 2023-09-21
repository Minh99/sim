<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        form h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form div {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            margin: 40px 0 0 0;
            padding: 5px;
        }

        form div label {
            font-size: 20px;
            line-height: 20px;
            margin-left: 10px;
        }

        form div input {
            width: 20px;
            height: 20px;
        }

        form button {
            margin-top: 40px;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #08da36;
            cursor: pointer;
            color: #fff;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <form action="{{ route('change-code') }}" method="POST" style="width: 250px;">
        @csrf
        <h1>Change Code</h1>
        <div style="display: flex; justify-content: center; align-items: center">
            <input style="width: 200px; height: 30px" id="code" type="text" name="code" value="@if(!empty($code)){{$code}}@endif">
        </div>
        <button type="submit">Change</button>
    </form>
    <br>
    <hr>
    <form action="{{ route('sync') }}" method="post">
        @csrf
        <h1>Sync Data</h1>
        <div>
            <input id="sync_1" type="radio" name="sync_type" value="1" checked>
            <label for="sync_1">Thông tin Bói Sim (<a href="https://docs.google.com/spreadsheets/d/1V9wU24T9Tof90mJfi25qUM3stNximyZN/edit#gid=1408682559">que_dich</a> )</label>
        </div>

        <div>
            <input id="sync_3" type="radio" name="sync_type" value="3">
            <label for="sync_3">Năng lương số (" <a href="https://docs.google.com/spreadsheets/d/167eYMhKwVWJd-dkAqSpzCCX2TBouanvn2TiTdZkAmDU/edit#gid=1458715586&range=D20:E946">Trang Tính5 </a>" và "<a href="https://docs.google.com/spreadsheets/d/167eYMhKwVWJd-dkAqSpzCCX2TBouanvn2TiTdZkAmDU/edit#gid=0&range=B3:Q10">đặc điểm các từ trường</a>")</label>
        </div>

        <div>
            <input id="sync_4" type="radio" name="sync_type" value="4">
            <label for="sync_4">Giải đoán (<a href="https://docs.google.com/spreadsheets/d/11vIiuEtMiDKJkYe03bix3kQrrD3rHTaYjK6NekeQ5yc/edit#gid=1954801637&range=B21:G29"> Giải đoán </a> )</label>
        </div>

        <div>
            <input id="sync_5" type="radio" name="sync_type" value="5">
            <label for="sync_5">Xem tuổi âm (<a href="https://docs.google.com/spreadsheets/d/11vIiuEtMiDKJkYe03bix3kQrrD3rHTaYjK6NekeQ5yc/edit#gid=568727041&range=A2:Z62">Data</a>)</label>
        </div>

        <div>
            <input id="sync_2" type="radio" name="sync_type" value="2">
            <label for="sync_2">Sim Data (<a href="https://docs.google.com/spreadsheets/d/1XmpBOmLi-6bqwrp06gG9d9zNgSxFhXcDXHLtY6vnsFU/edit#gid=541567153">sdt</a> )</label>
        </div>

        <button type="submit">Sync ... </button>
    </form>

    @if (session('success'))
    <div style="color: green; text-align: center; font-size: 20px; margin-top: 20px;">
        {{ session('success') }}
    </div>
    @endif
</body>
</html>
