<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=itim" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="animate.css"> 
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
 
swal({
            title: 'คัดลอกสำเร็จ',
            text: '',
            icon: 'success',
    button: 'OK',
      });

}
</script>
<?php 
//include ("controller/config.php");
include ("edit.php");
?>
<title>NOOKER-VPN</title>
<style>
body {
height : auto;
max-width : 100%;
width : 100%;
background-color : #F5F5F5;

font-family: 'Mitr';

color : #990099;
}

</style>

<body>

<p>

<center>
<div class="container">
<div class="modal fade" id="scname" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $scname;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php echo $scexp;?>
<p>
<br />
<textarea type="text" id="myInput"class="col-12"><?php echo $sclink;?></textarea>
<p>
<br>

<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $scyt;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</iframe>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="form-control btn btn-primary" onclick="myFunction()">คัดลอก Script</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="scname2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $userapp;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php echo $update;?>
<p>
<br />
<table class="table">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col"> <center>เซิร์ฟเวอร์</th>
      <th scope="col"> <center>ชื่อผู้ใช้</th>
      <th scope="col"> <center>รหัสผ่าน</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($server as $r){ ?>
    <tr>
      <td> <center><?= $r["server"] ?></td>
      <td> <center><?= $r["user"] ?></td>
      <td> <center><?= $r["pass"] ?></td>
    </tr>
 <?php } ?>
  </tbody>
</table>

<p>
<br>


      </div>
      
    </div>
  </div>
</div>




<div class="col-lg-6 wow fadeInUp animated " style="visibility: visible; animation-name: fadeInUp;"> 
   
<img src="<?php echo $imglogo;?>" width="160dp" height="auto">
<br />

<h4><?php echo $nameweb;?></h4>

