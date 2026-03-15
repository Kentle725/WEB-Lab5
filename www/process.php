<?php
require 'db.php';
require 'Patient.php';

$patient = new Patient($pdo);

$patient_name = htmlspecialchars($_POST['patient_name']);
$age = intval($_POST['age']);
$doctor = htmlspecialchars($_POST['doctor'] ?? '');
$first_consultation = isset($_POST['first_consultation']) ? 1 : 0;
$visit_form = $_POST['visit_form'] ?? '';

$patient->add($patient_name, $age, $doctor, $first_consultation, $visit_form);

header("Location: index.php");
exit();
