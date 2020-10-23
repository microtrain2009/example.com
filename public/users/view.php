<?php
require '../../core/session.php';

include '../../core/db_connect.php';

$input = filter_input_array(INPUT_GET);
$id = !(empty($input['id']))?$input['id']:null;
$email = !(empty($input['email']))?$input['email']:null;

if(!empty($email)){
  $lookup = $email;
  $where = 'email = :lookup';
}else{
  $lookup = $id;
  $where = 'id = :lookup';
}

$content=null;
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);
$row = $stmt->fetch();

$meta=[];
$meta['title']="{$row['first_name']} {$row['last_name']}";

$content=<<<EOT
<h1>{$row['first_name']} {$row['last_name']}</h1>
{$row['email']}

<hr>
<div>
  <a class="btn btn-link" href="edit.php?id={$row['id']}">Edit</a>
  <a class="btn btn-link text-danger" href="delete.php?id={$row['id']}">Delete</a>
</div>
EOT;

include '../../core/layout.php';
checkSession();
