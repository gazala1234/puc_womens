<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .box {
            width: 280px;
            background: #fff;
            margin-left: 20px;
            margin-right: 20px;
            position: relative;
            z-index: 0;
            text-align: center;
            padding: 30px 30px 20px;
        }

        .box span {
            color: #fff;
            font-family: inherit;
            font-size: 24px;
            line-height: 24px;
            padding: 15px 0;
            text-align: center;
        }

        .box.bg1 {
            background: #2e343e;
        }

        .testimonial {
            background: none repeat scroll 0 0 white;
            color: #03092B;
            width: 100%;
            font-family: 'open sans', serif;
            font-size: 16px;
            font-style: italic;
            line-height: 21px;
            margin-bottom: 10px;
            padding: 10px;
            position: relative;
        }

        .testimonial:after {
            border-color: white rgba(0, 0, 0, 0);
            border-style: solid;
            border-width: 25px 35px 0;
            bottom: -24px;
            content: "";
            left: 50%;
            position: absolute;
        }

        .banner {
            padding-left: 30px;
        }
    </style>
</head>

<body style="background: #2e343e">

    <div style="text-align: center; padding: 10px; background-color: #2e343e;">
        <center><img src="/images/attendance/h1.png" class="img-responsive" alt="" /></center>
    </div>

    <div class="row" style="background: white">
        <div class="col-md-12" style="box-shadow: 0 0 10px #f1f1f1">
            <center><img src="/images/attendance/header.png" class="img-responsive" alt="" /></center>
        </div>
    </div>

    <div class="row mt-4">
        <div class='banner col-sm-8 ml-4' style='padding-top: 80px;'>
            <img class="thumbnail img-responsive" src="/images/attendance/1234.jpg" style="border: 1px solid green;margin-left: 100px;" />
        </div>
        <div class="col-sm-3" style="margin-top: 20px;">
            <center><button type="submit" class="btn btn-danger">Register</button>
                <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
            </center>
            <br />
            <div>
                <div class="testimonial">
                    <h4>SECAB - Socio Economic Cultural Association Bijapur Established in 1969 by Shams-uddin Punekar to provide education to the children of Bijapur, was soon accepted as a standard educational Institution by the people of the city.</h4>
                </div>
                <br />
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px; margin-left: 200px;">
        <div class="col-md-3 box bg1 mt-5">
            <img class="img img-responsive" src="/images/attendance/att.png" alt="" style="width: 100%; height: auto;">
            <span class="pt-2">Online Attendance</span>
        </div>

        <div class="col-md-3 box bg1 mt-3">
            <img class="img img-responsive" src="/images/attendance/feedback.png" alt="" style="width: 100%; height: auto;">
            <span class="">Feedback</span>
        </div>

        <div class="col-md-3 box bg1">
            <img class="img img-responsive" src="/images/attendance/result.png" alt="" style="width: 100%; height: auto;">
            <span class="">Result Analysis</span>
        </div>
    </div>

    <div style="text-align: center; padding: 20px; background-color: #232933; color: white; clear: both;">
        <h6>Copyright &copy; 2017 Developed & Maintained by <span style="color: #f0ad4e">IT CELL</span> Secab, Bijapur</h6>
    </div>

    <!-- login modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
