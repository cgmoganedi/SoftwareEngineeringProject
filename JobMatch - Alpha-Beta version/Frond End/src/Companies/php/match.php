<?php
include_once 'connection.php';
include_once 'things.php';

//Skills
$skills = array();
$skills_query = $conn->query("SELECT * FROM user_skills");

if ($skills_query->num_rows > 1)
{
    while($row = $skills_query->fetch_assoc())
    {
        array_push($skills,strtoupper($row['Skill']));
    }
}

//Majors
$majors = array();
$majors_query = $conn->query("SELECT * FROM majors");

if ($majors_query->num_rows > 1)
{
    while($row = $majors_query->fetch_assoc())
    {
        array_push($majors,strtoupper($row['Major']));
    }
}

//Job description
$job_description = Query('Job_Description','job_postings','1',$conn);

$job_description = strtoupper($job_description);

//Matching skills
$matching_skills = array();
foreach ($skills as $item) {
    if (strpos($job_description, $item) !== false) {
        array_push($matching_skills,$item);
    }
}

//Matching majors
$matching_majors = array();
foreach ($majors as $item) {
    if (strpos($job_description, $item) !== false) {
        array_push($matching_majors,$item);
    }
}

//students matching on skills
$s_m_m = array(); //s m m = students matching by majors
foreach ($matching_majors as $item){
    $m_m_q = $conn->query("SELECT ID FROM majors where Major = '$item'"); //m m q = matching majors query

    while($row = $m_m_q->fetch_assoc()) {
        array_push($s_m_m, $row['ID']);
    }
}

print_r($s_m_m);

$s_m_m_n = array(); //s m m = students matching by majors by names
foreach ($s_m_m as $item){
    $m_m_q = $conn->query("SELECT Name FROM users where ID = '$item'"); //m m q = matching majors query

    while($row = $m_m_q->fetch_assoc()) {
        array_push($s_m_m_n, $row['Name']);
    }
}

print_r(array_unique($s_m_m_n));

