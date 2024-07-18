<style>
    .modal-title.sub_heading {
        white-space: nowrap;
        text-overflow: ellipsis;
        color: #b9a431;
    }

    .close-wrapper {
        float: right;
        padding-top:10px;
        padding-right: 10px;
    }
</style>

<!-- Enquiry Form Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <div class="close-wrapper">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </button>
            <div class="modal-header">
                <h5 class="modal-title sub_heading" id="enquiryModalLabel"><u>SECAB P.U.COLLEGE FOR WOMENS, VIJAYAPUR.</u></h5>
            </div>
            <div class="modal-body">
                <h5 class="modal-title text-center pb-3" id="enquiryModalLabel">ENQUIRY FORM</h5>
                <form id="enquiryForm">
                    <h6 class="modal-title">Student Details</h6>
                    <hr>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Student Name</label>
                        <input type="text" class="form-control col-sm-8" id="name" name="name" placeholder="Enter Student Name" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-8 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="male" id="male" value="male" required>
                                <label class="form-check-label" for="genderMale">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="female" id="female" value="female" required>
                                <label class="form-check-label" for="genderFemale">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <input type="email" class="form-control col-sm-8" id="email" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                        <input type="number" class="form-control col-sm-8" id="phone" name="phone" placeholder="Enter Phone" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="medium" class="col-sm-4 col-form-label">Medium of instruction</label>
                        <input type="text" class="form-control col-sm-8" id="medium" name="medium" placeholder="Enter Medium of instruction" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="institute" class="col-sm-4 col-form-label">Institution last Attended</label>
                        <input type="text" class="form-control col-sm-8" id="institute" name="institute" placeholder="Enter Institution last Attended" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="course" class="col-sm-4 col-form-label">Courses to Join</label>
                        <select class="form-control col-sm-8" id="course" name="course" required>
                            <option value="">Select Course</option>
                            <option value="arts">Arts</option>
                            <option value="science">Science</option>
                            <option value="commerce">Commerce</option>
                        </select>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="postalAddress" class="col-sm-4 col-form-label">Postal Address</label>
                        <textarea class="form-control col-sm-8" id="postalAddress" name="postalAddress" rows="3" placeholder="Enter Postal Address"></textarea>
                    </div>
                    <h6 class="modal-title mt-4">Parent's Details</h6>
                    <hr>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label"><b>Names</b></label>
                        <input type="text" class="form-control col-sm-8" id="fname" name="fname" placeholder="Enter Father's Name" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-4"></label>
                        <input type="text" class="form-control col-sm-8" id="mname" name="mname" placeholder="Enter Mother's Name" required>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="qualification" class="col-sm-4 col-form-label"><b>Qualification</b></label>
                        <input type="text" class="form-control col-sm-8" id="qualification" name="qualification" placeholder="Enter Father's Qualification" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-4"></label>
                        <input type="text" class="form-control col-sm-8" id="mqualification" name="mqualification" placeholder="Enter Mother's Qualification" required>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="designation" class="col-sm-4 col-form-label"><b>Designation</b></label>
                        <input type="text" class="form-control col-sm-8" id="designation" name="designation" placeholder="Enter Father's Designation" required>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-4"></label>
                        <input type="text" class="form-control col-sm-8" id="mdesignation" name="mdesignation" placeholder="Enter Mother's Designation" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Trigger the enquiry modal on page load
        $('#enquiryModal').modal('show');
    });
</script>