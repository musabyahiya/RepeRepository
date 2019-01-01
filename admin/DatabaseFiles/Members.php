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
 	$FatherName = $data->FatherName;
 	$Gender = $data->Gender;
 	$Dob = $data->Dob;
 	$NationalityId = $data->NationalityId;
 	$City = $data->City;
 	$DiplomaSessionId = $data->DiplomaSessionId;
 	$CertificateSessionId = $data->CertificateSessionId;
 	$DiplomaYear = $data->DiplomaYear;
 	$CertificateYear = $data->CertificateYear;
 	$QualificationType = $data->QualificationType;
 	$DiplomaInstitute = $data->DiplomaInstitute;
 	$CertificateInstitute = $data->CertificateInstitute;
 	$DiplomaCertificationBody = $data->DiplomaCertificationBody;
 	$CertificateCertificationBody = $data->CertificateCertificationBody;
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
 	$CountryId = $data->CountryId;
 	$PassedYear = $data->PassedYear;
 	$MembershipTypeId = $data->MembershipTypeId;
 	$MembershipFeeId = $data->MembershipFeeId;
 	$DesignationId = $data->DesignationId;
 	$StartDate = $data->StartDate;
 	$EndDate = $data->EndDate;
 	$JsonWorkInfo = $data->JsonWorkInfo;
 	$FileImage = $data->FileImage;
 	$FileCNIC = $data->FileCNIC;
 	$IsMember = $data->IsMember;
 	$MembershipNo = $data->MembershipNo;
 	$ParentDesignationId = $data->ParentDesignationId;
 	$SubDesignationId = $data->SubDesignationId;
 	$CreatedBy  = $_SESSION['UserId'];

 	try
 	{
 		
 		$query = "INSERT INTO members( TitleId, FirstName, LastName, Gender, Dob, NationalityId, City, DiplomaSessionId, CertificateSessionId, FatherName, DiplomaYear, CertificateYear, QualificationType ,PostalCode, DiplomaInstitute, CertificateInstitute, DiplomaCertificationBody, CertificateCertificationBody, PresentAddress, PermanentAddress, Landline, CellNo, WhatsAppNo, Email, CNIC, RealEstate, DeciplineId, BusinessStartedYear, Location, AgentDesignation, WorkArea, Dealership, Linkdin, Facebook, Website, QualificationId, Specialization, Institute, CountryId, PassedYear, MembershipTypeId, MembershipFeeId, DesignationId, StartDate, EndDate, JsonWorkInfo, FileImage, FileCNIC, IsMember, MembershipNo, ParentDesignationId, SubDesignationId, CreatedBy, CreatedDate) 
 		VALUES 
 		(   '$TitleId', '$FirstName', '$LastName', '$Gender', '$Dob', '$NationalityId', '$City', 
 		'$DiplomaSessionId', '$CertificateSessionId', '$FatherName', '$DiplomaYear', '$CertificateYear',
 		'$QualificationType','$PostalCode','$DiplomaInstitute', '$CertificateInstitute', '$DiplomaCertificationBody', '$CertificateCertificationBody', '$PresentAddress', '$PermanentAddress', '$Landline',
 		'$CellNo', '$WhatsAppNo', '$Email', '$CNIC', '$RealEstate', '$DeciplineId', 
 		'$BusinessStartedYear', '$Location', '$AgentDesignation', '$WorkArea', '$Dealership', 
 		'$Linkdin', '$Facebook', '$Website', '$QualificationId', '$Specialization', '$Institute', '$CountryId',
 		'$PassedYear', '$MembershipTypeId', '$MembershipFeeId', '$DesignationId', '$StartDate', 
 		'$EndDate', '$JsonWorkInfo', '$FileImage', '$FileCNIC', '$IsMember', '$MembershipNo', 
 		'$ParentDesignationId', '$SubDesignationId','$CreatedBy', Now())";

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
 		M.NationalityId,N.Nationality, M.City, M.PostalCode, M.PresentAddress, M.PermanentAddress, M.Landline, M.CellNo, M.WhatsAppNo,
 		M.Email, M.RealEstate, M.BusinessStartedYear, M.Location,M.Website, M.QualificationId,Q.Qualification,M.DeciplineId,
 		M.Specialization, M.Institute, M.PassedYear, MT.MembershipType,M.MembershipTypeId, MF.MembershipFee,M.MembershipFeeId,
 		M.JsonWorkInfo, M.FileImage, M.FileCNIC,M.IsMember,M.DesignationId,D.Designation,M.StartDate,M.EndDate,M.CNIC,M.Linkdin,
 		M.Dealership,M.WorkArea, M.AgentDesignation,T.Title,M.Facebook,DC.Decipline,M.DeciplineId,DATEDIFF(M.EndDate,Now()),
 		M.ParentDesignationId,PD.ParentDesignation,M.DiplomaYear, M.DiplomaSessionId, M.CertificateYear, 
 		M.CertificateSessionId, M.QualificationType, PD.ParentDesignation, M.ParentDesignationId, 
 		M.SubDesignationId, CS.CertificateSession, DS.DiplomaSession, SD.SubDesignation, M.MembershipNo, M.CountryId, M.DiplomaInstitute, M.CertificateInstitute, M.DiplomaCertificationBody, 
 		M.CertificateCertificationBody

 		FROM members M 

 		left join nationality N on N.NationalityId = M.NationalityId
 		left join qualification Q on Q.QualificationId = M.QualificationId
 		left join membershiptype MT on MT.MembershipTypeId = M.MembershipTypeId
 		left join membershipfee MF on MF.MembershipFeeId = M.MembershipFeeId
 		left join designation D on D.DesignationId = M.DesignationId
 		left join title T on T.TitleId = M.TitleId
 		left join decipline DC  on DC.DeciplineId = M.DeciplineId
 		left join parentdesignation PD on PD.ParentDesignationId = M.ParentDesignationId
 		left join subdesignation SD on SD.SubDesignationId = M.SubDesignationId
 		left join certificatesession CS on CS.CertificateSessionId = M.CertificateSessionId
 		left join diplomasession DS on DS.DiplomaSessionId = M.DiplomaSessionId
        left join country C on C.CountryId = M.CountryId
 		where M.IsActive = 1 order by M.CreatedDate desc";
 		GetResultJSON($con,$query);
 	}
 	catch (Exception $e)
 	{
 		echo $json_info($e);
 	}

 }

 if($_GET['action']=='GetAllMemberPassOver')

 {
 	
 	try
 	{
 		$query = "SELECT M.MembershipId, M.TitleId, M.FirstName, M.LastName,M.FatherName, M.Gender, M.Dob, M.NationalityId,N.Nationality, M.City, M.PostalCode, M.PresentAddress, M.PermanentAddress, M.Landline, M.CellNo, M.WhatsAppNo, M.Email, M.RealEstate, M.BusinessStartedYear, M.Location, M.QualificationId,Q.Qualification,M.DeciplineId, M.Specialization, M.Institute, M.PassedYear, MT.MembershipType,M.MembershipTypeId, MF.MembershipFee,M.MembershipFeeId,  M.JsonWorkInfo, M.FileImage, M.FileCNIC,M.IsMember,M.DesignationId,D.Designation,M.StartDate,M.EndDate,M.CNIC,M.Linkdin,M.Dealership,M.WorkArea, M.AgentDesignation,T.Title,M.Facebook,DC.Decipline,M.DeciplineId,DATEDIFF(M.EndDate,Now()) as 'Difference', M.IsMailSent
 		FROM members M 

 		inner join nationality N on N.NationalityId = M.NationalityId
 		inner join qualification Q on Q.QualificationId = M.QualificationId
 		inner join membershiptype MT on MT.MembershipTypeId = M.MembershipTypeId
 		inner join membershipfee MF on MF.MembershipFeeId = M.MembershipFeeId
 		inner join designation D on D.DesignationId = M.DesignationId
 		inner join title T on T.TitleId = M.TitleId
 		inner join decipline DC  on DC.DeciplineId = M.DeciplineId
 		where M.IsActive = 1 and M.IsMember = 1 order by M.CreatedDate desc";
 		GetResultJSON($con,$query);
 	}
 	catch (Exception $e)
 	{
 		echo $json_info($e);
 	}

 }
 


 if($_GET['action']=='EditIsMember')

 {
 	try
 	{
 		$data = json_decode(json_encode($_POST));
 		$MembershipId =  $data->MembershipId;
 		$IsMember  = $data->IsMember;
 		$NotificationTypeId  = $data->NotificationTypeId;
 		$Message  = $data->Message;
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
 		MembershipId = '$MembershipId' and IsActive = 1;

 		INSERT INTO notification( NotificationTypeId, MembershipId, Message, CreatedBy, CreatedDate) VALUES 
 		('$NotificationTypeId', '$MembershipId', '$Message', '$ModifiedBy', Now())";

 		echo mysqli_multi_query($con,$query);

 		//echo $query;



 		//echo $query;
 	}
 	catch (Exception $e)
 	{
 		echo $json_info($e);
 	}

 	
 }


 if($_GET['action']=='UpdateNewMember')
 {

 	$data = json_decode(json_encode($_POST));

 	$MembershipId  = $data->MembershipId;
 	$TitleId  = $data->TitleId;
 	$FirstName  = $data->FirstName;
 	$LastName = $data->LastName;
 	$FatherName = $data->FatherName;
 	$Gender = $data->Gender;
 	$Dob = $data->Dob;
 	$NationalityId = $data->NationalityId;
 	$City = $data->City;
 	$DiplomaSessionId = $data->DiplomaSessionId;
 	$CertificateSessionId = $data->CertificateSessionId;
 	$DiplomaYear = $data->DiplomaYear;
 	$CertificateYear = $data->CertificateYear;
 	$QualificationType = $data->QualificationType;
 	$DiplomaInstitute = $data->DiplomaInstitute;
 	$CertificateInstitute = $data->CertificateInstitute;
 	$DiplomaCertificationBody = $data->DiplomaCertificationBody;
 	$CertificateCertificationBody = $data->CertificateCertificationBody;
 	$PostalCode = $data->PostalCode;
 	$PresentAddress = $data->PresentAddress;
 	$PermanentAddress = $data->PermanentAddress;
 	$Landline = $data->Landline;
 	$CellNo = $data->CellNo;
 	$WhatsAppNo = $data->WhatsAppNo;
 	$Email = $data->Email;
 	$CNIC=$data->CNIC;
 	$Linkdin=$data->Linkdin;
 	$Facebook=$data->Facebook;
 	$MembershipNo=$data->MembershipNo;
 	$Website=$data->Website;
 	$RealEstate = $data->RealEstate;
 	$BusinessStartedYear = $data->BusinessStartedYear;
 	$Location = $data->Location;
 	$AgentDesignation=$data->AgentDesignation;
 	$WorkArea = $data->WorkArea;
 	$Dealership =$data->Dealership;
 	$QualificationId = $data->QualificationId;
 	$DeciplineId = $data->DeciplineId;
 	$Specialization = $data->Specialization;
 	$Institute = $data->Institute;
 	$CountryId = $data->CountryId;
 	$PassedYear = $data->PassedYear;
 	$MembershipTypeId = $data->MembershipTypeId;
 	$MembershipFeeId = $data->MembershipFeeId;
 	$JsonWorkInfo = $data->JsonWorkInfo;
 	$DesignationId  = $data->DesignationId;
 	$ParentDesignationId = $data->ParentDesignationId;
 	$SubDesignationId = $data->SubDesignationId;
 	$StartDate  = $data->StartDate;
 	$EndDate  = $data->EndDate;
 	$ModifiedBy  = $_SESSION['UserId'];


 	$query = "UPDATE members SET TitleId='$TitleId',FirstName='$FirstName',LastName='$LastName',FatherName='$FatherName',Gender='$Gender',Dob='$Dob',NationalityId='$NationalityId',City='$City', DiplomaSessionId = '$DiplomaSessionId', CertificateSessionId = '$CertificateSessionId', DiplomaYear = '$DiplomaYear', CertificateYear = '$CertificateYear',QualificationType = '$QualificationType',DiplomaInstitute = '$DiplomaInstitute',CertificateInstitute = '$CertificateInstitute',DiplomaCertificationBody = '$DiplomaCertificationBody',CertificateCertificationBody = '$CertificateCertificationBody',PostalCode='$PostalCode',PresentAddress='$PresentAddress',PermanentAddress='$PermanentAddress',Landline='$Landline',CellNo='$CellNo',WhatsAppNo='$WhatsAppNo',Email='$Email',CNIC='$CNIC',Linkdin='$Linkdin',Facebook='$Facebook', MembershipNo = '$MembershipNo',Website='$Website',RealEstate='$RealEstate',BusinessStartedYear='$BusinessStartedYear',Location='$Location',AgentDesignation='$AgentDesignation',WorkArea='$WorkArea',Dealership='$Dealership',QualificationId='$QualificationId',DeciplineId='$DeciplineId',Specialization='$Specialization',Institute='$Institute', CountryId = '$CountryId', PassedYear='$PassedYear',MembershipTypeId='$MembershipTypeId',MembershipFeeId='$MembershipFeeId',DesignationId='$DesignationId',ParentDesignationId='$ParentDesignationId',SubDesignationId='$SubDesignationId',StartDate='$StartDate',EndDate='$EndDate',JsonWorkInfo='$JsonWorkInfo',
 	ModifiedBy='$ModifiedBy',ModifiedDate=Now() WHERE IsActive = 1 and MembershipId = '$MembershipId'";

 	UpdateTable ($con,$query);
  //  echo $query;

 }

 
 if($_GET['action']=='UpdateAttachments')
 {

 	$data = json_decode(json_encode($_POST));

 	$MembershipId  = $data->MembershipId;
 	$FileImage = $data->FileImage;
 	$FileCNIC = $data->FileCNIC;
 	$ModifiedBy  = $_SESSION['UserId'];


 	$query = "UPDATE members set FileImage='$FileImage',FileCNIC='$FileCNIC',
 	ModifiedBy='$ModifiedBy',ModifiedDate=Now() WHERE IsActive = 1 and MembershipId = '$MembershipId'";

 	UpdateTable ($con,$query);
   // echo $query;

 }
 if($_GET['action']=='GetAllSubDesignation')

 {
 	$query = "SELECT SubDesignationId as 'Id', SubDesignation as 'Value', ParentDesignationId from subdesignation  where  IsActive =1";

 	GetResultJSON($con,$query);

 }
 if($_GET['action']=='GetAllDeveloper')

 {
 	$query = "SELECT DeveloperId as 'Id', Developer as 'Value' from developer  where  IsActive =1";

 	GetResultJSON($con,$query);

 }
 if($_GET['action']=='GetAllParentDesignation')

 {
 	$query = "SELECT ParentDesignationId as 'Id', ParentDesignation as 'Value' from parentdesignation  where  IsActive =1";

 	GetResultJSON($con,$query);

 }



 if($_GET['action']=='GetAllDesignation')

 {
 	$query = "SELECT DesignationId as 'Id', Designation as 'Value' , ParentDesignationId from designation  where  IsActive =1";
 	GetResultJSON($con,$query);
 }

 if($_GET['action']=='GetAllPropertySubtype')

 {
 	$query = "SELECT PropertySubtypeId as 'Id', PropertySubtype as 'Value', PropertyTypeId from propertysubtype  where  IsActive =1";

 	GetResultJSON($con,$query);

 }



 if($_GET['action']=='GetAllNotificationType')

 {
 	$query = "SELECT NotificationTypeId as 'Id', NotificationType as 'Value', IsActivated from notificationtype  where  IsActive =1";

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
 	$query = "SELECT Year as 'Id', Year as 'Value' from years   where  IsActive =1 order by Year desc";

 	GetResultJSON($con,$query);
 }


 if($_GET['action']=='GetAllCertificateSession')

 {
 	$query = "SELECT CertificateSessionId as 'Id', CertificateSession as 'Value' from certificatesession  where  IsActive =1";

 	GetResultJSON($con,$query);

 }

 if($_GET['action']=='GetAllDiplomaSession')

 {
 	$query = "SELECT DiplomaSessionId as 'Id', DiplomaSession as 'Value' from diplomasession  where  IsActive =1";

 	GetResultJSON($con,$query);

 }

 if($_GET['action']=='GetAllDecipline')

 {
 	$query = "SELECT DeciplineId as 'Id', Decipline as 'Value' from decipline  where  IsActive =1";

 	GetResultJSON($con,$query);

 }

 if($_GET['action']=='GetAllTitle')

 {
 	$query = "SELECT TitleId as 'Id', Title as 'Value' from title  where  IsActive =1";

 	GetResultJSON($con,$query);

 }

 if($_GET['action']=='SendMailRegistration')

 {
 	//$to = 'info@repa.org.pk';
 	$to = 'musabyahiya@hotmail.com';

 	$subject = 'REPA Membership Form Received.';

 	$headers = "From: " . "noreply@repa.org.pk" . "\r\n";
 	$headers .= "Reply-To: ". "info@repa.org.pk" . "\r\n";
 	$headers .= "CC: musabyahiya@hotmail.com\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
 	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

 	$message = "<html lang='en'>";
 	$message .= "<head>";
 	$message .= "<meta charset='UTF-8'>";
 	$message .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
 	$message .= "<meta http-equiv='X-UA-Compatible' content='ie=edge'>";
 	$message .= "<title>REPA Form Received</title>";
 	$message .= "</head>";
 	$message .= "<body style='background-color:#f6f6f6;'>";
 	$message .= "<table style='background-color:#fff;width:600px;margin:0 auto;margin-top:20px;padding: 20px;'>";
 	$message .= "<tr style='background-color: #26333c;width: 100%;'>";
 	$message .= "<td style='padding: 15px;'>";
 	$message .= "<img src='http://repa.org.pk/logo-repa-resize.png' alt='Logo'>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr>";
 	$message .= "<td>";
 	$message .= "<h3 style='font-family:'Raleway', sans-serif;font-size:16px; margin-top:30px;'>";
 	$message .= "We thank you and appreciate your decision to apply for the membership of REPA.";
 	$message .= "</h3>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr>";
 	$message .= "<td style='font-family:'Raleway', sans-serif;font-size:14px;'>";
 	$message .= "<p>A confirmation email message has been sent at the email address you provided.</p>";
 	$message .= "<p>Please note that those who wish to pay online/bank transfer, bank details have also been provided therein.</p>";
 	$message .= "<p>Have a great day!.</p>";
 	$message .= "<p>Regards, <strong>REPA Team.</strong></p>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr style='background-color:#26333c;color:white'>";
 	$message .= "<td align='center' style='font-family:'Raleway', sans-serif;font-size:12px;'>";
 	$message .= "Designed & Developed by <a style='color:white' href='https://femtogen.com' style='color:cadetblue;'><strong>Femtogen Technologies</strong></a>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "</table>";
 	$message .= "</body>";
 	$message .= "</html>";

 	mail($to, $subject, $message, $headers);
 	echo true;
 }
 



 if($_GET['action']=='SendMailReminder')

 {
 	//$to = 'info@repa.org.pk';
 	$to = 'musabyahiya@hotmail.com';

 	$subject = 'REPA Membership Form Received.';

 	$headers = "From: " . "noreply@repa.org.pk" . "\r\n";
 	$headers .= "Reply-To: ". "info@repa.org.pk" . "\r\n";
 	$headers .= "CC: musabyahiya@hotmail.com\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
 	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

 	$message = "<html lang='en'>";
 	$message .= "<head>";
 	$message .= "<meta charset='UTF-8'>";
 	$message .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
 	$message .= "<meta http-equiv='X-UA-Compatible' content='ie=edge'>";
 	$message .= "<title>REPA Form Received</title>";
 	$message .= "</head>";
 	$message .= "<body style='background-color:#f6f6f6;'>";
 	$message .= "<table style='background-color:#fff;width:600px;margin:0 auto;margin-top:20px;padding: 20px;'>";
 	$message .= "<tr style='background-color: #26333c;width: 100%;'>";
 	$message .= "<td style='padding: 15px;'>";
 	$message .= "<img src='http://repa.org.pk/logo-repa-resize.png' alt='Logo'>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr>";
 	$message .= "<td>";
 	$message .= "<h3 style='font-family:'Raleway', sans-serif;font-size:16px; margin-top:30px;'>";
 	$message .= "We thank you and appreciate your decision to apply for the membership of REPA.";
 	$message .= "</h3>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr>";
 	$message .= "<td style='font-family:'Raleway', sans-serif;font-size:14px;'>";
 	$message .= "<p>A confirmation email message has been sent at the email address you provided.</p>";
 	$message .= "<p>Please note that those who wish to pay online/bank transfer, bank details have also been provided therein.</p>";
 	$message .= "<p>Have a great day!.</p>";
 	$message .= "<p>Regards, <strong>REPA Team.</strong></p>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr style='background-color:#26333c;color:white'>";
 	$message .= "<td align='center' style='font-family:'Raleway', sans-serif;font-size:12px;'>";
 	$message .= "Designed & Developed by <a style='color:white' href='https://femtogen.com' style='color:cadetblue;'><strong>Femtogen Technologies</strong></a>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "</table>";
 	$message .= "</body>";
 	$message .= "</html>";

 	mail($to, $subject, $message, $headers);
 	echo true;

 }
 ?>

