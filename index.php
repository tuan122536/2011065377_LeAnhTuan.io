<!DOCTYPE html>
<html lang ="vi">
<head>
    <meta charset = "utf-8">
    <link href= "/site.css" rel="stylesheet"/>
    <title>Xếp loại kết quả tuyển sinh </title>
</head>
<body>
    <div id="wrapper">
        <h2>Xếp loại kết quả tuyển sinh</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="lbltitle">
                    <label> Điểm môn toán </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"]) ?
                    $_POST["Toan"] : "";?>"/>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label> Điểm môn Lý </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Ly" value="<?php echo isset($_POST["Ly"]) ?
                    $_POST["Ly"] : "";?>"/>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label> Điểm môn hóa </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"]) ?
                    $_POST["Hoa"] : "";?>"/>
                </div>
            </div>
            <div class="row">
            <div class="lbltitle">
                <label > Chọn khu vực</label>
            </div>
            <div class="lblinput">
                <select name="KhuVuc" id="">
                    <option value="" selected>--Chọn khu vực--</option>
                    <option value="1"> Khu vực 1</option>
                    <option value="2"> Khu vực 2</option>
                    <option value="3"> Khu vực 3</option>
                    <option value="4"> Khu vực 4</option>
                </select>
            </div>
        </div>
            <div class="row">
                <div class="row">
                    <div class="row">
                        <div class="submid">
                            <input type="submit" name="btnsubmit" value="Xếp loại"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="result">
            <h2>Kết quả xếp loại</h2>
            <div class="row">
                <div class="lbltitle">
                    <label> Tổng điểm</label>
                </div>
                <div class="lbloutput">
                <?php
                        if(isset($_POST["btnsubmit"])) {
                            $Tongdiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                            // Kiểm tra khu vực và cộng điểm ưu tiên tương ứng
                            if($_POST["KhuVuc"] == 1 || $_POST["KhuVuc"] == 2) {
                                $Tongdiem += 5;
                            } elseif($_POST["KhuVuc"] == 3) {
                                $Tongdiem += 3;
                            }
                            echo $Tongdiem;
                        }
                    ?>
                </div>
            </div>
            <div class="row">
            <div class="lbltitle">
                <label >Xếp loại</label>
            </div>
            <div class="lbloutput">
            <?php
                        if(isset($_POST["btnsubmit"])) {
                            $Tongdiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                            // Kiểm tra khu vực và cộng điểm ưu tiên tương ứng
                            if($_POST["KhuVuc"] == 1 || $_POST["KhuVuc"] == 2) {
                                $Tongdiem += 5;
                            } elseif($_POST["KhuVuc"] == 3) {
                                $Tongdiem += 3;
                            }
                            if($Tongdiem >= 24) {
                                echo "Giỏi";
                            } elseif($Tongdiem >= 21) {
                                echo "Khá";
                            } elseif($Tongdiem >= 15) {
                                echo "Trung Bình";
                            } else {
                                echo "Yếu";
                            }
                        }
                    ?>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label > Điểm ưu tiên</label>
            </div>
            <div class="lbloutput">
            <?php
                        if(isset($_POST["btnsubmit"])) {
                            $DiemUuTien = 0;
                            // Kiểm tra khu vực và cộng điểm ưu tiên tương ứng
                            if($_POST["KhuVuc"] == 1 || $_POST["KhuVuc"] == 2) {
                                $DiemUuTien = 5;
                            } elseif($_POST["KhuVuc"] == 3) {
                                $DiemUuTien = 3;
                            }
                            echo $DiemUuTien;
                        }
                    ?>
            </div>
        </div>
    </div>
</body>