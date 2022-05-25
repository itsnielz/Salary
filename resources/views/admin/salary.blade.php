@extends('layouts.app')

@include('components.navbar')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
    <title>GWT</title>
</head>

<body>
    <div class="container">
        <div class="card m-4">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>จัดการเงินเดือน</h4>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">รหัสพนักงาน</th>
                            <th scope="col">คำนำหน้า</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">นามสกุล</th>
                            <th scope="col">ตำแหน่ง</th>
                            <th scope="col">แผนก</th>
                            <th scope="col">เงินเดือน</th>
                            <th scope="col">ค่าประจำตำแหน่ง</th>
                            <th scope="col">ค่าโทรศัพท์</th>
                            <th scope="col">เงินอื่น</th>
                            <th scope="col">รวม</th>
                            <th scope="col">พิมพ์</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td><a href="#"><i class="fa-solid fa-print" style="font-size: 25px"></i></a></td>
                      
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

@include('components.footer')
