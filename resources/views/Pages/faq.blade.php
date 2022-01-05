@extends('layouts.app')

@section('title', 'FAQ')

@push('seo')
    <meta name="description" content="ITEC is the best education consultant & migration agency in Australia. Those who want to study, work or travel to Australia will get the best consultancy from our expert." />
@endpush

@section('content')
    <header class="page-header">
        <div class="video-bg img-bg img-bg-1"></div>
        <!-- end video-bg -->
        <div class="inner">
            <div class="container">
                <h1>FAQ</h1>
                <p>Frequently Asked Questions</p>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>

    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-12 wow" data-splitting>
                    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                        <div class="container">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading p-3 mb-3" role="tab" id="faq1">
                                        <h3 class="panel-title">
                                        <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Question #1 <i class="pull-right fa fa-plus"></i>
                                        </a>
                                        </h3>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq1">
                                        <div class="panel-body px-3 mb-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error facilis iure obcaecati perferendis labore commodi? Eos magnam similique eum asperiores pariatur impedit, minus quas possimus, sunt voluptas exercitationem quod? Porro?
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading p-3 mb-3" role="tab" id="faq2">
                                        <h3 class="panel-title">
                                        <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                            Question #2 <i class="pull-right fa fa-plus"></i>
                                        </a>
                                        </h3>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                        <div class="panel-body px-3 mb-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere provident perferendis harum ex dolore similique, ratione tenetur odit veniam earum ipsam quia? Provident repellendus cupiditate accusantium sunt a pariatur dolorum.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading p-3 mb-3" role="tab" id="faq3">
                                        <h3 class="panel-title">
                                        <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                            Question #3 <i class="pull-right fa fa-plus"></i>
                                        </a>
                                        </h3>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                        <div class="panel-body px-3 mb-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere provident perferendis harum ex dolore similique, ratione tenetur odit veniam earum ipsam quia? Provident repellendus cupiditate accusantium sunt a pariatur dolorum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end text-content-block -->
@endsection
