<?php

namespace App\Interface;

Interface ProductInterface {
    public function getAll();
    public function getOne();
    public function create();
    public function update();
    public function destroy();
}