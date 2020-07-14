@extends('layouts.layout')

@section('title', 'Banner | Backend')

@section('content')
<div class="col-2"></div>
<div class="col-10 pt-4 px-5">
    <div class="row mb-3">
        <div class="col-12">
            <h1>Banner</h1>
        </div>
    </div>
    <div class="row p-3 box-content">
        <div class="col-12 mb-3">
            <form action="">
                <div class="row">
                    <div class="col">
                        <label class="pr-4" for="banner">เลือกภาพ banner : </label>
                        <input type="file" name="banner" id="banner">
                    </div>
                    <div class="col">
                        <button class="btn btn-sm btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row px-3">
            <div class="col-2">
                <a href="{{ asset('images/banner/lights.jpg') }}" class="fancyimg">
                    <img src="{{ asset('images/banner/lights.jpg') }}" alt="" width="100%">
                </a>
            </div>
            <div class="col-2">
                <a href="{{ asset('images/banner/banner.png') }}" class="fancyimg">
                    <img src="{{ asset('images/banner/banner.png') }}" alt="" width="100%">
                </a>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $("a.fancyimg").fancybox({
        'hideOnContentClick': true
    });
});
</script>
@endsection