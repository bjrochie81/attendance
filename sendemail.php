<?php
    require 'vendor/autoload.php';    

    class SendEmail{
        public static function SendMail($to, $subject, $content){
            $key = '6E11E5BD8F91E05B3A85AEF810E51E0D856E57E85209911BDF88554200DFF69D354F44191246CF686B955C2A4B324215';
            $url = 'https://api.elasticemail.com/v2/email/send';

            try {

                $email = array('from' => 'bjrochie81@gmail.com',
                'fromName' => 'Barrington Rochester',
                'apikey' => $key,
                'subject' => $subject,
                'to' => $to,
                'bodyHtml' => $content,
                'bodyText' => $content,
                'isTransactional' => false);
                
                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $email,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HEADER => false,
                    CURLOPT_SSL_VERIFYPEER => false
                ));
                
                $result=curl_exec ($ch);
                curl_close ($ch);
                
                //echo $result;

            } catch (Exception $e) {
                echo 'Email exception Caught : ' . $e->getMessage() . "\n";
                return false;
            }
        }
    }
?>