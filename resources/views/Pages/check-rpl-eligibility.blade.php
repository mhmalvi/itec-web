@extends('layouts.app')
@section('title', 'Check your eligibility for rpl')
@section('content')
    <!-- end all-cases-link -->
    <header class="page-header">
        <div class="video-bg">
            <video src="{{ asset('assets/videos/check-rpl.mp4') }}" muted loop autoplay></video>
        </div>
        <!-- end video-bg -->
        <div class="inner p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="text-center">
                            <h2 class="rpl-form-heading">Check Your Eligibility For RPL</h2>
                        </div>
                        <div class="rpl-modal-form visible rpl-form-padding" id="rpl-modal-form">
                            <form id="rpl-form-2">
                                <div class="progress progress-bg-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="rpl-form-control-box">
                                            <label class="fieldlabels p-0 m-0">What industry is your experience in? *</label>
                                            <select class="industry rpl-form-control rpl-form-select" id="industry">
                                                <option disabled selected value>Choose your industry of interest...</option>
                                                    @forelse (\App\Models\CourseIndustry::all() as $item)
                                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                    @empty

                                                    @endforelse
                                            </select>
                                        </div>
                                        <div class="rpl-form-control-box">
                                            <label class="fieldlabels p-0 m-0">What qualification are you looking for? *</label>
                                            <select class="course rpl-form-control rpl-form-select" id="qualification">
                                                <option disabled selected value>Choose your preffered industry first...</option>
                                            </select>
                                        </div>
                                        <div class="other rpl-form-control-box">
                                            <label class="fieldlabels p-0 m-0">Write your course industry name *</label>
                                            <input type="text" class="rpl-form-control" placeholder="Industry name you are looking for"/>
                                        </div>
                                        <div class="other rpl-form-control-box">
                                            <label class="fieldlabels p-0 m-0">Write course name *</label>
                                            <input type="text" class="rpl-form-control" placeholder="Course name you are looking for"/>
                                        </div>
                                    </div>
                                    <button type="button" class="next">Next</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="radio">
                                            <div class="fieldlabels">How many years of relevant work experience do you have? *</div>
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-12">
                                                    <input type="radio" name="exp" id="one" value="1 - 2 years" />
                                                    <label for="one" class="exp-lbl exp-lbl-red">
                                                        <div>1 - 2 <br> Years</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-xs-12">
                                                    <input type="radio" name="exp" id="two" value="3 - 4 years">
                                                    <label for="two" class="exp-lbl exp-lbl-red">
                                                        <div>3 - 4 <br> Years</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-xs-12">
                                                    <input type="radio" name="exp" id="three" value="5 - 9 years">
                                                    <label for="three" class="exp-lbl exp-lbl-red">
                                                        <div>5 - 9 <br> Years</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-xs-12">
                                                    <input type="radio" name="exp" id="four" value="10 + years">
                                                    <label for="four" class="exp-lbl exp-lbl-red">
                                                        <div>10 + <br> Years</div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="radio">
                                            <div class="fieldlabels">Where is your work experience? *</div>
                                            <div class="row">
                                                <div class="col-sm-4 col-xs-12">
                                                    <input type="radio" name="work_location" id="wlOne" value="Australia" />
                                                    <label for="wlOne" class="exp-lbl exp-lbl-red">
                                                        <div>Australia</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <input type="radio" name="work_location" id="wlTwo" value="Overseas">
                                                    <label for="wlTwo" class="exp-lbl exp-lbl-red">
                                                        <div>Overseas</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-4 col-xs-12">
                                                    <input type="radio" name="work_location" id="wlThree" value="Other">
                                                    <label for="wlThree" class="exp-lbl exp-lbl-red">
                                                        <div>Other</div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="previous">Previous</button>
                                    <button type="button" class="next">Next</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="radio">
                                            <div class="fieldlabels">What state do you live in? *</div>
                                            <div class="row">
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locOne" value="NSW" />
                                                    <label for="locOne" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/01.webp')}}" alt="nsw">
                                                        <div>NSW</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locTwo" value="VIC">
                                                    <label for="locTwo" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/02.webp')}}" alt="vic">
                                                        <div>VIC</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locThree" value="QLD">
                                                    <label for="locThree" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/03.webp')}}" alt="qld">
                                                        <div>QLDs</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locFour" value="SA">
                                                    <label for="locFour" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/04.webp')}}" alt="sa">
                                                        <div>SA</div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row pt-sm-5">
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locFive" value="WA" />
                                                    <label for="locFive" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/05.webp')}}" alt="wa">
                                                        <div>WA</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locSix" value="ACT">
                                                    <label for="locSix" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/06.webp')}}" alt="act">
                                                        <div>ACT</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locSeven" value="NT">
                                                    <label for="locSeven" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/07.webp')}}" alt="nt">
                                                        <div>NT</div>
                                                    </label>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <input type="radio" name="location" id="locEight" value="TAS">
                                                    <label for="locEight" class="exp-lbl exp-lbl-red">
                                                        <img class="lazyload" data-src="{{asset('images/maps/08.webp')}}" alt="tas">
                                                        <div>TAS</div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="previous">Previous</button>
                                    <button type="button" class="next">Next</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="rpl-form-control-box">
                                            <label for="name" class="fieldlabels p-0 m-0">Enter Your Fully Qualified Name *</label>
                                            <input type="text" id="name" class="rpl-form-control" placeholder="Please enter your full name">
                                        </div>
                                        <div class="rpl-form-control-box">
                                            <label for="email" class="fieldlabels p-0 m-0">Enter Your Valid Email Address *</label>
                                            <input type="email" id="email" class="rpl-form-control" placeholder="example@email.com" >
                                        </div>
                                        <div class="rpl-form-control-box">
                                            <label for="phone" class="fieldlabels p-0 m-0">Enter Your Contact Number *</label>
                                            <input type="text" id="phone" class="rpl-form-control" placeholder="Enter your contact number" >
                                        </div>
                                    </div>
                                    <button type="button" class="previous">Previous</button>
                                    <button type="button" class="next">Next</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="rpl-form-control-box">
                                            <label class="fieldlabels p-0 m-0">Remarks:</label>
                                            <textarea id="remark" class="rpl-form-control rpl-form-textarea" rows="5" placeholder="Do you have any question?"></textarea>
                                        </div>

                                        <div class="rpl-form-control-box">
                                            <label class="fieldlabels p-0 m-0 rpl-form-file" for="file">Upload your documents</label>
                                            <input type="file" id="file"/>
                                        </div>
                                    </div>
                                    <button type="button" class="previous">Previous</button>
                                    <button type="submit" class="rpl-form-submit" id="btn-submit">
                                        Submit
                                    </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="loader-wrapper" id="lds-wrapper"area-hidden='true'>
                    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
@endsection
