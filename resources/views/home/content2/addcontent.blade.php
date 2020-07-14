@extends('layouts.layout')

@section('title', 'เพิ่มเนื้อหา ชีวิตดี๊ดีเมื่อมี SMART SURE | Backend')

@section('content')
<div class="col-2"></div>
<div class="col-10 pt-4 px-5">
    <div class="row mb-3">
        <div class="col-12">
            <h1>เพิ่มเนื้อหา | ชีวิตดี๊ดีเมื่อมี SMART SURE</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                <div class="form-group">
                    <label for="video">Link Video</label>
                    <input type="text" name="video" id="video" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <div name="content" id="content"></div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-success">บันทึก</button>
                    <a href="{{ route('content2.index') }}" class="btn btn-danger">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#content', {
        theme: 'snow'
    });
</script>
@endsection