<?php
 
function main(array $args) : array
{
    $name = $args["name"] ?? "Mohamad";
    
    $greeting = "Hello {$name}!";
    echo $greeting;
 
    return [
        'body' => $greeting,
    ];
}
