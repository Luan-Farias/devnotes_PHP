<?php
require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);
if ($method === 'delete') {
    
    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;
    $title = $input['title'] ?? null;
    $body = $input['body'] ?? null;

    $id = filter_var($id);

    if ($id) {

        $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

    } else {
        $array['error'] = "You wasn't send the id";
    }
} else {
    $array['error'] = 'Method not allowed (only delete)';
}

require '../return.php';