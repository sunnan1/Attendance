@extends('layouts.app')
@section('content')
    <form action="{!! url("/save-shift") !!}" method="post" enctype="multipart/form-data">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-plugin icon-gradient bg-tempting-azure"></i>
                        </div>
                        <div>Create Shift
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="submit" data-toggle="tooltip"  data-placement="bottom"
                                class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-save"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <br>
                {!! csrf_field() !!}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Shift Name</div>
                                      <div class="card-body">
                                    <input type="text" class="form-control square" name="shift" placeholder="Enter Title" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Start Time</div>
                                      <div class="card-body">
                                    <input type="time" class="form-control square" name="starttime" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">End Time</div>
                                      <div class="card-body">
                                      <input type="time" class="form-control square" name="endtime" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Next Day</div>
                                      <div class="card-body">
                                      <input type="checkbox" class="form-control square" name="nextday">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Start Grace Period ( Minutes )</div>
                                <div class="card-body">
                                    <input type="text" class="form-control square" name="start_grace">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">End Grace Period ( Minutes )</div>
                                <div class="card-body">
                                    <input type="text" class="form-control square" name="end_grace">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection