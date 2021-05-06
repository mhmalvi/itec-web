    <div class="py-5">
        <h1 class="text-center text-light">Check Your Eligibility Now</h1>
    </div>
    <div class="container rpl-form">
        <form action="">
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="fullname" placeholder="Please enter your full name"
                        required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <input type="text" class="form-control" name="contact"
                        placeholder="Enter your phone or mobile number" required>
                </div>
                <div class="col-md-6 my-2">
                    <input type="text" class="form-control" name="email" placeholder="example@email.com" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <select name="live" class="form-control" required>
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
                    <input type="text" class="form-control" name="qualifications"
                        placeholder="What is your current qualification" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <select name="experience_one" class="form-control" required />
                    <option disabled selected value>Select relevant work experience</option>
                    <option value="1-2">1-2</option>
                    <option value="3-5">3-5</option>
                    <option value="6-8">6-8</option>
                    <option value="8+">8+</option>
                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <select name="experience_one" class="form-control" required />
                    <option disabled selected value>Work experience location</option>
                    <option value="australia">Australia</option>
                    <option value="overseas">Overseas</option>
                    <option value="both">Both</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <input type="text" class="form-control" name="designation" placeholder="What was your designation"
                        required>
                </div>
                <div class="col-md-6 my-2 rpl-files">
                    <label for="file">
                        Upload your documents
                    </label>
                    <input type="file" name="file" id="file" multiple placeholder="Upload your documents" />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 my-2">
                    <select name="industry" class="form-control" id="industry" required />
                    <option disabled selected value>Choose your industry of interest...</option>
                    @forelse (\App\Models\CourseIndustry::all() as $item)
                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                    @empty

                    @endforelse
                    <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <select name="course" class="form-control" id="courses">
                        <option disabled selected value>Choose your preffered industry first...</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 other_ind mb-2">
                    <input type="text" class="form-control" name="industry_other"
                        placeholder="other industry of interest..." required>
                </div>
                <div class="col-md-12 other_course mt-2">
                    <input type="text" class="form-control" name="industry_course"
                        placeholder="other course of interest..." required>
                </div>
            </div>
            <div class="row form-group my-2">
                <div class="col-md-12">
                    <textarea name="question" class="form-control" rows="5" placeholder="Do you have any question?"
                        required></textarea>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="rpl-btn">Submit</button>
            </div>
        </form>
    </div>
