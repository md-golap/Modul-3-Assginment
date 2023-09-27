<?php
function generatePassword($length) {
    // Define character sets for different types of characters
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all character sets
    $allCharacters = $lowercase . $uppercase . $numbers . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Get a random character from $allCharacters
        $randomChar = $allCharacters[rand(0, strlen($allCharacters) - 1)];

        // Append the random character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Generate a 12-character password
$generatedPassword = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $generatedPassword;
?>