 <?php 
 header("Content-Type: application/json", true);
 require_once 'database_connections.php';
 require_once 'db.php';


 if($_GET['action']=='GetAllMember')

 {
 	
 	try
 	{
 		$query = "SELECT M.MembershipId, M.TitleId, M.FirstName, M.LastName,M.FatherName, M.Gender, M.Dob, M.NationalityId,N.Nationality, M.City, M.PostalCode, M.PresentAddress, M.PermanentAddress, M.Landline, M.CellNo, M.WhatsAppNo, M.Email, M.RealEstate, M.BusinessStartedYear, M.Location, M.QualificationId,Q.Qualification,M.DeciplineId, M.Specialization, M.Institute, M.PassedYear, MT.MembershipType,M.MembershipTypeId, MF.MembershipFee,M.MembershipFeeId,  M.JsonWorkInfo, M.FileImage, M.FileCNIC,M.IsMember,M.DesignationId,D.Designation,M.StartDate,M.EndDate,M.CNIC,M.Linkdin,M.Dealership,M.WorkArea, M.AgentDesignation,T.Title,M.Facebook,DC.Decipline,M.DeciplineId,DATEDIFF(M.EndDate,Now()) as 'Difference'
 		FROM members M 

 		inner join nationality N on N.NationalityId = M.NationalityId
 		inner join qualification Q on Q.QualificationId = M.QualificationId
 		inner join membershiptype MT on MT.MembershipTypeId = M.MembershipTypeId
 		inner join membershipfee MF on MF.MembershipFeeId = M.MembershipFeeId
 		inner join designation D on D.DesignationId = M.DesignationId
 		inner join title T on T.TitleId = M.TitleId
 		inner join decipline DC  on DC.DeciplineId = M.DeciplineId
 		where M.IsActive = 1  order by M.CreatedDate desc";
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

  if($_GET['action']=='SendMailPassOver')

 {
     $data = json_decode(json_encode($_POST));
     $to = $data->To;
     $enddate = $data->EndDate;
 	//$to = 'info@repa.org.pk';
 

 	$subject = 'REPA Membership Form Received.';

 	$headers = "From: " . "noreply@repa.org.pk" . "\r\n";
 	$headers .= "Reply-To: ". "info@repa.org.pk" . "\r\n";
 	$headers .= "CC: info@repa.org.pk\r\n";
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
 	$message .= "<img src='https://www.segmite.org/Live/logo-repa-resize.png' alt='Logo'>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr>";
 	$message .= "<td>";
 	$message .= "<h3 style='font-family:'Raleway', sans-serif;font-size:16px; margin-top:30px;'>";
 	$message .= "REPA Membership Fees Reminder.";
 	$message .= "</h3>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr>";
 	$message .= "<td style='font-family:'Raleway', sans-serif;font-size:14px;'>";
 	$message .= "<p>REPA’s record shows that your annual membership fee is due/overdue which needs/needed to be paid on or before <strong>$enddate</strong>.</p>";
 	$message .= "<p>Please note that those who wish to pay online/bank transfer, bank details have also been provided therein.</p>";
 	$message .= "<p>Please note that all your contributions including the fees you pay are a great source for REPA to cater to the needs concerning various administrative and other expenses/overheads on account of costs of visits to different sites, management meetings, dinners/lunches, transportations and similar events etc.</p>";
 	$message .="<p>We therefore request you and look forward to receiving your payment at the earliest so as it helps us serve both REPA and all its members better.</p>";
 	$message .="<p>(Please ignore this message in case you’ve already cleared you dues).</p>";
 	$message .= "<p>Sincerely yours, <strong>REPA Team.</strong></p>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr style='background-color:#26333c;color:white'>";
 	$message .= "<td align='center' style='font-family:'Raleway', sans-serif;font-size:12px;'>";
 	$message .= "Designed & Developed by <a style='color:white' href='https://femtogen.com' style='color:white;'><strong>Femtogen Technologies</strong></a>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "</table>";
 	$message .= "</body>";
 	$message .= "</html>";

 	mail($to, $subject, $message, $headers);
 	echo true;
 }
 
  if($_GET['action']=='SendMailExpired')

 {
 	//$to = 'info@repa.org.pk';
 	$to = 'musabyahiya@hotmail.com';

 	$subject = 'REPA Membership Form Received.';

 	$headers = "From: " . "noreply@repa.org.pk" . "\r\n";
 	$headers .= "Reply-To: ". "info@repa.org.pk" . "\r\n";
 	$headers .= "CC: info@repa.org.pk\r\n";
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
 	$message .= "<img src='https://www.segmite.org/Live/logo-repa-resize.png' alt='Logo'>";
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
 	$message .= "<p>REPA’s record shows that your annual membership fee is due/overdue which needs/needed to be paid.</p>";
 	$message .= "<p>Please note that those who wish to pay online/bank transfer, bank details have also been provided therein.</p>";
 	$message .= "<p>Please note that all your contributions including the fees you pay are a great source for REPA to cater to the needs concerning various administrative and other expenses/overheads on account of costs of visits to different sites, management meetings, dinners/lunches, transportations and similar events etc.</p>";
 	$message .="<p>We therefore request you and look forward to receiving your payment at the earliest so as it helps us serve both REPA and all its members better.</p>";
 	$message .="<p>(Please ignore this message in case you’ve already cleared you dues).</p>";
 	$message .= "<p>Sincerely yours, <strong>REPA Team.</strong></p>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "<tr style='background-color:#26333c;color:white'>";
 	$message .= "<td align='center' style='font-family:'Raleway', sans-serif;font-size:12px;'>";
 	$message .= "Designed & Developed by <a style='color:white' href='https://femtogen.com' style='color:white;'><strong>Femtogen Technologies</strong></a>";
 	$message .= "</td>";
 	$message .= "</tr>";
 	$message .= "</table>";
 	$message .= "</body>";
 	$message .= "</html>";

 	mail($to, $subject, $message, $headers);
 	echo true;
 }
 
 ?>