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
            width: 300px;
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
            justify-content: space-between;
            margin: 40px 0 0 0;
            padding: 5px;
        }

        form div label {
            font-size: 20px;
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
    <form action="{{ route('sync') }}" method="post">
        @csrf
        <h1>Sync Data</h1>
        <div>
            <label for="sync_1">Thông tin Bói Sim</label>
            <input id="sync_1" type="radio" name="sync_type" value="1" checked>
        </div>

        <div>
            <label for="sync_2">Sim Data</label>
            <input id="sync_2" type="radio" name="sync_type" value="2">
        </div>
        
        <button type="submit">Sync ... </button>
    </form>

    @if (session('success'))
    <div style="color: green; text-align: center; font-size: 20px; margin-top: 20px;">
        {{ session('success') }}
    </div>
    @endif
    <p>
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1ciF6dUtKdZtt37A6_uG2t7oHlXxNQ-DENOMUI-xzgn0/edit#gid=0">Link Bói sim</a>
    </p>
    <p>
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1XmpBOmLi-6bqwrp06gG9d9zNgSxFhXcDXHLtY6vnsFU/edit#gid=541567153">Link Danh sách sim</a>
    </p>
    <p>
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1XmpBOmLi-6bqwrp06gG9d9zNgSxFhXcDXHLtY6vnsFU/edit#gid=1443068722">Link Hoá Đơn</a>
    </p>
</body>
</html>