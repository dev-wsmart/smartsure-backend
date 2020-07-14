@extends('layouts.layout')

@section('title', 'ติดต่อเรา - Backend')

@section('content')
<div class="col-2"></div>
<div class="col-10 pt-4 px-5">
    <div class="row">
        <div class="col-12 mb-3">
            <h1>ติดต่อเรา</h1>
        </div>
        <div class="col-12">
            <form action="" method="post">
                <div class="form-group">
                    <div name="content" id="content"></div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-success">บันทึก</button>
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