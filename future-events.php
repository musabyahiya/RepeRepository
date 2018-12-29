<!DOCTYPE HTML>
<html lang="zxx">

<head>

   <title>Repa - Real Estate Professional Association of Pakistan - Future Events</title>
   <?php include("head.html"); ?>

   <style>
       .text-justify p
       {
        text-align: justify;
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
    <!-- //header -->    <!-- //header -->
    <!-- inner banner -->
 
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- overview -->
    <section class="about-w3ls py-lg-5 py-md-3" >
        <div class="container">
            <div class="text-justify text-center">
              
              <h3 class="agile-title text-lg-center">About Association</h3>
              <br>
                <p>
                REPA has extended its expertise to educate and guide its members to be highly skilled real estate professionals and acknowledged leaders in developing standards and quality benchmarks for efficient, effective, and ethical real estate business practices by following certain SOPs (Standard Operating Procedures) considered to be valuable and crucial to the economy both in private and the government domains alike.</p>
                <p>

                In addition, REPA has provided an environment to facilitate in professional development, research and exchange of information among its members and to the public and the government to transform the current real estate business procedures to state-of-the-art fully computerized online system safeguarding the free enterprise system, and the right to own, use, and transfer real property in the country. In addition, the association from time to time would formulate strategies and plans to combat any potential threats to this industry.</p>

                <p>
                The association has ensured that maximum benefits are obtained by its members within the prescribed boundaries by providing services that will include (but not limited to) vocational training, social networking events, and fundraising events (subject to need and the approval by the BoG) to preserve the REPA identity within the real estate sector.</p>
                <p>
                a. To cognize and promote Real Estate sector as an industry being the largest contributor to the economy of the country and the realtors associated with this industry are duly certified by the authorized institution such as PIBSAT/SDC (Panjwani Institute of Business Studies and Technology affiliated with Skill Development Council of Pakistan) as well as must be a member of REPA.</p>
                <p>
                    Bylaws of Real Estate Professionals of Pakistan (REPA)
                    b. To propose and to persuade the government of Pakistan through its concerned authorities to declare the real estate sector as an industry along with its regulatory body and that a license followed by practitioner code must be issued to the certified realtors to practice within the prescribed parameters.
                </p>
                <p>
                c. To persuade the government (through its concerned authorities) to computerize the entire system of real estate transaction right from revenue department to the beneficiary’s data availability online.</p>
                <hr class="my-4">

            </div>
        </div>
    </section>
    
    <!-- footer -->
    <?php include("footer.html"); ?>
    <!-- //footer -->
    <!-- Login modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control border" placeholder=" " name="Password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control border text-white" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-muted">
                                    <span></span>Remember me?</label>
                                </div>
                                <div class="col forgot-w3l text-right text-dark">
                                    <a href="#" class="text-white">Forgot Password?</a>
                                </div>
                            </div>
                            <p class="text-center">Don't have an account?
                                <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark font-weight-bold">
                                Register Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Login modal -->
        <!-- Register modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Username</label>
                                <input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-rname" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-email" class="col-form-label">Email</label>
                                <input type="email" class="form-control border" placeholder=" " name="Email" id="recipient-email" required="">
                            </div>
                            <div class="form-group">
                                <label for="password1" class="col-form-label">Password</label>
                                <input type="password" class="form-control border" placeholder=" " name="Password" id="password1" required="">
                            </div>
                            <div class="form-group">
                                <label for="password2" class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control border" placeholder=" " name="Confirm Password" id="password2" required="">
                            </div>
                            <div class="sub-w3l">
                                <div class="sub-agile">
                                    <input type="checkbox" id="brand2" value="">
                                    <label for="brand2" class="mb-3">
                                        <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control bg-light text-white" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Register modal -->
            <!-- subscribe form -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Subscribe now!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                    <input type="email" class="form-control border" placeholder=" " name="email" id="usermail" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control text-white" value="Subscribe">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("footerJS.html"); ?>
        <script type="text/javascript">
        ActiveNavbar('.navAbout');
        </script>
        </body>

        </html>