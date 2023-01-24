<?php 
    class Vt extends CI_Model
    {

        var $Moderator;
        var $user;
        public function __construct()
        {
            parent::__construct();
            if($this->session->has_userdata('info')){
                $this->user = $this->session->userdata('info');
                $this->Moderator = $this->user->uname;
            }
            else{
                $this->Moderator = 'Daha giriş yapılmadı';
            }
        }

        public function logincontrol($uname,$password)
        {
           $result = $this->db->select('*')
           ->from('users')
           ->where('uname',$uname)
           ->where('password',$password)
           ->get()
           ->row();
 
           if( $result == NULL)
           {
               return false;
           }
           else
           {
               return $result;
           }
        }

        public function allUser(){
            $result = $this->db->select('*')
            ->from('kullaniciler')
            ->get()
            ->result();
    
            if( $result == NULL)
            {
                return false;
            }
            else
            {
                return $result;
            }
        }

        public function userCreate($data = array()){
            $result = $this->db->insert('kullaniciler',$data);
            return $result;
        }

        public function log($data = array()){
            $result = $this->db->insert('log',$data);
        }

        public function oneUser($id){
            $result = $this->db->select('*')->from('kullaniciler')->where('id',$id)->get()->row();
            return $result;  
        } 

        public function oneToken($id){
            $result = $this->db->select('*')
             ->from('kullaniciler')
             ->where('id',$id)
             ->get()
             ->row();
             if($result != NULL)
             {
                return $result;
             }
             else
             { 
                return false;
             }
        }

        public function updateData($table,$data,$id){
            if($id != 'none' ){
                $result = $this->db->update($table,$data,array('id'=>$id));
            }
            else{
                $result = $this->db->update($table,$data);
            }
            if($result != NULL)
            {
               $log = '';
               foreach($data as $key=>$value){
                   $log .= $key.','.$value.'|'; 
               }
               $this->log(logData('Update',$this->Moderator,$log,$table,$table.' Tablosundaki bir veriyi güncelledi'));
               return $result;
            }
            else
            { 
               return false;
            }
        }

        public function allDataColumns($table,$columns){
            return $this->feedBack($this->db->select($columns)
            ->from($table)
            ->get()
            ->result(),
            'Select',
            $table.' tablosundaki tüm veriler',
            $table,
            $table.' Tablosundaki tüm verilere baktı');
        }

        public function allDataLastOrder($table,$key){
            return $this->feedBack($this->db->select('*')
            ->from($table)
            ->order_by($key,"DESC")
            ->get()
            ->result(),
            'Select',
            $table.' tablosundaki tüm veriler',
            $table,
            $table.' Tablosundaki tüm verilere baktı'); 
        }

        public function allDataLastLimit($table,$key,$operating){
            return $this->feedBack($this->db->select('Name,Sorname,dogumTarihi,Moderator')
            ->from($table)
            ->order_by($key,"DESC")
            ->where('operating',$operating)
            ->limit(5)
            ->get()
            ->result(),
            'Select',
            $table.' tablosundaki son 5 veriyi çekti',
            $table,
            $table.' Tablosundaki tüm verilere baktı'); 
        }

        public function lastMessage(){
            return $this->feedBack($this->db->select('*')
            ->from('messages')
            ->order_by('createDate',"DESC")
            ->get()
            ->row(),
            'Select',
            'messages tablosundaki son 5 veriyi çekti',
            'messages',
            'messages'.' Tablosundaki tüm verilere baktı'); 
        }

        public function allData($table){
            return $this->feedBack($this->db->select('*')
            ->from($table)
            ->get()
            ->result(),
            'Select',
            $table.' tablosundaki tüm veriler',
            $table,
            $table.' Tablosundaki tüm verilere baktı');
        }

        public function oneData($table,$value,$key = 'id'){
            return $this->feedBack($this->db->select('*')
            ->from($table)
            ->where($key,$value)
            ->get()
            ->row(),
            'Select',
            $value.'verisi',
            $table,
            $table.' Tablosundaki tek bir veriyi çekti'
            );
        }

        public function insertData($table,$data = array()){
            $log = '';
            foreach($data as $key=>$value){
                $log .= $key.','.$value.'|'; 
            }
            return $this->feedBack(
                $this->db->insert($table,$data),
                'insert',
                $log,
                $table,
                $table.' Tablosuna bir veri kaydetti'
            );   
        }

        public function deleteData($table,$id){
            return $this->feedBack(
                $this->db->delete($table,array('id'=>$id)),
                'Delete',
                $id,
                $table,
                $table.' Tablosundaki bir veriyi sildi'
            );   
        }

        public function countData($table){
            return $this->feedBack($this->db->select('count(*) as count')
            ->from($table)
            ->get()
            ->row(),
            'Select',
            'verisi',
            $table,
            $table.' Tablosundaki tek bir veriyi çekti'
            );
        }

        function feedBack($result,$type,$data,$table,$message){
            if($result != NULL)
            {
                $this->log(logData($type,$this->Moderator,$data,$table,$message));
                return $result;
            }
            else
            { 
                return false;
            }
        }
   }