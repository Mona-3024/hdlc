<?php
$student_name =$_POST['student_name'];
$student_id =$_POST['student_id'];
$course_program =$_POST['course_program'];
$department =$_POST['department'];
$contact_number =$_POST['contact_number'];
$email =$_POST['email'];
$dob = $_POST['dob'];
$gender =$_POST['gender'];
$parent_guardian_name =$_POST['parent_guardian_name'];
$academic_year_semester =$_POST['academic_year_semester'];
$gpa =$_POST['gpa'];
$conn = new mysqli('localhost', 'root', '', 'student_info');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO students (student_name, student_id, course_program, department, contact_number, email, dob, gender, parent_guardian_name, academic_year_semester, gpa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssd", $student_name, $student_id, $course_program, $department, $contact_number, $email, $dob, $gender, $parent_guardian_name, $academic_year_semester, $gpa);
    $stmt->execute();
    echo "New record created successfully";
} 
$stmt->close();
$conn->close();
?>
