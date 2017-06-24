<?php
if ($data == "gppersian" ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ) {
     file_put_contents("data/$cllchatid/lang.txt", "persian");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"`ربات در گپ فعال شد✅
و زبان فارسی را انتخاب کردید🇮🇷`", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	 [
		['text'=>"راهنما ♣️",'callback_data'=>"bag"]
	  ],
	   [
	  ['text'=> "SUPER API" ,'url'=>"http://telegram.me/super_api"]
	  ]
   ]
   ])
   ]);
   }   
   }
   
  if( $lang12 == "persian" ){  
     if($data == "settingslang" ){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"`لطفا زبان مناسب را انتخاب کنید 😃 `",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	   [
 		['text'=>"🇮🇶عربی🇮🇶",'callback_data'=>"gparabi"],		
	  ],
	  [
		['text'=>"🇦🇺English🇦🇺",'callback_data'=>"gpenglish"],
	  ],
	  [
	   ['text'=>"🇭🇺فارسی🇮🇷",'callback_data'=>"gppersian"]
	  ]
   ]
   ])
   ]);
    }
    }
    }     //by  < Munir > @wonds1
   //================العداد==============
if( $lang1 == "persian" ){
if ($from_id == $sudo  ) {
if ($text == "آمار"){
$allgp_get = file_get_contents('data/allgp.txt');
		$get_gp= explode("\n",$allgp_get);
		$geted = count($get_gp) - 1;
		$allmem_ = file_get_contents('data/members.txt');
		$get_all= explode("\n",$allmem_);
		$getall = count($get_all) - 1;
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎋`پیام ها در گروه ~» $allmsg
🎋 پیام ها در پیوی ~» $allmsgpv
🎋 اعضا ~» $getall
🎋 همه گروه های ادد شده ~» $geted`",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"SUPER API", 'url'=>"https://telegram.me/super_api"]
    ]
    ]
    ])
    ]);
    }
}
}
 if( $lang1 == "persian" ){
if ($text == "اطلاعات من"   ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍁` نام : $name
🍁 ايدی عددی : $from_id
🍁 یوزرنیم `: @$user `
•~~~~~~ـ~~~~~~•
🍁اسم گروه : $gp_name
🍁 ايدي عددی گروه : $chat_id 
•~~~~~~ـ~~~~~~•
🍁 اخطارها : ($warn_1 | $warn)`",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'MARKDOWN',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   }
//========================== الطرد ===============
 if( $lang1 == "persian" ){
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="اخراج"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عضو اخراج شد 👞",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
   ]
   ])
   ]);
   }    
   }
   }
    if( $lang1 == "persian" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"اخراج") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"عضو اخراج شد 👞",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    }
    }
 if( $lang1 == "persian" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="بن"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id, // by @wounds1 = mounir
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عضو مسدود شد 🚫",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
	  ]
   ])
   ]);
   }    
   }
   }
  if( $lang1 == "persian" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"بن") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "" && $text['1'] != "الحظر" && $text['1'] != "حظر") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"عضو مسدود شد 🚫",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
     }
      if( $lang1 == "persian" ){
     if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if($message->reply_to_message && $text == "الغاء الحظر" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'💡 عضو از مسدودیت در آمد 🔚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
     [
     ['text'=>$message->reply_to_message->from->first_name, 'url'=>"https://telegram.me/".$message->reply_to_message->from->username]
     ]
     ]
     ])
     ]);
     } 
     }
     }
      if( $lang1 == "persian" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if (strpos($textmessage,"حذف بن") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'💡 عضو از مسدودیت در آمد 🔚',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }
   }
// ====================== الكتم =================
 if( $lang1 == "persian" ){
if($text == "سکوت" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🤐کاربر عزیز بیصدا شدی✋🏻
⚠️لطفا قوانین را رعایت کن❗️",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

file_put_contents("data/$chat_id/silent.txt", "\n" . $re_id, FILE_APPEND);
}
}
}
 if( $lang1 == "persian" ){
if($text == "سکوت" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♣️کاربر در  حاضر بیصداست➖",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
 if( $lang1 == "persian" ){
if($text == "لغو سکوت" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"😬شما از بیصدا خارج شديد✅
🚸تکرار نشه خواهشا❌",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

$super_api = file_get_contents("data/$chat_id/silent.txt");
$super_api = str_replace($re_id,'',$super_api);
$super_api = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $o);
file_put_contents("data/$chat_id/silent.txt", $super_api);
}
}
}
 if( $lang1 == "persian" ){
if($text == "لغو سکوت" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👁‍🗨 کاربر در حال حاضر بیصدا نیست💢",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
 //========================== وضع ترحيب ===============
    
      if( $lang12 == "persian" ){
     if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"دوست عزیز لطفا خوشآمد که میخوای بزار بفرس🔃 ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "SUPER API" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
         }
      if( $lang1 == "persian" ){
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
     file_put_contents("data/$chat_id/welcome.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" خوشآمد مورد نظر ذخیره شد✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
    
      if( $lang1 == "persian" ){   
    if($new_member  ){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$getwelcome", 
      'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
 		]
  		])
   ]);
   } 
}
 //========================== المساعدة ===============  
    
      if( $lang1 == "persian" ){
     if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
if($text == 'راهنما'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"این لیست فقط برای مدیران است😎
هر دستوری که میخواهی لمس کنید♋️
از طریق کیبورد شیشه ای ✋🏻",
                           'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	 	['text'=>"~»  تنظیمات قفل 🔒",'callback_data'=>"help"]
	  ],
	  [
  	['text'=>"~»  راهنما مدیریتی 🕴",'callback_data'=>"ss"]
	  ],
	   [
  	['text'=>"تنظیمات زبان 🗣",'callback_data'=>"settingslang"]
	  ],
   [
  	['text'=>"~»  توسعه دهندگان 🎭",'callback_data'=>"dev"]
	  ]
   ]
   ])
   ]);
   } 
   }
   }
   if ( $lang12 == "persian"){
  if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>" این لیست فقط برای مدیران است😎
هر دستوری که میخواهی لمس کنید♋️
از طریق کیبورد شیشه ای ✋🏻",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"~»  تنظیمات قفل 🔒",'callback_data'=>"help"]
 	  ],
	   [
  		['text'=>"~»  راهنما مدیریتی 🕴",'callback_data'=>"ss"]
 	  ],
 	  [
  	['text'=>"تنظیمات زبان 🗣",'callback_data'=>"settingslang"]
	  ],
	   [
	  	['text'=>"~»  توسعه دهندگان 🎭",'callback_data'=>"dev"]
	   ]
    ]
    ])
    ]);
    }
    else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
       ]);
       }
       } 
       }
       elseif ($data == 'dev' )
      {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"bot programmer by @wounds1 😊",
       ]);
       }   
 //========================== القوانين ===============
    
      if( $lang12 == "persian" ){
      if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_ لطفا در حال حاضر ارسال قوانین _ 🔃", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "SUPER API" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
	 	['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ]) //by  < Munir > @wonds1
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
         }
      if( $lang1 == "persian" ){
  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo   ){
     file_put_contents("data/$chat_id/rules.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" 🗒 خوشآمد مورد نظر ذخیره شد✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
      if( $lang1 == "persian" ){
 if($text == 'قوانين'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"SUPER API" ,'url'=>"http://telegram.me/super_api"]
	  ]
   ]
   ])
   ]);
   }
   }
 //==========================الرابط ===============
    
 if( $lang12 == "persian" ){ 
     if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"لطفا لینک جدید را ارسال کنید🔃", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "SUPER API" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
     }
      if( $lang1 == "persian" ){
  if ($gplink == "setlink" ){
if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
     file_put_contents("data/$chat_id/gplink.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" 🗒 خوشآمد مورد نظر ذخیره شد✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"SUPER API" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
 		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
   }
 if( $lang1 == "persian" ){
if($text == 'الرابط'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
              'text' =>"$gplink",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   }  
 if( $lang12 == "persian" ){
if($data == 'help'){
sendaction($chat_id, typing);
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					[
					['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
					[
					['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	   [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
      ]
      ])
      ]);
      }    }
 if( $lang12 == "persian" ){
 if ( $data == "link" && $link12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/link.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [
    	 ['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"✅",'callback_data'=>"link"]
							],
					[
					['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "link" && $link12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/link.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"❌",'callback_data'=>"link"]
 					],
						[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
		 			],
		 			[
      	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
     	 ],
       [
      	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
     	 ],
       [
      	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
     	 ],
       [
      	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
     	 ],
       [
      	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
     	 ],
     	 [
      	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	      ],
	      [
      	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
     	 ],
   	 	 [
      	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
     	 ],
    	  [
      	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
     	 ],
       [
    		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
    	  ]
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
 if( $lang12 == "persian" ){
if ( $data == "tag" && $tag12 == "❌") {
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"✅",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "tag" && $tag12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"❌",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}   }
 if( $lang12 == "persian" ){
if ( $data == "photo" && $photo12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/photo.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"✅",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "photo" && $photo12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/photo.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"❌",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}


   }
 if( $lang12 == "persian" ){
if ( $data == "fwd" && $fwd12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/fwd.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"✅",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   //by  < Munir > @wonds1
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "fwd" && $fwd12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/fwd.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"❌",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}





   }
 if( $lang12 == "persian" ){
if ( $data == "game" && $game12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/game.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"✅",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]		
      ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "game" && $game12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/game.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"❌",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
 if( $lang12 == "persian" ){
if ( $data == "video" && $video12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/video.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"✅",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "video" && $video12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/video.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"❌",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
 if( $lang12 == "persian" ){
if ( $data == "voice" && $voice12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/voice.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"✅",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "voice" && $voice12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/voice.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"❌",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
 if( $lang12 == "persian" ){
if ( $data == "audio" && $audio12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/audio.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"✅",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "audio" && $audio12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/audio.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"❌",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}

   }
 if( $lang12 == "persian" ){
if ( $data == "file" && $doc12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/doc.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"✅",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "file" && $doc12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/doc.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"❌",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}


   }
 if( $lang12 == "persian" ){
if ( $data == "all" && $text12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/text.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					], //the file by mounir
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"✅",'callback_data'=>"all"]
	 ],
	 	  [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "all" && $text12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/text.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"❌",'callback_data'=>"all"]
	 ],
	  [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
   }
 if( $lang12 == "persian" ){
if ( $data == "sticker" && $sticker12 == "❌") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/sticker.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"✅",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }   }
 if( $lang12 == "persian" ){
 if ( $data == "sticker" && $sticker12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/sticker.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"لینک 🌐",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"استیکر 🦊",'callback_data'=>"sticker"],['text'=>"❌",'callback_data'=>"sticker"]
					],
					[
	['text'=>"عکس 👁‍🗨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"تگ (@/#) 💱",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"فروارد 🔁",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"بازی 🎮",'callback_data'=>"game"],	 ['text'=>"$game12 ",'callback_data'=>"game"]
	 ],
    [
	['text'=>"فیلم 🎞",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"ویس 🎤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"موسیقی 🎼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"فایل 📦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"همه 👥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"],['text'=>"🔜بعدی",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
}







  
 if( $lang12 == "persian" ){
if ( $data == "next") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	      [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
 
   }
 if( $lang12 == "persian" ){
  if ( $data == "location" && $location12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"❌",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
 
   }
 if( $lang12 == "persian" ){
 if ( $data == "location" && $location12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"✅",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
   }
 if( $lang12 == "persian" ){
 if ( $data == "contact" && $contact12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"❌",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
 if( $lang12 == "persian" ){
if ( $data == "contact" && $contact12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"✅",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
 if( $lang12 == "persian" ){
if ( $data == "edit" && $edit12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"✅",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
 if( $lang12 == "persian" ){
if ( $data == "edit" && $edit12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"❌",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
 if( $lang12 == "persian" ){
if ( $data == "marabi" && $marabi12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"❌",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
 if( $lang12 == "persian" ){
if ( $data == "marabi" && $marabi12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"✅",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
 if( $lang12 == "persian" ){
if ( $data == "mpersian" && $mpersian12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"❌",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
 if( $lang12 == "persian" ){
if ( $data == "mpersian" && $mpersian12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"✅",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
 if( $lang12 == "persian" ){
if ( $data == "menglish" && $menglish12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$menglish12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"❌",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }
  }
 if( $lang12 == "persian" ){
if ( $data == "menglish" && $menglish12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"✅",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
 if( $lang12 == "persian" ){
if ( $data == "Long_list" && $long_list12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"❌",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }

  }
 if( $lang12 == "persian" ){
if ( $data == "Long_list" && $long_list12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"✅",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
 if( $lang12 == "persian" ){
if ( $data == "gif" && $gif12 == "✅" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"❌",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }  }
 if( $lang12 == "persian" ){
if ( $data == "gif" && $gif12 == "❌" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","✅");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"دوست عزیز این لیست  قفل ها⚓️
رو این لیست دستورات کلیک کن تا بتونی دستورات رو قفل و باز کنی! 🚦

دستورات ممنوع ==❌
دستورات مجاز==✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"مکان ❕",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"مخاطب 📞",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"ویرایش 🀄️",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"️عربی 🇮🇶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"فارسی 🇮🇷️",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"انگلیسی 🇦🇺️",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"اسپم 🗒️",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"گیف 💠️",'callback_data'=>"gif"],['text'=>"✅",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
 }


  }
 if( $lang12 == "persian" ){
if($data == "ss"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  📛 دستورات مخصوص مدیران 📛
اخراج [id / reply ] 
🔸برای حذف کردن کاربر
بن [id / reply ] 
🔸مسدود کردن کاربر⛓
حذف بن [id/ reply]
🔸در آوردن از حالت مسدودیت ⚖️
 پاک کردن [ reply ]
🔸برای حذف کردن پیام کاربر 🗑
         «~~~~~~~~~~~~~~»
ُهشدار[ reply ] 
🔸براي هشدار دادن به كاربر 📍
لغو هشدار [reply] 
🔸براي حذف كردن هشدار كاربر ♣️
سکوت [ reply ] 
🔸بیصدا کردن کاربر 🤐
لغو سکوت [ reply ]
🔸 در آوردن کاربر از حالت بیصدا در گروه😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 خوشآمدگویی 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍لینک گپ 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 قوانين  📜",'callback_data'=>"rul"]
					],
         [
						['text'=>"♣️ تعداد هشدار ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
  elseif ($data == '#' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"هذا هو الحد الاقصى لعدد التحذيرات ♣️",
]);
}   
 elseif ($data == 'muner' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قم بلضغط على 
➕ ليزادة التحذير
➖ لتقليل التحذير️",
]);
}   
  
 if( $lang12 == "persian" ){
if($data == '+'){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  📛 دستورات مخصوص مدیران 📛
اخراج [id / reply ] 
🔸برای حذف کردن کاربر
بن [id / reply ] 
🔸مسدود کردن کاربر⛓
حذف بن [id/ reply]
🔸در آوردن از حالت مسدودیت ⚖️
 پاک کردن [ reply ]
🔸برای حذف کردن پیام کاربر 🗑
         «~~~~~~~~~~~~~~»
ُهشدار[ reply ] 
🔸براي هشدار دادن به كاربر 📍
لغو هشدار [reply] 
🔸براي حذف كردن هشدار كاربر ♣️
سکوت [ reply ] 
🔸بیصدا کردن کاربر 🤐
لغو سکوت [ reply ]
🔸 در آوردن کاربر از حالت بیصدا در گروه😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
						['text'=>"🔲 خوشآمدگویی 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍لینک گپ 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 قوانين  📜",'callback_data'=>"rul"]
					],
        [
						['text'=>"♣️ تعداد هشدار⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
 if( $lang12 == "persian" ){
 if($data == '-' ){
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  📛 دستورات مخصوص مدیران 📛
اخراج [id / reply ] 
🔸برای حذف کردن کاربر
بن [id / reply ] 
🔸مسدود کردن کاربر⛓
حذف بن [id/ reply]
🔸در آوردن از حالت مسدودیت ⚖️
 پاک کردن [ reply ]
🔸برای حذف کردن پیام کاربر 🗑
         «~~~~~~~~~~~~~~»
ُهشدار[ reply ] 
🔸براي هشدار دادن به كاربر 📍
لغو هشدار [reply] 
🔸براي حذف كردن هشدار كاربر ♣️
سکوت [ reply ] 
🔸بیصدا کردن کاربر 🤐
لغو سکوت [ reply ]
🔸 در آوردن کاربر از حالت بیصدا در گروه😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [
			 			['text'=>"🔲 خوشآمدگویی 🔳",'callback_data'=>"welc"]
  					],
  					[
	 	 			['text'=>"📍لینک گپ 📍",'callback_data'=>"gplink"]
		  			],
	   			[
						['text'=>"🗒 قوانين  📜",'callback_data'=>"rul"]
						],
        [
       	['text'=>"♣️ تعداد هشدار ⬇️",'callback_data'=>"muner"]
  					],
  	     [
	   			['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
			  		],
         [
         ['text'=>"بازگشت 🔙",'callback_data'=>"bag"]
         ]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
 } 
$warns = $warn - 1;  
 if( $lang1 == "persian" ){
if ($warns != $warn_2){ 
 if($re &&$text == "هشدار"){  
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"ببخشید دوست عزیز 😒✋🏻
مواظب رفتارت تو گروه باش 👥
این هشدار از طرف مدیر هستش👨‍🏫
هشدار های شما تا الان  ( $nnwarn | $warn )
اگر هشدار به ($warn) برسد از گروه حذف خواهید شد📌",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  }  
 }
 }
 }
 $warns = $warn - 1;   
 if( $lang1 == "persian" ){
 if ($warns == $warn_2){
if($re && $text == "هشدار"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"با عرض پوزش، دوست من 💂
شما قوانین گروه را رعایت نکردید👨💼
به حداکثر هشدار ها رسیده شما اخراج شدید 👞
تعداد هشدار های داده شده ( $warn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
  }
  }
  }
    }
 if( $lang1 == "persian" ){
  if($re && $text == "لغو هشدار"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"امروز یک روز خوب است. 😁
همه ی هشدار های شما پاک شد🗑 ",
                'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  } }  }
 if( $lang12 == "persian" ){
  if($data == "bagg"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  📛 دستورات مخصوص مدیران 📛
اخراج [id / reply ] 
🔸برای حذف کردن کاربر
بن [id / reply ] 
🔸مسدود کردن کاربر⛓
حذف بن [id/ reply]
🔸در آوردن از حالت مسدودیت ⚖️
 پاک کردن [ reply ]
🔸برای حذف کردن پیام کاربر 🗑
         «~~~~~~~~~~~~~~»
ُهشدار[ reply ] 
🔸براي هشدار دادن به كاربر 📍
لغو هشدار [reply] 
🔸براي حذف كردن هشدار كاربر ♣️
سکوت [ reply ] 
🔸بیصدا کردن کاربر 🤐
لغو سکوت [ reply ]
🔸 در آوردن کاربر از حالت بیصدا در گروه😬 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 خوشآمدگویی 🔳",'callback_data'=>"welc"]
		 			],
		 			[
						['text'=>"📍لینک گپ 📍",'callback_data'=>"gplink"]
		 			],
	 				[
		 			['text'=>"🗒 قوانین 📜",'callback_data'=>"rul"]
	  			],
       [
  				['text'=>"♣️ تعداد هشدار⬇️",'callback_data'=>"muner"]
	  			],
	      [
			 		['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
	 				],
					 [
     		['text'=>"بازگشت 🔙",'callback_data'=>"bag"]
	      ]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
  
  }
 if( $lang12 == "persian" ){  
if($data == "welc"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"این لیست تنظیمات خوشآمدگویی است🤗
کلیک بزن روی((⬛️ تنظیم خوشآمدگویی ⬜️))
برای تنظیم خوشآمد گویی خودتون در گپ😄",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"⬛️ تنظیم خوشآمدگویی ⬜️",'callback_data'=>"welcom"]
					],
					 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
 if( $lang12 == "persian" ){
// by @wounds1 = mounir
if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"این لیست تنظیمات قوانين است🤗
کلیک بزن روی ((تنظيم قوانين 📨))
برای تنظیم قوانين گویی خودتون در گپ😄",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"تنظيم قوانين 📨️",'callback_data'=>"rules"]
					],
					 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
  }
 if( $lang12 == "persian" ){
if($data == "gplink"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"به لیست لینک گپ خوشآمدید🖇
کلیک بزن روی 🔍👇🏻
(📍تنظیم لینک 📍)
برای گذاشتن لینک جدید📨",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>" 📍تنظیم لینک 📍",'callback_data'=>"setlink"]
					],
					 [
		['text'=>"بازگشت 🔙",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشيد 📛 اين دستور مخصوص مديران گپ میباشد ⚠️",
        'show_alert'=>true
        ]);
}
}
}
?>
/* help

Programmer
 < Munir > @wonds1
~~~~~~~~~~~~
Aides developer
« Mohammed » @vps_1
«~~~~~~~~~~~»
 ch = @soper_api


*/
