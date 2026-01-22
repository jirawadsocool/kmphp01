<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{padding: 40px;
    };
        .form-group{margin-bottom: 20px;padding-bottom: 10px;
    }
    label{display: block; margin-bottom: 2.5px;
    }
    input[type='text'],input[type='password'],input[type='number'],select,textarea{
         width: 100% ; padding: 5px;
    }
    input[type='submit']{
         background-color: #164a83; color: #ffffff;
         padding: 5px 20px; cursor: pointer; border-radius: 5px; border: none;
    }
    input[type='reset']{
         background-color: #ff0000; color: #ffffff;
         padding: 5px 20px; cursor: pointer; border-radius: 5px; border: none;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">All Form with PHP 2026</h1>
    <hr>
    <!--method GET POST PUT DELETE-->
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="">
    </form>
    <hr>
    
    <div class="form-group">
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname">
    </div>
    <div class="form-group">
        <label for="password">PASSWORD:</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" id="age" name="age">
    </div>
    <div>
        <label for="gender">เพศ</label>
        <input type="radio" name="gender" value="ชาย" checked>ชาย
        <input type="radio" name="gender" value="หญิง">หญิง
        <input type="radio" name="gender" value="LGBTQ+">LGBTQ+
    </div>
    <div class="form-group">
        <label for="plang">ภาษาโปรแกรมที่ชอบ</label>
        <input type="checkbox" name="plang[]" value="C ">C
        <input type="checkbox" name="plang[]" value="Python+ ">Python
        <input type="checkbox" name="plang[]" value="JAVA ">JAVA
        <input type="checkbox" name="plang[]" value="PHP+ ">PHP
    </div>
    <div class="form-group">
        <label for="food">อาหารที่ชอบ</label>
        <input type="checkbox" name="food1" value="KFC">KFC
        <input type="checkbox" name="food2" value="Pizza">Pizza
        <input type="checkbox" name="food3" value="Donut">Donut
        <input type="checkbox" name="food4" value="Burger">Burger
    </div>
    <div class="form-group">
        <label for="country">ประเทศที่ชอบ</label>
        <select name="country" id="country">
            <option value="">----กรุณาเลือกประเทศ----</option>
            <option value="Thailand">ไทย</option>
            <option value="Japan">ญี่ปุ่น</option>
            <option value="Korea">เกาหลี</option>
            <option value="China">จีน</option>
            <option value="Canada">แคนาดา</option>
        </select>
    </div>
        <label for="province">จังหวัดที่ชอบ</label>
        <select name="province" id="province" size="4">
            <option value="เชียงใหม่">เชียงใหม่</option>
            <option value="จันทบุรี">จันทบุรี</option>
            <option value="กรุงเทพฯ">กรุงเทพฯ</option>
            <option value="ปทุมธานี">ปทุมธานี</option>
            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
            <option value="น่าน">น่าน</option>
        </select>
    </div>
    <div class="form-group">
        <label for="bdata">วันเกิด</label>
        <input type="date" name="bdata" id="bdata">
    </div>
    <div class="form-group">
        <label for="likelevel">ระดับความชอบ</label>
        0<input type="range" name="likelevel" id="likelevel" min="0" max="100">100
    </div>
    <div class="form-group">
        <label for="comment">ความคิดเห็น</label><br>
        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
    </div>
    <!--input hidden-->
    <input type="hidden" name="massage" value="I love YOU">
    <div>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </div>
    <hr>
    <?php
    //ตรวจสอบว่ามีการรับรองการส่งข้อมูลมาแบบไหน
            if($_SERVER["REQUEST_METHOD"] == "GET" ){
        ?>
        <div>
            <strong>ชื่อ-สกุล: </strong>
            <?php echo empty($_POST['fname']) ? "-" : $_POST['fname']; ?>
        </div>
        <div>
            <strong>รหัสผ่าน: </strong>
            <?php echo empty($_POST['password']) ? "-" : $_POST['password']; ?>
        </div>
        <div>
            <strong>อายุ: </strong>
            <?php echo empty($_POST['age']) ? "-" : $_POST['age']; ?>
            <strong>ปี</strong>
        </div>
        <div>
            <strong>เพศ: </strong>
            <?php echo $_POST['gender'];?>
        </div>
        <div>
            <strong>ภาษาโปรแกรมที่ชอบ:</strong>
            <?php
                echo isset($_POST['plang']) ? implode(" ", $_POST['plang'] ) : '-';
            ?>
        </div>
        <div>
            <strong>อาหารที่ชอบ:</strong>
            <?php
                if(!isset($_POST['food1']) && !isset($_POST['food2']) && !isset($_POST['food3']) && !isset($_POST['food4'])){
                    echo "-";
                }
                echo isset($_POST['food1']) ? $_POST['food1'] : '';
                echo isset($_POST['food2']) ? $_POST['food2'] : '';
                echo isset($_POST['food3']) ? $_POST['food3'] : '';
                echo isset($_POST['food4']) ? $_POST['food4'] : '';
            ?>
        </div>
        <div>
            <strong>ประเทศที่ชอบ: </strong>
            <?php echo empty($_POST['country']) ? "-" : $_POST['country'];?>
        </div>
        <div>
            <strong>จังหวัดที่ชอบ: </strong>
            <?php echo empty($_POST['province']) ? "-" : $_POST['province'];?>
        </div>
        <div>
            <strong>วัน เดือน ปีเกิด: </strong>
            <?php echo empty($_POST['bdata']) ? "-" : $_POST['bdata'];?>
        </div>
        <div>
            <strong>likelevel</strong>
            <?php echo $_POST['likelevel']; ?>
        </div>
        <div>
            <storng>comment:</storng>
            <?php echo empty ($_POST['comment']) ? "-" : $_POST['comment']; ?>
        </div>
        <div>
            <strong>Message</strong>
            <?php echo $_POST['massage']; ?>

        </div>
        

        <?php
            }else{
                echo "ไม่สามาารถประมวลผลข้อมูลได้กรุณาลองใหม่";
            }
    ?>

</body>
</html>