@extends('admin.layouts.layout')
@section('content')
<section class="content">
    <div class="content-header d-flex">
        <h4>{{__('admin.dashboard')}}</h4>
        <div class="details">
            <a href="">{{__('admin.dashboard')}}</a> / <span>{{__('admin.statistics')}}</span>
        </div>
    </div>
    <div class="container-fluid statistics">
        <div class="row">
            <div class="col-6 col-md-3 col">
                <div class="inner bg-info text-light">
                    <div class="inner-data">
                        <h2>150</h2>
                        <span>{{__('admin.new_student')}}</span>
                        <div class="icon"><i class="fa-regular fa-address-book"></i></div>
                    </div>
                    <div class="foot">
                        <a href="#" class="text-light">
                            {{__('admin.more_info')}}
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                <i class="fa-solid fa-circle-right"></i>
                            @else 
                                <i class="fa-solid fa-circle-left"></i>
                            @endif    
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col">
                <div class="inner bg-success text-light">
                    <div class="inner-data">
                        <h2>10</h2>
                        <span>{{__('admin.new_course')}}</span>
                        <div class="icon"><i class="fa-solid fa-signal"></i></div>
                    </div>
                    <div class="foot">
                        <a href="#" class="text-light">
                            {{__('admin.more_info')}}
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                <i class="fa-solid fa-circle-right"></i>
                            @else 
                                <i class="fa-solid fa-circle-left"></i>
                            @endif    
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col">
                <div class="inner bg-danger">
                    <div class="inner-data text-light">
                        <h2>14</h2>
                        <span>{{__('admin.new_reservation')}}</span>
                        <div class="icon"><i class="fa-solid fa-bag-shopping"></i></div>
                    </div>
                    <div class="foot">
                        <a href="#" class="text-light">
                            {{__('admin.more_info')}}
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                <i class="fa-solid fa-circle-right"></i>
                            @else 
                                <i class="fa-solid fa-circle-left"></i>
                            @endif 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col">
                <div class="inner bg-warning text-light">
                    <div class="inner-data">
                        <h2>250</h2>
                        <span>{{__('admin.new_comments')}}</span>
                        <div class="icon"><i class="fa-solid fa-comment"></i></div>
                    </div>
                    <div class="foot">
                        <a href="#" class="text-light">
                            {{__('admin.more_info')}}
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                                <i class="fa-solid fa-circle-right"></i>
                            @else 
                                <i class="fa-solid fa-circle-left"></i>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid cards">
        <div class="row">
            <div class="col-12 col-md-12 reservation-card">
                <div class="card">
                    <div class="card-header">
                        <i class="fa-solid fa-list"></i><span>{{__('admin.latest_reservations')}}</span>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#{{__('admin.student_name')}}</th>
                            <th scope="col">#{{__('admin.course_name')}}</th>
                            <th scope="col">#{{__('admin.course_price')}}</th>
                            <th scope="col">#{{__('admin.course_duration')}}</th>
                            <th scope="col">#{{__('admin.control')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hamza Salah</td>
                                <td>C++</td>
                                <td>1300</td>
                                <td>45H</td>
                                <td class='btns'>
                                    <a href="#" class="btn btn-info">
                                        <i class="fa-solid fa-pen-to-square"></i><span>{{__('admin.edit')}}</span>
                                    </a>
                                    <a href="#" class="btn btn-success">
                                        <i class="fa-solid fa-check"></i><span>{{__('admin.activate')}}</span>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa-solid fa-xmark"></i><span>{{__('admin.delete')}}</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hamza Salah</td>
                                <td>C++</td>
                                <td>1300</td>
                                <td>45H</td>
                                <td class='btns'>
                                    <a href="#" class="btn btn-info">
                                        <i class="fa-solid fa-pen-to-square"></i><span>{{__('admin.edit')}}</span>
                                    </a>
                                    <a href="#" class="btn btn-success">
                                        <i class="fa-solid fa-check"></i><span>{{__('admin.activate')}}</span>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa-solid fa-xmark"></i><span>{{__('admin.delete')}}</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hamza Salah</td>
                                <td>C++</td>
                                <td>1300</td>
                                <td>45H</td>
                                <td class='btns'>
                                    <a href="#" class="btn btn-info">
                                        <i class="fa-solid fa-pen-to-square"></i><span>{{__('admin.edit')}}</span>
                                    </a>
                                    <a href="#" class="btn btn-success">
                                        <i class="fa-solid fa-check"></i><span>{{__('admin.activate')}}</span>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa-solid fa-xmark"></i><span>{{__('admin.delete')}}</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row calendar-content"> 
            <div class="col-12 col-lg-6 col-calendar">
                <div class="calendar" id="table">
                    <div class="header">
                    @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                        <div class="month" id="month-header">
                        </div>
                        <div class="buttons">
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                            <button class="icon" onclick="prevMonth()"><i class="fas fa-chevron-left"></i></button>
                            <button class="icon" onclick="nextMonth()"><i class="fas fa-chevron-right "></i></button>
                            @else 
                            <button class="icon" onclick="nextMonth()"><i class="fas fa-chevron-right "></i></button>
                            <button class="icon" onclick="prevMonth()"><i class="fas fa-chevron-left"></i></button>
                            @endif
                        </div>
                    @else 
                        <div class="buttons">
                            @if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == "en")
                            <button class="icon" onclick="prevMonth()"><i class="fas fa-chevron-left"></i></button>
                            <button class="icon" onclick="nextMonth()"><i class="fas fa-chevron-right "></i></button>
                            @else 
                            <button class="icon" onclick="nextMonth()"><i class="fas fa-chevron-right "></i></button>
                            <button class="icon" onclick="prevMonth()"><i class="fas fa-chevron-left"></i></button>
                            @endif
                        </div>
                        <div class="month" id="month-header">
                        </div>
                    @endif     
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-img">
                <div class="img"><img src="{{asset('admin/images/center_img.jpg')}}" alt="" class="center_img" /></div>
            </div>
        </div>
    </div>
</section>
@endsection