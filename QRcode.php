<?php
// 1. 生成原始的二维码(生成图片文件)  
function scerweima($url='', $validation_code){  
    require_once 'phpqrcode/phpqrcode.php';  
      
    $value = $url;                  //二维码内容  
      
    $errorCorrectionLevel = 'L';    //容错级别   
    $matrixPointSize = 8;           //生成图片大小    
    
    $validation_code_arr = explode(",",$validation_code);
    //生成二维码图片
    if($validation_code_arr[1] == "Exist") {
        $filename = 'qrcode/'.$validation_code_arr[0].'.png'; 
        return "<img src='$filename' alt=''>";
    }
    else {
        $filename = 'qrcode/'.$validation_code_arr[0].'.png';  
        QRcode::png($value, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
    
        $QR = $filename;                //已经生成的原始二维码图片文件    
        $QR = imagecreatefromstring(file_get_contents($QR));    
    
        //输出图片    
        //imagepng($QR, 'qrcode.png');    
        //imagedestroy($QR);
        return "<img id='qrcode' src='$filename' alt=''>";
    }
}

function scerweima_company($url='', $company_name){  
    require_once 'phpqrcode/phpqrcode.php';  
      
    $value = $url;                  //二维码内容  
      
    $errorCorrectionLevel = 'L';    //容错级别   
    $matrixPointSize = 8;           //生成图片大小    
    
    //生成二维码图片
    $filename = 'qrcode/'.$company_name.'.png';  
    QRcode::png($value, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
    
    $QR = $filename;                //已经生成的原始二维码图片文件    
    $QR = imagecreatefromstring(file_get_contents($QR));    
    
    return "<img id='qrcode' src='$filename' alt=''>";
}
?>