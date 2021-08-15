@extends('cleaner.cleaner_layout')

@section('content')
<div class="d-flex">
    <table class="table table-borderless table-responsive card-1 p-4">
        <thead>
            <tr class="border-bottom">
                <th> <span class="ml-2">Time</span> </th>
                <th> <span class="ml-2">Customer</span> </th>
                <th> <span class="ml-2">User number</span> </th>
                <th> <span class="ml-2">Location</span> </th>
                <th> <span class="ml-4">Action</span> </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-bottom">
                <td>
                    <div class="p-2"> <span class="d-block font-weight-bold">Tomorrow</span> <small>2:30PM</small> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-row align-items-center mb-2"> <img src="{{asset('asset-admin/assets/img/team/profile-picture-3.jpg')}}" width="40" class="rounded-circle me-2">
                        <div class="d-flex flex-column ml-2"> <span class="d-block font-weight-bold">Jennifer john</span> <small class="text-muted">Jasmine Owner Reality group</small> </div>
                    </div>
                </td>
                <td>
                    <div class="p-2"> <span class="font-weight-bold">092 290 584</span> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-column"> <span>1 City point,#2A</span> <span> Brooklyn,NY</span> </div>
                </td>
                <td>
                    <div class="p-2 icons "> <i class="fa fa-phone text-danger me-2"></i> <i class="fa fa-adjust text-danger me-2"></i> <i class="fa fa-share me"></i> </div>
                </td>
            </tr>
            <tr class="border-bottom">
                <td>
                    <div class="p-2"> <span class="d-block font-weight-bold">Tomorrow</span> <small>3:30PM</small> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-row align-items-center mb-2"> <img src="{{asset('asset-admin/assets/img/team/profile-picture-3.jpg')}}" class="rounded-circle" width="40">
                        <div class="d-flex flex-column ml-2"> <span class="d-block font-weight-bold">David Smith</span> <small class="text-muted">Jasmine Owner Reality group</small> </div>
                    </div>
                </td>
                <td>
                    <div class="p-2"> <span class="font-weight-bold">092 290 584</span> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-column"> <span>205 2ndst,#2A,</span> <span> Brooklyn,NY</span> </div>
                </td>
                <td>
                    <div class="p-2 icons"> <i class="fa fa-phone text-danger"></i> <i class="fa fa-adjust text-danger"></i> <i class="fa fa-share"></i> </div>
                </td>
            </tr>
            <tr class="border-bottom">
                <td>
                    <div class="p-2"> <span class="d-block font-weight-bold">Tomorrow</span> <small>12:30PM</small> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-row align-items-center mb-2"> <img src="{{asset('asset-admin/assets/img/team/profile-picture-3.jpg')}}" class="rounded-circle" width="40">
                        <div class="d-flex flex-column ml-2"> <span class="d-block font-weight-bold">Emmily johnson</span> <small class="text-muted">Jasmine Owner Reality group</small> </div>
                    </div>
                </td>
                <td>
                    <div class="p-2"> <span class="font-weight-bold">092 290 584</span> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-column"> <span>199 Bowery,#7A</span> <span> Brooklyn,NY</span> </div>
                </td>
                <td>
                    <div class="p-2 icons"> <i class="fa fa-phone text-danger"></i> <i class="fa fa-adjust text-danger"></i> <i class="fa fa-share"></i> </div>
                </td>
            </tr>
            <tr class="border-bottom">
                <td>
                    <div class="p-2"> <span class="d-block font-weight-bold">Tomorrow</span> <small>1:30PM</small> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-row align-items-center mb-2"> <img src="{{asset('asset-admin/assets/img/team/profile-picture-3.jpg')}}" width="40" class="rounded-circle">
                        <div class="d-flex flex-column ml-2"> <span class="d-block font-weight-bold">Nick Jones</span> <small class="text-muted">Jasmine Owner Reality group</small> </div>
                    </div>
                </td>
                <td>
                    <div class="p-2"> <span class="font-weight-bold">092 290 584</span> </div>
                </td>
                <td>
                    <div class="p-2 d-flex flex-column"> <span>123 Clinton Ave,#2A</span> <span> Brooklyn,NY</span> </div>
                </td>
                <td>
                    <div class="p-2 icons"> <i class="fa fa-phone text-danger"></i> <i class="fa fa-adjust text-danger"></i> <i class="fa fa-share"></i> </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection