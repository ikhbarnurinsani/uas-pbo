<?php
// load kode program Database.php
require_once 'app/Database.php';

// buat class Resistor yang extends ke class Database
class Resistor extends Database
{
    // method hitung() -> berfungsi untuk melakukan proses perhitungan nilai
    // yang kemudian akan disimpan ke dalama basis bata.
    public function hitung()
    {
        $gelang1 = (int) $_POST["gelang1"];
        $gelang2 = (int) $_POST["gelang2"];
        $gelang3 = (int) $_POST["gelang3"];
        $gelang4 = (float) number_format((float) $_POST["gelang4"], 2, '.', '');

        $resistansi = ($gelang1 * 10 + $gelang2) * (10 ** $gelang3);
        $toleransi = $resistansi * ($gelang4 / 100);
        $batas_maksimum = $resistansi + $toleransi;
        $batas_minimum = $resistansi - $toleransi;

        $data = [
            'resistansi' => (string) $resistansi,
            'gelang4' => (string) $gelang4
        ];

        echo json_encode($data);

        try {
            $sql = "INSERT INTO resistor(
                        gelang1,
                        gelang2,
                        gelang3,
                        gelang4,
                        resistansi,
                        toleransi,
                        batas_minimum,
                        batas_maksimum) 
                    VALUES(
                        $gelang1,
                        $gelang2,
                        $gelang3,
                        $gelang4,
                        $resistansi,
                        $toleransi,
                        $batas_minimum,
                        $batas_maksimum)";

            $this->conn->query($sql);
        } catch (PDOException $e) {
            // print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    // method update() -> berfungsi untuk melakukan proses perhitungan nilai
    // yang kemudian akan mengupdate data pada basis bata berdasarkan id nya.
    public function update($id)
    {
        $gelang1 = (int) $_POST["gelang1"];
        $gelang2 = (int) $_POST["gelang2"];
        $gelang3 = (int) $_POST["gelang3"];
        $gelang4 = (float) number_format((float) $_POST["gelang4"], 2, '.', '');

        $resistansi = ($gelang1 * 10 + $gelang2) * (10 ** $gelang3);
        $toleransi = $resistansi * ($gelang4 / 100);
        $batas_maksimum = $resistansi + $toleransi;
        $batas_minimum = $resistansi - $toleransi;

        try {
            $sql = "UPDATE resistor SET 
                        gelang1=$gelang1,
                        gelang2=$gelang2,
                        gelang3=$gelang3,
                        gelang4=$gelang4,
                        resistansi=$resistansi,
                        toleransi=$toleransi,
                        batas_minimum=$batas_minimum,
                        batas_maksimum=$batas_maksimum 
                    WHERE id=$id";

            $this->conn->query($sql);
        } catch (PDOException $e) {
            // print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    // method ambila_data() -> berfungsi untuk melakukan proses pengambilan semua data
    // yang berada pada basis bata.
    public function ambil_data()
    {
        try {
            $sql = "SELECT * FROM resistor ORDER BY id DESC";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    // method ambila_data_by_id() -> berfungsi untuk melakukan proses pengambilan data
    // yang berada pada basis bata berdasarkan id nya.
    public function ambil_data_by_id($id)
    {
        try {
            $sql = "SELECT * FROM resistor WHERE id = $id";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    // method hapus() -> berfungsi untuk melakukan proses penghapusan data
    // yang berada pada basis bata berdasarkan id nya.
    public function hapus($id)
    {
        try {
            $sql = "DELETE FROM resistor WHERE id = $id";
            $this->conn->query($sql);
        } catch (PDOException $e) {
            // print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
