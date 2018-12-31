
<!DOCTYPE HTML>
<html lang="zxx">

<head>
  <title>Repa - Real Estate Professional Association of Pakistan - Member List</title>
  <?php include("head.html"); ?>

  <style type="text/css">
  .pic
  {
    margin-bottom:15px; 
    border-color:#c8560f;
    border-style:double; 
    border-width:6px;
  }


</style>
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
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
      <li class="breadcrumb-item active" aria-current="page">Members list</li>
    </ol>
  </nav>


  <!-- banner -->
  <br>
  <!--//banner_info-->
  <!-- /inner_content -->
  <div class="banner_bottom">
    <div class="container" style=" overflow: overlay;max-width: 1200px;">
      <h3 class="agile-title text-lg-left">Members list</h3>
      <p>List of certified REPA members</p>            
      <table class="table table-hover">
        <thead>
          <tr>
           <th>Sr.No.</th>
           <th>Name</th>
           <th>Member type</th>
           <th>Orginization</th>
           <th>Email</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody class="MemberListing">
       </tbody>
     </table>
   </div>
 </div>

 <?php include("footer.html"); ?>
 <!-- //footer -->
 <!-- Login modal -->

 <!-- // Register modal -->
 <!-- subscribe form -->
 <div class="modal fade" id="ViewProfileModal">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"style="margin-left: 22px; font-weight:600;">Member's Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->

      <div class="modal-body">
        <div class="panel panel-info">


          <div class="panel-body" style="margin:10px;">
            <div class="row">
              <div class="col-md-3 col-lg-3 "> <img height="130px;" width="130px;" alt="User Pic" src="" class="img img-responsive tdProfilePic pic" style=""> </div>
              <br>




              <div class=" col-md-9 col-lg-9 " style="margin-top: 25px;"> 
                <div class="panel-heading">
                  <div>
                    <h6 class="top-modal" class="tdMembershipNo" style=" float: right; font-size:14px;margin-left:5px;"></h6>
                    <h6 class="panel-title" style="float: right;font-size:14px;">Membership#</h6>


                    <br>

                    <h6 class="top-modal tdMembershipType" style="float:right;  margin-left: 10px; font-size:14px;" ></h6>  <!-- <h6 class="" style="float: right;  margin-left: 5px;font-size:14px;"></h6> -->
                    <h6 class="" style="float:right;  margin-left: 10px; font-size:14px;" >Membership type</h6> 
                  </div>

                 
                  <div style="margin-top: 35px;">
                    <h6 class="tdSubDesignation  top-modal" style="float: right; font-size:14px;margin-left: 2px;"></h6>
                    <h6 class="tdDesignation top-modal" style="float: right; margin-left: 5px; font-size:14px;"></h6>
                    <h6 class="tdParentDesignation" style="float: right; font-size:14px;"></h6>


                    <br>
                    <h6 class="top-modal tdTenure" style="float:right;  margin-left: 10px; font-size:14px;" ></h6>    
                    <h6 style="float: right; font-size:14px;">Tenure</h6>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <table class="table table-responsive">
            <tbody>
              <div class="modal-header">
                <h6  style="font-size:16px;"class="modal-title">
                  Personal information
                </h6>
              </div>

              <tr>
                <td>Name</td>
                <td class="tdName" style="padding-left: 30px;"></td>
              </tr>
              <tr>
                <td>Academic background</td>
                <td class="tdQualification" style="padding-left: 30px;"></td>
              </tr>
              <tr>
                <td>Work experience</td>
                <td class="tdExperience" style="padding-left: 30px;"></td>
              </tr>
              <tr>

                <td>Cell no</td>
                <td class="tdCellNo" style="padding-left: 30px;"></td>
              </tr>
              <tr>
                <td>Landline</td>
                <td class="tdLandline" style="padding-left: 30px;"></td>
              </tr>
              <tr>
                <td>Email</td>
                <td class="tdEmail" style="padding-left: 30px;"></td>
              </tr>
              <tr>
                <td>Linkedin</td>
                <td><a href="" class="tdLinkdin" target="blank" style="padding-left: 30px;">click here to preview</a></td>
              </tr>
              <tr>
                <td>Facebook</td>
                <td><a href="" class="tdFacebook" target="blank" style="padding-left: 30px;">click here to preview</a></td>
              </tr>



            </tbody>
          </table>
          <table class="table table-responsive">
            <tbody>

              <div class="modal-header">
                <h6  style="font-size:16px;"class="modal-title">
                  Real estate management qualification
                </h6>
              </div>
              <tr>
                <td>Certification course</td>
                <td class="tdCertificateCoursePrint" style="padding-left:55px;"></td>
              </tr>
              <tr>
                <td>Diploma course</td>
                <td class="tdDiplomaCoursePrint" style="padding-left:55px;"></td>
              </tr>
            </tbody>
          </table>

          <table class="table table-responsive">
            <tbody>


              <div class="modal-header">
                <h6  style="font-size:16px;"class="modal-title">
                 Agency information
               </h6>
             </div>


             <tr>
              <td>Agency name</td>
              <td class="tdRealEstate" style="padding-left: 38px;"></td>
            </tr>

            <tr>
              <td>Website</td>
              <td style="padding-left: 38px;">
                <a class="tdWebsite" href="">click here to preview</a>
              </td>
            </tr>
            <tr>
              <td>Agent designation</td>
              <td class="tdAgentDesignation" style="padding-left: 38px;"></td>
            </tr>


            <tr>
              <td>Associated since</td>
              <td class="tdBusinessStartedYear" style="padding-left: 38px;"></td>
            </tr>

            <tr>
              <td>Agency location</td>
              <td class="tdLocation" style="padding-left: 38px;"></td>
            </tr>
            <tr>
              <td>Working area</td>
              <td class="tdWorkArea"  style="padding-left: 38px;"></td>
            </tr>

            <tr>
              <td>Authorized dealership</td>
              <td class="tdDealership"  style="padding-left: 38px;"></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-primary btnPrint">Print</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>

  </div>
</div>
</div>

<!-- Trigger the modal with a button -->


<!-- Modal -->
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

          <table style ="width: 100%; height: 100%; color: black;font-family:'Raleway', sans-serif;font-size:14px;">
            <thead>
              <tr class="trPrint">
                <td colspan="3" style="font-weight: 500;font-size: 16px">&nbsp;Member's Profile</td>
              </tr>
              <tr style="height:145px">
                <td>
                  <img height="130px;" class="tdProfilePic" width="130px;" alt="User Pic" src="images/ash.jpg"  style=""> 
                </td>
                <td><label>Membership: </label>
                 <br>
                 <label>Membership Type: </label>
                 <br>
                 <label class="tdParentDesignation"></label>
                 <br>
                 <label>Tenure:</label>
               </td>

               <td align="right">

                <label style="background: #c8560f;color: #fff;padding: 2px;margin: -3px;border-radius: 4px;"></label>
                <br>

                <label class="tdMembershipType" style="background: #c8560f;color: #fff;padding: 2px;margin: -3px;border-radius: 4px;"></label>
                <br>

                <label class="tdDesignation tdSubDesignation" style="background: #c8560f;color: #fff;padding: 2px;margin: -3px;border-radius: 4px;"></label>
                <br>

                <label class="tdTenure" style="background: #c8560f;color: #fff;padding: 2px;margin: 0px;border-radius: 4px;"></label>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr class="trPrint">
              <td colspan="3" style="font-weight: 500;font-size: 16px">&nbsp;Personal information</td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Name
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdName tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Academic Background
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdQualification tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Work Experience
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdExperience tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Cell #
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdCellNo tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Landline
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdLandline  tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Email
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdEmail tdText"> 
              </td>
            </tr>

            <tr class="trPrint">
              <td colspan="3" style="font-weight: 500;font-size: 16px">&nbsp;Personal information</td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
               Certification course
             </td>
             <td style="border-bottom: 1px solid #e7eaec" class=""> 
              Apr-June | 2015
            </td>
          </tr>
          <tr style="line-height:30px">
            <td style="border-bottom: 1px solid #e7eaec" class="tdText">
              Diploma course
            </td>
            <td style="border-bottom: 1px solid #e7eaec" class=""> 
              Apr-June | 2015
            </td>
          </tr>

          <tr class="trPrint">
            <td colspan="3" style="font-weight: 500;font-size: 16px">&nbsp;Agency information</td>
          </tr>

          <tr style="line-height:30px">
            <td style="border-bottom: 1px solid #e7eaec" class="tdText">
              Agency name
            </td>
            <td style="border-bottom: 1px solid #e7eaec" class="tdRealEstate tdText"> 
            </td>
          </tr>
          <tr style="line-height:30px">
            <td style="border-bottom: 1px solid #e7eaec" class="tdText">
              Website
            </td>
            <td style="border-bottom: 1px solid #e7eaec"> 
              <a href="#" target="_blank" class="tdWebsite tdText"></a></td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Designation/ Position
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdAgentDesignation tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Associated since
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdBusinessStartedYear tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Agency location
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdLocation tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Working area
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdWorkArea tdText"> 
              </td>
            </tr>
            <tr style="line-height:30px">
              <td style="border-bottom: 1px solid #e7eaec" class="tdText">
                Dealership (if any)
              </td>
              <td style="border-bottom: 1px solid #e7eaec" class="tdDealership tdText"> 
              </td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>
    <div class="modal-footer">

      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>


<?php include("footerJS.html"); ?>
</body>

<script type="text/x-jQuery-tmpl" id="MemberListing">
  <tr class="trMember">
    <input type="hidden" class="hdnMembershipId" value="${MembershipId}" />
    <input type="hidden" class="hdnQualification" value="${Qualification}" />
    <input type="hidden" class="hdnRealEstate" value="${RealEstate}" />
    <input type="hidden" class="hdnBusinessStartedYear" value="${BusinessStartedYear}" />
    <input type="hidden" class="hdnJsonWorkInfo" value="${JsonWorkInfo}" />
    <input type="hidden" class="hdnCellNo" value="${CellNo}" />
    <input type="hidden" class="hdnLandline" value="${Landline}" />
    <input type="hidden" class="hdnEmail" value="${Email}" />
    <input type="hidden" class="hdnLocation" value="${Location}" />
    <input type="hidden" class="hdnMembershipType" value="${MembershipType}" />
    <input type="hidden" class="hdnDecipline" value="${Decipline}" />
    <input type="hidden" class="hdnSpecialization" value="${Specialization}" />
    <input type="hidden" class="hdnNationalityId" value="${NationalityId}" />
    <input type="hidden" class="hdnMembershipTypeId" value="${MembershipTypeId}" />
    <input type="hidden" class="hdnMembershipNo" value="${MembershipNo}" />
    <input type="hidden" class="hdnJsonWorkInfo" value="${JsonWorkInfo}" />
    <input type="hidden" class="hdnIsMember" value="${IsMember}" />
    <input type="hidden" class="hdnName" value="${FirstName} ${MiddleName} ${LastName}" />
    <input type="hidden" class="hdnFileImage" value="${FileImage}" />
    <input type="hidden" class="hdnFileCNIC" value="${FileCNIC}" />
    <input type="hidden" class="hdnDesignation" value="${Designation}" />
    <input type="hidden" class="hdnParentDesignation" value="${ParentDesignation}" />
    <input type="hidden" class="hdnParentDesignationId" value="${ParentDesignationId}" />
    <input type="hidden" class="hdnSubDesignation" value="${SubDesignation}" />
    <input type="hidden" class="hdnWorkArea" value="${WorkArea}" />
    <input type="hidden" class="hdnDealership" value="${Dealership}" />
    <input type="hidden" class="hdnAgentDesignation" value="${AgentDesignation}" />
    <input type="hidden" class="hdnFacebook" value="${Facebook}" />
    <input type="hidden" class="hdnLinkdin" value="${Linkdin}" />
    <input type="hidden" class="hdnWebsite" value="${Website}" />
    <input type="hidden" class="hdnStartDate" value="${formatDate(StartDate)}" />
    <input type="hidden" class="hdnEndDate" value="${formatDate(EndDate)}" />
    <input type="hidden" class="hdnQualificationType" value="${QualificationType}" />
	<input type="hidden" class="hdnDiplomaSessionId" value="${DiplomaSessionId}" />
	<input type="hidden" class="hdnDiplomaSession" value="${DiplomaSession}" />
	<input type="hidden" class="hdnDiplomaYear" value="${DiplomaYear}" />
	<input type="hidden" class="hdnCertificateSessionId" value="${CertificateSessionId}" />
	<input type="hidden" class="hdnCertificateSession" value="${CertificateSession}" />
	<input type="hidden" class="hdnCertificateYear" value="${CertificateYear}" />
    <td></td>
    <td class="project-title tdNameTable">${FirstName} ${MiddleName} ${LastName}</td>
     <td class="project-title tdMembershipTypeTable">${MembershipType}</td>
    <td class="project-title tdQualificationTable">{{html htmlBr(JsonWorkInfo,'Organization') }}</td>
   
    <td class="project-title tdEmailTable">${Email}</td>
    <td class="project-title">
      <input type="button" data-toggle="modal" data-target="#ViewProfileModal" onclick="BindProfile(this)" value="View Profile" class="btn btn-group btn-xs btn-primary">
    </td>

  </tr>
</script>
<script src="admin/PagesJS/Form.js "></script>
<script type="text/javascript">
  ActiveNavbar('.navMembership');
</script>
</html>