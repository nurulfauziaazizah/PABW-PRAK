<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
    <h2>Biodata Mahasiswa</h2>
    <form action="" method="POST">
        <label>Nama :</label><br>
            <input type="text" name="nm"><br>
        <br><label>Alamat :</label><br>
            <input type="text" name="almt"><br>
        <br><label>Jenis Kelamin :</label><br>
            <input type="radio" name="jk" value="lk"> Laki-laki<br>
            <input type="radio" name="jk" value="pr"> Perempuan<br>
        <br><label>Golongan Darah :</label><br>
            <select name="goldar">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select><br>
        <br><label>Bidang Hobi :</label><br>
            <input type="checkbox" name="hb" value=""> Sport<br>
            <input type="checkbox" name="hb" value=""> Design<br>
            <input type="checkbox" name="hb" value=""> Science<br>
            <input type="checkbox" name="hb" value=""> Technology<br>
            <input type="checkbox" name="hb" value=""> Multimedia<br>
            <input type="checkbox" name="hb" value=""> Other<br>
            <input type="text" name="nm"><br>
        <br><label>About :</label><br>
        <textarea  rows="4" cols="50"></textarea>
</body>