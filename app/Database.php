<?php
// buat class Database
class Database
{
    // prperty
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "uas-pbo";

    protected $conn;

    // constructor
    public function __construct()
    {
        // blok try catch
        try {
            // buat koneksi dengan database
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbName", $this->username, $this->password);

            // set error mode
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // tampilkan pesan kesalahan jika koneksi gagal
            print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
