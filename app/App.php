<?php
// load kode program Resistor.php
require_once 'app/Resistor.php';

class App
{
    private $request;
    private $resistor;

    public function __construct()
    {
        $this->request = $_SERVER["REQUEST_URI"];
        $this->resistor = new Resistor();
    }

    public function run()
    {
        switch ($this->request) {
            case '/uas-pbo/':
            case '/uas-pbo/index.php/':
                require_once __DIR__ . "/views/index.php";
                break;
            case '/uas-pbo/index.php/hitung':
                if (isset($_POST["tombolHitung"])) {
                    $this->resistor->hitung();
                }
                break;
            case '/uas-pbo/index.php/resistor':
                $resistors = $this->resistor->ambil_data();
                foreach ($resistors as &$resistor) {
                    $resistor["gelang4"] = $resistor["gelang4"] + 0;
                    $resistor["toleransi"] = $resistor["toleransi"] + 0;
                    $resistor["batas_maksimum"] = $resistor["batas_maksimum"] + 0;
                    $resistor["batas_minimum"] = $resistor["batas_minimum"] + 0;
                }
                echo json_encode($resistors);
                break;
            case '/uas-pbo/index.php/resistor/hapus':
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $this->resistor->hapus($id);
                }
                break;
            case '/uas-pbo/index.php/resistor/edit':
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $resistor = $this->resistor->ambil_data_by_id($id);
                    echo json_encode($resistor);
                }
                break;
            case '/uas-pbo/index.php/resistor/update':
                if (isset($_POST['tombolUpdate'])) {
                    $id = $_POST['id'];
                    $this->resistor->update($id);
                }
                break;
            default:
                http_response_code(404);
                echo "404 Not Found";
                break;
        }
    }
}
