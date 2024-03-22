<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Afriyani Putri</title>
    <style>

    </style>
</head>
<body>
    <div class="kalkulator">
        <h1>
            KALKULATOR WIRA AFRIYANI PUTRI
        </h1>
        <form action="{{ route('kalkulator.store') }}" method="post">
            @csrf
            <label for="bil1">MASUKAN ANGKA PERTAMA</label>
            <input type="number" name="bil1" id="bil1">
            <label for="bil2">MASUKAN ANGKA KEDUA</label>
            <input type="number" name="bil2" id="bil2">
            <input type="submit" value="Tambahkan" name="op">
            <input type="submit" value="Kurangkan" name="op">
            <input type="submit" value="Kalikan" name="op">
            <input type="submit" value="Bagikan" name="op">
            <input type="submit" value="Reset" name="op">
        </form>
        <h1>HASIL : {{$hasil}}</h1>
    </div>
</body>
</html>