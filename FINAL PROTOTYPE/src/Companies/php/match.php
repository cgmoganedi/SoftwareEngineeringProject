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

//get all jobs posted.
$all_job_descriptions = Query2('Job_Description','job_postings',$conn);
$all_job_ids = Query2('ID','job_postings',$conn);
print_r($all_job_ids);
//for all job postings, find matching candidates and upload to database
$cnt = 0;

foreach ($all_job_descriptions as $jobd) {
    //Matching skills
    $matching_skills = array();
    foreach ($skills as $item) {
        if (strpos($jobd, $item) !== false) {
            array_push($matching_skills, $item);
        }
    }

//Matching majors
    $matching_majors = array();
    foreach ($majors as $item) {
        if (strpos($jobd, $item) !== false) {
            array_push($matching_majors, $item);
        }
    }
//students matching on majors (by ID)
    $s_m_m = Match($matching_majors, $conn, 'ID', 'majors', 'Major');
//s m m = students matching by majors (by names)
    $s_m_m_n = Match($s_m_m, $conn, 'Name', 'users', 'ID');

//students matching on skills (by ID)
    $s_m_s = Match($matching_skills, $conn, 'ID', 'user_skills', 'Skill');
//students matching on skills (by Name)
    $s_m_s_n = Match($s_m_s, $conn, 'Name', 'users', 'ID');

//combine candidates matching by skill and majors
    $all_id_matches = array_values(array_unique(array_merge($s_m_s, $s_m_m)));
    $all_name_matches = array_values(array_unique(array_merge($s_m_s_n, $s_m_m_n)));

//adding to all matches to data
    for ($x = 0; $x < sizeof($all_id_matches) ; $x++) {
    $sql = "INSERT INTO matches(Job,User,User_name) VALUES($all_job_ids[$cnt],'$all_id_matches[$x]','$all_name_matches[$x]')";
    mysqli_query($conn,$sql);
    }
    $cnt += 1;
}


//matching method
    function Match($data_array, $connection, $required_field, $table, $data_field)
    {
        $result_array = array();
        foreach ($data_array as $item) {
            $sql = "SELECT " . $required_field . " FROM " . $table . " WHERE " . $data_field . " = '$item'";
            $m_m_q = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($m_m_q)) {
                array_push($result_array, $row[$required_field]);
            }
        }
        return array_values(array_unique($result_array));
    }