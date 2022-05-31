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
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="card text-white bg-success m-4">
                    <div class="card-body">
                        <p>จำนวนพนักงานทั้งหมด</p>
                        <p class="text-center"><i class="fa-solid fa-users"></i> 20</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header ">
                <div class="d-flex justify-content-between mt-2">
                    <h4>พนักงานทั้งหมด</h4>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    {{-- <a href="{{asset('/edit')}}"><button type="button" class="btn btn-outline-success">แก้ไข</button></a> --}}
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
                            <th scope="col">ที่อยู่</th>
                            <th scope="col">เบอร์โทร</th>
                            <th scope="col">อีเมล์</th>
                            <th scope="col">แผนก</th>
                            <th scope="col">ตำแหน่ง</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($EMP as $Employee)
                            <tr>
                                <td>{{ $Employee->employee_id }}</td>
                                <td>{{ $Employee->gender }}</td>
                                <td>{{ $Employee->fname }}</td>
                                <td>{{ $Employee->lname }}</td>
                                <td>{{ $Employee->address }}</td>
                                <td>{{ $Employee->phone }}</td>
                                <td>{{ $Employee->email }}</td>
                                <td>{{ $Employee->dpt }}</td>
                                <td>{{ $Employee->role }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

@include('components.footer')
