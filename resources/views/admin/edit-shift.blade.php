@extends('layouts.app')
@section('content')
    <form action="{!! url("/save-edit-shift") !!}" method="post" enctype="multipart/form-data">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-plugin icon-gradient bg-tempting-azure"></i>
                        </div>
                        <div>Edit Shift
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
                <input type="hidden" name="shiftid" value="{!! $shift->ID !!}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Shift Name</div>
                                <div class="card-body">
                                    <input type="text" class="form-control square" name="shift" placeholder="Enter Title" value="{!! $shift->SHIFT_NAME !!}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Start Time</div>
                                <div class="card-body">
                                    <input type="time" class="form-control square" name="starttime" value="{!! $shift->SHIFT_START !!}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">End Time</div>
                                <div class="card-body">
                                    <input type="time" class="form-control square" name="endtime" value="{!! $shift->SHIFT_END !!}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Next Day</div>
                                <div class="card-body">
                                    <input type="checkbox" class="form-control square"  {!! $shift->NEXT_DAY_END == 1 ? 'checked' : '' !!} name="nextday">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">Start Grace Period ( Minutes )</div>
                                <div class="card-body">
                                    <input type="text" class="form-control square" name="start_grace" value="{!! $shift->START_GRACE_TIME !!}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-header">End Grace Period ( Minutes )</div>
                                <div class="card-body">
                                    <input type="text" class="form-control square" name="end_grace" value="{!! $shift->END_GRACE_TIME !!}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection