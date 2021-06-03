<div class="container-fluid rpl-form">
    <div class="row justify-content-center">
        <div class="col-12 text-center p-0">
            <div class="px-0 mb-3">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"></li>
                        <li id="personal"></li>
                        <li id="payment"></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card form-group">
                            <label class="fieldlabels">Full Name: *</label> 
                                <input type="text" id="name" class="form-control" placeholder="Please enter your full name">
                            <label class="fieldlabels">Email: *</label> 
                                <input type="email" id="email" class="form-control" placeholder="example@email.com" >
                            <label class="fieldlabels">Contact: *</label> 
                               <input type="text" id="phone" class="form-control" placeholder="Enter your phone or mobile number" >
                            <label class="fieldlabels">Current Location: *</label> 
                                <select class="form-control" id="location">
                                    <option disabled selected value>Where are you currently located</option>
                                    <option value="NSW">NSW</option>
                                    <option value="VIC">VIC</option>
                                    <option value="QLD">QLD</option>
                                    <option value="SA">SA</option>
                                    <option value="WA">WA</option>
                                    <option value="ACT">ACT</option>
                                    <option value="NT">NT</option>
                                    <option value="TAS">TAS</option>
                                </select>
                        </div>
                        <button type="button" class="next rpl-btn">Next</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <label class="fieldlabels">Your Qualification: *</label> 
                                <input type="text" id="qualification" class="form-control" placeholder="What is your current qualification" >
                            <label class="fieldlabels">Relevant Work Experience: *</label> 
                                <select id="relevant" class="form-control"/>
                                    <option disabled selected value>Select relevant work experience</option>
                                    <option value="1-2">1-2</option>
                                    <option value="3-5">3-5</option>
                                    <option value="6-8">6-8</option>
                                    <option value="8+">8+</option>
                                </select>
                            <label class="fieldlabels">Work Location: *</label> 
                                <select id="work_location" class="form-control"/>
                                    <option disabled selected value>Work experience location</option>
                                    <option value="australia">Australia</option>
                                    <option value="overseas">Overseas</option>
                                    <option value="both">Both</option>
                                </select>
                            <label class="fieldlabels">Designation: *</label> 
                                <input type="text" id="designation" class="form-control" placeholder="What was your designation">
                            <div class="rpl-files">
                                <label for="file">
                                    Upload your documents
                                </label>
                                <input type="file" id="file" multiple placeholder="Upload your documents" />
                            </div>
                        </div> 
                        <button type="button" class="previous rpl-btn">Previous</button> 
                        <button type="button" class="next rpl-btn">Next</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <label class="fieldlabels">Course Industry: *</label>
                                <select class="form-control" id="industry"  />
                                    <option disabled selected value>Choose your industry of interest...</option>
                                        @forelse (\App\Models\CourseIndustry::all() as $item)
                                            <option value="{{ $item->title }}">{{ $item->title }}</option>
                                        @empty

                                        @endforelse
                                </select>
                            <div class="courses">
                                <label class="fieldlabels">Course: *</label>
                                <select class="form-control" id="courses">
                                    <option disabled selected value>Choose your preffered industry first...</option>
                                </select>
                            </div>
                            
                            <div class="other_ind">
                                <input type="text" class="form-control" placeholder="other industry of interest..." >
                            </div>
                            <div class="other_course">
                                <input type="text" class="form-control" placeholder="other course of interest..." >
                            </div>
                            <label class="fieldlabels">Remarks:</label>
                            <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any question?"></textarea>
                        </div> 
                        <button type="button" class="previous rpl-btn">Previous</button> 
                        <button type="submit" class="rpl-btn" id="btn-submit">
                            Submit
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>