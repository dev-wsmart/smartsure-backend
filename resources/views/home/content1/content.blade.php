@extends('layouts.layout')

@section('title', 'ซื้อผลิตภัณฑ์ง่าย ๆ กับ SMART SURE - หน้าหลัก | Backend')

@section('content')
<div class="col-2"></div>
<div class="col-10 pt-4 px-5">
    <div class="row mb-3">
        <div class="col-12">
            <h1>หน้าหลัก | ซื้อผลิตภัณฑ์ง่าย ๆ กับ SMART SURE</h1>
        </div>
    </div>
    <div class="row p-3 box-content">
        <div class="col-12 mb-3 text-right">
            <a href="{{ route('add-content1.index') }}" class="btn btn-success">Add Content</a>
        </div>
        <div class="col-12">
            <table class="table table-sm table-striped table-hover" width="100%">
                <thead>
                    <tr>
                        <th width="3%">#</th>
                        <th width="45%">Video</th>
                        <th width="45%">Content</th>
                        <th width="50px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="text-center">
                            <iframe width="70%" height="200" src="https://www.youtube.com/embed/L8UUYfe6-UA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </td>
                        <td>

                        </td>
                        <td class="text-center">
                            <a href="" title="แก้ไข" class="btn btn-sm btn-warning p-1"><i class="fa fa-pencil"></i></a>
                            <a type="button" title="ลบ" class="btn btn-sm btn-danger p-1"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            pagination
        </div>
    </div>
</div>
@endsection