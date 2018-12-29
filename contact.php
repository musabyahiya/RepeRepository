  
<!DOCTYPE HTML>
<html>

<head>
    <title>Repa - Real Estate Professional Association of Pakistan - Contact Us</title>
    <?php include("head.html"); ?>
    <style type="text/css">
     .frame
     {
        border:3px solid #c8560f;
     }

    </style>

</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <!-- nav -->
            <?php include("nav.html"); ?>
            <!-- //nav -->
        </div>
    </header>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->

    <section class="wthree-row w3-contact" id="contact" style="background-image: url('img/contt.png'); ">
        <div class="container py-sm-5 py-4">
            <!-- title description  -->
            <div class="row py-md-5 pb-3">
                <div class="col-lg-5  bb-left">

                    <h3 class="agile-title">Contact us</h3>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-3 px-lg-5">
                    <p>We are happy to answer any questions you have. 
                    Just send us a message in the form below</p>
                </div>
            </div>
            <!-- //title description  -->
            <!-- contact details -->
            <div class="row p-sm-5 p-3">
                <!-- contact left grid -->
                <div class="col-lg-6  px-lg-5 map contact-right">
                    <div class="address">
                        <h5 class="my-3">Contact info</h5>
                        <div class="row py-3 wthree-cicon">
                            <span class="fas fa-envelope-open mr-3"></span>
                            <a href="mailto:info@example.com">info@repa.org.pk</a>
                        </div>
                        <div class="row py-3  wthree-cicon">
                            <span class="fas fa-phone-volume mr-3"></span>
                            <h6>+92-21-34823333</h6>
                        </div>
                        <div class="row py-3  wthree-cicon">
                            <span class="fas fa-globe mr-3"></span>
                            <a href="#">www.repa.org.pk</a>
                        </div>
                        <div class="row py-3 wthree-cicon">
                            <span class="fas fa-map-marker mr-3"></span>
                            <h6>Suite No. 610, 7th Floor Al-Sammad 
                                Tower <br>Gulshan e Iqbal, Block-13 <br>
                            Karachi, Pakistan.</h6>
                        </div>
                    </div>
                </div>
                <!-- //contact left grid -->
                <!-- contact right grid -->
                <div class="col-lg-6 wthree-form-left mt-lg-0 mt-3">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h5 class="my-3">Send your Feedback</h5>
                        <form action="#" method="get" class="f-color pt-3 FrmEmail">
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control txtName" id="contactusername" required>
                            </div>
                            <div class="form-group my-4">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control txtEmail" id="contactemail" required>
                            </div>
                            <div class="form-group">
                               <label>Cell no:</label>
                               <input type="text" class="form-control txtCellNo" id="address" name="address"  required="">
                           </div>
                           <div class="form-group">
                            <label for="contactcomment">Your Message</label>
                            <textarea class="form-control txtMessage" rows="5" id="contactcomment" required></textarea>
                        </div>
                        <button type="button" class="btn btn-danger btn-block btnSendMail">Submit</button>
                    </form>
                </div>
            </div>
            <!--  //contact right grid -->
        </div>
        <!-- //contact details  -->
    </div>
</section>
<!-- //contact -->
<!-- map -->
<div class="frame"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d760.7347746121034!2d67.0721653525448!3d24.908730071119997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee944765b8a244c7!2sReal+Estate+Professionals+Association!5e0!3m2!1sen!2s!4v1544021880368" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div>

<!-- <div style="width: 100%"><iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=maps/search/6+florr+al+sammad+tower+karach+(SEGMITE)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/"></a></iframe></div> -->

<?php include("footer.html"); ?>
<!-- //footer -->
<!-- Login modal -->

     

        <?php include("footerJS.html"); ?>
        <script src="admin/PagesJS/Form.js "></script>
        <script type="text/javascript">
        ActiveNavbar('.navContact');
        </script>
    </body>

    </html>