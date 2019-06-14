<?php

/**
 *
 */
class User
{

  public function is_loggedin()
    {
        if(isset($_SESSION['is_logged']))
        {
            return true;
        }else{

            return false;
        }
    }


    public function DoLogin($user_email,$user_password)
    {

        if(!isset($user_email)  && !isset($user_password)){

            $functions = new GeneralFunctions();
            $functions->session_message("danger","Kullanıcı Adı veya Şifre Boş Bırakılamaz","login_alert_session");

        }else{
            $basicdb = new BasicDB();
            $get_user = $basicdb->from('Users')
                ->where('EMAIL', $user_email)
                ->where('PASSWORD', md5($user_password))
                ->all();


                            if($get_user){

                                $_SESSION['is_logged'] = true;

                                $_SESSION['is_root'] = "1";

								$_SESSION['user_id'] = $get_user[0]["ID"];

                                return true;
                            }else{
                                Errors::getInstance()->Warning("Email or Password Incorrect !");
                            }




            }




    }


    public function get_user_details($id){

		$basicdb = new BasicDB();
            $get_user = $basicdb->from('Users')
                ->where('ID', $id)
                ->all();

				return $get_user;




	}


  public function updateAccountDetails($userid,$Username,$Email,$Password,$changePassword = false){

    $db = new BasicDB();

    if($changePassword){
      $query =  $db->update('Users')
         ->where('ID', $userid)
         ->set([
             "EMAIL"=>$Email,
             "USERNAME" => $Username,
             "PASSWORD" => md5($Password)
         ]);

    }else {
      $query =  $db->update('Users')
         ->where('ID', $userid)
         ->set([
             "EMAIL"=>$Email,
             "USERNAME" => $Username
         ]);
    }



             if($query){
               Errors::getInstance()->Infos("Successfull !");
               return true;
             }else{
               Errors::getInstance()->Warning("Error !");
               return false;
             }





  }


}


?>
