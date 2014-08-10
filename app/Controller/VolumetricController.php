<?php
class VolumetricController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index(){
        $cd = null;
        
        if($this->request->is("post")){
            $data = $this->request->data;
            
            if(isset($data['cdcalc'])){
                $data = $data['cdcalc'];
                
                $cd = round((float)$data['calories'] / (float)$data['grams'], 2);
            }
        }
        
        $this->set("cd", $cd);
    }
}
?>