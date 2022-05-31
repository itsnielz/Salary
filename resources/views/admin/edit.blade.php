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
                    <h4>จัดการพนักงาน</h4>
                    <a href="{{ asset('/frm_add') }}"><button type="button"
                            class="btn btn-outline-success">เพิ่มพนักงาน</button></a>
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
                            <th scope="col" class="text-center">แก้ไข</th>
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
                                <td class="d-flex justify-content-center"><a href="{{ asset('/frm_edit') }}"><i
                                            class="fa-solid fa-pen-to-square mr-2" style="font-size: 25px"></i></a> <a
                                        href="#"><i class="fa-solid fa-trash-can" style="font-size: 25px"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"></i></a> </td>

                            </tr>
                    @endforeach
                
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูลพนักงาน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    คุณต้องการลบข้อมูลหรือไม่ ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-danger">ลบข้อมูล</button>
                </div>
            </div>
        </div>
    </div>

</body>

@include('components.footer')
