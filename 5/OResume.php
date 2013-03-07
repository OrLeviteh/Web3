<?php

header('Content-type: application/json');
	


$OResume = array(
					"Professional Experience" => array('2012 - Designer at Matnas Interactive, Tel-Aviv.', 
														'2011 - Design intern at Kikkerland, NY office.', 
														'2010 ' => array ('Freelance work: video editing, graphic design.', 																										'Volunteer Designer and Foster home for puppies at Tel-Aviv Animal Shelter.'),
														 '2009 - Design intern at IDEO, New-York office.',
														 '2005 - 2006 - Art director and costume designer for Suzzy59 - a music videos direction & production company.',
														'2005 - Look models agency - extra in movies and commercials.',
														'2003 - 2005 - Israel Defense Force - two years service:' => array ('As Corporal: boot camp class commander.',
																															'As Sergeant: a non-commissioned officer in the Bureau of the Major-General ofGround Forces Command.'),
														'2003 - Private English tutor.'),



					"Education" => array('2012 - current - Parsons The New School for Design'=> array ('Master of Fine Arts in Design and Technology.', 																										'Student Union representative.'), 
														'2006 - 2010 - HIT - Holon Institute of Technology, Israel' => array ('Bachelor of Industrial Design, Major: Social - Environmental design.', 'GPA: 4.0. Graduated Cum Laude.','Student Union representative of the Industrial Design department.'),
														 
														'2005 - 2006 - 6B Studio, Tel Aviv, Six months course in preparation for academic design studies.'),

					"Skills and Expertise" => array ('User experience & interaction design', 'wireframing', 'physical computation', 'web design &
programming', '3D computerized modeling and rendering', 'video editing', 'sound editing',
							'Softwares'=> array ("Adobe Suite","SolidWorks","Rhinoceros",'Final Cut', 'Microsoft Office', 'Apple iLife'),
							'Hand skills'=> array ('modeling', 'sketching', 'rendering', 'practical workshop abilities of various materials and methods.')
							),
						
					'Additional Information' => array ('Growing up with an artist for a mother and an engineer for a father, becoming a designer was probably inevitable.')	
						
							);
							
							
	echo json_encode($OResume);
	
?>
				
