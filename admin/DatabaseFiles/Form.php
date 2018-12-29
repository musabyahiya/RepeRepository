 <?php 
 header("Content-Type: application/json", true);
 require_once 'database_connections.php';
 require_once 'db.php';

 

 if($_GET['action']=='CreateNewMember')
 {

 	$data = json_decode(json_encode($_POST));


 	$TitleId = $data->TitleId;
 	$FirstName = $data->FirstName;
 	$LastName = $data->LastName;
 	$Gender = $data->Gender;
 	$Dob = $data->Dob;
 	$NationalityId = $data->NationalityId;
 	$City = $data->City;
 	$DiplomaSessionId = $data->DiplomaSessionId;
 	$CertificateSessionId = $data->CertificateSessionId;
 	$FatherName = $data->FatherName;
 	$DiplomaYear = $data->DiplomaYear;
 	$CertificateYear = $data->CertificateYear;
 	$QualificationType = $data->QualificationType;
 	$PostalCode = $data->PostalCode;
 	$PresentAddress = $data->PresentAddress;
 	$PermanentAddress = $data->PermanentAddress;
 	$Landline = $data->Landline;
 	$CellNo = $data->CellNo;
 	$WhatsAppNo = $data->WhatsAppNo;
 	$Email = $data->Email;
 	$CNIC = $data->CNIC;
 	$RealEstate = $data->RealEstate;
 	$DeciplineId = $data->DeciplineId;
 	$BusinessStartedYear = $data->BusinessStartedYear;
 	$Location = $data->Location;
 	$AgentDesignation = $data->AgentDesignation;
 	$WorkArea = $data->WorkArea;
 	$Dealership = $data->Dealership;
 	$Linkdin = $data->Linkdin;
 	$Facebook = $data->Facebook;
 	$Website = $data->Website;
 	$QualificationId = $data->QualificationId;
 	$Specialization = $data->Specialization;
 	$Institute = $data->Institute;
 	$PassedYear = $data->PassedYear;
 	$MembershipTypeId = $data->MembershipTypeId;
 	$MembershipFeeId = $data->MembershipFeeId;
 	$JsonWorkInfo = $data->JsonWorkInfo;
 	$FileImage = $data->FileImage;
 	$FileCNIC = $data->FileCNIC;
 	$IsMember = $data->IsMember;
 	$MembershipNo = $data->MembershipNo;

 	$CreatedBy  = -1;

 	try
 	{
 		
 		$query = "INSERT INTO members 
 		( TitleId, FirstName, LastName,FatherName, Gender, Dob, NationalityId, City,DiplomaSessionId, CertificateSessionId, DiplomaYear, CertificateYear , QualificationType , PostalCode, PresentAddress, PermanentAddress, Landline, CellNo, WhatsAppNo, Email, CNIC, Linkdin, Facebook, Website, RealEstate, BusinessStartedYear, Location, AgentDesignation, QualificationId, DeciplineId, Specialization, Institute, PassedYear, MembershipTypeId, MembershipFeeId, JsonWorkInfo, Dealership, WorkArea, FileImage, FileCNIC, CreatedBy, CreatedDate) 
 		VALUES

 		('$TitleId', '$FirstName', '$LastName', '$FatherName', '$Gender', '$Dob', '$NationalityId', 
 		'$City', '$DiplomaSessionId', '$CertificateSessionId', '$DiplomaYear', '$CertificateYear' , '$QualificationType' ,  '$PostalCode', '$PresentAddress', '$PermanentAddress', '$Landline', '$CellNo', 
 		'$WhatsAppNo', '$Email', '$CNIC', '$Linkdin', '$Facebook','$Website', '$RealEstate', $BusinessStartedYear, 
 		'$Location', '$AgentDesignation', '$QualificationId','$DeciplineId', '$Specialization',
 		'$Institute','$PassedYear', '$MembershipTypeId','$MembershipFeeId',
 		'$JsonWorkInfo','$Dealership','$WorkArea', '$FileImage', '$FileCNIC','$CreatedBy', Now());";

 		InsertIntoTableGetIdentity ($con,$query);

 		  //echo $query;

 	}

 	catch (Exception $e)  
 	{ 
 		$error_message = $e->getMessage(); 
 		echo json_encode($error_message);
 		exit(); 
 	} 



 }

 
 if($_GET['action']=='GetAllMember')

 {
 	try
 	{
 		$query = "SELECT M.MembershipId, M.TitleId, M.FirstName, M.LastName,M.FatherName, M.Gender, M.Dob, 
 		M.NationalityId,N.Nationality, M.City, M.PostalCode, M.PresentAddress, M.PermanentAddress, M.Landline, M.CellNo, M.WhatsAppNo, M.Email, M.RealEstate, M.BusinessStartedYear, M.Location,M.Website, M.QualificationId,Q.Qualification,M.DeciplineId, M.Specialization, M.Institute, M.PassedYear, MT.MembershipType,M.MembershipTypeId, MF.MembershipFee,M.MembershipFeeId,  M.JsonWorkInfo, M.FileImage, M.FileCNIC,M.IsMember,M.DesignationId,D.Designation,M.StartDate,M.EndDate,M.CNIC,M.Linkdin,M.Dealership,M.WorkArea, M.AgentDesignation,T.Title,M.Facebook,DC.Decipline,M.DeciplineId,DATEDIFF(M.EndDate,Now()),M.ParentDesignationId,PD.ParentDesignation,M.DiplomaYear, M.DiplomaSessionId, M.CertificateYear, M.CertificateSessionId, M.QualificationType

 		FROM members M 

 		left join nationality N on N.NationalityId = M.NationalityId
 		left join qualification Q on Q.QualificationId = M.QualificationId
 		left join membershiptype MT on MT.MembershipTypeId = M.MembershipTypeId
 		left join membershipfee MF on MF.MembershipFeeId = M.MembershipFeeId
 		left join designation D on D.DesignationId = M.DesignationId
 		left join title T on T.TitleId = M.TitleId
 		left join decipline DC  on DC.DeciplineId = M.DeciplineId
 		left join parentdesignation PD on PD.ParentDesignationId = M.ParentDesignationId

 		where M.IsActive = 1 and M.IsMember = 1 order by M.CreatedDate desc";
 		GetResultJSON($con,$query);
 	}
 	catch (Exception $e)
 	{
 		echo $json_info($e);
 	}

 }

 if($_GET['action']=='SendEmail')
 { 	
 	$data = json_decode(json_encode($_POST));
 	$Name = $data->Name;
 	$Email = $data->Email;
 	$CellNo = $data->CellNo;
 	$Message = $data->Message;
 	$To = "info@repa.org.pk";
 	$From = "no-reply@repa.org.pk";
 	$Headers = "From:" . $From;
 	$Subject = "Feedback Form REPA";
 	$SendMessage = "Name: ".$Name."\n\n"."Email: ".$Email."\n\n"."Cell No: ".$CellNo."\n\n"."Message: ".$Message;

 	mail($To,$Subject,$SendMessage,$Headers);

 	echo true;

 }
 if($_GET['action']=='EditIsMember')

 {
 	try
 	{
 		$data = json_decode(json_encode($_POST));
 		$MembershipId =  $data->MembershipId;
 		$IsMember  = $data->IsMember;
 		$ModifiedBy  = $_SESSION['UserId'];

 		if($IsMember==1)
 		{
 			$IsMember=0;
 		}
 		else
 		{
 			$IsMember=1;
 		}

 		$query = "UPDATE members SET IsMember='$IsMember',ModifiedBy='$ModifiedBy',ModifiedDate=Now()
 		WHERE 
 		MembershipId = '$MembershipId' and IsActive = 1";

 		UpdateTable ($con,$query);
 	}
 	catch (Exception $e)
 	{
 		echo $json_info($e);
 	}

 	
 }


 if($_GET['action']=='UpdateProperty')
 {

 	$PropertyId = $_POST['PropertyId'];
 	$PropertyTypeId  = $_POST['PropertyTypeId'];
 	$Property = $_POST['Property'];

 	$ModifiedBy  = $_SESSION['UserId'];

 	$query = "Update property set PropertyTypeId= :PropertyTypeId, Property=:Property  ,ModifiedBy = :ModifiedBy , ModifiedDate = Now()
 	where PropertyId = :PropertyId ";

 	$statement = $con->prepare($query);

 	$statement->bindValue(':PropertyId', $PropertyId);
 	$statement->bindValue(':PropertyTypeId', $PropertyTypeId);
 	$statement->bindValue(':Property', $Property);
 	$statement->bindValue(':ModifiedBy', $ModifiedBy);

 	$statement->execute();

 	echo json_encode($statement->execute());

 }

 if($_GET['action']=='GetAllDeveloper')

 {
 	$query = "SELECT DeveloperId as 'Id', Developer as 'Value' from developer  where  IsActive =1";

 	GetResultJSON($con,$query);

 }

 if($_GET['action']=='DeleteProperty')
 {

 	$PropertyId  = $_POST['PropertyId'];
 	$ModifiedBy  = $_SESSION['UserId'];

 	$query = "Update property set IsActive = 0 ,ModifiedBy = :ModifiedBy , ModifiedDate = Now() where PropertyId = :PropertyId ";
 	$statement = $con->prepare($query);

 	$statement->bindValue(':ModifiedBy', $ModifiedBy);


 	$statement->bindValue(':PropertyId', $PropertyId);
 	$statement->execute();

 	echo json_encode($statement->execute());

 }


 if($_GET['action']=='GetAllPropertyType')

 {
 	$query = "SELECT PropertyTypeId as 'Id', PropertyType as 'Value' from propertytype  where  IsActive =1";
 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllPropertySubtype')

 {
 	$query = "SELECT PropertySubtypeId as 'Id', PropertySubtype as 'Value', PropertyTypeId from propertysubtype  where  IsActive =1";

 	GetResultJSON($con,$query);

 }

 if($_GET['action']=='GetAllUnits')

 {
 	$query = "SELECT UnitId as 'Id', Units as 'Value',  PropertyTypeId from units  where  IsActive =1";

 	GetResultJSON($con,$query);

 }


 if($_GET['action']=='GetAllScheme')

 {
 	$query = "SELECT SchemeId as 'Id', Scheme as 'Value' from scheme  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllDocumentTwo')

 {
 	$query = "SELECT DocumentTwoId as 'Id', DocumentTwo as 'Value' from documenttwo  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllDocumentTitle')

 {
 	$query = "SELECT DocumentTitleId as 'Id', DocumentTitle as 'Value' from documenttitle  where  IsActive =1";

 	GetResultJSON($con,$query);

 }

 if($_GET['action']=='GetAllTownship')

 {
 	$query = "SELECT TownshipId as 'Id', Township as 'Value' from township  where  IsActive =1";
 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllOccupancyValue')

 {
 	$query = "SELECT OccupancyValueId as 'Id', OccupancyValue as 'Value' from occupancyvalue  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllAllotmentType')

 {
 	$query = "SELECT AllotmentTypeId as 'Id', AllotmentType as 'Value' from allotmenttype  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllPurpose')

 {
 	$query = "SELECT PurposeId as 'Id', Purpose as 'Value' from Purpose  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllMembershipFee')

 {
 	$query = "SELECT MembershipFeeId as 'Id', MembershipFeeName as 'Value', MembershipTypeId, MembershipFee from membershipfee  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllMembershipType')

 {
 	$query = "SELECT MembershipTypeId as 'Id', MembershipType as 'Value' from membershiptype  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllQualification')

 {
 	$query = "SELECT QualificationId as 'Id', Qualification as 'Value' from qualification  where  IsActive =1";

 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllCountry')

 {
 	$query = "SELECT CountryId as 'Id', Country as 'Value' from country  where  IsActive =1";

 	GetResultJSON($con,$query);

 }
 if($_GET['action']=='GetAllNationality')

 {
 	$query = "SELECT NationalityId as 'Id', Nationality as 'Value' from nationality  where  IsActive =1";

 	GetResultJSON($con,$query);

 }
 if($_GET['action']=='GetAllYears')

 {
 	$query = "SELECT Year as 'Id', Year as 'Value' from years   where  IsActive =1 order by 2 ";

 	GetResultJSON($con,$query);
 }




 ?>
