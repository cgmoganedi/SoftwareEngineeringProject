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
$s_m_m = Match($matching_majors,$conn,'ID','majors','Major');
//s m m = students matching by majors by names
$s_m_m_n = Match($s_m_m,$conn,'Name','users','ID');

print_r(array_unique($s_m_m_n));

function Match($data_array, $connection, $required_field, $table, $data_field)
{
    $result_array = array();
    foreach ($data_array as $item){
        $sql = "SELECT ".$required_field." FROM ".$table." WHERE ".$data_field." = '$item'";
        $m_m_q = mysqli_query($connection,$sql);

        while($row =  mysqli_fetch_assoc($m_m_q)) {
            array_push($result_array, $row[$required_field]);
        }
    }
    return $result_array;
}