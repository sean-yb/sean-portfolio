<?php
// store the location of the data in a variable
$fileDir = 'xml/';
// create a new file object in PHP's mind
$doc = new DOMDocument();

// fill that document with XML...

// make an XML element called 'article' in the new doc
$root = $doc -> createElement('location');
// attach that element to the XML hierarchy
$doc -> appendChild($root);

// make an XML element called 'headline' in the new doc
$city = $doc -> createElement('city');
// attach that element to the base of the XML hierarchy
$root -> appendChild($city);
// put some text into the XML doc, bringing in what user typed in the form
$ctext = $doc -> createTextNode($_POST['newcity']);
// attach the text node inside the headline tag
$city -> appendChild($ctext);

// make an XML element called 'headline' in the new doc
$state = $doc -> createElement('state');
// attach that element to the base of the XML hierarchy
$root -> appendChild($state);
// put some text into the XML doc, bringing in what user typed in the form
$stext = $doc -> createTextNode($_POST['newstate']);
// attach the text node inside the headline tag
$state -> appendChild($stext);

// make an XML element called 'headline' in the new doc
$manager = $doc -> createElement('manager');
// attach that element to the base of the XML hierarchy
$root -> appendChild($manager);
// put some text into the XML doc, bringing in what user typed in the form
$mtext = $doc -> createTextNode($_POST['newmanager']);
// attach the text node inside the headline tag
$manager -> appendChild($mtext);

// make an XML element called 'headline' in the new doc
$assist = $doc -> createElement('assist');
// attach that element to the base of the XML hierarchy
$root -> appendChild($assist);
// put some text into the XML doc, bringing in what user typed in the form
$atext = $doc -> createTextNode($_POST['newassist']);
// attach the text node inside the headline tag
$assist -> appendChild($atext);

// make an XML element called 'headline' in the new doc
$phone = $doc -> createElement('phone');
// attach that element to the base of the XML hierarchy
$root -> appendChild($phone);
// put some text into the XML doc, bringing in what user typed in the form
$ptext = $doc -> createTextNode($_POST['newphone']);
// attach the text node inside the headline tag
$phone -> appendChild($ptext);

// store the current date and time in a variable
$id = date('YmdHis');

// put that value into an attribute called 'id' on the article element
$root -> setAttribute('id',$id);
//concatenate that datetime ($id) into a new filename, so no two will be alike
$newfilename = 'location'.$id.'.xml';

// save the document into the folder
$doc -> save($fileDir.$newfilename);

// redirect user to All Locations...
header('location:locations.php');


?>