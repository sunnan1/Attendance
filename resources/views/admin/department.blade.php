@extends('layouts.app')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-plugin icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>Departments
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ url('/create-department') }}" type="button" data-toggle="tooltip"  data-placement="bottom"
                       class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Department</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $department as $dept)
                        <tr>
                            <td>{!! $dept->id !!}</td>
                            <td>{!! $dept->name !!}</td>
                            <td>
                                <a style="color: darkblue" href="{!! url('/edit-department/' . $dept->id) !!}"><i class="fa fa-pen"></i></a>&nbsp;&nbsp;&nbsp;
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection