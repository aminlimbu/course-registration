<section>
    <div class="container">
        <form id="registration" action="<?php echo URLROOT;?>/app/views/welcome.php" method="post">
            <div class="row">
                <h2 class="mt-2 text-center">Please fill your details </h2>
                <div id="errorDiv" class="d-flex justify-content-center align-items-center text-danger">
                    <ul></ul>
                </div>
                <div class="col" id="error">
                    <h3>Please review details:</h3>
                    <div id="errorMsg"></div>
                </div>
            </div>
            <div class="row px-3 mx-3 mb-3">
                <div class="mb-3 col-md-6">
                    <label for="firstname" class="form-label">First Name: </label>
                    <input type="text" name="firstname" id="firstname" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="lastname" class="form-label">Last Name: </label>
                    <input type="text" name="lastname" id="lastname" class="form-control">
                </div>
                <div class="mb-3 col-md-12">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3 col-md-12">
                    <label for="course" class="form-label">Interested in</label>
                    <select class="form-select" name="course" aria-label="skill">
                        <option selected>ComboBox</option>
                        <option value="1">Web Development</option>
                        <option value="2">Networking</option>
                        <option value="3">Game Development</option>
                    </select>
                </div>
                <div class="radio mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="duration" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">3 Months course</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="duration" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">6 Months course</label>
                    </div>
                </div>
                <div class="checkbox mb-3">
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="online_checkbox" name="delivery[]">
                        <label class="form-check-label ms-2" for="online_checkbox">
                            Online
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="face_to_face_checkbox" name="delivery[]">
                        <label class="form-check-label ms-2" for="face_to_face_checkbox">
                            Attain Class
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="recording_checkbox" name="delivery[]">
                        <label class="form-check-label ms-2" for="recording_checkbox">
                            Recorded Lectures
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                <!-- <input type="submit" value="Submit" id="submit"> -->
            </div>
        </form>
        <div class="col" id="curent-datetime">
            <p>Submitted Data: <?php echo date('Y-m-d H:i:s'); ?></p>
            <div id="succeesMsg"></div>
        </div>
    </div>
</section>