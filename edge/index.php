<?php
$keys = array("firstname", "lastname", "street", "zip", "city");
$contacts = array(
	"John,Doe,Thierschstr. 34,80000,Munich",
	"Peter,Huber,Theresienstr. 11,80333,Munich",
	);

$combined = array();
foreach ($contacts as $contact_string) {
	$parts = explode(",", $contact_string);
	$contact = array();
	for ($i = 0; $i < count($keys); $i++) {
		$contact[$keys[$i]] = $parts[$i];
	}
	$combined[] = $contact;
}

echo json_encode($combined);
?>
