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
   
    <form class="row g-4">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ชื่อ-สกุล</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">email</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputAddress4" class="form-label">ชื่อผู้ใช้งานของคุณ</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="xxx...">
  </div>
  <div class="col-md-4">
    <label for="inputAddress2" class="form-label">Password </label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="xx..xx..">
  </div>
    <div class="col-md-6">
    <label for="inputState" class="form-label">อายุ (Age)
    </label>
    <select id="inputState" class="form-select">
      <option selected>18.</option>
      <option>...</option>
      <div class="col-md-6">
    <label for="inputState" class="form-label"> เพศ (Gender)
    </label>
    <select id="inputState" class="form-select">
      <option selected>ผู้ชาย</option>
      <option>ผู้หญิง</option>
      <option>อื่นๆ..</option>
    </select>
    <div class="col-md-5">
    <label for="inputAddress4" class="form-label"> การ์ตูนเรื่องโปรด (Favorite Comic)</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="xxx...">
  </div>
  <div class="col-md-4">
    <label for="inputAddress4" class="form-label">แนวการ์ตูนที่ชอบ</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="xxx...">
  </div>
    <input type="text" class="form-control" id="inputAddress" placeholder="xxx...">
  </div>
      <form class="row g-6">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">อาชีพ (Occupation)</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">ความถี่ในการอ่านการ์ตูน (Reading Frequency)</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  
  <button type="button" class="btn btn-outline-success" id="alert">บันทึกข้อมูล</button>
 
</form>

       พัฒนาโดย 664485036 ฑีฆายุ เปรมสุข หมู่เรียน66/96<br>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
       $('#alert').on('click', function(e) {
      e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
      }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
      });
    });
    </script>
</html>
