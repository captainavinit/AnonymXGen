<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="The ID Generator Tool is a simple yet powerful utility designed to generate unique identification numbers or IDs based on specified parameters. Whether you need IDs for database records, user accounts, transactions, or any other purpose, this tool provides a convenient solution to create custom IDs tailored to your requirements.">
    <meta name="Keywords" content="fake id, identity generator, name generator, profile Generator">
    <meta name="Author" content="Abhineet Jha">
    <meta name="Owner" content="Abhineet Jha">
    <meta name="Content-Language" content="en">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>AnonymXGen</title>
</head>
<body>
    <a name="top"></a>
    <table cellpadding="2" cellspacing="5" border="0">
        <tr>
            <td align="left" valign="middle" width="20%">
                <img src="logo.png" alt="Abhi's logo" border="0">
            </td>
            <td align="center" valign="middle" width="800">
                <h1>AnonymXGen</h1>
            </td>
            <td align="right" valign="middle" width="20%"></td>
        </tr>
    </table>
    
    <!-- Navigation -->
    <nav class="navbar">
        <a href="#index">Home</a>
        <a href="#generate">Generate Id</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
    </nav>
        
    <div class="content">
        <p>"Welcome to our digital sanctuary, where anonymity is your armor. Our ID Generator Tool empowers you to surf the web incognito, shielding your identity from prying eyes. Safeguard your privacy effortlessly and explore the internet with confidence. Unveil your digital alter ego and navigate the online world with peace of mind."</p>
    </div>
	
	 <link rel="icon" type="image/x-icon" href="logo.png">
	
<?php
// Function to generate fictional character information
function generateCharacter($gender) {
    $character = array();
    $character['Gender'] = ucfirst($gender);
    // Generate other fictional character information
    $lastName = generateLastName();
    $character['Name'] = generateName($gender) . ' ' . $lastName;
    $character['Father\'s Name'] = generateName('male') . ' ' . $lastName;
    $character['Mother\'s Name'] = generateName('female') . ' ' . $lastName;
    $character['Date of Birth'] = generateDateOfBirth();
	$character['Age'] = calculateAge($character['Date of Birth']);
    $character['Religion'] = generateReligion();
	$character['Blood Type'] = generateBloodType();
    $character['Height'] = rand(140, 190); // Random height between 140 cm and 190 cm
    $character['Weight'] = rand(50, 100); // Random weight between 50 kg and 100 kg
	$character['Address'] = generateAddress(); // Add generated address
	$character['Qualification'] = generateQualification(); // Generate qualification
	$character['Hobbies'] = generateHobbies();
	$character['Hobbies'] = generateHobbies();
	$character['Physical Appearance']['Hair color'] = generateHairColor();
    $character['Physical Appearance']['Eye color'] = generateEyeColor();
	
    return $character;
}


// Function to generate a random name based on gender
function generateName($gender) {
    // Determine the file to read based on gender
    $nameFile = ($gender == 'male') ? 'male.txt' : 'female.txt';
    
    // Read names from the file into an array, ignoring empty lines
    $names = file($nameFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // Remove any duplicate names (optional)
    $names = array_unique($names);
    
    // Select a random name from the array
    return $names[array_rand($names)];
}

// Function to generate a random last name
function generateLastName() {
    // Read last names from the file into an array, ignoring empty lines
    $lastNames = file('last_names.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // Remove any duplicate last names (optional)
    $lastNames = array_unique($lastNames);
    
    // Select a random last name from the array
    return $lastNames[array_rand($lastNames)];
}

// Function to generate a random date of birth
function generateDateOfBirth() {
    $year = rand(1993, 2005); // Random year between 1950 and 2005
    $month = rand(1, 12); // Random month between 1 and 12
    $day = rand(1, 28); // Random day between 1 and 28 (assuming all months have 28 days)
    return "$day-$month-$year";
}

// Function to calculate age based on date of birth
function calculateAge($dob) {
    $dob = new DateTime($dob);
    $now = new DateTime();
    $age = $now->diff($dob);
    return $age->y; // Return the years part of the age difference
}

// Function to generate a random religion
function generateReligion() {
    $religions = array('Hinduism');// like this add more ('Buddhism', 'Judaism')
    return $religions[array_rand($religions)];  }
	
// Function to generate a random blood type
function generateBloodType() {
    $bloodTypes = array('A', 'B', 'AB', 'O');
    return $bloodTypes[array_rand($bloodTypes)];
}
	
// Function to generate a random address from a file
function generateAddress() {
    // Read addresses from the file into an array, ignoring empty lines
    $addresses = file('addresses.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // Select a random address from the array
    $randomAddress = $addresses[array_rand($addresses)];
    
    return $randomAddress;
}

// Function to generate a random educational qualification
function generateQualification() {
    // Read qualifications from the file into an array, ignoring empty lines
    $qualifications = file('qualifications.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // Remove any duplicate qualifications (optional)
    $qualifications = array_unique($qualifications);
    
    // Select a random qualification from the array
    return $qualifications[array_rand($qualifications)];
}

// Function to generate random hobbies
function generateHobbies() {
    $hobbies = array('Reading', 'Traveling', 'Painting', 'Cooking', 'Gardening', 'Photography', 'Playing music', 'Writing', 'Sports', 'Hiking');
    $numHobbies = rand(2, 4); // Randomly select 2 to 4 hobbies
    $selectedHobbies = array_rand($hobbies, $numHobbies);
    if (!is_array($selectedHobbies)) {
        $selectedHobbies = array($selectedHobbies);
    }
    $hobbiesList = array();
    foreach ($selectedHobbies as $hobbyIndex) {
        $hobbiesList[] = $hobbies[$hobbyIndex];
    }
    return implode(', ', $hobbiesList);
}


// Function to generate a random eye color
function generateEyeColor() {
    $eyeColors = array('Brown', 'Blue', 'Green');
    return $eyeColors[array_rand($eyeColors)];
}

// Function to generate a random hair color
function generateHairColor() {
    $hairColors = array('Black', 'Brown',);
    return $hairColors[array_rand($hairColors)];
}



// Main code
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gender = $_POST['gender'];
    $character = generateCharacter($gender);
    // Output generated information
    echo '<br /><strong>Generated Information:</strong><br />';
    echo "Gender: {$character['Gender']}<br />";
    echo "Name: {$character['Name']}<br />";
    echo "Father's Name: {$character['Father\'s Name']}<br />";
    echo "Mother's Name: {$character['Mother\'s Name']}<br />";
    echo "Date of Birth: {$character['Date of Birth']}<br />";
    echo "Age: {$character['Age']}<br />";
    echo "Religion: {$character['Religion']}<br />";
    echo "Blood Type: {$character['Blood Type']}<br />";
    echo "Address: {$character['Address']}<br />";
    echo "<br /><strong>Physical Appearance</strong><br />";
    echo "Height: {$character['Height']}<br />";
    echo "Weight: {$character['Weight']}<br />";	
    echo "Hair color: {$character['Physical Appearance']['Hair color']}<br />";
    echo "Eye color: {$character['Physical Appearance']['Eye color']}<br />";
	echo "<br /><strong>Academic</strong><br />";
    echo "Qualification: {$character['Qualification']}<br />";
    echo "<br /><strong>Personality</strong><br />";
    echo "Hobbies: {$character['Hobbies']}<br />";
} else {
    // Redirect to index.php if accessed directly
    header('Location: index.php');
    exit;
}



?>
</body>


<footer  class="paragraph-spacing">
<p style="color:Green;" class="paragraph-spacing"> <br>© 2024 AnonymXGen | Powered by Abhineet Jha</br></p>
	
        <p class="paragraph-spacing">The main purpose of the website is to provide a tool for users to generate fake 
		identities or profiles to protect their privacy and maintain anonymity
		while browsing the internet. By using fake identities generated by the tool, users can avoid sharing their real 
		personal information and reduce the risk of data leaks or privacy breaches. This can help users maintain their online privacy and security 
		while engaging in various online activities.</p>
 </footer>
</html>
