<?php

header("Content-Type: application/json", true);
require_once 'database_connections.php';
require_once 'db.php';


if($_GET['action']=='GetAllActiveMembers')

{
	$query = "Select COUNT(MembershipId) as ActiveMembers  from members m where IsMember = 1 and IsActive =1";

	GetResultJSON($con,$query);

}
if($_GET['action']=='GetAllPassOverMembers')

{
	$query = "Select COUNT(n.MembershipId) PassOverMembers from members n WHERE DATEDIFF(EndDate,Now()) <=45 and DATEDIFF(EndDate,Now()) > 0 and  IsActive = 1 and IsMember = 1 and IsActive = 1";

	GetResultJSON($con,$query);

}
if($_GET['action']=='GetAllInActiveMembers')

{
	$query = "Select COUNT(MembershipId) as InActiveMembers  from members m where IsMember = 0 and IsActive =1";

	GetResultJSON($con,$query);

}
if($_GET['action']=='GetAllActiveMembersCount')

{
	$query = "SELECT COUNT(MembershipId) as TotalMembers from members where  IsActive =1";

	GetResultJSON($con,$query);

}
if($_GET['action']=='GetAllExpiredMembers')

{
	$query = "Select COUNT(MembershipId) as ExpiredMembers from members WHERE DATEDIFF(EndDate,Now()) < 0 and IsActive = 1 and IsMember = 1";

	GetResultJSON($con,$query);

}

if($_GET['action']=='GetAllPaymentCurrentMonth')

{
	$query = "SELECT IFNULL(SUM(MF.MembershipFee),0) MonthlyIncome , Month(NOW()) as 'Month' from  `notification` N
	inner join members M on M.MembershipId = N.MembershipId
	inner join notificationtype NT on NT.NotificationTypeId = N.NotificationTypeId
	inner join membershipfee MF on  MF.MembershipFeeId = M.MembershipFeeId
	WHERE  Month(N.CreatedDate) = Month(Now()) and NT.IsActivated = 0 and M.IsActive = 1";

	GetResultJSON($con,$query);

}

if($_GET['action']=='GetAllPaymentThisYear')

{
	$query = "SELECT IFNULL(SUM(MF.MembershipFee),0) YearlyIncome, YEAR(NOW()) 'Year' from  `notification` N
	inner join members M on M.MembershipId = N.MembershipId
	inner join notificationtype NT on NT.NotificationTypeId = N.NotificationTypeId
	inner join membershipfee MF on  MF.MembershipFeeId = M.MembershipFeeId
	WHERE  Year(N.CreatedDate) = Year(Now()) and NT.IsActivated = 0 and M.IsActive = 1";

	GetResultJSON($con,$query);

}

if($_GET['action']=='GetAllPaymentPreviousYear')

{
	$query = "SELECT IFNULL(SUM(MF.MembershipFee),0) PreviousYearIncome, YEAR(NOW())-1 'PreviousYear' from  `notification` N
	inner join members M on M.MembershipId = N.MembershipId
	inner join notificationtype NT on NT.NotificationTypeId = N.NotificationTypeId
	inner join membershipfee MF on  MF.MembershipFeeId = M.MembershipFeeId
	WHERE  Year(N.CreatedDate) = Year(Now())-1 and NT.IsActivated = 0 and M.IsActive = 1";

	GetResultJSON($con,$query);

}

if($_GET['action']=='ABC')

{
	$query = "SELECT  (
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 1 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Jan,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 2 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Feb,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 3 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Mar,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 4 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Apr,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 5 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS May,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 6 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Jun,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 7 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Jul,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 8 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Aug,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 9 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Sep,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 10 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Oct,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 11 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
	) AS Nov,
	(
	SELECT COUNT(*)
	FROM   members where Month(CreatedDate) = 12 and YEAR(CreatedDate) = YEAR(NOW()) and IsActive = 1
) AS 'Dec'";

GetResultJSON($con,$query);

}

if($_GET['action']=='GetAllYearWiseMembers')

{
	$query = "SELECT  (
	SELECT COUNT(*)
	FROM   members where  YEAR(CreatedDate) = 2018 and IsActive = 1
	) AS 'Eighteen',
	(
	SELECT COUNT(*)
	FROM   members where  YEAR(CreatedDate) = 2019 and IsActive = 1
	) AS 'Nineteen',
	(
	SELECT COUNT(*)
	FROM   members where  YEAR(CreatedDate) = 2020 and IsActive = 1
	) AS 'Twenty',
	(
	SELECT COUNT(*)
	FROM   members where  YEAR(CreatedDate) = 2021 and IsActive = 1
	) AS 'TwentyOne',
	(
	SELECT COUNT(*)
	FROM   members where  YEAR(CreatedDate) = 2022 and IsActive = 1
	) AS 'TwentyTwo',
	(
	SELECT COUNT(*)
	FROM   members where  YEAR(CreatedDate) = 2023 and IsActive = 1
	) AS 'TwentyThree',
	(
	SELECT COUNT(*)
	FROM   members where  YEAR(CreatedDate) = 2024 and IsActive = 1
	) AS 'TwentyFour'";

GetResultJSON($con,$query);

}




?>