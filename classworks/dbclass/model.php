<?php
function select(string $table, int $limit){
    $statement = "SELECT * FROM $table LIMIT $limit";
    return $statement;
}
function executeQuery($con, $statement){
    $prepare = mysqli_prepare($con, $statement);
    $execute = mysqli_stmt_execute($prepare);
    $results = mysqli_stmt_get_result($prepare);
    return $results;
}
function fetchAllCountries($con){
    $statement = select('country',10);
   $results = executeQuery($con, $statement);
    return $results;
}
function fetchAllLanguages($con){
    $statement = select('countrylanguage',5);
    $results = executeQuery($con, $statement);
    return $results;
}