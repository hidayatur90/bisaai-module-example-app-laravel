@extends('layout')
@section('content')
    <title>Edit Data Karyawan</title>
    <div class="container mt-4">
        <div class="header text-center fst-italic">
            <h3>Edit Data Karyawan</h3>
            <p>fill in the name, quantity and price of the new employee identity</p>
        </div>
        <div class="form">
            <form action="/editEmployee/update/{{ $employee->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                {{-- First Name --}}
                <div class="row mb-3">
                    <label for="firstName" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>First Name</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="text" class="form-control" name="firstName" id="firstName"
                            placeholder="First Name" required
                            value="{{ $employee->firstName }}"
                            oninvalid="this.setCustomValidity('Nama tidak boleh Kosong')"
                            oninput="this.setCustomValidity('')" />
                        @if ($errors->has('firstName'))
                            <div class="text-danger">
                                {{ $errors->first('firstName') }}
                            </div>
                        @endif
                    </div>
                </div>
                {{-- Last Name --}}
                <div class="row mb-3">
                    <label for="lastName" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Last Name</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="text" class="form-control" name="lastName" id="lastName"
                            placeholder="Last Name" required
                            value="{{ $employee->lastName }}"
                            oninvalid="this.setCustomValidity('Nama tidak boleh Kosong')"
                            oninput="this.setCustomValidity('')" />
                        @if ($errors->has('lastName'))
                            <div class="text-danger">
                                {{ $errors->first('lastName') }}
                            </div>
                        @endif
                    </div>
                </div>
                {{-- Gender --}}
                <div class="row mb-3">
                    <label for="gender" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Gender</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <select name="gender" class="form-control" placeholder="Gender Karyawan">
                            <option selected>{{$employee->gender}}</option>
                            @if ($employee->gender == 'Laki-laki')
                                <option value="Wanita">Wanita</option>
                            @else
                                <option value="Laki-laki">Laki-laki</option>
                            @endif
                        </select>
                        @if ($errors->has('gender'))
                            <div class="text-danger">
                                {{ $errors->first('gender') }}
                            </div>
                        @endif
                    </div>
                </div>
                {{-- Age --}}
                <div class="row mb-3">
                    <label for="age" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Age</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="number" class="form-control" min="0" max="150"
                            name="age" id="age" placeholder="Age" autocomplete="off"
                            value="{{ $employee->age }}"
                            required oninvalid="this.setCustomValidity('Invalid input')"
                            oninput="this.setCustomValidity('')" />
                        @if ($errors->has('age'))
                            <div class="text-danger">
                                {{ $errors->first('age') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3 justify-content-end mx-3 my-4">
                    <div class="col-sm-8 col-md-9 col-xl-10" style="text-align:end;">
                        <input type="submit" class="btn btn-warning mx-3" value="Edit">
                        <a type="button" class="btn btn-secondary border" href="/">
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
