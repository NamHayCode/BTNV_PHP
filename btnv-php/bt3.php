<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dientich</title>
</head>
<body>
    <?php 
    $dt = 0; 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dai = $_POST["dai"];
        $rong = $_POST["rong"];
        $dt = $dai * $rong; 
    }
    ?>
    <form id="forml" name="forml" method="post" action="">
        <table width="400" border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td colspan="2" align="center"><span class="style1">Dien tich hinh chu nhat</span></td>
            </tr>
            <tr>
                <td width="125"><span class="style4">Chieu dai</span></td>
                <td width="261">
                    <label>
                        <input type="text" name="dai" id="dai" value="<?php echo isset($_POST["dai"]) ? $_POST["dai"] : ''; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="125"><span class="style4">Chieu rong</span></td>
                <td width="261">
                    <label>
                        <input type="text" name="rong" id="rong" value="<?php echo isset($_POST["rong"]) ? $_POST["rong"] : ''; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="125"><span class="style4">Dien tich:</span></td>
                <td width="261">
                    <label>
                        <input type="text" name="dt" id="dt" value="<?php echo $dt; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="Submit" value="Tinh">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
