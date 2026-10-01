<?php

class GuestBook {


    private PDO $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function tambahPesan(
    string $nama,
    string $email,
    string $pesan
){

    $sql = "
    INSERT INTO buku_tamu
    (nama,email,pesan)
    VALUES
    (:nama,:email,:pesan)
    ";


    $stmt = $this->pdo->prepare($sql);


    return $stmt->execute([

        "nama" => $nama,

        "email" => $email,

        "pesan" => $pesan

    ]);

}

}

?>