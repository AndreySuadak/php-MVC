<?php
    class Training extends Controller {
        public function index() {
          $this->view('training/index');
        }

        public function number() {
          $this->view('training/number');
        }

        public function letter() {
          $this->view('training/letter');
        }

        public function word() {
          $this->view('training/word');
        }
    }
