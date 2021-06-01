    <div class="py-5">
        <h1 class="text-center text-light">Check Your Eligibility Now</h1>
    </div>
    <div class="container rpl-form">
        <form class="rpl-form-main" id="form-rpl">
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" id="name" class="form-control" placeholder="Please enter your full name">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <input type="text" id="phone" class="form-control" placeholder="Enter your phone or mobile number" >
                </div>
                <div class="col-md-6 my-2">
                    <input type="email" id="email" class="form-control" placeholder="example@email.com" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
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

                <div class="col-md-6 my-2">
                    <input type="text" id="qualification" class="form-control" placeholder="What is your current qualification" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <select id="relevant" class="form-control"/>
                        <option disabled selected value>Select relevant work experience</option>
                        <option value="1-2">1-2</option>
                        <option value="3-5">3-5</option>
                        <option value="6-8">6-8</option>
                        <option value="8+">8+</option>
                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <select id="work_location" class="form-control"/>
                        <option disabled selected value>Work experience location</option>
                        <option value="australia">Australia</option>
                        <option value="overseas">Overseas</option>
                        <option value="both">Both</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <input type="text" id="designation" class="form-control" placeholder="What was your designation">
                </div>
                <div class="col-md-6 my-2 rpl-files">
                    <label for="file">
                        Upload your documents
                    </label>
                    <input type="file" id="file" multiple placeholder="Upload your documents" />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <select class="form-control" id="industry"  />
                    <option disabled selected value>Choose your industry of interest...</option>
                        @forelse (\App\Models\CourseIndustry::all() as $item)
                            <option value="{{ $item->title }}">{{ $item->title }}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <select class="form-control" id="courses">
                        <option disabled selected value>Choose your preffered industry first...</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 other_ind mb-2">
                    <input type="text" class="form-control" placeholder="other industry of interest..." >
                </div>
                <div class="col-md-12 other_course mt-2">
                    <input type="text" class="form-control" placeholder="other course of interest..." >
                </div>
            </div>
            <div class="row form-group my-2">
                <div class="col-md-12">
                    <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any question?"></textarea>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="rpl-btn" id="btn-submit">Submit</button>
            </div>
        </form>
    </div>
