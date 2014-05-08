<?php
    // Author: Mushegh Melikyan
    // Publisher: Greg Hovanesyan
    
    $months = array(
        'Jan'=>'հունվար',
        'Feb'=>'փետրվար',
        'Mar'=>'մարտ',
        'Apr'=>'ապրիլ',
        'May'=>'մայիս',
        'Jun'=>'հունիս',
        'Jul'=>'հուլիս',
        'Aug'=>'օգոստոս',
        'Sep'=>'սեպտեմբեր',
        'Oct'=>'հոկտեմբեր',
        'Nov'=>'նոյեմբեր',
        'Dec'=>'դեկտեմբեր',
      );

    // order_date comes from woocommerce, use anything you need
    echo strtr(date("d M, Y", strtotime($order->order_date)), $months);
?>
