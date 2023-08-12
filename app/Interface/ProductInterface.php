<?php

namespace App\Interface;

interface ProductInterface
{
    public function getAll($perPage);
    public function getOne($id);
    public function create($data);
    public function update($id, $data);
    public function destroy($id);
}