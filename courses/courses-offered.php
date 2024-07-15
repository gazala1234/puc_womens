<!--====== HEADER FILE INCLUDED ======-->
<?php
include '../header.php';
?>

<style>
    a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
    }

    #accordion .panel {
        border: none;
        background: transparent;
        box-shadow: none;
        border-radius: 0;
        padding-left: 40px;
        margin-bottom: 10px;
    }

    #accordion .panel-heading {
        padding: 0;
    }

    #accordion .panel-title a {
        display: block;
        padding: 15px;
        background: #fff;
        font-size: 20px;
        font-weight: bold;
        color: #211B31;
        text-transform: uppercase;
        border: 2px solid #211B31;
        border-left: none;
        border-radius: 0 8px 8px 0;
        box-shadow: none;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    #accordion .panel-title a span {
        display: block;
        width: 40px;
        height: 110%;
        line-height: 70px;
        background: #211B31;
        font-size: 18px;
        color: #fff;
        text-align: center;
        position: absolute;
        top: -2px;
        left: -40px;
    }

    #accordion .panel-title a span:before,
    #accordion .panel-title a span:after {
        content: "";
        border-top: 20px solid #fff;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        position: absolute;
        left: 0;
    }

    #accordion .panel-title a span:before {
        top: -1px;
    }

    #accordion .panel-title a span:after {
        border-top-color: #211B31;
        bottom: -20px;
        z-index: 1;
    }

    #accordion .panel-body {
        font-size: 16px;
        line-height: 23px;
        font-weight: 600;
    }

    #accordion .panel-body li {
        margin-bottom: 12px;
    }

    #crs {
        color: #211B31;
        font-weight: bold
    }

    @media only screen and (max-width: 767px) {
        #accordion .panel-body {
            float: none;
            font-size: 13px;
            font-weight: bold;
            padding: 0px;
            margin: 0px;
        }

        #crs {
            font-size: 20px;
            padding-top: 5px;
        }

        #accordion {
            width: 100%;
            padding: 0px;
            margin: 0px;

        }

        #accordion .panel-title a {
            font-size: 16px;
        }
    }
</style>

<!--====== ABOUT PART START ======-->
<hr>
<div class="content pt-20 pb-20">
    <div class="row m-3">
        <div class="abt-clg col-lg-7">
            <h2 class="heading">COURSES OFFERED</h2>
            <p class="text-justify pt-3 pl-5">SECAB P.U. College for women, Vijayapur offers courses in Arts,
                Science and Commerce with the following subject Combinations.</p>
            <center>
                <div style="width:70%" class="panel-group animated pulse mt-4" id="accordion" role="tablist">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>1</span>
                                    <i class="fa fa-book"> </i> Arts
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div align="left" class="panel-body row mt-3">
                                <div style="padding: 0px;margin: 0px" class="col-sm-6">
                                    <center><b>Part I</b></center>
                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> English (Compulsory)</li>
                                        <li>Language (Selective) </li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Kannada</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Urdu</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Hindi</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Sanskrit</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Arabic</li>
                                    </ul>
                                </div>
                                <div style="padding: 0px;margin: 0px" class="col-sm-6">
                                    <center><b>Part II</b></center>
                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> History</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Economics</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Political Science</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Sociology</li>
                                    </ul>
                                    <center><b>OR</b></center>

                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> History</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Geography</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Education</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Sociology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>2</span>
                                    <i class="fa fa-book"> </i> Science
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div align="left" class="panel-body row mt-3">
                                <div class="col-sm-6">
                                    <center><b>Part I</b></center>
                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> English (Compulsory)</li>
                                        <li>Language (Selective) </li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Kannada</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Urdu</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Hindi</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Sanskrit</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Arabic</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <center><b>Part II</b></center>
                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Physics</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Chemistry</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Mathematics</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Biology</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>3</span>
                                    <i class="fa fa-book"> </i> Commerce
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div align="left" class="panel-body row mt-3">
                                <div class="col-sm-6">
                                    <center><b>Part I</b></center>
                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> English (Compulsory)</li>
                                        <li>Language (Selective) </li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Kannada</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Urdu</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Hindi</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Sanskrit</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Arabic</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <center><b>Part II</b></center>
                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Business Studies</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Accountancy</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Economics</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Statistics</li>
                                    </ul>
                                    <center><b>OR</b></center>

                                    <ul style="list-style-type: none;">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Business Studies</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Accountancy</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Economics</li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Basic Maths</li>
                                    </ul>
                                </div>
                                <b>( Basic Maths combination is eligible criteria for B.Arch course )</b>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <?php include '../aside.php'; ?>
    </div> <!-- row -->
</div> <!-- content -->

<!--====== ABOUT PART ENDS ======-->

<!--====== FOOTER FILE INCLUDED ======-->
<?php
include '../footer.php';
?>