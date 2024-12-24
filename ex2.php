<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
<style>

    body{
        font-family: "Prompt", serif;
        font-weight: 100;
        font-style: normal;
        margin-left: 50px;
    }
</style>
<!-- เพิ่ม bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- เพิ่ม sweetaleart  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง การเขียนโปรแกรม PHP</title>
</head>




<body>
    <h1>การเขียนโปรแกรม PHP</h1>
    664485036 ฑีฆายุ เปรมสุข<br>
    หมู่เรียน 66/96<br>
   
    <div class="alert alert-info">
  <strong>สำเร็จแล้ว</strong>ใช้ bootstrap ได้แล้วจ้า
</div>
<button type="button" class="btn btn-primary">กรุณากดปุ่ม</button>
<button type="button" class="btn btn-secondary">ยกเลิกการบันทึกข้อมูล</button>
<br>
<div class="card bg-primary text-white">
    <div class="card-body">ยินดีต้อนรับ</div>
  </div>
  <br>

  <div class="card" style="width:400px">
  <img class="card-img-top" src="thidxx.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">ฑีฆายุ เปรมสุข</h4>
    <p class="card-text">คติประจำใจ : GMG </p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

<button type="button" class="btn btn-outline-success" id="alert">Good job</button>
<button type="button" class="btn btn-outline-success" id="alert2">ทดสอบการเรียกใช้งาน</button>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
            $('#alert2').click(function() {
                Swal.fire(
                    'งานดีมาก!',
                    'คุณกดปุ่มแล้ว เยี่ยมเลย!',
                    'success'
                );
            });
        });
    </script>
</html>
