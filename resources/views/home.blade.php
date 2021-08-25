@extends('layouts.dashboard')
@section('style')
<style>
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
</style>
@endsection
@section('mainContent')
<div class="d-flex ml-2">
    <button type="button" class="btn btn-success mr-5" style="width:15%">All</button>
    <button type="button" class="btn btn-outline-secondary mr-5" style="width:15%">Today</button>
    <input type="date" id="birthday" class="form-control mr-5 w-25" name="from">
    <input type="date" id="birthday" class="form-control mr-5 w-25" name="to">
</div>
<div class="d-flex ml-2">
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(1).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 23,209</h2>
            <h6> Tickets</h6>
        </div>
    </div>
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(2).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 5,386,500.00</h2>
            <h6> Revenue</h6>
        </div>
    </div>
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(3).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 1,492</h2>
            <h6> User Registration</h6>
        </div>
    </div>
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(4).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 17</h2>
            <h6> Stations</h6>
        </div>
    </div>
</div>
<div class="d-flex ml-2 justify-content-between">
    <div>
        <img src="{{ asset('images/img_20210823(5).png') }}" alt="...">
    </div>
    <div>
        <img src="{{ asset('images/img_20210823(6).png') }}" alt="...">
    </div>
</div>
<div class="d-flex ml-2 justify-content-between">
    <div  style="height: 50%">
        <img src="{{ asset('images/img_20210823(7).png') }}" alt="...">
    </div>
    <div  style="height: 50%">
        <img src="{{ asset('images/img_20210823(8).png') }}" alt="...">
    </div>
    <div  style="height: 50%">
        <img src="{{ asset('images/img_20210823(9).png') }}" alt="...">
    </div>
</div>
<script>
    document.getElementById('dashboard_icon').src = 'http://localhost:8000/images/icon_images/dashboard-yellow.png';
    document.getElementById('dashboard_text').style.color = '#ffc34d';
</script>
@endsection
@section('script')
@endsection