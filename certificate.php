<?php
// Require composer autoload
require_once __DIR__ . '/mpdf/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new Mpdf\Mpdf([
    'default_font' => 'angsana',
    'format' => 'A4-L'
]);
$name = $_POST['prefix'] . $_POST['name'] . '  ' . $_POST['lastname'];
$role = $_POST['role'];
$num = $_POST['num'];
// Write some HTML code:
$cer = '<style>
@page :first {
    background: url("image/bg1.jpg");
    background-size: 300px 100px;
    background-image-resize:6;
}
</style>
<div style="color:#000; width:100%; position:absolute; top:0px; text-align:right; right:50px;">
    <span style="position:absolute; font-size:20px; ">สภ.สธ.๒ ' . $num . '/2563</span>
</div>

<div style="margin-left:auto; margin-right:auto; width:100%;   position:relative; text-align:center;">
<br><br><br><br><br><br><br><br><br><br><br><br>
 <center><b>  <span style="font-size:35px; text-align:center;">' . $name . '</span></b></center> 
 <br><br>
 <center>  <p style="font-size:35px; text-align:center; "><b>ตำแหน่ง ' . $role . '</b></p></center> 
 <br><br><br><br><br><br><br>
 <center><b>   <span style="font-size:35px; text-align:center;">( นายประยงค์    อินนุพัฒน์ ) <br> ผู้อำนวยการโรงเรียนสุราษฎร์ธานี ๒</span></b></center> 
 
</div>

';
$mpdf->WriteHTML($cer);
$mpdf->Output();
