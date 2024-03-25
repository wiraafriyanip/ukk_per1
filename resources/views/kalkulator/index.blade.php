<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wira Afriyani Putri</title>
    <style>
    body {
       background-color: #D6DAC8;
    font-family: Arial, sans-serif;
    
    margin: 0;
    padding: 0;
}

.kalkulator {
   
    max-width: 500px;
    margin: 50px auto;
    background-color: #9CAFAA;  
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #0F0F0F;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"][value="Tambahkan"] {
    width: 25%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}
input[type="submit"][value="Kurangkan"] {
    width: 25%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}
input[type="submit"][value="Kalikan"] {
    width: 23%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}
input[type="submit"][value="Bagikan"] {
    width: 24%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}
input[type="submit"][value="Reset"] {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}
input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="submit"]:last-of-type {
    background-color: #f44336;
}

input[type="submit"]:last-of-type:hover {
    background-color: #d32f2f;
}

    </style>
</head>
<body>
    <div class="kalkulator">
        <h1>
            KALKULATOR 
        </h1>
<h1>
    Wira Afriyani Putri
</h1>
        <form action="{{ route('itung.store') }}" method="post">
            @csrf
            <label for="bil1">MASUKAN ANGKA PERTAMA</label><br><br>
            <input type="number" name="bil1" id="bil1"><br><br>
            <label for="bil2">MASUKAN ANGKA KEDUA</label><br><br>
            <input type="number" name="bil2" id="bil2"><br><br>
            <input type="submit" value="Tambahkan" name="op">
            <input type="submit" value="Kurangkan" name="op">
            <input type="submit" value="Kalikan" name="op">
            <input type="submit" value="Bagikan" name="op">
            <input type="submit" value="Reset" name="op">
        </form>

    </div>
</body>
</html>