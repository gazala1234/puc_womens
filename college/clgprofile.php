<!--====== HEADER FILE INCLUDED ======-->
<?php
include '../header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .strategies-section {
        background-color: #f8f9fa;
        padding: 50px 0;
    }

    .strategy-item {
        margin-bottom: 20px;
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .strategy-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .strategy-icon {
        font-size: 40px;
        color: #b9a431;
        margin-right: 15px;
    }

    .strategy-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #343a40;
    }

    .strategy-text {
        font-size: 1rem;
        color: #6c757d;
    }
</style>

<!--====== ABOUT PART START ======-->
<hr>
<div class="content pt-10">
    <div class="row m-3">
        <div class="abt-clg col-lg-7">
            <h2 class="heading"><u>ABOUT COLLEGE</u></h2>
            <center>
                <video width="600" class="mt-3" controls preload="auto" controlsList="nodownload">
                    <source src="../images/videos/pucw.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </center>
            <p class="text-justify pt-3 pl-5">SECAB, stands for Socio-Economic Cultural Association Bijapur. Secab P.U. college for women,
                Bijapur is one of the premier colleges, in the Bijapur district. It was established in the year 1972.
                It has been imparting education at the +2 level in Arts, Science and Commerce. Many of our students,
                excelled in their examination and joined professional College – Medical, Dental, Ayurvedic, Unani,
                Engineering, Architecture, CA Course on merit free seats. Other than this our students became
                teachers, Lawyers, government employees etc. our College results are more than state level and many
                times our students stood top to the district.</p>

            <div class="pl-5 py-3">
                <!-- Philosophy -->
                <div class="philosophy-section mt-4">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img src="../images/about/ph.png" alt="Philosophy" class="img-fluid ml-4" style="width: 5rem; height: 5rem;">
                        </div>
                        <div class="col-md-9">
                            <h3 class="section-title">PHILOSOPHY</h3>
                            <p class="section-text">Education as an effective instrument for Socio-Economic and Cultural Development.</p>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="vision-section mt-4">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img src="../images/about/vision.jpg" alt="Vision" class="img-fluid" style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="col-md-9">
                            <h3 class="section-title">VISION</h3>
                            <p class="section-text">Quality Education for women resource development.</p>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="mission-section mt-4">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img src="../images/about/mission.jpg" alt="Mission" class="img-fluid" style="width: 8rem; height: 8rem;">
                        </div>
                        <div class="col-md-9">
                            <h3 class="section-title">MISSION</h3>
                            <p class="section-text">To lay foundation for professional and university education and to form intellectually competent, physically stable, morally upright, socially responsive and culturally tolerant citizens through quality education.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-2 pt-3">
                <h2 class="subheading text-center pb-3"><i>STRATEGIES</i></h2>
                <div class="row">
                    <div class="col-md-6 strategy-item">
                        <div class="d-flex align-items-start">
                            <div class="strategy-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div>
                                <h5 class="strategy-title">Quality Education</h5>
                                <p class="strategy-text">Dedicated and committed for quality education with quest for excellence by evolving ICT for innovative teaching-learning process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 strategy-item">
                        <div class="d-flex align-items-start">
                            <div class="strategy-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div>
                                <h5 class="strategy-title">Professional Growth</h5>
                                <p class="strategy-text">Empowering personal for professional growth through in service training and research projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 strategy-item">
                        <div class="d-flex align-items-start">
                            <div class="strategy-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h5 class="strategy-title">Teamwork & Cooperation</h5>
                                <p class="strategy-text">Encouraging team work, cooperation, and universal responsibility for quality service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 strategy-item">
                        <div class="d-flex align-items-start">
                            <div class="strategy-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>
                                <h5 class="strategy-title">Continuous Improvement</h5>
                                <p class="strategy-text">QIP schemes for continuous improvement and preventing defects with comprehensive evaluation system.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
