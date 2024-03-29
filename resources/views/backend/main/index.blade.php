@extends('mainlayout.index')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- start widget -->
            <div class="state-overview">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-green">
                            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Students</span>
                                <span class="info-box-number">450</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 45%"></div>
                                </div>
                                <span class="progress-description">
											45% Increase in 28 Days
										</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-yellow">
                            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">New Students</span>
                                <span class="info-box-number">155</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 40%"></div>
                                </div>
                                <span class="progress-description">
											40% Increase in 28 Days
										</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-blue">
                            <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Course</span>
                                <span class="info-box-number">52</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%"></div>
                                </div>
                                <span class="progress-description">
											85% Increase in 28 Days
										</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i
                                                class="material-icons">monetization_on</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Fees Collection</span>
                                <span class="info-box-number">13,921</span><span>$</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                                <span class="progress-description">
											50% Increase in 28 Days
										</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- end widget -->
            <!-- chart start -->
{{--            <div class="row">--}}
{{--                <div class="col-sm-8">--}}
{{--                    <div class="card card-box">--}}
{{--                        <div class="card-head">--}}
{{--                            <header>University Survey</header>--}}
{{--                            <div class="tools">--}}
{{--                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>--}}
{{--                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>--}}
{{--                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body no-padding height-9">--}}
{{--                            <div class="row">--}}
{{--                                <canvas id="canvas1"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="card card-box">--}}
{{--                        <div class="card-head">--}}
{{--                            <header>University Survey</header>--}}
{{--                            <div class="tools">--}}
{{--                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>--}}
{{--                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>--}}
{{--                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body no-padding height-9">--}}
{{--                            <div class="row">--}}
{{--                                <canvas id="chartjs_pie"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Chart end -->--}}
{{--            <!-- start course list -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6 col-12 col-sm-6">--}}
{{--                    <div class="blogThumb">--}}
{{--                        <div class="thumb-center"><img class="img-responsive" alt="user"--}}
{{--                                                       src="../assets/img/course/course1.jpg"></div>--}}
{{--                        <div class="course-box">--}}
{{--                            <h4>PHP Development Course</h4>--}}
{{--                            <div class="text-muted"><span class="m-r-10">April 23</span>--}}
{{--                                <a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>--}}
{{--                            </div>--}}
{{--                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>--}}
{{--                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>--}}
{{--                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>--}}
{{--                            <button type="button"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read--}}
{{--                                More</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-12 col-sm-6 ">--}}
{{--                    <div class="blogThumb">--}}
{{--                        <div class="thumb-center"><img class="img-responsive" alt="user"--}}
{{--                                                       src="../assets/img/course/course2.jpg"></div>--}}
{{--                        <div class="course-box">--}}
{{--                            <h4>PHP Development Course</h4>--}}
{{--                            <div class="text-muted"><span class="m-r-10">April 23</span>--}}
{{--                                <a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>--}}
{{--                            </div>--}}
{{--                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>--}}
{{--                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>--}}
{{--                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>--}}
{{--                            <button type="button"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read--}}
{{--                                More</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-12 col-sm-6">--}}
{{--                    <div class="blogThumb">--}}
{{--                        <div class="thumb-center"><img class="img-responsive" alt="user"--}}
{{--                                                       src="../assets/img/course/course3.jpg"></div>--}}
{{--                        <div class="course-box">--}}
{{--                            <h4>PHP Development Course</h4>--}}
{{--                            <div class="text-muted"><span class="m-r-10">April 23</span>--}}
{{--                                <a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>--}}
{{--                            </div>--}}
{{--                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>--}}
{{--                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>--}}
{{--                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>--}}
{{--                            <button type="button"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read--}}
{{--                                More</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-12 col-sm-6">--}}
{{--                    <div class="blogThumb">--}}
{{--                        <div class="thumb-center"><img class="img-responsive" alt="user"--}}
{{--                                                       src="../assets/img/course/course4.jpg"></div>--}}
{{--                        <div class="course-box">--}}
{{--                            <h4>PHP Development Course</h4>--}}
{{--                            <div class="text-muted"><span class="m-r-10">April 23</span>--}}
{{--                                <a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>--}}
{{--                            </div>--}}
{{--                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>--}}
{{--                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>--}}
{{--                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>--}}
{{--                            <button type="button"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read--}}
{{--                                More</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- End course list -->
{{--            <div class="row">--}}
{{--                <!-- Quick Mail start -->--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 col-12">--}}
{{--                    <div class="card-box">--}}
{{--                        <div class="card-head">--}}
{{--                            <header>Quick Mail</header>--}}
{{--                            <button id="demo_menu-lower-right"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--icon pull-right"--}}
{{--                                    data-upgraded=",MaterialButton">--}}
{{--                                <i class="material-icons">more_vert</i>--}}
{{--                            </button>--}}
{{--                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"--}}
{{--                                data-mdl-for="demo_menu-lower-right">--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else--}}
{{--                                    here</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="card-body ">--}}
{{--                            <div class="mail-list">--}}
{{--                                <div class="compose-mail">--}}
{{--                                    <form method="post">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="to" class="">To:</label>--}}
{{--                                            <input type="text" tabindex="1" id="to" class="form-control">--}}
{{--                                            <div class="compose-options">--}}
{{--                                                <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();"--}}
{{--                                                   href="javascript:;">Cc</a>--}}
{{--                                                <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();"--}}
{{--                                                   href="javascript:;">Bcc</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group hidden">--}}
{{--                                            <label for="cc" class="">Cc:</label>--}}
{{--                                            <input type="text" tabindex="2" id="cc" class="form-control">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group hidden">--}}
{{--                                            <label for="bcc" class="">Bcc:</label>--}}
{{--                                            <input type="text" tabindex="2" id="bcc" class="form-control">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="subject" class="">Subject:</label>--}}
{{--                                            <input type="text" tabindex="1" id="subject" class="form-control">--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <div id="summernote"></div>--}}
{{--                                            <input type="file" class="default" multiple>--}}
{{--                                        </div>--}}
{{--                                        <!--   <div class="btn-group margin-top-20 ">--}}
{{--                                            <button class="btn btn-primary btn-sm margin-right-10"><i class="fa fa-check"></i> Send</button>--}}
{{--                                           </div> -->--}}
{{--                                        <div class="box-footer clearfix">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">Send--}}
{{--                                                <i class="fa fa-paper-plane-o"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Quick Mail end -->
{{--                <!-- Activity feed start -->--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 col-12">--}}
{{--                    <div class="card-box">--}}
{{--                        <div class="card-head">--}}
{{--                            <header>Activity Feed</header>--}}
{{--                            <button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"--}}
{{--                                    data-upgraded=",MaterialButton">--}}
{{--                                <i class="material-icons">more_vert</i>--}}
{{--                            </button>--}}
{{--                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"--}}
{{--                                data-mdl-for="feedMenu">--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else--}}
{{--                                    here</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="card-body ">--}}
{{--                            <ul class="feedBody">--}}
{{--                                <li class="active-feed">--}}
{{--                                    <div class="feed-user-img">--}}
{{--                                        <img src="../assets/img/std/std1.jpg" class="img-radius "--}}
{{--                                             alt="User-Profile-Image">--}}
{{--                                    </div>--}}
{{--                                    <h6>--}}
{{--                                        <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small--}}
{{--                                                class="text-muted">6 hours ago</small>--}}
{{--                                    </h6>--}}
{{--                                    <p class="m-b-15 m-t-15">--}}
{{--                                        hii John, I have upload doc related to task.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li class="diactive-feed">--}}
{{--                                    <div class="feed-user-img">--}}
{{--                                        <img src="../assets/img/std/std2.jpg" class="img-radius "--}}
{{--                                             alt="User-Profile-Image">--}}
{{--                                    </div>--}}
{{--                                    <h6>--}}
{{--                                        <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small--}}
{{--                                                class="text-muted">5 hours--}}
{{--                                            ago</small>--}}
{{--                                    </h6>--}}
{{--                                    <p class="m-b-15 m-t-15">--}}
{{--                                        Please do as specify. Let me know if you have any query.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li class="diactive-feed">--}}
{{--                                    <div class="feed-user-img">--}}
{{--                                        <img src="../assets/img/std/std3.jpg" class="img-radius "--}}
{{--                                             alt="User-Profile-Image">--}}
{{--                                    </div>--}}
{{--                                    <h6>--}}
{{--                                        <span class="feedLblStyle lblCommentStyle">comment</span> Lina--}}
{{--                                        Smith<small class="text-muted">6 hours ago</small>--}}
{{--                                    </h6>--}}
{{--                                    <p class="m-b-15 m-t-15">--}}
{{--                                        Hey, How are you??--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li class="active-feed">--}}
{{--                                    <div class="feed-user-img">--}}
{{--                                        <img src="../assets/img/std/std4.jpg" class="img-radius "--}}
{{--                                             alt="User-Profile-Image">--}}
{{--                                    </div>--}}
{{--                                    <h6>--}}
{{--                                        <span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan--}}
{{--                                        <small class="text-muted">7 hours ago</small>--}}
{{--                                    </h6>--}}
{{--                                    <p class="m-b-15 m-t-15">--}}
{{--                                        I am fine. You??--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li class="active-feed">--}}
{{--                                    <div class="feed-user-img">--}}
{{--                                        <img src="../assets/img/std/std5.jpg" class="img-radius "--}}
{{--                                             alt="User-Profile-Image">--}}
{{--                                    </div>--}}
{{--                                    <h6>--}}
{{--                                        <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small--}}
{{--                                                class="text-muted">6 hours ago</small>--}}
{{--                                    </h6>--}}
{{--                                    <p class="m-b-15 m-t-15">--}}
{{--                                        hii John, I have upload doc related to task.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                                <li class="diactive-feed">--}}
{{--                                    <div class="feed-user-img">--}}
{{--                                        <img src="../assets/img/std/std6.jpg" class="img-radius "--}}
{{--                                             alt="User-Profile-Image">--}}
{{--                                    </div>--}}
{{--                                    <h6>--}}
{{--                                        <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small--}}
{{--                                                class="text-muted">5 hours--}}
{{--                                            ago</small>--}}
{{--                                    </h6>--}}
{{--                                    <p class="m-b-15 m-t-15">--}}
{{--                                        Please do as specify. Let me know if you have any query.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Activity feed end -->--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 col-12">--}}
{{--                    <div class="card-box">--}}
{{--                        <div class="card-head">--}}
{{--                            <header>Exam Toppers</header>--}}
{{--                            <button id="panel-button8"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--icon pull-right"--}}
{{--                                    data-upgraded=",MaterialButton">--}}
{{--                                <i class="material-icons">more_vert</i>--}}
{{--                            </button>--}}
{{--                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"--}}
{{--                                data-mdl-for="panel-button8">--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else--}}
{{--                                    here</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="card-body ">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-striped custom-table table-hover">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Roll No</th>--}}
{{--                                        <th>Name</th>--}}
{{--                                        <th>Graph</th>--}}
{{--                                        <th>Action</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>23</td>--}}
{{--                                        <td>John Smith</td>--}}
{{--                                        <td>--}}
{{--                                            <div id="sparkline"></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"--}}
{{--                                               title="Edit">--}}
{{--                                                <i class="fa fa-check"></i></a>--}}
{{--                                            <a href="javascript:void(0)" class="text-inverse" title="Delete"--}}
{{--                                               data-toggle="tooltip">--}}
{{--                                                <i class="fa fa-trash"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>12</td>--}}
{{--                                        <td>Sneha Pandit</td>--}}
{{--                                        <td>--}}
{{--                                            <div id="sparkline1"></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"--}}
{{--                                               title="Edit">--}}
{{--                                                <i class="fa fa-check"></i></a>--}}
{{--                                            <a href="javascript:void(0)" class="text-inverse" title="Delete"--}}
{{--                                               data-toggle="tooltip">--}}
{{--                                                <i class="fa fa-trash"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>45</td>--}}
{{--                                        <td>Sarah Smith</td>--}}
{{--                                        <td>--}}
{{--                                            <div id="sparkline2"></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"--}}
{{--                                               title="Edit">--}}
{{--                                                <i class="fa fa-check"></i></a>--}}
{{--                                            <a href="javascript:void(0)" class="text-inverse" title="Delete"--}}
{{--                                               data-toggle="tooltip">--}}
{{--                                                <i class="fa fa-trash"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>34</td>--}}
{{--                                        <td>John Deo</td>--}}
{{--                                        <td>--}}
{{--                                            <div id="sparkline3"></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"--}}
{{--                                               title="Edit">--}}
{{--                                                <i class="fa fa-check"></i></a>--}}
{{--                                            <a href="javascript:void(0)" class="text-inverse" title="Delete"--}}
{{--                                               data-toggle="tooltip">--}}
{{--                                                <i class="fa fa-trash"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>15</td>--}}
{{--                                        <td>Jay Soni</td>--}}
{{--                                        <td>--}}
{{--                                            <div id="sparkline4"></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"--}}
{{--                                               title="Edit">--}}
{{--                                                <i class="fa fa-check"></i></a>--}}
{{--                                            <a href="javascript:void(0)" class="text-inverse" title="Delete"--}}
{{--                                               data-toggle="tooltip">--}}
{{--                                                <i class="fa fa-trash"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12 col-sm-12 col-12">--}}
{{--                    <div class="card-box">--}}
{{--                        <div class="card-head">--}}
{{--                            <header>Todo List</header>--}}
{{--                            <button id="panel-button"--}}
{{--                                    class="mdl-button mdl-js-button mdl-button--icon pull-right"--}}
{{--                                    data-upgraded=",MaterialButton">--}}
{{--                                <i class="material-icons">more_vert</i>--}}
{{--                            </button>--}}
{{--                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"--}}
{{--                                data-mdl-for="panel-button">--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action--}}
{{--                                </li>--}}
{{--                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else--}}
{{--                                    here</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="card-body ">--}}
{{--                            <ul class="to-do-list ui-sortable" id="sortable-todo">--}}
{{--                                <li class="clearfix">--}}
{{--                                    <div class="todo-check pull-left">--}}
{{--                                        <input type="checkbox" value="None" id="todo-check1">--}}
{{--                                        <label for="todo-check1"></label>--}}
{{--                                    </div>--}}
{{--                                    <p class="todo-title">Add fees details in system--}}
{{--                                    </p>--}}
{{--                                    <div class="todo-actionlist pull-right clearfix">--}}
{{--                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix">--}}
{{--                                    <div class="todo-check pull-left">--}}
{{--                                        <input type="checkbox" value="None" id="todo-check2">--}}
{{--                                        <label for="todo-check2"></label>--}}
{{--                                    </div>--}}
{{--                                    <p class="todo-title">Announcement for holiday--}}
{{--                                    </p>--}}
{{--                                    <div class="todo-actionlist pull-right clearfix">--}}
{{--                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix">--}}
{{--                                    <div class="todo-check pull-left">--}}
{{--                                        <input type="checkbox" value="None" id="todo-check3">--}}
{{--                                        <label for="todo-check3"></label>--}}
{{--                                    </div>--}}
{{--                                    <p class="todo-title">call bus driver</p>--}}
{{--                                    <div class="todo-actionlist pull-right clearfix">--}}
{{--                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix">--}}
{{--                                    <div class="todo-check pull-left">--}}
{{--                                        <input type="checkbox" value="None" id="todo-check4">--}}
{{--                                        <label for="todo-check4"></label>--}}
{{--                                    </div>--}}
{{--                                    <p class="todo-title">School picnic</p>--}}
{{--                                    <div class="todo-actionlist pull-right clearfix">--}}
{{--                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix">--}}
{{--                                    <div class="todo-check pull-left">--}}
{{--                                        <input type="checkbox" value="None" id="todo-check5">--}}
{{--                                        <label for="todo-check5"></label>--}}
{{--                                    </div>--}}
{{--                                    <p class="todo-title">Exam time table generate--}}
{{--                                    </p>--}}
{{--                                    <div class="todo-actionlist pull-right clearfix">--}}
{{--                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- start new student list -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-box">
                        <div class="card-head">
                            <header>New Student List</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table display product-overview mb-30" id="support_table">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Assigned Professor</th>
                                            <th>Date Of Admit</th>
                                            <th>Fees</th>
                                            <th>Branch</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jens Brincker</td>
                                            <td>Kenny Josh</td>
                                            <td>27/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success">paid</span>
                                            </td>
                                            <td>Mechanical</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mark Hay</td>
                                            <td> Mark</td>
                                            <td>26/05/2017</td>
                                            <td>
                                                <span class="label label-sm label-warning">unpaid </span>
                                            </td>
                                            <td>Science</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Anthony Davie</td>
                                            <td>Cinnabar</td>
                                            <td>21/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">paid</span>
                                            </td>
                                            <td>Commerce</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>David Perry</td>
                                            <td>Felix </td>
                                            <td>20/04/2016</td>
                                            <td>
                                                <span class="label label-sm label-danger">unpaid</span>
                                            </td>
                                            <td>Mechanical</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Anthony Davie</td>
                                            <td>Beryl</td>
                                            <td>24/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">paid</span>
                                            </td>
                                            <td>M.B.A.</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Alan Gilchrist</td>
                                            <td>Joshep</td>
                                            <td>22/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-warning ">unpaid</span>
                                            </td>
                                            <td>Science</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Mark Hay</td>
                                            <td>Jayesh</td>
                                            <td>18/06/2016</td>
                                            <td>
                                                <span class="label label-sm label-success ">paid</span>
                                            </td>
                                            <td>Commerce</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Sue Woodger</td>
                                            <td>Sharma</td>
                                            <td>17/05/2016</td>
                                            <td>
                                                <span class="label label-sm label-danger">unpaid</span>
                                            </td>
                                            <td>Mechanical</td>
                                            <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                   title="Edit"><i class="fa fa-check"></i></a>
                                                <a href="javascript:void(0)" class="text-inverse"
                                                   title="Delete" data-toggle="tooltip"><i
                                                            class="fa fa-trash"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end new student list -->
        </div>
    </div>
    <!-- end page content -->
    <!-- start chat sidebar -->
    <div class="chat-sidebar-container" data-close-on-body-click="false">
        <div class="chat-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i
                                class="material-icons">chat</i>Chat
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i
                                class="material-icons">settings</i>
                        Settings
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Start Doctor Chat -->
                <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                     id="quick_sidebar_tab_1">
                    <div class="chat-sidebar-list">
                        <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                             data-wrapper-class="chat-sidebar-list">
                            <div class="chat-header">
                                <h5 class="list-heading">Online</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof3.jpg"
                                                       width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Deo</h5>
                                        <div class="media-heading-sub">Spine Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">5</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof1.jpg"
                                                width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Rajesh</h5>
                                        <div class="media-heading-sub">Director</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof5.jpg"
                                                       width="35" height="35" alt="...">
                                    <i class="away dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jacob Ryan</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">8</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof4.jpg"
                                                width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Kehn Anderson</h5>
                                        <div class="media-heading-sub">CEO</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof2.jpg"
                                                       width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sarah Smith</h5>
                                        <div class="media-heading-sub">Anaesthetics</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof7.jpg"
                                                       width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Vlad Cardella</h5>
                                        <div class="media-heading-sub">Cardiologist</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-header">
                                <h5 class="list-heading">Offline</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">4</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof6.jpg"
                                                width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jennifer Maklen</h5>
                                        <div class="media-heading-sub">Nurse</div>
                                        <div class="media-heading-small">Last seen 01:20 AM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof8.jpg"
                                                       width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lina Smith</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                        <div class="media-heading-small">Last seen 11:14 PM</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">9</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof9.jpg"
                                                width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jeff Adam</h5>
                                        <div class="media-heading-sub">Compounder</div>
                                        <div class="media-heading-small">Last seen 3:31 PM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof10.jpg"
                                                       width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Anjelina Cardella</h5>
                                        <div class="media-heading-sub">Physiotherapist</div>
                                        <div class="media-heading-small">Last seen 7:45 PM</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Doctor Chat -->
                <!-- Start Setting Panel -->
                <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                    <div class="chat-sidebar-settings-list slimscroll-style">
                        <div class="chat-header">
                            <h5 class="list-heading">Layout Settings</h5>
                        </div>
                        <div class="chatpane inner-content ">
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Position</div>
                                    <div class="setting-set">
                                        <select
                                                class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Header</div>
                                    <div class="setting-set">
                                        <select
                                                class="page-header-option form-control input-inline input-sm input-small ">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Footer</div>
                                    <div class="setting-set">
                                        <select
                                                class="page-footer-option form-control input-inline input-sm input-small ">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">Account Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Notifications</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                   for="switch-1">
                                                <input type="checkbox" id="switch-1" class="mdl-switch__input"
                                                       checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Show Online</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                   for="switch-7">
                                                <input type="checkbox" id="switch-7" class="mdl-switch__input"
                                                       checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Status</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                   for="switch-2">
                                                <input type="checkbox" id="switch-2" class="mdl-switch__input"
                                                       checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">2 Steps Verification</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                   for="switch-3">
                                                <input type="checkbox" id="switch-3" class="mdl-switch__input"
                                                       checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">General Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Location</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                   for="switch-4">
                                                <input type="checkbox" id="switch-4" class="mdl-switch__input"
                                                       checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Save Histry</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                   for="switch-5">
                                                <input type="checkbox" id="switch-5" class="mdl-switch__input"
                                                       checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Auto Updates</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                   for="switch-6">
                                                <input type="checkbox" id="switch-6" class="mdl-switch__input"
                                                       checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    @endsection