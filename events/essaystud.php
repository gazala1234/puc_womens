<!--====== HEADER FILE INCLUDED ======-->
<?php
include '../home/header.php';
?>

<style>
    ul{
        list-style-type: upper-roman;
    }
    div.container{
        margin-left: 100px;
    }
</style>

<!--====== ABOUT PART START ======-->
<hr>
<div class="content pt-10">
    <div class="row m-3">
        <div class="col-lg-7">
            <h2 class="heading">Essay Writing Competition</h2>
            <p class="text-justify pt-3 pl-5">Department of statistics Government of Karnataka conducted Essay writing 
                competition on the eve of birthday celebration of Professor Mahalanobis a statistician. 
                The competition was held at PHD college. <br><br>
            </p>
            <div class="container">
                <p>Our students bagged the prizes.</p><br>
                <ul>
                    <li>Zainab 1 prize with 1000 rupees</li>
                    <li>Alfia 2 prize with 750 rupees</li>
                    <li>Girija 3 prize with 500 rupees</li>
                </ul>
            </div>
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="../images/events/ess1.jpg" data-fancybox="gallery">
                                <div class="image" style="background-image: url(../images/events/ess1.jpg)">
                                    <div class="overlay">
                                        <em class="mdi mdi-magnify-plus"></em>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <?php include '../home/aside.php'; ?>
    </div> <!-- row -->
</div> <!-- content -->
<!--====== ABOUT PART ENDS ======-->

<!--====== FOOTER FILE INCLUDED ======-->
<?php
include '../home/footer.php';
?>