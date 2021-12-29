<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function print(){
        $card='1Card Bus Ticket';
        $font   = 3;
//        $width  = ImageFontWidth($font) * strlen($string);
//        $height = ImageFontHeight($font);
        $im = @imagecreate (300,200);
        $background_color = imagecolorallocate ($im, 205, 205, 235); //white background
        $text_color = imagecolorallocate ($im, 0, 0,0);//black text
        imagestring ($im, 5, 80, 5, $card, $text_color);
        imagestring ($im, $font, 20, 30, "User: 131-35-437", $text_color);
        imagestring ($im, $font, 160, 30, "Ticket no: 13435437", $text_color);
        imagestring ($im, $font, 160, 50, "Daily Code: SXTB", $text_color);
        imagestring ($im, $font, 20, 50, "Counter : PC,DIU", $text_color);
        imagestring ($im, $font, 20, 70, "Location : Dhanmondi,Dhaka", $text_color);
        imagestring ($im, $font, 50, 180, "Time: 2021-12-27 10:35:54 am", $text_color);
        ob_start();
        imagepng($im);
        $imstr = base64_encode(ob_get_clean());
        imagedestroy($im);
//        return $imstr;
        return view('welcome',array('data'=>$imstr));
    }
}
