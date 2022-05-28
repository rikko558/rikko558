<?php
$memberplaystation = [
	[
"Name" => "Rakka Ardyansyah",
"Id" => "2613214", 
"Codeaddress" => "rakaardiansyah120@playstation.id", 
"MemberType" => "Bronze"
    ], 

    [
"Name" => "Javan Ardiano",
"Id" => "2613228", 
"Codeaddress" => "javandino@playstation.id", 
"MemberType" => "silver"
    ], 

    [
"Name" => "Verdy aza",
"Id" => "2613316", 
"Codeaddress" => "verza567@playstation.id", 
"MemberType" => "Gold"
    ]
];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tugas Penulisan Data Associative</title>
</head>
<body>
    <hl>Tugas Penulisan Data Associative</hl>

    <?php foreach ($memberplaystation as $plys) : ?>

     <ul>
     	<li> Name : <?= $plys ["Name"]; ?></li>
     	<li> Id : <?= $plys ["Id"]; ?></li>
     	<li> Codeaddress : <?= $plys ["Codeaddress"]; ?><li>
     	<li> MemberType : <?= $plys ["MemberType"]; ?></li>
     </ul>
    <?php endforeach; ?>



</body>
</html>