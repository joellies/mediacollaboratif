<?php

$data = [
    'name' => $name,
    'surname' => $surname,
    'sex' => $sex,
    'id' => $id,
];
$sql = "UPDATE users SET name=:name, surname=:surname, sex=:sex WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);