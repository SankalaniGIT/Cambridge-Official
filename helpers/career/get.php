<?php

$careerInstance = new DBConnection();

$connCareer = $careerInstance->connect();


//Removing Expired Vacancies From Relation
$expiredSQLAll = "SELECT * FROM career WHERE TRUE";
$resultEXP = mysqli_query($connCareer, $expiredSQLAll);
while ($exp = mysqli_fetch_assoc($resultEXP)) {
    $id = $exp['id'];
    $dif = $exp['postDuration'] - round((time() - $exp['datePosted']) / (3600 * 24));

    if ($dif < 1) {
        mysqli_query($connCareer, "DELETE FROM career WHERE id='$id'");
    }


}


$getSQL = "SELECT id,position,description,noOfVacants,datePosted,postDuration,priority FROM career ORDER BY id DESC LIMIT 0,3";

$resultSQl = mysqli_query($connCareer, $getSQL);

if (mysqli_num_rows($resultSQl) > 0) {
    $career[][] = '';
}

$init = 0;
while ($row = mysqli_fetch_assoc($resultSQl)) {
    $career[$init]['id'] = $row['id'];
    $career[$init]['position'] = $row['position'];
    $career[$init]['description'] = $row['description'];
    $career[$init]['noOfVacants'] = $row['noOfVacants'];
    $career[$init]['datePosted'] = date('Y-M-d H:i:s a', $row['datePosted']);
    $career[$init]['postDuration'] = $row['postDuration'] - round((time() - $row['datePosted']) / (3600 * 24));
    $career[$init]['priority'] = $row['priority'];

    $init++;
}
if (isset($career)) {
    $countCareers = count($career);
}


$countSQL = "SELECT id,position,description,datePosted,postDuration,priority FROM career WHERE true";

$totalVacancies = mysqli_num_rows(mysqli_query($connCareer, $countSQL));

if ($totalVacancies % 3 == 0) {
    if ($totalVacancies < 3) {
        $pages = 1;
    } else {
        $pages = floor($totalVacancies / 3);
    }
} else {
    $pages = floor($totalVacancies / 3) + 1;
}
