<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    color: #333;
}

.container {
    width: 60%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h1 {
    text-align: center;
    color: #007BFF;
}

.info-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.info-table th, .info-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.info-table th {
    background-color: #007BFF;
    color: white;
}

.info-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.info-table tr:hover {
    background-color: #ddd;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin sinh viên</h1>
        <table class="info-table">
            <tr>
                <th>Tên</th>
                <td>Hoàng Đình Cảnh</td>
            </tr>
            <tr>
                <th>MSSV</th>
                <td>PH31085</td>
            </tr>
            <tr>
                <th>Lớp</th>
                <td>WD18324</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>canhhdph31085@fpt.edu.vn</td>
            </tr>
        </table>
    </div>
</body>
</html>