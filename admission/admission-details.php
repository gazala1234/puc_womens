<!--====== HEADER FILE INCLUDED ======-->
<?php
include '../header.php';
?>

<style>
    .list-group-item {
        position: relative;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        margin-bottom: 5px;
        padding-left: 30px;
    }

    .list-group-item::before {
        content: '\2022';
        position: absolute;
        left: 10px;
        color: #b9a431;
        font-size: 2rem;
        line-height: 1.2;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
    }
</style>

<!--====== ABOUT PART START ======-->
<hr>
<div class="content pt-20">
    <div class="row">
        <div class="admission col-lg-7">
            <div class="container ml-5 pb-5">
                <h2 class="heading mb-3"><i><u>ADMISSION DETAILS</u></i></h2>
                <p class="text-justify">
                    The following information lays out the eligibility criteria and other requirements for
                    admission to courses at SECAB PU College for Women, Vijaypur.
                </p>
                <h4 class="subheading my-4"><i>ELIGIBILITY FOR ADMISSION</i></h4>
                <P class="text-justify">
                    Admission for two years Pre-University course shall be open to candidates who have passed the
                    Karnataka Secondary School Leaving Certificate Examination (SSLC) or any other examination recognized by
                    PUE Department as equivalent to Karnataka SSLC Examination.
                </P>
                <h4 class="subheading my-4"><i>ADMISSION PROCEDURE</i></h4>
                <ul class="list-group list-group-flush procedure-list">
                    <li class="list-group-item">Application for admission must be submitted in the prescribed form along with the xerox SSLC marks card, LC, Income Certificate, (Migration Certificate for students of other states) and four recent passport size photos.</li>
                    <li class="list-group-item">Selected Candidates must pay the prescribed fees. Fees once paid will not be refunded under any circumstances.</li>
                    <li class="list-group-item">All admissions are subjected to the approval of the Karnataka Pre-University Education Dept Bangalore.</li>
                    <li class="list-group-item">Minimum 75 % of attendance is mandatory or else the candidate shall not be allowed to appear the final exam.</li>
                    <li class="list-group-item">Unit Test and examinations conducted by the college are mandatory. College uniform is compulsory.</li>
                    <li class="list-group-item">Use of Mobile Phones in the college campus is strictly prohibited.</li>
                    <li class="list-group-item">Practical in science i.e. Physics, Chemistry and Biology are compulsory.</li>
                    <li class="list-group-item">Morning prayer is compulsory for all the students.</li>
                    <li class="list-group-item">Parents/Visitors are permitted to meet the principal only with prior appointments.</li>
                    <li class="list-group-item">The eligibility fee has to be paid by the foreign students NRIs, and other than Karnataka State students as per the PUE Bangalore norms.</li>
                    <li class="list-group-item">Candidates have to submit caste and income certificate to avail fee concession and scholarships.</li>
                    <li class="list-group-item">Participation in sports and extra-curricular activities is voluntary but desirable.</li>
                    <li class="list-group-item">An act of mis-conduct /indiscipline/damage caused to the college property and defacing of the desk and walls shall be punishable with penalty.</li>
                    <li class="list-group-item">The division and Roll Numbers are allotted at the time of admission and no change of division and optional subjects is permitted thereafter.</li>
                </ul>
            </div>
        </div>
        <?php include '../aside.php'; ?>
    </div> <!-- row -->
</div> <!-- content -->
<!--====== ABOUT PART ENDS ======-->

<!--====== FOOTER FILE INCLUDED ======-->
<?php
include '../footer.php';
?>