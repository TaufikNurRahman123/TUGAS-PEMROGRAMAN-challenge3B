<html>
    <head>
    </head>
    <body>
        <h2>Tampilan Form PHP </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama">
        <span class="error">* <?php echo $namaErr;?></span>
        <br><br>

        Email: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>

        Jenis Kelamin:
        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
        <span class="error">* <?php echo $jenisKelaminErr;?></span>
        <br><br>

        Operasi Aritmatika:
        <select name="operasi_aritmatika">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($namaErr) && empty($emailErr) && empty($jenisKelaminErr)) {
            echo "<h2>Hasil Input:</h2>";
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Jenis Kelamin: " . $jenisKelamin . "<br>";
            if(isset($_POST['operasi_aritmatika'])){
                echo "Operasi Aritmatika: " . $_POST['operasi_aritmatika'] . "<br>";
            }
        }
    ?>
    </body>
</html>