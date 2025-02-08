<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- เพิ่ม sweetaleart  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> ตัวอย่างภาษา PHP </title>

    <!-- เพิ่ม fort -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <style>
    body {
        font-family: "Noto Sans Thai", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
    margin-left: 100px;
    }

    </style>

</head>

<body>
    <h1> การเขียนโปรแกรมด้วย PHP และ bootstrap </h1>
    664485036 ฑีฆายุ เปรมสุข  <br>
    หมู่เรียน 66/96 <br>

    <div class="alert alert-Secondary">
  <strong>เข้าสู่ระบบสำเร็จ</strong> ใช้ bootstrap ได้แล้ววววว
</div>

</body>
   <!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- เพิ่ม sweetaleart2  -->
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
                    'Bad job!',
                    'You clicked the button!',
                    'danger'
                );
            });
        });

    </script>

   <button type="button" class="btn btn-dark">กรุณากดปุ่ม</button>
   <button type="button" class="btn btn-danger">ยกเลิกการบันทึกข้อมูล</button>

   <br>

   <div class="card bg-light text-dark">
    <div class="card-body">Light card</div>
  </div>

  <br>

  <div class="card" style="width:400px">
  <img class="card-img-top" src="me.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">ฑีฆายุ เปรมสุข </h4>
    <p class="card-text">คติประจำใจ : OMG </p>
    <a href="#" class="https://www.npru.ac.th/index.php">See Profile</a>
  </div>
</div>


<button type="button" class="btn btn-primary"id="alert">ทดสอบเรียกใช้งาน Sweet alert</button>
<button type="button" class="btn btn-outline-secondary"id="alert2">Sweet alert</button>

</html>