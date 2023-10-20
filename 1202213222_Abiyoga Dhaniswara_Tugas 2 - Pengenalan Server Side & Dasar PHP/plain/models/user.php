<?php
namespace Models;

class User {
    private $id;
    private $username;
    private $image;

    public function __construct($id, $username, $image) {
        $this->id = $id;
        $this->username = $username;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getImage(){
        $blobData = $this->image;
        $mimeType = 'image/jpeg';
        if (substr($blobData, 0, 4) === "\x89PNG") {
            $mimeType = 'image/png'; // If the binary data starts with the PNG signature
        }
        $base64Data = base64_encode($blobData);
        return '<img src="data:' . $mimeType . ';base64,' . $base64Data . '" alt="Embedded Image" width="200" height="150">';
    }
}
?>