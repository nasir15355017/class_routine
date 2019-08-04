@extends('mainlayout.index')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Professor</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Professor</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Professor</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Basic Information</header>
                            <button id="panel-button"
                                    class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                    data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="panel-button">
                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                    here</li>
                            </ul>
                        </div>
                        <form action="{{route('professor.store')}}" method="post">
                            @csrf
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{session('message')}}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>

                                        @foreach($errors->all() as $err)
                                            <li>
                                                {{ $err }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <div class="card-body row">
                            <div class="col-lg-6 p-t-20">
                                <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtFirstName" name="name" >
                                    <label class="mdl-textfield__label"> Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtLasttName" name="short_name">
                                    <label class="mdl-textfield__label">Short Name</label>
                                </div>
                            </div>


                            <div class="col-lg-6 p-t-20">
                                <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="designation" name="uid">
                                    <label class="mdl-textfield__label">University ID</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="designation" name="department">
                                    <label class="mdl-textfield__label">Department</label>
                                </div>
                            </div>
{{--                            <div class="col-lg-6 p-t-20">--}}
{{--                                <div--}}
{{--                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">--}}
{{--                                    <input class="mdl-textfield__input" type="text" id="list2" value="" readonly--}}
{{--                                           tabIndex="-1" name="department" >--}}
{{--                                    <label for="list2" class="pull-right margin-0">--}}
{{--                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>--}}
{{--                                    </label>--}}
{{--                                    <label for="list2" class="mdl-textfield__label" >Department</label>--}}
{{--                                    <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">--}}
{{--                                        <li class="mdl-menu__item" data-val="DE">Computer</li>--}}
{{--                                        <li class="mdl-menu__item" data-val="BY">Mechanical</li>--}}
{{--                                        <li class="mdl-menu__item" data-val="BY">Mathematics</li>--}}
{{--                                        <li class="mdl-menu__item" data-val="BY">Commerce</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}



                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" value="submit">Submit</button>
                                <button type="button"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection