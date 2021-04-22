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
                        <option disabled selected value>Where are you currentlu located</option>
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
                    <input type="text" class="form-control" name="designation"
                        placeholder="Industry of interest. Ex: Hospitality, Construction etc" required>
                </div>
                <div class="col-md-6 my-2 rpl-files">
                    <select name="live" class="form-control" required>
                        <option disabled selected value>Select your preffered course</option>
                    </select>
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
