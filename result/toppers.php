<!--====== HEADER FILE INCLUDED ======-->
<?php
include '../header.php';
?>

<style>
    table {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        margin-top: 10px;
    }

    .gal-container {
        margin: auto;
        align-self: center;
    }

    .modal-body img {
        height: 250px;
        width: 100%
    }

    .gal-container .description {
        position: relative;
        height: 40px;
        top: -40px;
        padding: 10px 25px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        text-align: left;
    }

    .gal-container .description h4 {
        margin: 0px;
        font-size: 15px;
        font-weight: 300;
        line-height: 20px;
    }

    @media (max-width: 768px) {
        .gal-container .description {
            top: -10px;
        }

        .modal-body img {
            height: 150px;
        }

        .gal-item {
            margin-bottom: 10px;
            /* margin-top: 10px; */
        }
    }
</style>

<!--====== ABOUT PART START ======-->
<hr>
    <div>
        <h4 class="text-center" style="color: #b9a431;">Result Analysis - PUC II year Year Exam - 2019</h4>
        <table class="table table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Section</th>
                    <th>Distinction</th>
                    <th>First Class</th>
                    <th>Second Class</th>
                    <th>Pass</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Science</td>
                    <td>05</td>
                    <td>43</td>
                    <td>12</td>
                    <td>-</td>
                    <td>63.15%</td>
                </tr>
                <tr>
                    <td>Arts</td>
                    <td>03</td>
                    <td>23</td>
                    <td>14</td>
                    <td>14</td>
                    <td>68.35%</td>
                </tr>
                <tr>
                    <td>Commerce</td>
                    <td>06</td>
                    <td>23</td>
                    <td>05</td>
                    <td>09</td>
                    <td>79.63%</td>
                </tr>
                <tr>
                    <td>College Result</td>
                    <td>14</td>
                    <td>89</td>
                    <td>31</td>
                    <td>23</td>
                    <td>69%</td>
                </tr>
            </tbody>
        </table>
        <canvas id="chart2019" class="chart"></canvas>
    </div>
    <div>
        <h4 class="text-center" style="color: #b9a431;">Result Analysis - PUC II year Year Exam - 2018</h4>
        <table class="table table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Section</th>
                    <th>Distinction</th>
                    <th>First Class</th>
                    <th>Second Class</th>
                    <th>Pass</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Science</td>
                    <td>06</td>
                    <td>57</td>
                    <td>8</td>
                    <td>1</td>
                    <td>73.46%</td>
                </tr>
                <tr>
                    <td>Arts</td>
                    <td>3</td>
                    <td>27</td>
                    <td>8</td>
                    <td>7</td>
                    <td>67.16%</td>
                </tr>
                <tr>
                    <td>Commerce</td>
                    <td>02</td>
                    <td>26</td>
                    <td>15</td>
                    <td>05</td>
                    <td>69.56%</td>
                </tr>
                <tr>
                    <td>College Result</td>
                    <td>11</td>
                    <td>110</td>
                    <td>31</td>
                    <td>13</td>
                    <td>70.21%</td>
                </tr>
            </tbody>
        </table>
        <canvas id="chart2018" class="chart"></canvas>
    </div>
    <div>
        <h4 class="text-center" style="color: #b9a431;">Result Analysis - PUC II year Year Exam - 2017</h4>
        <table class="table table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Section</th>
                    <th>Distinction</th>
                    <th>First Class</th>
                    <th>Second Class</th>
                    <th>Pass</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Science</td>
                    <td>02</td>
                    <td>62</td>
                    <td>13</td>
                    <td>1</td>
                    <td>62.4%</td>
                </tr>
                <tr>
                    <td>Arts</td>
                    <td>7</td>
                    <td>37</td>
                    <td>12</td>
                    <td>12</td>
                    <td>63.00%</td>
                </tr>
                <tr>
                    <td>Commerce</td>
                    <td>07</td>
                    <td>28</td>
                    <td>12</td>
                    <td>10</td>
                    <td>67.8%</td>
                </tr>
                <tr>
                    <td>College Result</td>
                    <td>16</td>
                    <td>127</td>
                    <td>37</td>
                    <td>23</td>
                    <td>64.00%</td>
                </tr>
            </tbody>
        </table>
        <canvas id="chart2017" class="chart"></canvas>
</div>
    <div>
        <h4 class="text-center" style="color: #b9a431;">Result Analysis - PUC II year Year Exam - 2016</h4>
        <table class="table table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Section</th>
                    <th>Distinction</th>
                    <th>First Class</th>
                    <th>Second Class</th>
                    <th>Pass</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Science</td>
                    <td>07</td>
                    <td>57</td>
                    <td>16</td>
                    <td>1</td>
                    <td>70.43%</td>
                </tr>
                <tr>
                    <td>Arts</td>
                    <td>4</td>
                    <td>33</td>
                    <td>14</td>
                    <td>09</td>
                    <td>79.00%</td>
                </tr>
                <tr>
                    <td>Commerce</td>
                    <td>01</td>
                    <td>21</td>
                    <td>10</td>
                    <td>06</td>
                    <td>70.37%</td>
                </tr>
                <tr>
                    <td>College Result</td>
                    <td>12</td>
                    <td>111</td>
                    <td>40</td>
                    <td>16</td>
                    <td>73.00%</td>
                </tr>
            </tbody>
        </table>
        <canvas id="chart2016" class="chart"></canvas>
    </div>
<div>
    <h4 class="text-center mt-3" style="color: #b9a431;">Course wise College Toppers</h4>
    <table class="table table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>Year</th>
                <th>Science</th>
                <th>Arts</th>
                <th>Commerce</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2018-19</td>
                <td>Aiman Afroz Bagayat<br>93.67%</td>
                <td>Rikha R Biradar<br>92.67%</td>
                <td>Tarannum Badami<br>93.67%</td>
            </tr>
            <tr>
                <td>2017-18</td>
                <td>Alfiya Inamdar<br>94.66%</td>
                <td>Girija Mudalgi<br>94.83%</td>
                <td>Fatima Sutar<br>90.66%</td>
            </tr>
            <tr>
                <td>2016-17</td>
                <td>Nishad Mushrif<br>88.00%</td>
                <td>Vasudha Shroff<br>93.00%</td>
                <td>Vasanti Zalkikar<br>96.33%</td>
            </tr>
            <tr>
                <td>2015-16</td>
                <td>Sabiha Naaz Bhagewadi<br>91.83%</td>
                <td>Nagaveni Shetter<br>92.05%</td>
                <td>Samreen Hundekar<br>90.37%</td>
            </tr>
            <tr>
                <td>2014-15</td>
                <td>Mariya Sultana Panafarosh<br>93.16%</td>
                <td>Shilpa Pujari<br>88.16%</td>
                <td>Samreen Nagadekar<br>84.58%</td>
            </tr>
            <tr>
                <td>2013-14</td>
                <td>Uzma Mujawar<br>95.60%</td>
                <td>Nafisa Naikodi<br>90.0%</td>
                <td>Soumya Pattar<br>88.50%</td>
            </tr>
            <tr>
                <td>2012-13</td>
                <td>Nikita Kshatriya<br>89.83%</td>
                <td>Farheen Momin<br>92.50%</td>
                <td>Sabiya Inamdar<br>84.67%</td>
            </tr>
            <tr>
                <td>2011-12</td>
                <td>Hypha A Mulla<br>90.66%</td>
                <td>Gayatri Shilpa<br>91.0%</td>
                <td>Laxmi Biradar<br>92.83%</td>
            </tr>
            <tr>
                <td>2010-11</td>
                <td>Juveriya Shaikh<br>94.0%</td>
                <td>Fouziya Godesawar<br>88.67%</td>
                <td>Afreen A Shaikh<br>79.33%</td>
            </tr>
            <tr>
                <td>2009-10</td>
                <td>Nikita Agarwal<br>93.33%</td>
                <td>Sameena Shaikh<br>88.33%</td>
                <td>Ashwini Mali<br>89.33%</td>
            </tr>
        </tbody>
    </table>
    <canvas id="chartToppers" class="chart"></canvas>
</div>
<div class="container-fluid gal-container my-5">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper2018-3.jpg" target=_blank>
                        <img src="/images/toppers/topper2018-3.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Toppers Of The College - 2018</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper2018-1.jpg" target=_blank>
                        <img src="/images/toppers/topper2018-1.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Toppers Of The College - 2018</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper2018-2.jpg" target=_blank>
                        <img src="/images/toppers/topper2018-2.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Toppers in Commerce - 2018</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper2017.jpg" target=_blank>
                        <img src="/images/toppers/topper2017.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Toppers Of The College - 2017</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper20172.jpg" target=_blank>
                        <img src="/images/toppers/topper20172.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Distinction Holders - 2017</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper2016.jpg" target=_blank>
                        <img src="/images/toppers/topper2016.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Toppers Of The College - 2016</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper2016-2.jpg" target=_blank>
                        <img src="/images/toppers/topper2016-2.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Toppers And Distinction Holders - 2016</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 gal-item">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="/images/toppers/topper2016-3.jpg" target=_blank>
                        <img src="/images/toppers/topper2016-3.jpg" class="img-responsive" alt="Image Missing"></a>
                </div>
                <div class="col-md-12 description">
                    <h4 style="color: white;">Toppers in CET 2016 Medical</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const chartData2019 = {
        labels: ['Science', 'Arts', 'Commerce', 'College Result'],
        datasets: [{
            label: 'Distinction',
            data: [5, 3, 6, 14],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'First Class',
            data: [43, 23, 23, 89],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        },
        {
            label: 'Second Class',
            data: [12, 14, 5, 31],
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        },
        {
            label: 'Pass',
            data: [0, 14, 9, 23],
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
        }]
    };

    const chartData2018 = {
        labels: ['Science', 'Arts', 'Commerce', 'College Result'],
        datasets: [{
            label: 'Distinction',
            data: [6, 3, 2, 11],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'First Class',
            data: [57, 27, 26, 110],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        },
        {
            label: 'Second Class',
            data: [8, 8, 15, 31],
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        },
        {
            label: 'Pass',
            data: [1, 7, 5, 13],
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
        }]
    };

    const chartData2017 = {
        labels: ['Science', 'Arts', 'Commerce', 'College Result'],
        datasets: [{
            label: 'Distinction',
            data: [2, 7, 7, 16],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'First Class',
            data: [62, 37, 28, 127],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        },
        {
            label: 'Second Class',
            data: [13, 12, 12, 37],
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        },
        {
            label: 'Pass',
            data: [1, 12, 10, 23],
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
        }]
    };

    const chartData2016 = {
        labels: ['Science', 'Arts', 'Commerce', 'College Result'],
        datasets: [{
            label: 'Distinction',
            data: [7, 4, 1, 12],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'First Class',
            data: [57, 33, 21, 111],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        },
        {
            label: 'Second Class',
            data: [16, 14, 10, 40],
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        },
        {
            label: 'Pass',
            data: [1, 9, 6, 16],
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
        }]
    };

    const chartDataToppers = {
        labels: ['2016', '2017', '2018', '2019'],
        datasets: [{
            label: 'Science',
            data: [89.5, 92.5, 91.5, 96.5],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'Commerce',
            data: [88.0, 89.0, 90.67, 90.67],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        },
        {
            label: 'Arts',
            data: [85.16, 87.16, 88.16, 87.83],
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        }]
    };

    const config = (data, id) => ({
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    new Chart(
        document.getElementById('chart2019'),
        config(chartData2019)
    );

    new Chart(
        document.getElementById('chart2018'),
        config(chartData2018)
    );

    new Chart(
        document.getElementById('chart2017'),
        config(chartData2017)
    );

    new Chart(
        document.getElementById('chart2016'),
        config(chartData2016)
    );

    new Chart(
        document.getElementById('chartToppers'),
        config(chartDataToppers)
    );
</script>

<!--====== ABOUT PART ENDS ======-->

<!--====== FOOTER FILE INCLUDED ======-->
<?php
include '../footer.php';
?>
