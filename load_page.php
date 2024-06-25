<?php
header('Content-Type: application/json');

$page = $_GET['page'];
$response = ['content' => '', 'title' => ''];

switch ($page) {
    case 'home':
        $response['content'] = file_get_contents('pages/home.php');
        $response['title'] = 'Home Page';
        break;
    case 'users':
        $response['content'] = file_get_contents('pages/users.php');
        $response['title'] = 'Users Page';
        break;
    default:
        $response['content'] = 'Page not found.';
        $response['title'] = 'Page not found';
        break;
}

echo json_encode($response);
?>