<h3>Try catch</h3>

<?php
try{
    $x = 10 / "ab";
} catch (DivisionByZeroError $e) {
    echo 'เกิดข้อผิดพลาด หารด้วย 0 ไม่ได้';
} catch (TypeError $e) {
    echo 'เกิดข้อผิดพลาดไม่สามารถหารด้วยตัวอักษรได้';
} catch (Throwable $e) {  //ดักทุก error แต่จะระบุไม่ได้ว่า error อะไร
    echo 'เกิดข้อผิดพลาดไม่สามารถดำเนินการได้'.$e->getMessage();//->getMessage คือการให้รุบุรายละเอียดของ Error นั้นๆ
}
try {

}catch (Throwable $e) {

}

?>
