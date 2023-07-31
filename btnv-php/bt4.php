
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <?php
    if (isset($_POST['hk1']) && isset($_POST['hk2'])){
        $hk1 = $_POST['hk1'];
        $hk2 = $_POST['hk2'];
        $tb =($hk1+$hk2*2)/3.2;
        if ($tb>=5) $kq = "Lên lớp"; else $kq = "  Ở lại";
        if ($tb>=8) $loai = "Giỏi"; 
        else if ($tb>=6.5) $loai = "Khá"; 
        else if ($tb>=5) $loai = "Trung bình";
        else $loai = "Yếu";
    }
    ?>
    <form action="bt4.php" method="POST">
        <table>
            <tr>
                <td colspan="2"><span class="style1">KẾT QUẢ HỌC TẬP</span></td>
            </tr>
            <tr>
                <td width="160"><span>Điểm HK1: </span></td>
                <td>
                    <label for="hk1">
                        <input type="text" id="hk1" name="hk1" value="<?php echo isset($_POST["hk1"]) ? $_POST["hk1"] : ''; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span >Điểm HK2: </span></td>
                <td>
                    <label for="hk2">
                        <input type="text" id="hk2" name="hk2" value="<?php echo isset($_POST["hk2"]) ? $_POST["hk2"] : ''; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span>Điểm trung bình: </span></td>
                <td>
                    <label for="tb">
                        <input readonly="true" type="text" id="tb" name="tb" value="<?php echo $tb; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span>Kết quả: </span></td>
                <td>
                    <label for="kq">
                        <input readonly="true" type="text" id="kq" name="kq" value="<?php echo $kq;?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span>Xếp loại: </span></td>
                <td>
                    <label for="loai">
                        <input type="text" id="loai" name="loai" readonly="true" value="<?php echo $loai;?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Submit" value="Kq">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
