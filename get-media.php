<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$type = isset($_GET['type']) ? $_GET['type'] : 'images';
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
$videoExtensions = ['mp4', 'webm', 'mov', 'avi', 'mkv'];

$folder = ($type === 'videos') ? 'myvideos' : 'myimages';
$extensions = ($type === 'videos') ? $videoExtensions : $imageExtensions;

$result = [];

if (is_dir($folder)) {
    $files = scandir($folder);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $extensions)) {
            $result[] = [
                'name' => $file,
                'path' => $folder . '/' . $file,
                'type' => $type
            ];
        }
    }
}

echo json_encode($result);
?>
