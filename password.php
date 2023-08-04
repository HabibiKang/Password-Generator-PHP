<?php
    // Random Specials
    $specials = ["!", "#", "$", "@", "!", "%", "^", "&", "*", "(", ")", "_", "-", "+", "=", 
    "~", "`", "<", ">", ",", ".", "/", "?", "{", "}", "[", "]", "|", "\""];

    // Random letters
    $letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "O", "M", "N", "O", "P", "Q","R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

    // Random numbers
    $numbers = range(1, 1001, 1);

    // Generate Password Function
    function generatePW($specials, $letters, $numbers) {
        // Make an array to store the password
        $password = array();
        
        // Create and push random specials to password array
        for ($i=0; $i <= 3; $i++) {
            $rand_specials = array_rand($specials);
            $rand_specs = $specials[$rand_specials];
            $password[] = $rand_specs;
        }
        // Create and push random letters to password array
        for ($i=0; $i <= 3; $i++) {
            $rand_letters = array_rand($letters);
            $rand_lets = $letters[$rand_letters];
            $password[] = $rand_lets;
        }
        // Create and push random numbers to password array
        for ($i=0; $i <= 3; $i++) {
            $rand_numbers = array_rand($numbers);
            $rand_nums = $numbers[$rand_numbers];
            $password[] = $rand_nums;
        }
        // Output password
        foreach ($password as $pw) {
            echo $pw;
        }
    }
    // Function call
    echo generatePW($specials, $letters, $numbers);
