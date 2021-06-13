<div class="rpl-modal-bg">
    <div class="rpl-modal-box">
        <span id="rpl-modal-close"><i class="fas fa-times rpl-modal-close"></i></span>
        <div class="rpl-modal-content">
            <div class="rpl-modal-form">
                <form action="" id="rpl-form">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> 
                    <fieldset class="py-3">
                        <div class="form-card form-group">
                            <div class="py-3">
                                <label class="fieldlabels">What industry is your experience in? *</label>
                                <select class="form-control industry">
                                    <option disabled selected value>Choose your industry of interest...</option>
                                        @forelse (\App\Models\CourseIndustry::all() as $item)
                                            <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @empty

                                        @endforelse
                                </select>
                            </div>
                            <div class="courses py-3">
                                <label class="fieldlabels">What qualification are you looking for? *</label>
                                <select class="form-control course">
                                    <option disabled selected value>Choose your preffered industry first...</option>
                                </select>
                            </div>
                            <div class="other py-3">
                                <label class="fieldlabels">Write your course industry name *</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="other py-3">
                                <label class="fieldlabels">Write course name *</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <button type="button" class="next">Next</button>
                    </fieldset>
                    <fieldset class="py-3">
                        <div class="form-card form-group">
                            <div class="radio">
                                <div class="fieldlabels">How many years of relevant work experience do you have? *</div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="relevant" id="one" value="1 - 2 years" />
                                        <label for="one" class="exp-lbl">
                                            <div>1 - 2 Years</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="relevant" id="two" value="3 - 4 years">
                                        <label for="two" class="exp-lbl">
                                            <div>3 - 4 Years</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="relevant" id="three" value="5 - 9 years">
                                        <label for="three" class="exp-lbl">
                                            <div>5 - 9 Years</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="relevant" id="four" value="10 + years">
                                        <label for="four" class="exp-lbl">
                                            <div>10 + Years</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="radio">
                                <div class="fieldlabels">Where is your work experience? *</div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="radio" name="work_location" id="wlOne" value="1 - 2 years" />
                                        <label for="wlOne" class="exp-lbl">
                                            <div>Australia</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="radio" name="work_location" id="wlTwo" value="3 - 4 years">
                                        <label for="wlTwo" class="exp-lbl">
                                            <div>Overseas</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="radio" name="work_location" id="wlThree" value="5 - 9 years">
                                        <label for="wlThree" class="exp-lbl">
                                            <div>Other</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <button type="button" class="previous">Previous</button> 
                        <button type="button" class="next">Next</button>
                    </fieldset>
                    <fieldset class="py-3">
                        <div class="form-card form-group">
                            <div class="radio">
                                <div class="fieldlabels">What state do you live in? *</div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locOne" value="NSW" />
                                        <label for="locOne" class="exp-lbl">
                                            <div>NSW</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locTwo" value="VIC">
                                        <label for="locTwo" class="exp-lbl">
                                            <div>VIC</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locThree" value="QLD">
                                        <label for="locThree" class="exp-lbl">
                                            <div>QLDs</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locFour" value="SA">
                                        <label for="locFour" class="exp-lbl">
                                            <div>SA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locFive" value="WA" />
                                        <label for="locFive" class="exp-lbl">
                                            <div>WA</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locSix" value="ACT">
                                        <label for="locSix" class="exp-lbl">
                                            <div>ACT</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locSeven" value="NT">
                                        <label for="locSeven" class="exp-lbl">
                                            <div>NT</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <input type="radio" name="location" id="locEight" value="TAS">
                                        <label for="locEight" class="exp-lbl">
                                            <div>TAS</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <button type="button" class="previous">Previous</button> 
                        <button type="button" class="next">Next</button>
                    </fieldset>
                    <fieldset class="py-3">
                        <div class="form-card">
                            <div class="fieldlabels">Enter your details below *</div>
                            <div class=" form-group">
                                <input type="text" id="name" class="form-control" placeholder="Please enter your full name">
                            </div>
                            <div class=" form-group">
                                <input type="email" id="email" class="form-control" placeholder="example@email.com" >
                            </div>
                            <div class=" form-group"> 
                                <input type="text" id="phone" class="form-control" placeholder="Enter your contact number" >
                            </div>
                        </div> 
                        <button type="button" class="previous">Previous</button> 
                        <button type="button" class="next">Next</button>
                    </fieldset>
                    <fieldset class="py-3">
                        <div class="form-card">
                            <div class="form-group">
                                <label class="fieldlabels">Upload your documents</label>
                                <input type="file" class="form-control" id="file">
                            </div>
                            <div class="form-group">
                                <label class="fieldlabels">Remarks:</label>
                                <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any question?"></textarea>
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
</div>