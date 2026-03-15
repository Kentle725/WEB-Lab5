<?php
class Patient {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function add($patient_name, $age, $doctor, $first_consultation, $visit_form) {
        $stmt = $this->pdo->prepare(
            "INSERT INTO patients (patient_name, age, doctor, first_consultation, visit_form) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->execute([$patient_name, $age, $doctor, $first_consultation, $visit_form]);
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM patients");
        return $stmt->fetchAll();
    }

    public function update($id, $patient_name) {
        $stmt = $this->pdo->prepare("UPDATE patients SET patient_name=? WHERE id=?");
        $stmt->execute([$patient_name, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM patients WHERE id=?");
        $stmt->execute([$id]);
    }
}
