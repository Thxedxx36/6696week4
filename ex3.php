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
    <h1> โปรแกรมบันทึกข้อมูลของสัตว์เลี้ยง </h1>

    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ชื่อของเจ้าของ</label>
    <input type="text" class="form-control" id="inputAddress2" >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">ชื่อของสัตว์เลีี้ยง</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">ลักษณะเด่น</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="รูปร่าง, ขน , ดวงตา, เล็บ, อายุ">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">พฤติกรรม</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="กร้าวร้าว, ซึมเศร้า, ร่าเริง">
  </div>
  <div class="col-2">
    <label for="inputCity" class="form-label">วันเกิด</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputState" class="form-label">เพศ</label>
    <select id="inputState" class="form-select">
      <option selected>เลือก</option>
      <option>ตัวผู้</option>
      <option>ตัวเมีย</option>
      </select>
      </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">สายพันธ์ุ</label>
    <select id="inputState" class="form-select">
      <option selected>เลือก</option>
      <option>หมา</option>
      <option>แมว</option>
      <option>แฮมเตอร์</option>
      <option>ปลา</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">อายุ</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">ยา</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">ช่องทางติดต่อเจ้าของ</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="เบอร์โทร">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
  <button type="submit" class="btn btn-dark"id="alert">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger"id="alert2">ยกเลิกข้อมูล</button>
  </div>
</form>

ิ<br>
664485036 ฑีฆายุ เปรมสุข  หมู่เรียน 66/96 <br>


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
                    'สำเร็จ!',
                    'You clicked the button!',
                    'success'
                );
            });
    
            $('#alert2').click(function() {
                Swal.fire(
                    'ล้มเหลว!',
                    'You clicked the button!',
                    'danger'
                );
            });
        });

    </script>


</html>