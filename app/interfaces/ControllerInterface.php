<?php

namespace App\Rule;

interface ControllerInterface {
    public function index();
    public function get($id);
    public function show();
    public function store();
    public function edit();
    public function update();
    public function delete();
}