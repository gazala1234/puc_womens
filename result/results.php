<!--====== HEADER FILE INCLUDED ======-->
<?php
include '../home/header.php';
?>

<style>
    table {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        margin-top: 10px;
    }

    .sap {
        width: 70%;
        border: 1px solid #dee2e6;
        border-radius: 15px;
    }

    .list-group-item {
        position: relative;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        margin-bottom: 5px;
        padding-left: 30px;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
    }

    .placement div {
        margin-left: 2%;
        border-radius: 10px;
    }

    .placement div i {
        font-size: 80px;
    }

    .placement .placement-item {
        text-align: center;
        margin: 1px;
        padding: 7px;
        /* box-shadow: 2px 2px 10px #1A2954; */
        border-radius: 10px;
    }

    .placement .placement-item i {
        font-size: 80px;
    }

    .placement .placement-item .placement-info {
        margin-top: 10px;
        font-size: 16px;
        font-weight: bold;
    }

    .main-timeline {
        position: relative;
    }

    .main-timeline:before,
    .main-timeline:after {
        content: "";
        display: block;
        width: 100%;
        clear: both;
    }

    .main-timeline .timeline {
        width: 28%;
        float: left;
        margin-left: 3%;
        position: relative;
    }

    .main-timeline .timeline:before {
        content: attr(data-heading);
        font-size: 22px;
        font-weight: bold;
        color: #fff;
        transform: rotate(-90deg);
        position: absolute;
        top: 50px;
        left: -15px;
        z-index: 2;
    }

    .main-timeline .timeline-content {
        padding: 15px 0 40px 50px;
        margin-bottom: 80px;
        border-radius: 15px;
        border: 5px solid #211B31;
        text-align: left;
        background: #f67420;
        z-index: 1;
        position: relative;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content {
        background: #43a6ba;
    }

    .main-timeline .timeline-content:before {
        content: "";
        width: 40px;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #d66215;
        border-radius: 10px 0 0 10px;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content:before {
        background: #1784ab;
    }

    .main-timeline .timeline-content:after {
        content: "";
        width: 40px;
        height: 40px;
        background: #f67420;
        border-bottom: 5px solid #211B31;
        border-right: 5px solid #211B31;
        position: absolute;
        bottom: -23px;
        left: 50px;
        transform: rotate(45deg);
        z-index: -1;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content:after {
        background: #43a6ba;
    }

    .main-timeline .description {
        font-size: 16px;
        color: #fff;
    }

    .main-timeline .timeline:nth-child(even) .year {
        background: #43a6ba;
    }

    .main-timeline .timeline:nth-child(odd) .year {
        background: #f67420;
    }

    .main-timeline .timeline.bottom:nth-child(5n+1),
    .main-timeline .timeline.bottom:last-child {
        margin-left: 3%;
    }

    .main-timeline .timeline.bottom .year {
        top: 4px;
        margin-left: 132px;
    }

    @media only screen and (max-width: 1199px) {
        .main-timeline:before {
            width: 5px;
            left: 5%;
        }

        .main-timeline .timeline,
        .main-timeline .timeline.bottom,
        .main-timeline .timeline.bottom:nth-child(5n+1),
        .main-timeline .timeline.bottom:last-child {
            width: 85%;
            margin: 0 0 20px 15%;
        }

        .main-timeline .timeline-content,
        .main-timeline .timeline.bottom .timeline-content {
            margin: 0;
        }

        .main-timeline .year,
        .main-timeline .timeline.bottom .year {
            width: 65px;
            height: 65px;
            margin: 0;
            left: -15.5%;
            z-index: 1;
        }

        .main-timeline .timeline .timeline-content:after {
            display: none;
        }

        .main-timeline .timeline.bottom:before {
            bottom: auto;
            left: -2px;
        }
    }

    @media only screen and (max-width: 990px) {

        .main-timeline .year,
        .main-timeline .timeline.bottom .year {
            left: -16.8%;
        }
    }

    @media only screen and (max-width: 767px) {
        /*    .main-timeline .timeline:after,
                    .main-timeline .timeline.bottom:after{ display: none; }*/

    }
</style>

<!--====== ABOUT PART START ======-->
<hr>
<div class="row m-3 pb-4">
    <div class="container">
        <h2 class="heading mb-3"><u>ACADEMIC RESULTS</u></h2>
        <ul class="list-group list-group-flush procedure-list">
            <li class="list-group-item">Twentieth Century is a century of “Excel or exit”. In this era of Globalization, Quality Education is one of the prerequisites to survive and enhance “Quality human Resource”.</li>
            <li class="list-group-item">Students are the real man-power of the nation, who will build “India” into a super power. If we equip students with required knowledge and skills, they will contribute towards the Socio-economic development of the nation.</li>
            <li class="list-group-item">We know that, our Academic Results are the outcome of the teaching-learning process. It exhibits the extent to which students, teachers and the Institution is able to achieve their educational goals.</li>
            <li class="list-group-item">Academic achievements are commonly measured by examination. Regular examination helps in improving the performance of the students by identifying their learning difficulties at regular time intervals right from the beginning of the academic session and employing suitable remedial measures for enhancing their learning performance.</li>
        </ul>
        <center>
            <img class="sap mt-3" src="/images/sap.png" alt="SAP">
        </center>
        <h2 class="subheading my-4"><i>Evaluation System</i></h2>
        <p class="text-justify">Results will be announced as early as possible after every tests and examination to identify strengths and
            weaknesses of the students and to classify the students into below average, average and above average groups.
        </p>
        <h4 class="subheading my-4"><i>Toppers will be provided with following amenities / services</i></h4>
        <ul class="a">
            <li class="list-group-item">Doubt clarification sessions.</li>
            <li class="list-group-item">Extra books from college book bank.</li>
            <li class="list-group-item">Fee Concession at the time of admissions.</li>
            <li class="list-group-item">Felicitating them with certificate and cash prizes.</li>
            <li class="list-group-item">Regular Feedback sessions.</li>
            <li class="list-group-item">Full day workshops.</li>
            <li class="list-group-item">Set of model question papers.</li>
            <li class="list-group-item">Special classes for toppers.</li>
        </ul>
        <h2 class="subheading my-4"><i>Remedial Classes for PUC/ Special classes for supplementary Exam</i></h2>
        <p class="text-justify">One month remedial classes for PUC-II year failures will be conducted in subjects
            immediately after results announcements. They will be prepared for supplementary examination, we have
            got positive results by this experiment.
        </p>

        <div class="col-lg-12 firts">
            <h2 class="subheading my-4 text-center"><i>SCIENCE PLACEMENTS 1985-2018</i></h2>
            <div class="row placement">
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-user-md" aria-hidden="true"></i>
                        <div class="placement-info">
                            MBBS : 54+
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-envira" aria-hidden="true"></i>
                        <div class="placement-info">
                            BAMS : 37
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-pagelines" aria-hidden="true"></i>
                        <div class="placement-info">
                            BUMS : 38
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-user-plus" aria-hidden="true"></i>
                        <div class="placement-info">
                            BDS : 62
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-cogs" aria-hidden="true"></i>
                        <div class="placement-info">
                            Engineering : 277
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-fort-awesome" aria-hidden="true"></i>
                        <div class="placement-info">
                            B Architect : 14
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-thermometer-full" aria-hidden="true"></i>
                        <div class="placement-info">
                            BHMS : 12
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-tree" aria-hidden="true"></i>
                        <div class="placement-info">
                            B.Sc Agri : 22
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-bar-chart" aria-hidden="true"></i>
                        <div class="placement-info">
                            CA-CPT : 03
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="placement-item">
                        <i style="color: #3c628b" class="fa fa-leanpub" aria-hidden="true"></i>
                        <div class="placement-info">
                            Primary Teacher : 1000+
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="row">
                <br>
                <div class="main-timeline">
                    <center>
                        <h2 class="subheading my-4"><i>10 Years College Results in PUC II Year</i></h2>
                    </center>
                    <div class="timeline" data-heading="2009-10">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>218 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>162 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>74.31 </span>
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-heading="2010-11">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>277 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>184 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>67.00 </span>
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-heading="2011-12">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>286 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>209 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>73.42 </span>
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-heading="2012-13">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>291 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>221 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>76.00 </span>
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-heading="2013-14">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>239 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>173 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>72.38 </span>
                            </p>
                        </div>
                    </div>

                    <div class="timeline" data-heading="2014-15">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>258 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>199 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>77.13 </span>
                            </p>
                        </div>
                    </div>

                    <div class="timeline bottom" data-heading="2015-16">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>245 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>199 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>73.00 </span>
                            </p>
                        </div>
                    </div>

                    <div class="timeline bottom" data-heading="2016-17">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>313 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>203 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>64.00 </span>
                            </p>
                        </div>
                    </div>

                    <div class="timeline bottom" data-heading="2017-18">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>235 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>165 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>70.21 </span>
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-heading="2018-19">
                        <div class="timeline-content">
                            <p class="description">
                                <span><i class="fa fa-book">&nbsp;</i> Appeared <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>228 </span><br><br>
                                <span><i class="fa fa-check-square">&nbsp;</i> Passed <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>157 </span><br><br>
                                <span><i class="fa fa-percent">&nbsp;</i> Percent <i class="fa fa-arrows-h" aria-hidden="true">&nbsp;&nbsp;</i>69% </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-4 text-center" style="color: #b9a431;"><i>10 Years State Distinction Students</i></h4>
        <table class="table table-striped text-center mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Science</th>
                    <th scope="col">Arts</th>
                    <th scope="col">Commerce</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2019</td>
                    <td>5</td>
                    <td>3</td>
                    <td>6</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td>6</td>
                    <td>3</td>
                    <td>2</td>
                    <td>11</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td>2</td>
                    <td>7</td>
                    <td>7</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td>7</td>
                    <td>4</td>
                    <td>1</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td>10</td>
                    <td>3</td>
                    <td>1</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td>2014</td>
                    <td>13</td>
                    <td>1</td>
                    <td>2</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td>6</td>
                    <td>2</td>
                    <td>0</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>2012</td>
                    <td>10</td>
                    <td>4</td>
                    <td>3</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td>2011</td>
                    <td>4</td>
                    <td>2</td>
                    <td>1</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>2010</td>
                    <td>9</td>
                    <td>2</td>
                    <td>1</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>2009</td>
                    <td>7</td>
                    <td>1</td>
                    <td>1</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>79</td>
                    <td>32</td>
                    <td>25</td>
                    <td>136</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!--====== ABOUT PART ENDS ======-->

<!--====== FOOTER FILE INCLUDED ======-->
<?php
include '../home/footer.php';
?>