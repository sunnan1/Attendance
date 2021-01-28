@extends('layouts.app')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-plugin icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>All Shifts
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ url('/create-shift') }}" type="button" data-toggle="tooltip"  data-placement="bottom"
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
                        <th>Shift</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Next Day Shift</th>
                        <th>Start Grace Period (Mins)</th>
                        <th>End Grace Period (Mins)</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $shifts as $shift)
                        <tr>
                            <td>{!! $shift->SHIFT_NAME !!}</td>
                            <td>{!! $shift->SHIFT_START !!}</td>
                            <td>{!! $shift->SHIFT_END !!}</td>
                            <td>{!! $shift->NEXT_DAY_END == 1? 'Yes' : 'No' !!}</td>
                            <td>{!! $shift->START_GRACE_TIME !!}</td>
                            <td>{!! $shift->END_GRACE_TIME !!}</td>
                            <td>
                                <a style="color: darkblue" href="{!! url('/edit-shift/' . $shift->ID) !!}"><i class="fa fa-pen"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection