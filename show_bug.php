<?php
    require_once "bootstrap.php";
    $id = $argv[1];
    $bug = $entityManager->find('Bug', $id);
    if ($bug === null) {
        echo "No bug found.\n";
        exit(1);
    }
    //$bug = $entityManager->find('User', $bug->getEngineer());
    echo sprintf("-%s%s\n", "bug : " ,$bug->getDescription());
    echo sprintf("-%s%s\n", "engineer : " , $bug->getEngineer());
