<!DOCTYPE HTML>
<html>

<head>
  <title>Repa - Real Estate Professional Association of Pakistan - Registration Form</title>
  <?php include("head.html"); ?>
  <style>
  hr
  {
    border-top: 1px solid #8b3030;
  }

  label
  {
    font-weight: bold;
    color:#000;
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
  <!-- //header -->
  <!-- banner -->

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Membership form</li>
    </ol>
  </nav>


  <div class="container">
    <br>
    <div class="alert alert-info">
      <b><h2 style="text-align: center; font-size:26px;">Application for REPA Membership</h2></b> 
    </div>
    <div class="col-lg-12 well">
      <div class="row">
        <div class="col-md-12">
          <br>
          <p>
            The President <br>
            REPA (Real Estate Professionals Association of Pakistan)<br>
            Suite No. 610, 7th Floor<br>
            Al-Sammad Tower<br>
            Gulshan e Iqbal, Block-13<br>
            Karachi, Pakistan.<br>
            <br>
            Dear Sir<br>
            I wish to become a member of the REPA (Real Estate Professionals Association of Pakistan).<br>
            My relevant details are as under:
          </p>

        </div>
      </div>

      <div class="row">
        <form action="" class="FrmMembership" method="post" enctype="multipart/form-data">
          <div class="col-sm-12">
            <div class="alert alert-info">
              <h2>Personal information</h2>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtTitle">Title</label>
                  <select class="form-control ddlTitle" name="title">
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtFirstName">First name</label>
                  <input type="text" class="form-control txtFirstName" id="txtFirstName" placeholder="Enter first name">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="text">Last name</label>
                  <input type="text" class="form-control txtLastName" id="txtLastName" placeholder="Enter last name">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtFatherName">Father name</label>
                  <input type="text" class="form-control txtFatherName" id="txtFatherName" placeholder="Enter father name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="ddlGender">Gender</label>
                  <select class="form-control ddlGender" name="title">
                    <option selected="selected" value="0">--Select--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtFirstName">Date of birth</label>
                  <input type="text" class="form-control txtDob DatePickerComplete " id="txtDob" placeholder="mm/dd/yyyy">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="text">Nationality</label>
                  <select class="form-control ddlNationality" >
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtCity">City</label>
                  <input type="text" class="form-control txtCity" id="txtCity" placeholder="Enter city">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtPostalCode">Postal code</label>
                  <input type="text" class="form-control txtPostalCode numericOnly" id="txtPostalCode" placeholder="Enter postal code">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtPresentAddress">Present address</label>
                  <input type="text" class="form-control txtPresentAddress" id="txtPresentAddress" placeholder="Enter present address">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtPermanentAddress">Permanent address</label>
                  <input type="text" class="form-control txtPermanentAddress"  id="txtPermanentAddress" placeholder="Enter permanent address">
                </div>
              </div>
              <div class="col-md-3 AppendLandline ValidateLandline">
                <div class="form-group">
                  <label for="txtLandline">Landline</label>
                  &nbsp; <a href="javascript:void(0)" style="color:black" onclick="AppendAddLandline(this)"><i class="fas fa-plus-square"></i></a>
                  <input type="text" class="form-control txtLandline numericOnly" id="txtLandline" placeholder="Enter landline number">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 AppendCellNo ValidateCellNo">
                <div class="form-group">
                  <label for="txtCellNo">Cell #</label>
                  &nbsp; <a href="javascript:void(0)" style="color:black" onclick="AppendAddCellNo(this)"><i class="fas fa-plus-square"></i></a>
                  <input type="text" class="form-control txtCellNo numericOnly" id="txtCellNo" placeholder="Enter cell no">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtWhatsAppNo">WhatsApp #</label>
                  <input type="text" class="form-control txtWhatsAppNo numericOnly" id="txtWhatsAppNo" placeholder="Enter whatsapp no">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtEmail">Email</label>
                  <input type="text" class="form-control txtEmail" id="txtEmail" placeholder="Enter email">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtCNIC">CNIC</label>
                  <input type="text" class="form-control txtCNIC" id="txtCNIC" placeholder="Enter cnic number">
                </div>

              </div>
            </div> 

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtLinkdin">Linkedin</label>
                  <input type="text" class="form-control txtLinkdin notrequired" id="txtLinkdin" placeholder="Enter your linkedin profile url">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtFacebook">Facebook</label>
                  <input type="text" class="form-control txtFacebook notrequired" id="txtFacebook" placeholder="Enter your facebook profile url">
                </div>
              </div>
            </div>

            <div class="alert alert-info">
              <h2>Real estate agency</h2>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="txtRealEstate">Attached with</label>
                  <input type="text" class="form-control txtRealEstate" id="txtRealEstate" placeholder="Enter your agency name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="ddlBusinessStartedYear">Business started since</label>
                  <select class="form-control ddlBusinessStartedYear" >
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="txtLocation">Located at</label>
                  <input type="text" class="form-control txtLocation" id="txtLocation"  placeholder="Enter your  mailing address" form="usrform">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtAgentDesignation">Designation</label>
                  <input type="text" class="form-control txtAgentDesignation" id="txtAgentDesignation" placeholder="Enter designation">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="txtWebsite">Website</label>
                  <input type="text" class="form-control txtWebsite" id="txtWebsite" placeholder="Enter website">
                </div>
              </div>
              <div class="col-md-3 AppendAfterWorkArea ValidateWorkArea">
                <div class="form-group">
                  <label for="txtWorkArea">Working area</label>
                  &nbsp; <a href="javascript:void(0)" style="color:black" onclick="AppendAddWorkArea(this)"><i class="fas fa-plus-square"></i></a>
                  <input type="text" class="form-control txtWorkArea" id="txtWorkArea" placeholder="Enter working area">
                </div>
              </div>

              <div class="col-md-3 AppendAfterDealership ValidateDealership">
                <div class="form-group">
                  <label for="txtDealership">Authorize Dealership</label>
                  &nbsp; <a href="javascript:void(0)" style="color:black" onclick="AppendAddDealership(this)"><i class="fas fa-plus-square"></i></a>
                  <input type="text" class="form-control txtDealership" id="txtDealership" placeholder="Enter authorize dealership">
                </div>
              </div>
            </div>

            
            <div class="alert alert-info">
              <h2>Real estate management qualification</h2>
            </div>
                <div class="row">
                 
                        <div class="col-lg-4">
                        <div class="form-group">
                        <label class="radio-inline">
                          <input type="radio" onclick="QualificationHideShow()" class="radioCertificate" name="optradio" checked>&nbsp;&nbsp;Real Estate Management Certificate
                        </label>
                       
                        
                      </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                 <label class="radio-inline">
                          <input type="radio" onclick="QualificationHideShow()" class="radioDiploma" name="optradio">&nbsp;&nbsp;Real Estate Management Diploma
                        </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="radio-inline">
                          <input type="radio" onclick="QualificationHideShow()" class="radioBoth" name="optradio">&nbsp;&nbsp;
                          Have both
                        </label>
                            </div>
                        </div>
                  
                
                  </div>
                  <div class="RowCertificate">
                    <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ddlCertificateSession">Certificate course session</label>
                        <select class="form-control ddlCertificateSession"></select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ddlCertificateYear">Certificate course year</label>
                        <select class="form-control ddlCertificateYear"> 
                          <option value="0">--Select--</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002 </option>
                          <option value="2003">2003 </option>
                          <option value="2004">2004</option>
                          <option value="2005">2005 </option>
                          <option value="2006">2006 </option>
                          <option value="2007">2007</option>
                          <option value="2008">2008 </option>
                          <option value="2009">2009 </option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012 </option>
                          <option value="2013">2013</option>
                          <option value="2014">2014 </option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>

                        </select>

                      </div>
                    </div>
                  </div>
                </div>
                    <div class="RowDiploma">
                    <div class="row ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ddlDiplomaSession">Diploma course session</label>
                        <select class="form-control ddlDiplomaSession"></select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ddlDiplomaYear">Diploma course year</label>
                        <select class="form-control ddlDiplomaYear">
                          <option value="0">--Select--</option> 
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002 </option>
                          <option value="2003">2003 </option>
                          <option value="2004">2004</option>
                          <option value="2005">2005 </option>
                          <option value="2006">2006 </option>
                          <option value="2007">2007</option>
                          <option value="2008">2008 </option>
                          <option value="2009">2009 </option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012 </option>
                          <option value="2013">2013</option>
                          <option value="2014">2014 </option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  </div>




            <div class="alert alert-info">
              <h2>Academic information</h2>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="ddlQualification">Qualification</label>
                  <select class="form-control ddlQualification">
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="ddlDecipline">Discipline</label>
                  <select class="form-control ddlDecipline" name="decipline">
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="txtSpecialization">Specialization</label>
                  <input type="text" class="form-control txtSpecialization" id="txtSpecialization" placeholder="Enter specialization">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="txtInstitute">Institute</label>
                  <input type="text" class="form-control txtInstitute" id="txtInstitute" placeholder="Enter institute name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="text">Country</label>
                  <select class="form-control ddlCountry" >
                  </select>
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label for="ddlPassedYear">Passed year</label>
                  <select class="form-control ddlPassedYear" >
                  </select>
                </div>
              </div>
            </div>

            <div class="alert alert-info">
              <h2>Professional/work information</h2>
            </div>

            <div class="row AppendAfter Validate">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="txtQualification">Organization</label>
                  <input type="text" class="form-control txtOrganization" id="txtOrganization" placeholder="Enter organization">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="txtDesignation">Designation</label>
                  <input type="text" class="form-control txtDesignation" id="txtDesignation" placeholder="Enter designation">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="ddlWorkExperience">Experience</label>
                  <select class="form-control ddlWorkExperience" >
                    <option value="0">--Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                  </select>
                </div>
              </div>
              <div class="col-md-1">
                <label for="button">&nbsp;</label>
                <button type="button" class="btn btn-primary btn-sm btnAddWork" onclick="AppendAddWorkRow(this)"><i class="fas fa-plus"></i> Add</button>
                <!--  <button type="button" class="btn btn-danger btn-sm btnRemoveWork"><i class="fas fa-minus"></i> Remove</button> -->
              </div>
            </div>
            <br>

            <div class="alert alert-info">
              <h2>Membership/registration fee</h2>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="ddlMembershipType">Membership type</label>
                  <select class="form-control ddlMembershipType">
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="ddlMembershipFee">Membership fee</label>
                  <select class="form-control ddlMembershipFee">
                  </select>
                </div>
              </div>
             
            </div>
            <div class="alert alert-info">
              <h2>Attachment</h2>
            </div>
            <p>
              Please attach your colored:
            </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="txtFileImage">recent profile picture</label>
                  <input type="file"  id="txtFileImage" name="file" accept=".pdf,.png,.jpeg,.jpg" class="form-control txtFileImage" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="txtFileCNIC">CNIC</label>
                  <input type="file"  id="txtFileCNIC" name="file" accept=".pdf,.png,.jpeg,.jpg" class="form-control txtFileCNIC" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-info">
                  <h2>Declaration</h2> 
                </div>
                <p>
                  I agree with the objectives and aims of the Association and further agree to flourish the welfare of the Association.<br><br>



                  I also affirm that I shall abide by the rules and regulations of the Association as amended time to time and shall practice the principles of the Code of Ethics of the Association.<br><br>


                  I shall also exert my services as and when required by the Association.<br><br>

                  I therefore request to kindly register me as a member.
                </p>
              </div>
            </div>
            <br>
            <div class="modal-footer">
             <button type="button" class="btn btn-primary btnPrint" id="btnPrint">Print</button>
             <button type="button" class="btn btn-danger btnSaveChanges" >Register</button>
           </div>
         </div> 
       </form>
     </div>
   </div>
 </div>
 <?php include("footer.html"); ?>
 <!-- //footer -->
 <!-- Login modal -->

 <!-- //Login modal -->
 <!-- Register modal -->

 <!-- // Register modal -->
 <!-- subscribe form -->

 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

        <div id="Print">
          <table style ="width: 100%; height:100%; color: black;font-family:'Raleway', sans-serif;font-size:14px;">
      <!-- <thead>
        <tr class="trPrint">
          <td colspan="3" style="font-weight: 500;font-size: 16px">&nbsp;Member's Profile</td>
      </tr>
    </thead> -->
    <tr>
      <td colspan="1">
        <center><img src="assets/img/Repa.png" alt="" width="100px"></center>
      </td>
      <td colspan="4">
        Real Estate Professional Association of Paksitan
        (REPA)
      </td>
    </tr> 
    <tr>
      <td colspan="4" style="font-weight: 600; font-size:18px;"><center>Membership Form</center></td>
    </tr>
    <tr class="trPrint">
      <td colspan="4" style=" font-weight:500; text-align: center; font-size:24px;height:40px;">&nbsp; Application for REPA Membership</td>
    </tr>
    <tr>
      <td colspan="4" >
        <p>
          The President <br>
          REPA (Real Estate Professionals Association of Pakistan)<br>
          Suite No. 610, 7th Floor<br>
          Al-Sammad Tower<br>
          Gulshan e Iqbal, Block-13<br>
          Karachi, Pakistan.<br>
          <br>
          Dear Sir<br>
          I wish to become a member of the REPA (Real Estate Professionals Association of Pakistan).<br>
          My relevant details are as under:
        </p>
      </td>
    </tr>
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp; Personal information</td>
    </tr> 
    <tr>
      <td>Title</td>
      <td>First name</td>
      <td>Last name</td>
      <td>Father name</td>
    </tr>
    <tr>
      <td>Prof/ Dr/ Eng/ Mr/ Mrs/ Ms</td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Percentage" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>Date of birth</td>
      <td>Nationality</td>
      <td>City</td>
    </tr>
    <tr>
      <td><input type="checkbox" value="" class="checkbox">Male<input type="checkbox" value="" class="checkbox">Female</td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Percentage" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr>
      <td>Postal code</td>
      <td>Present address</td>
      <td>Permanent address</td>
      <td>Landline </td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board"/></td>
      <td><input type="text" name="ClassX_Board" /></td>
      <td><input type="text" name="ClassX_Board" /></td>
      <td><input type="text" name="ClassX_Percentage" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr>
      <td>Cell # </td>
      <td>WhatsApp # </td>
      <td>Email</td>
      <td>CNIC </td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Percentage" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr>
      <td>Linkdin </td>
      <td>Facebook </td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp;Real estate agency</td>
    </tr>
    <tr>
      <td>Attached with </td>
      <td>Business started since </td>
      <td>Located at </td>
      <td>Designation </td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Percentage" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr>
      <td>Website </td>
      <td>Working  area </td>
      <td>Authorize dealership </td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr> 
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp;Real estate management qualification</td>
    </tr>
    <tr>
      <td>Real Estate Management Certificate</td> 
      <td>Session</td>
      <td>Year</td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
    </tr>
    <tr>
      <td>Real Estate Management Diploma </td>  
      <td>Session </td>
      <td>Year</td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr> 
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px"> &nbsp; Academic information</td>
    </tr>
    <tr>
      <td>Qualification </td>
      <td>Discipline</td>
      <td>Specialization </td>
      <td>Institute </td>
    </tr>

    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
    </tr>
    <tr>
      <td>Country </td>
      <td>Passed year</td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp;
      Professional/work information</td>
    </tr>
    <tr>
      <td>Organization  </td>
      <td>Designation </td>
      <td>Experience </td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td> 
    </tr>
    <tr>
      <td><br></td>
    </tr>

    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp;
      Membership/registration fee</td>
    </tr>
    <tr>
      <td>Membership type </td>
      <td>Membership fee </td>
    </tr>
    <tr>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
      <td><input type="text" name="ClassX_Board" maxlength="0" /></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp;
      Attachment</td>
    </tr>
    <!-- <td><input type="text" name="ClassX_YrOfPassing" maxlength="0" /></td> -->
    <tr colspan="4">
      <td>Please attach your colored:</td>
    </tr>
    <tr>
      <td><label>recent profile picture</label> </td>
      <td><label>CNIC</label></td>
    </tr>
    <tr>
      <td>
        <br>
      </td>
    </tr>
    
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp;
      Declaration</td>
    </tr>
    <tr>
      <td colspan="4" >
                 <p>
                  I agree with the objectives and aims of the Association and further agree to flourish the welfare of the Association.<br>

                  I also affirm that I shall abide by the rules and regulations of the Association as amended time to time and shall practice the principles of the Code of Ethics of the Association.<br>

                  I shall also exert my services as and when required by the Association.<br>

                  I therefore request to kindly register me as a member.
                </p>
      </td>
    </tr>
    <tr>
      <td colspan="3"></td>
      <td align="center">____________________</td>
    </tr>
    <tr>
      <td colspan="3"></td>
      <td align="center">Applicant signature</td>
    </tr>
    <tr><td><br></td></tr>
    <tr class="trPrint">
      <td colspan="4" style="font-weight: 500;font-size: 16px">&nbsp;
      For office use only</td>
    </tr>
    <tr>
      <td colspan="4"><input type="checkbox" value="" class="checkbox">Required information provided<br>
        <input type="checkbox" value="" class="checkbox">Fees received<br>
        <input type="checkbox" value="" class="checkbox">Membership granted<br>
        <input type="checkbox" value="" class="checkbox">Info/ required<br>
      </td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
      <td align="center">____________________</td>
      <td colspan="2"></td>
      <td align="center">____________________</td>
    </tr>
    <tr>
      <td align="center">President</td>
      <td colspan="2"></td>
      <td align="center">Date</td>
    </tr>
  </table>
</div>
</div>
</div>
</div>
</div>




<?php include("footerJS.html");?>
</body>

<script src="admin/PagesJS/Form.js "></script>
<script type="text/javascript">
  ActiveNavbar('.navMembership');
</script>

<!-- <script type="text/javascript">
  $(function () {
    $("#btnPrint").click(function () {
      var contents = $("#Print").html();
      var frame1 = $('<iframe />');
      frame1[0].name = "frame1";
      frame1.css({ "position": "absolute", "top": "-1000000px" });
      $("body").append(frame1);
      var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
      frameDoc.document.open();
                //Create a new HTML document.
                frameDoc.document.write('<html><head><title>Profile Repa</title>');
                frameDoc.document.write('</head><body>');
                //Append the external CSS file.
                frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
                //Append the DIV contents.
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function () {
                  window.frames["frame1"].focus();
                  window.frames["frame1"].print();
                  frame1.remove();
                }, 500);
              });
  });
</script>
 -->
</html>