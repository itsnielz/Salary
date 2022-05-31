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
            <div class="card mt-4 col-md-8">
                <div class="card-header">
                    <h3>เพิ่มข้อมูลพนักงาน <i class="fa-solid fa-user-plus"></i></h3>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card card-body">
                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>ชื่อ</strong>
                                    <div class="me-2 mb-2">
                                        <input type="fname" name="fname" class="form-control" placeholder="ชื่อ">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>สกุล</strong>
                                    <input type="lname" name="lname" class="form-control" placeholder="สกุล">
                                    @error('lname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>คำนำหน้า</strong>
                                    <div class="me-2 mb-2">
                                        <input type="gender" name="gender" class="form-control" placeholder="คำนำหน้า">
                                    </div>
                                    @error('gender')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>ที่อยู่</strong>
                                    <input type="address" name="address" class="form-control" placeholder="ที่อยู่">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>อีเมล์</strong>
                                    <div class="me-2 mb-2">
                                        <input type="email" name="email" class="form-control" placeholder="ที่อยู่">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>เบอร์โทร</strong>
                                    <input type="phone" name="phone" class="form-control" placeholder="เบอร์โทร">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>ตำแหน่ง</strong>
                                    <div class="me-2 mb-2">
                                        <input type="dpt" name="dpt" class="form-control" placeholder="ตำแหน่ง">
                                    </div>
                                    @error('dpt')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>แผนก</strong>
                                    <input type="role" name="role" class="form-control" placeholder="แผนก">
                                    @error('roel')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>เงินเดือน</strong>
                                    <div class="me-2 mb-2">
                                        <input type="salary" name="salary" class="form-control" placeholder="เงินเดือน">
                                    </div>
                                    @error('salary')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>เงินอื่นๆ</strong>
                                    <input type="other_salary" name="other_salary" class="form-control" placeholder="เงินอื่นๆ">
                                    @error('other_salary')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>เงินค่าตำแหน่ง</strong>
                                    <div class="me-2 mb-2">
                                        <input type="dpt_salary" name="dpt_salary" class="form-control" placeholder="เงินค่าตำแหน่ง">
                                    </div>
                                    @error('dpt_salary')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>ค่าโทรศัพท์</strong>
                                    <input type="phone_bill" name="phone_bill" class="form-control" placeholder="ค่าโทรศัพท์">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       

                        <button type="submit" class="btn btn-primary">ตกลง</button>
                        <button type="submit" class="btn btn-secondary">ยกเลิก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

@include('components.footer')
