 <?php 
 header("Content-Type: application/json", true);
 require_once 'database_connections.php';
 require_once 'db.php';


 if($_GET['action']=='GetAllReports')

 {
 	
 	try
 	{
 		$query = "SELECT * from reports where IsActive = 1 order by CreatedDate desc";
 		GetResultJSON($con,$query);
 	}
 	catch (Exception $e)
 	{
 		echo $json_info($e);
 	}

 }


 if($_GET['action']=='GetAllMember')

 {
 	
 	try
 	{
 		$query = "SELECT M.MembershipId, M.TitleId, M.FirstName, M.LastName,M.FatherName, M.Gender, M.Dob, 
 		M.NationalityId, M.City, M.PostalCode, M.PresentAddress, M.PermanentAddress, M.Landline, M.CellNo, M.WhatsAppNo, M.Email, M.RealEstate, M.BusinessStartedYear, M.Location,M.Website, M.QualificationId,Q.Qualification,M.DeciplineId, M.Specialization, M.Institute, M.PassedYear, MT.MembershipType,M.MembershipTypeId, MF.MembershipFee,M.MembershipFeeId,  M.JsonWorkInfo, M.FileImage, M.FileCNIC,M.IsMember,M.DesignationId,M.StartDate,M.EndDate,M.CNIC,M.Linkdin,M.Dealership,M.WorkArea, M.AgentDesignation,M.Facebook,DC.Decipline,M.DeciplineId,DATEDIFF(M.EndDate,Now()),M.ParentDesignationId,PD.ParentDesignation,M.DiplomaYear, M.DiplomaSessionId, M.CertificateYear, M.CertificateSessionId, M.QualificationType, M.MembershipNo,M.StartDate, M.EndDate, M.SubDesignationId, SD.SubDesignation

 		FROM members M 


 		left join qualification Q on Q.QualificationId = M.QualificationId
 		left join membershiptype MT on MT.MembershipTypeId = M.MembershipTypeId
 		left join membershipfee MF on MF.MembershipFeeId = M.MembershipFeeId
 		left join decipline DC  on DC.DeciplineId = M.DeciplineId
 		left join parentdesignation PD on PD.ParentDesignationId = M.ParentDesignationId
 		left join subdesignation SD on SD.SubDesignationId = M.SubDesignationId

 		where M.IsActive = 1 order by M.CreatedDate desc
 		";
 		GetResultJSON($con,$query);
 	}
 	catch (Exception $e)
 	{
 		echo $json_info($e);
 	}

 }






 ?>