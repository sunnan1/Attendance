@extends('layouts.app')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-plugin icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>All Employees
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Badge #</th>
                        <th>Card #</th>
                        <th>Title</th>
                        <th>Department</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $emp as $employee)
                        <tr>
                            <td>{!! $employee->NAME !!}</td>
                            <td>{!! $employee->GENDER == 'M' ? 'Male' : 'Female' !!}</td>
                            <td>{!! $employee->BADGENUMBER !!}</td>
                            <td>{!! $employee->CARDNO !!}</td>
                            <td>{!! $employee->TITLE !!}</td>
                            <td>{!! $employee->DEPT_ID > 0 ? $employee->departments->DEPT_NAME : '' !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection