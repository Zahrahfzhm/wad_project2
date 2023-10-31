<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" contenct="width=device-width, initial-scale=1">
        <title>Latihan 2 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class ="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tugas Latihan 2</h4>
                <form action="" method="POST">
                    <label class="input-group-text" for="angka"><b>Inputan Angka :</b></label>
                    <input class="form-control" type="number" name="angka">
                    <div>
                        <br/>
                        <label class="input-group-text" for="umur"><b>Pilih Umur : </b></label>
                        <select class="form-select" id="umur" name="umur">
                            <option selected>Choose...</option>
                            <option value="12">12-18 Tahun</option>
                            <option value="2">19-25 Tahun</option>
                            <option value="3">26-30 Tahun</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 mt-3 w-100" name="button">Submit</button>
                </form>
                <?php
                    if (isset($_POST['button'])) {
                        $angka = $_POST["angka"];
                        $umur = $_POST["umur"];
                    }
                ?>
            </div>
        </div>
    </body>
</html>
