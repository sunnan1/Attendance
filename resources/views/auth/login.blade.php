@extends('layouts.app' , ['page_name' => 'login'])
@section('login')
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="modal-dialog w-100 mx-auto">
                            <form action="{!! url('/login') !!}" method="post">
                            {!! csrf_field() !!}
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 >
                                            <img src="{!! url('/resources/assets/images/logo.webp') !!}" style="width: 30%" alt="">
                                            <h6 style="margin-top: -19px;margin-bottom: -10px">Smart-HR Peshawar Institute of Cardiology - MTI</h1>
                                                <div class="divider"></div>
                                            <span style="font-size: 15px;color:#555555">Sign in to continue</span>
                                            <br>
                                        </h6>
                                    </div>
                                        
                                        <table style="width:100%">
                                          <tr>
                                            <th style="text-align: center;"><i style="font-size: 30px;margin-top: -11px;" class="metismenu-icon pe-7s-user"></i></th>
                                            <th><div class="position-relative form-group">
                                                    <input name="username"  id="exampleEmail" placeholder="Enter Email" type="email" class="form-control">
                                                </div></th>
                                          </tr>
                                        </table>

                                        <table style="width:100%">
                                          <tr>
                                            <th style="text-align: center;"><i style="font-size: 30px;margin-top: -11px;" class="metismenu-icon pe-7s-lock"></i>
                                            </th>
                                            <th>
                                                <div class="position-relative form-group">
                                                     <input name="password" id="examplePassword" placeholder="Enter Password" type="password" class="form-control">
                                                </div>
                                            </th>
                                          </tr>
                                        </table>
                                    <ul>
                                    @foreach($errors->all() as $error)
                                        <li style="color: red">{!! $error !!}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                <div class="modal-footer clearfix">
                                        <button type="submit" class="btn btn-primary btn-lg" style="margin-right: 30%;width: 40%">Login</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">©{!! date('Y') !!} Peshawar Institute of Cardiology - MTI </div>
                        <div class="text-center text-white opacity-8 mt-1" style="font-size: 12px">Powered by ICT Department</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.setTimeout(function () {
                window.location.reload();
        }, 45000);
    </script>
@endsection
