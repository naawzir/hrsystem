@extends('layouts.app')

@section('content')
   <div class="content mt-3">
        <form action="/users" method="POST" class="form-horizontal">
            @csrf
            <div class="row form-group">
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">User Type *</label>
                        <select class="form-control col-md-10" name="type">
                            <option @if(old('type') == 1) selected @endif value="1">Admin</option>
                            <option @if(old('type') == 2) selected @endif value="2">Employee</option>
                        </select>
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">Title</label>
                        <select class="form-control col-md-10" name="title">
                            <option @if(old('title') == 'mr') selected @endif>Mr</option>
                            <option @if(old('title') == 'mrs') selected @endif>Mrs</option>
                            <option @if(old('title') == 'miss') selected @endif>Miss</option>
                            <option @if(old('title') == 'ms') selected @endif>Ms</option>
                        </select>
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">First Name *</label>
                        <input type="text" name="first_name" placeholder="First Name" class="form-control col-md-10" value="{{ old('first_name') }}">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">Middle Name</label>
                        <input type="text" name="middle_name" placeholder="Middle Name" class="form-control col-md-10" value="{{ old('middle_name') }}">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">Last Name *</label>
                        <input type="text" name="last_name" placeholder="Last Name" class="form-control col-md-10" value="{{ old('last_name') }}">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">Known As</label>
                        <input type="text" name="known_as" placeholder="Known As" class="form-control col-md-10" value="{{ old('known_as') }}">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">Department</label>
                        <input type="text" name="department" placeholder="Department" class="form-control col-md-10" value="{{ old('department') }}">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">Email *</label>
                        <input type="email" name="email" placeholder="Email" class="form-control col-md-10" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">DOB</label>
                        <input type="text" name="dob" placeholder="DOB" class="form-control col-md-10" value="{{ old('dob') }}">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="input-group">
                        <label class="col-md-2">Holiday Entitlement</label>
                        <input type="text" name="holiday_entitlement" placeholder="Holiday Entitlement" class="form-control col-md-10" value="{{ old('holiday_entitlement') }}">
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-12">
                    <button class="btn">Save</button>
                </div>
            </div>
        </form>
    </div> <!-- .content -->
@endsection
