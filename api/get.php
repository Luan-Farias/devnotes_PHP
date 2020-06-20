<?php
require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);
if ($method === 'get') {
    $id = filter_input(INPUT_GET, 'id');

    if ($id) {
        $sql = $pdo->prepare('SELECT * FROM notes WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $array['result'] = [
                'id' => $data['id'],
                'title' => $data['title'],
                'body' => $data['body']
            ];
        } else {
            $array['error'] = 'ID not exists in database';
        } 

    } else {
        $array['error'] = 'ID was not send';
    }

} else {
    $array['error'] = 'Method not allowed (only get)';
}

require '../return.php';