<?php
namespace App\Controller;
use App\Controller\AppController;

class PropertiesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel("houses");
    }
    public function index()
      {
        

        $out1="";
        $data1=$this->houses->find('all')->distinct(['location']);
     
        foreach ($data1 as $key=>$value) {
            $out1=$out1."<option value=".$value->location.">".$value->location."</option>";
        }

        $this->set("data1", $out1);
    }
   
public function mail(){

    $this->autoRender=false;
    $to = 'demo@spondonit.com';
    $firstname = $_GET["fname"];
    
    $email= $_GET["email"];
    $text= $_GET["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

}

public function show(){
         
    if (isset($_POST['onoffswtich3'])) {
       if (($_POST['onoffswtich3']=="on")) {
           $switch="sell";
       } else {
           $switch="rent";
       }
    }else $switch="sell";
    if (isset($_POST['location'])) {
       $location=$_POST['location'];
    }
    else $location="Delhi";
   if (isset($_POST['bedroom'])) {
    $bed=$_POST['bedroom'];
  }else $bed='one';

   if (isset($_POST['Type'])) {
    $type=$_POST['Type'];
   }
     else $type="Apartment";
     $price1= substr($_POST['range'], 0, strpos($_POST['range'], ";"));
     $price2=substr($_POST['range'],strpos($_POST['range'], ";")+1,strlen($_POST['range']));
     $area1= substr($_POST['range2'], 0, strpos($_POST['range2'], ";"));
     $area2=substr($_POST['range2'],strpos($_POST['range2'], ";")+1,strlen($_POST['range2']));


     
     $data=$this->houses->find('all')->where([ '(area between'=>$area1,'and'=>$area2.')','rent'=>$switch, 'location'=>$location,  'bedroom'=>$bed , 'type'=>$type],['(area between'=>$area1,'and'=>$area2.')'])->toArray();
          
   $this->set("data",$data);

     
     $out1="";
   $data1=$this->houses->find('all')->distinct(['location']);
     
     foreach ($data1 as $key=>$value) {
         $out1=$out1."<option value=".$value->location.">".$value->location."</option>";
   }
     
   $this->set("data1", $out1);


}

public function details(){
    
    $data=$this->houses->find('all')->where(['id'=>$_GET['id']])->toArray();
          
    $this->set("data",$data);
 
}

}
?>