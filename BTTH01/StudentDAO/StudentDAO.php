<?php
    class StudentDAO {
        private $students = array();
      
        public function create(Student $student) {
          $this->students[$student->getId()] = $student;
        }
      
        public function read($id) {
          return $this->students[$id];
        }
      
        public function update(Student $student) {
          $this->students[$student->getId()] = $student;
        }
      
        public function delete($id) {
          unset($this->students[$id]);
        }
      
        public function getAll() {
          return $this->students;
        }
    }
      
?>