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
        <div class="d-flex justify-content-center">
            <div class="card m-4 col-md-6">
                <div class="card-header">
                    <h3>แก้ไขข้อมูลพนักงาน <i class="fa-solid fa-user-pen"></i></h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="mb-3 me-2">
                                    <label for="exampleInputEmail1" class="form-label">รหัสพนักงาน</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">คำนำหน้าชื่อ</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="mb-3 me-2">
                                    <label for="exampleInputEmail1" class="form-label">ชื่อ</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">นามสกุล</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="mb-3 me-2">
                                    <label for="exampleInputEmail1" class="form-label">เบอร์โทรศัพท์</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">อีเมล์</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        {{-- name --}}
                        {{-- position --}}
                        
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="mb-3 me-2">
                                    <label for="exampleInputEmail1" class="form-label">ตำแหน่ง</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">แผนก</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        {{-- position --}}
                        {{-- salary --}}
                        
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="mb-3 me-2">
                                    <label for="exampleInputEmail1" class="form-label">เงินเดือน</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ค่าประจำตำแหน่ง</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="mb-3 me-2">
                                    <label for="exampleInputEmail1" class="form-label">ค่าโทรศัพท์</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">เงินอื่นๆ</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        {{-- salary --}}
                        <button type="submit" class="btn btn-primary">ตกลง</button>
                        <button type="submit" class="btn btn-secondary">ยกเลิก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

@include('components.footer')
