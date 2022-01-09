<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css" />

    <!-- Jquery -->
    <script src="http://localhost/uas-pbo/assets/js/jquery-3.6.0.min.js"></script>


    <title>Kalkulator Resistor</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        main {
            background-color: #f8f9fa;
        }

        nav {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
            background-color: rgba(255, 255, 255, 0.95)
        }

        #formHitung .row,
        #formUpdate .row {
            background-color: #ffcc66;
            border: 1px solid black;
        }

        .tembaga {
            background-color: #7e7e7e;
            width: 25px;
            height: 50px;
            margin: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/uas-pbo/index.php/">KELOMPOK 6 5A</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container-fluid my-1" id="aplikasi">
            <h4 class="pt-2 text-center">Aplikasi Penghitung Nilai Resistor 4 Gelang Warna</h4>
            <div class="row gy-5">
                <div class="col-8 offset-2 offset-md-0 col-md-2">
                    <div class="card p-3">
                        <h6 class="d-inline">Pilih Warna Gelang</h6>
                        <hr class="mt-1">
                        <form id="formHitung">
                            <div class="tembaga"></div>
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="py-2 px-3 mt-5">
                                        <select class="form-select form-select-sm rounded-pill" name="gelang1" required>
                                            <option value="" selected disabled>Pilih warna</option>
                                            <option value="0" data-warna="black">Hitam</option>
                                            <option value="1" data-warna="brown">Coklat</option>
                                            <option value="2" data-warna="red">Merah</option>
                                            <option value="3" data-warna="orange">Oranye</option>
                                            <option value="4" data-warna="yellow">Kuning</option>
                                            <option value="5" data-warna="green">Hijau</option>
                                            <option value="6" data-warna="blue">Biru</option>
                                            <option value="7" data-warna="purple">Ungu</option>
                                            <option value="8" data-warna="gray">Abu</option>
                                            <option value="9" data-warna="white">Putih</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="py-2 px-3">
                                        <select class="form-select form-select-sm rounded-pill" name="gelang2" required>
                                            <option value="" selected disabled>Pilih warna</option>
                                            <option value="0" data-warna="black">Hitam</option>
                                            <option value="1" data-warna="brown">Coklat</option>
                                            <option value="2" data-warna="red">Merah</option>
                                            <option value="3" data-warna="orange">Oranye</option>
                                            <option value="4" data-warna="yellow">Kuning</option>
                                            <option value="5" data-warna="green">Hijau</option>
                                            <option value="6" data-warna="blue">Biru</option>
                                            <option value="7" data-warna="purple">Ungu</option>
                                            <option value="8" data-warna="gray">Abu</option>
                                            <option value="9" data-warna="white">Putih</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="py-2 px-3">
                                        <select class="form-select form-select-sm rounded-pill" name="gelang3" required>
                                            <option value="" selected disabled>Pilih warna</option>
                                            <option value="0" data-warna="black">Hitam</option>
                                            <option value="1" data-warna="brown">Coklat</option>
                                            <option value="2" data-warna="red">Merah</option>
                                            <option value="3" data-warna="orange">Oranye</option>
                                            <option value="4" data-warna="yellow">Kuning</option>
                                            <option value="5" data-warna="green">Hijau</option>
                                            <option value="6" data-warna="blue">Biru</option>
                                            <option value="7" data-warna="purple">Ungu</option>
                                            <option value="8" data-warna="gray">Abu</option>
                                            <option value="9" data-warna="white">Putih</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="py-2 px-3 my-5">
                                        <select class="form-select form-select-sm rounded-pill" name="gelang4" required>
                                            <option value="" selected disabled>Pilih warna</option>
                                            <option value="1" data-warna="brown">Coklat</option>
                                            <option value="2" data-warna="red">Merah</option>
                                            <option value="0.5" data-warna="green">Hijau</option>
                                            <option value="0.25" data-warna="blue">Biru</option>
                                            <option value="0.1" data-warna="purple">Ungu</option>
                                            <option value="0.05" data-warna="gray">Abu</option>
                                            <option value="5" data-warna="gold">Emas</option>
                                            <option value="10" data-warna="silver">Silver</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tembaga"></div>
                            <button class="btn btn-success btn-sm w-100 mt-3" name="tombolHitung">Hitung</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <div class="card p-3">
                        <h6 class="d-inline">Hasil Perhitungan</h6>
                        <hr class="mt-1">
                        <div class="mb-4">
                            <h5 class="d-inline m-0">Nilai Resistansi : <br class="d-block d-md-none"><span id="nilaiResistor"></span></h5>
                        </div>

                        <h6 class="d-inline">Tabel Hasil Perhitungan</h6>
                        <hr class="mt-1">
                        <div class="table-responsive px-1">
                            <table id="table_id" class="display table table-striped dt-responsive nowrap small">
                                <thead>
                                    <tr>
                                        <th class="small">Gelang 1</th>
                                        <th class="small">Gelang 2</th>
                                        <th class="small">Gelang 3</th>
                                        <th class="small">Gelang 4</th>
                                        <th class="small">Resistansi</th>
                                        <th class="small">Toleransi</th>
                                        <th class="small">Batas Minimum</th>
                                        <th class="small">Batas Maksimum</th>
                                        <th class="small" colspan="2">Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal  fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formUpdate">
                    <div class="modal-body px-5">
                        <div class="tembaga"></div>
                        <div class="row g-0">
                            <div class="col-12">
                                <input type="hidden" name="id" value="">
                                <div class="py-2 px-3 mt-5">
                                    <select class="form-select form-select-sm rounded-pill" name="gelang1" required>
                                        <option value="" selected disabled>Pilih warna</option>
                                        <option value="0" data-warna="black">Hitam</option>
                                        <option value="1" data-warna="brown">Coklat</option>
                                        <option value="2" data-warna="red">Merah</option>
                                        <option value="3" data-warna="orange">Oranye</option>
                                        <option value="4" data-warna="yellow">Kuning</option>
                                        <option value="5" data-warna="green">Hijau</option>
                                        <option value="6" data-warna="blue">Biru</option>
                                        <option value="7" data-warna="purple">Ungu</option>
                                        <option value="8" data-warna="gray">Abu</option>
                                        <option value="9" data-warna="white">Putih</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="py-2 px-3">
                                    <select class="form-select form-select-sm rounded-pill" name="gelang2" required>
                                        <option value="" selected disabled>Pilih warna</option>
                                        <option value="0" data-warna="black">Hitam</option>
                                        <option value="1" data-warna="brown">Coklat</option>
                                        <option value="2" data-warna="red">Merah</option>
                                        <option value="3" data-warna="orange">Oranye</option>
                                        <option value="4" data-warna="yellow">Kuning</option>
                                        <option value="5" data-warna="green">Hijau</option>
                                        <option value="6" data-warna="blue">Biru</option>
                                        <option value="7" data-warna="purple">Ungu</option>
                                        <option value="8" data-warna="gray">Abu</option>
                                        <option value="9" data-warna="white">Putih</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="py-2 px-3">
                                    <select class="form-select form-select-sm rounded-pill" name="gelang3" required>
                                        <option value="" selected disabled>Pilih warna</option>
                                        <option value="0" data-warna="black">Hitam</option>
                                        <option value="1" data-warna="brown">Coklat</option>
                                        <option value="2" data-warna="red">Merah</option>
                                        <option value="3" data-warna="orange">Oranye</option>
                                        <option value="4" data-warna="yellow">Kuning</option>
                                        <option value="5" data-warna="green">Hijau</option>
                                        <option value="6" data-warna="blue">Biru</option>
                                        <option value="7" data-warna="purple">Ungu</option>
                                        <option value="8" data-warna="gray">Abu</option>
                                        <option value="9" data-warna="white">Putih</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="py-2 px-3 my-5">
                                    <select class="form-select form-select-sm rounded-pill" name="gelang4" required>
                                        <option value="" selected disabled>Pilih warna</option>
                                        <option value="1" data-warna="brown">Coklat</option>
                                        <option value="2" data-warna="red">Merah</option>
                                        <option value="0.5" data-warna="green">Hijau</option>
                                        <option value="0.25" data-warna="blue">Biru</option>
                                        <option value="0.1" data-warna="purple">Ungu</option>
                                        <option value="0.05" data-warna="gray">Abu</option>
                                        <option value="5" data-warna="gold">Emas</option>
                                        <option value="10" data-warna="silver">Silver</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tembaga"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            const kodeWarna1 = {
                0: {
                    "en": "black",
                    "id": "hitam",
                    "text": "light"
                },
                1: {
                    "en": "brown",
                    "id": "coklat",
                    "text": "light"
                },
                2: {
                    "en": "red",
                    "id": "merah",
                    "text": "light"
                },
                3: {
                    "en": "orange",
                    "id": "oranye",
                    "text": "light"
                },
                4: {
                    "en": "yellow",
                    "id": "kuning",
                    "text": "dark"
                },
                5: {
                    "en": "green",
                    "id": "hijau",
                    "text": "light"
                },
                6: {
                    "en": "blue",
                    "id": "biru",
                    "text": "light"
                },
                7: {
                    "en": "purple",
                    "id": "ungu",
                    "text": "light"
                },
                8: {
                    "en": "grey",
                    "id": "abu",
                    "text": "light"
                },
                9: {
                    "en": "white",
                    "id": "putih",
                    "text": "dark"
                },
            }

            const kodeWarna2 = {
                0: {
                    "en": "white",
                    "id": "kosong",
                    "text": "dark"
                },
                1: {
                    "en": "brown",
                    "id": "coklat",
                    "text": "light"
                },
                2: {
                    "en": "red",
                    "id": "merah",
                    "text": "light"
                },
                0.5: {
                    "en": "green",
                    "id": "hijau",
                    "text": "light"
                },
                0.25: {
                    "en": "blue",
                    "id": "biru",
                    "text": "light"
                },
                0.1: {
                    "en": "purple",
                    "id": "ungu",
                    "text": "light"
                },
                0.05: {
                    "en": "grey",
                    "id": "abu",
                    "text": "light"
                },
                5: {
                    "en": "gold",
                    "id": "emas",
                    "text": "dark"
                },
                10: {
                    "en": "silver",
                    "id": "silver",
                    "text": "light"
                },
            }

            const tabelResistor = $('#table_id').DataTable({
                "ajax": {
                    "url": "http://localhost/uas-pbo/index.php/resistor",
                    "type": "GET",
                    "cache": true,
                    "dataSrc": "",
                },
                "pageLength": 5,
                "lengthMenu": [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'All']
                ],
                "order": [],
                'columnDefs': [{
                        'targets': 0,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).css("background-color", kodeWarna1[cellData]["en"]).text(kodeWarna1[cellData]["id"].charAt(0).toUpperCase() + kodeWarna1[cellData]["id"].slice(1)).addClass("text-center " + "text-" + kodeWarna1[cellData]["text"]);
                        }
                    },
                    {
                        'targets': 1,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).css("background-color", kodeWarna1[cellData]["en"]).text(kodeWarna1[cellData]["id"].charAt(0).toUpperCase() + kodeWarna1[cellData]["id"].slice(1)).addClass("text-center " + "text-" + kodeWarna1[cellData]["text"]);
                        }
                    }, {
                        'targets': 2,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).css("background-color", kodeWarna1[cellData]["en"]).text(kodeWarna1[cellData]["id"].charAt(0).toUpperCase() + kodeWarna1[cellData]["id"].slice(1)).addClass("text-center " + "text-" + kodeWarna1[cellData]["text"]);
                        }
                    }, {
                        'targets': 3,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).css("background-color", kodeWarna2[cellData]["en"]).text(kodeWarna2[cellData]["id"].charAt(0).toUpperCase() + kodeWarna2[cellData]["id"].slice(1)).addClass("text-center " + "text-" + kodeWarna2[cellData]["text"]);

                        }
                    }, {
                        'targets': 4,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).text(cellData + " Ohms")
                        }
                    }, {
                        'targets': 5,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).text(cellData + " Ohms")
                        }
                    }, {
                        'targets': 6,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).text(cellData + " Ohms")
                        }
                    }, {
                        'targets': 7,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).text(cellData + " Ohms")
                        }
                    },
                    {
                        'targets': 8,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).attr("colspan", 0).html(`<button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                            </button>`).on("click", () => {
                                const konfirmasi = confirm("Hapus data ?");
                                const url = "http://localhost/uas-pbo/index.php/resistor/hapus";
                                if (konfirmasi) {
                                    $.ajax({
                                        type: "POST",
                                        url: url,
                                        data: {
                                            id: cellData
                                        },
                                        success: function(response) {
                                            tabelResistor.ajax.reload(null, false);
                                        }
                                    });
                                }
                            });
                        }
                    },
                    {
                        'targets': 9,
                        'createdCell': function(td, cellData, rowData, row, col) {
                            $(td).html(`<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdate">
                            <i class="bi bi-pencil-square"></i>
                            </button>`).on("click", () => {
                                const url = "http://localhost/uas-pbo/index.php/resistor/edit";
                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: {
                                        id: cellData
                                    },
                                    success: function(response) {
                                        const data = JSON.parse(response);

                                        $("#formUpdate input[name='id']").val(cellData);

                                        const options = document.querySelectorAll("#formUpdate select option");
                                        options.forEach((option) => {
                                            option.removeAttribute("selected");
                                        })

                                        const gelang1 = document.querySelector("#formUpdate select[name='gelang1'] option[value='" + data.gelang1 + "']");
                                        gelang1.setAttribute("selected", true);
                                        gelang1.parentElement.parentElement.style.backgroundColor = gelang1.dataset.warna;

                                        const gelang2 = document.querySelector("#formUpdate select[name='gelang2'] option[value='" + data.gelang2 + "']");
                                        gelang2.setAttribute("selected", true);
                                        gelang2.parentElement.parentElement.style.backgroundColor = gelang2.dataset.warna;

                                        const gelang3 = document.querySelector("#formUpdate select[name='gelang3'] option[value='" + data.gelang3 + "']");
                                        gelang3.setAttribute("selected", true);
                                        gelang3.parentElement.parentElement.style.backgroundColor = gelang3.dataset.warna;

                                        const gelang4 = document.querySelector("#formUpdate select[name='gelang4'] option[value='" + parseFloat(data.gelang4) + "']");
                                        gelang4.setAttribute("selected", true);
                                        gelang4.parentElement.parentElement.style.backgroundColor = gelang4.dataset.warna;

                                        const selects = document.querySelectorAll('#formUpdate select');
                                        selects.forEach((select) => {
                                            select.addEventListener("change", function() {
                                                this.parentElement.style.backgroundColor = this.options[this.selectedIndex].dataset.warna;
                                            });
                                        });
                                    }
                                });
                            });
                        }
                    },
                ],
                "columns": [{
                        "data": 'gelang1'
                    },
                    {
                        "data": 'gelang2'
                    },
                    {
                        "data": 'gelang3'
                    },
                    {
                        "data": 'gelang4'
                    },
                    {
                        "data": 'resistansi'
                    },
                    {
                        "data": 'toleransi'
                    },
                    {
                        "data": 'batas_minimum'
                    },
                    {
                        "data": 'batas_maksimum'
                    },
                    {
                        "data": 'id'
                    },
                    {
                        "data": 'id'
                    },
                ]
            });

            const selects = document.querySelectorAll('#formHitung select');
            selects.forEach((select) => {
                select.addEventListener("change", function() {
                    this.parentElement.style.backgroundColor = this.options[this.selectedIndex].dataset.warna;
                });
            });

            const formHitung = document.getElementById("formHitung");
            // jika form hitung di submit
            formHitung.addEventListener('submit', function(event) {
                event.preventDefault();
                const url = "http://localhost/uas-pbo/index.php/hitung";
                const gelang1 = document.querySelector("#formHitung select[name='gelang1']");
                const gelang2 = document.querySelector("#formHitung select[name='gelang2']");
                const gelang3 = document.querySelector("#formHitung select[name='gelang3']");
                const gelang4 = document.querySelector("#formHitung select[name='gelang4']");
                const data = {
                    tombolHitung: true,
                    gelang1: gelang1.options[gelang1.selectedIndex].value,
                    gelang2: gelang2.options[gelang2.selectedIndex].value,
                    gelang3: gelang3.options[gelang3.selectedIndex].value,
                    gelang4: gelang4.options[gelang4.selectedIndex].value,
                };
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function(response) {
                        const data = JSON.parse(response);
                        $('#nilaiResistor').html(data.resistansi + " Ohms " + data.gelang4 + "%");
                        tabelResistor.ajax.reload(null, false);
                    }
                });
            });

            const formUpdate = document.getElementById("formUpdate");
            // jika form update di submit
            formUpdate.addEventListener('submit', function(event) {
                event.preventDefault();
                const url = "http://localhost/uas-pbo/index.php/resistor/update";
                const id = document.querySelector("#formUpdate input[name='id']");
                const gelang1 = document.querySelector("#formUpdate select[name='gelang1']");
                const gelang2 = document.querySelector("#formUpdate select[name='gelang2']");
                const gelang3 = document.querySelector("#formUpdate select[name='gelang3']");
                const gelang4 = document.querySelector("#formUpdate select[name='gelang4']");
                const data = {
                    tombolUpdate: true,
                    id: id.value,
                    gelang1: gelang1.options[gelang1.selectedIndex].value,
                    gelang2: gelang2.options[gelang2.selectedIndex].value,
                    gelang3: gelang3.options[gelang3.selectedIndex].value,
                    gelang4: gelang4.options[gelang4.selectedIndex].value,
                };
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function(response) {
                        tabelResistor.ajax.reload(null, false);
                        alert("Data berhasil diubah");
                    }
                });
            });

            const modalUpdate = document.getElementById('modalUpdate');
            modalUpdate.addEventListener("hidden.bs.modal", function() {
                $(this).find('form').trigger('reset');
            });
        });
    </script>
</body>

</html>