@extends('layouts.appLanding')

@section('content')
    <div class="container">
        <div class="section">
            <h3 class="title text-center">Las mas usadas</h3>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-raised card-background" style="background-image: url('/assets/img/examples/office2.jpg')">
                        <div class="card-body">
                            <h6 class="card-category text-info">Tipo de Cancha</h6>
                            <a href="/reserva">
                                <h3 class="card-title">Titulo de Empresa</h3>
                            </a>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="/reserva" class="btn btn-danger btn-round">
                                <i class="material-icons">format_align_left</i> Reservar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-raised card-background" style="background-image: url('/assets/img/examples/blog8.jpg')">
                        <div class="card-body">
                            <h6 class="card-category text-info">Tipo de Cancha</h6>
                            <h3 class="card-title">Titulo de Empresa</h3>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="/reserva" class="btn btn-primary btn-round">
                                <i class="material-icons">format_align_left</i> Reservar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-raised card-background" style="background-image: url('/assets/img/examples/card-project6.jpg')">
                        <div class="card-body">
                            <h6 class="card-category text-info">Tipo de Cancha</h6>
                            <h3 class="card-title">Titulo de Cancha</h3>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="/reserva" class="btn btn-warning btn-round">
                                <i class="material-icons">subject</i> Read Case Study
                            </a>
                            <a href="/reserva" class="btn btn-white btn-just-icon btn-link" title="" rel="tooltip" data-original-title="Save to Pocket">
                                <i class="fa fa-get-pocket"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <h3 class="title text-center">Seleccione el tipo de cancha que desea</h3>
            <br>
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <ul class="nav nav-pills nav-pills-primary">
                        <li class="nav-item">
                            <a class="nav-link active" href="#pill1" data-toggle="tab">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pill2" data-toggle="tab">Sintetica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pill3" data-toggle="tab">Césped Natural</a>
                        </li>
                    </ul>
                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="pill1"></div>
                        <div class="tab-pane" id="pill2"></div>
                        <div class="tab-pane" id="pill3"></div>
                        <div class="tab-pane" id="pill4"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-header card-header-image">
                            <a href="/reserva">
                                <img class="img img-raised" src="/assets/img/bg5.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-info">Tipo de Cancha</h6>
                            <h4 class="card-title">
                                <a href="#reserva">Titulo de Empresa</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                <a href="/reserva"> Read More </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-header card-header-image">
                            <a href="/reserva">
                                <img class="img img-raised" src="/assets/img/examples/blog5.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-success">
                                Tipo de cancha
                            </h6>
                            <h4 class="card-title">
                                <a href="/reserva">Titulo de Empresa</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                <a href="/reserva"> Read More </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-header card-header-image">
                            <a href="/reserva">
                                <img class="img img-raised" src="/assets/img/examples/blog6.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-danger">
                                Tipo de Cancha
                            </h6>
                            <h4 class="card-title">
                                <a href="/reserva">Titulo de Empresa</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                <a href="/reserva"> Read More </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-line">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title">Get Tips &amp; Tricks every Week!</h3>
                    <p class="description">
                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="card card-plain card-form-horizontal">
                        <div class="card-body">
                            <form method="" action="">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">mail</i>
                          </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Your Email...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
