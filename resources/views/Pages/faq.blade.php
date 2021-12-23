@extends('layouts.app')

@section('title', "FAQs")

@push('css')
    <style>
        .section-contact{
            padding: 40px 0px;
        }
    </style>
@endpush

@section('content')
    <header class="page-header">
        <div class="video-bg img-bg img-bg-1"></div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>FAQs</h1>
                <p>Frequently Asked Questions</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>

    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Question One
                                </button>
                            </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Question Two
                                </button>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Quastion Three
                                </button>
                            </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-250"></div>

            <div class="card shadow bg-white rounded border-0">
                <div class="card-body p-0">
                    <div class="row contact-card-right">
                        <!-- end col-5 -->
                        <div class="col-lg-6 p-0">
                            <img src="{{asset('images/faq.webp')}}" alt="">
                        </div>
                        <div class="col-lg-6 p-0 text-center">
                            <div class="section-contact">
                                <h3 class="section-title wow m-0" data-splitting>
                                    NEED <br>CONSULTANCY?
                                </h3>

                                <h3 class="py-3">1300 535 922 </h3>

                                <h5>Our Experts are always here to talk</h5>
                            </div>
                        </div>
                        <!-- col-7 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection