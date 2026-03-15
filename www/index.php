<?php
require 'db.php';
require 'Patient.php';

$patient = new Patient($pdo);
$all = $patient->getAll();
?>
<h2>Сохранённые данные:</h2>
<ul>
<?php foreach($all as $row): ?>
    <li><?= $row['patient_name'] ?>, <?= $row['age'] ?> лет, <?= $row['doctor'] ?>, <?= $row['visit_form'] ?>, Первая консультация: <?= $row['first_consultation'] ? 'Да' : 'Нет' ?></li>
<?php endforeach; ?>
</ul>

<a href="form.html">Заполнить форму</a>
