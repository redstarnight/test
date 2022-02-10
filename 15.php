<?php

    $person = [
        'name' => "mohammad",
        "family" => "akbari",
        "age" => 24
    ];

    $name = $person['name'];
    echo $name;

    //////////////

    [
        'name' => $name,
        'family' => $family,
        'age' => $age

    ] = $person;

    echo $name;
?>