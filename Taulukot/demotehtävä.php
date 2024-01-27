<?php
    // demotehtävä 1

    $programming_languages = ['JavaScript', 'PHP', 'Python', 'C++'];

    $i = 0;
    while ($i < count($programming_languages)) {
        echo $programming_languages[$i]. "\n";
        $i++;
    }

    for ($i = 0; $i < count($programming_languages); $i++) {
        echo $programming_languages[$i] . "\n";
    }

    foreach ($programming_languages as $programming_language) {
        echo $programming_language . "\n";
    }

    // demotehtävä 2

    function changeArray(array $arr) {
        array_shift($arr);
        array_unshift($arr, 'Node.js');
        print_r($arr);
    }
    changeArray($programming_languages);

    
    function bigLetters($string) {
        return strtoupper($string);
    }
    array_map('bigLetters', $programming_languages);
    foreach ($programming_languages as $programming_language) {
        echo bigLetters($programming_language) . "\n";
    }

    // demotehtävä 3

    $programming_languages = array("Most popular"=>"JavaScript", "Second"=>"Python", "Third"=>"PHP", "Fourth"=>"C++");
    $programming_languages['Fifth'] = 'Java';
    print_r($programming_languages);
    foreach ($programming_languages as $programming_language) {
        echo $programming_language . "\n";
    }

// demotehtävä 4

$pets = array(
    "dog" => array (
        "name" => "Rodger",
        "species" => "dog",
        "age" => 1
    ),
    "cat" => array (
        "name" => "Marla",
        "species" => "cat",
        "age" => 10
    ),
    "hamster" => array (
        "name" => "Leo",
        "species" => "hamster",
        "age" => 1
    )
);

$keys = array_keys($pets);

for ($i = 0; $i < count($pets); $i++) {

    echo ucfirst($keys[$i]) . " {\n";
    
    foreach($pets[$keys[$i]] as $key => $value) {
        
        echo $key . " : " . $value . "\n";
    }
    
    echo "} \n";   
}
$pets[$keys[2]]["name"] = "Masiania";

array_shift($pets);

$parrot =  array (
        "name" => "Pirate",
        "species" => "parrot",
        "age" => 1
);

array_unshift($pets, $parrot);

print_r($pets);

?>