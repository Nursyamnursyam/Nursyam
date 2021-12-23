<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<style>

    table {
        border-spacing: 0;
        margin: 150px 0;
    }
    table th {
        border: 2px solid #aaa;
        width: 500px;
        height: 30px;
    }
    table td {
        border: 1px solid #ccc;
        height: 30px;
        padding:0 10px;
        text-align: center;
    }
</style>
<body>
   <center>
    <table>
            <thead>
                 <th colspan="3" >BIODATA PRIBADI</th>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $th = "<td>";
                        $tht = "</td>";
                        echo $th . "1" . $tht;
                        echo $th . "Nama" . $tht;
                        echo $th . "Nursyam" . $tht;
                    ?>
                </tr>
                <tr>
                    <?php
                        $th = "<td>";
                        $tht = "</td>";
                        echo $th . "2" . $tht;
                        echo $th . "Nim" . $tht;
                        echo $th . "19024014044" . $tht;
                    ?>
                </tr>
                <tr>
                    <?php
                        $th = "<td>";
                        $tht = "</td>";
                        echo $th . "3" . $tht;
                        echo $th . "Kelas" . $tht;
                        echo $th . "A2" . $tht;
                    ?>
                </tr>
                <tr>
                    <?php
                        $th = "<td>";
                        $tht = "</td>";
                        echo $th . "4" . $tht;
                        echo $th . "Hoby" . $tht;
                        echo $th . "Menyanyi, Memasak, Membaca Wattpad " . $tht;
                    ?>
                </tr>
                <tr>
                    <?php
                        $th = "<td>";
                        $tht = "</td>";
                        echo $th . "5" . $tht;
                        echo $th . "Alamat" . $tht;
                        echo $th . "Enrekang" . $tht;
                    ?>
                </tr>
            </tbody>
        </table>
   </center>
    
</body>
</html>