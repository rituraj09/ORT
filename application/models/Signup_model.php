<?php
class Signup_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function checkEmail($email)
    {
        $this->db->select('emailid')->from('new_user_login')->where('emailid', $email);
        $q = $this->db->get();
        return $q->num_rows();

    }

    public function insertUser($data)
    {
        $this->db->insert('new_user_login', $data);
        $email=$data['emailid'];
        $this->db->select('uid, name, emailid');
        $query = $this->db->get_where('new_user_login', array('emailid' => $email));
        $row = $query->row();
        $uid = $row->uid;
        $sess_data=array(
            'uid'=>$row->uid,
            'name'=>$row->name,
            'emailid'=>$row->emailid
        );

       // $this->session->sess_destroy();
        $this->session->set_userdata($sess_data);
        return $uid;
        //$name=$row->name;

        // return $this->db->affected_rows();
    }

    public function checkEmailActivationKey($email,$key){
        $this->db->select('emailid');
        $array = array('emailid' => $email, 'activated_user' => $key);
        $this->db->where($array);
        $q = $this->db->get('new_user_login');
        return $q->num_rows();

    }
    public function updateActivationKey($email){
        $data = array(
            'activated_user' => NULL,
        );
        $this->db->where('emailid', $email);
        $this->db->update('new_user_login', $data);
        return $this->db->affected_rows();
    }

    public function insertAndroidDevice($regid,$dInfo){

        $data = array(
            'regid' => $regid

        );

        $data1 = array(
            'regid' => $regid,
            'dInfo'=> $dInfo
        );
        $this->db->select('regid');
        $array = $data;
        $this->db->where($array);
        $q = $this->db->get('android_users');
        if($q->num_rows()>=1){
            return 0;
        }
        else {
            $this->db->insert('android_users', $data1);
            return $this->db->affected_rows();
        }

    }
    public function insertAndroidDeviceEmail($regid,$dInfo,$email){

        $data1 = array(
            'regid' => $regid
        );
        $data2 = array(
            'regid' => $regid,
            'emailid' => $email,
            'dInfo' => $dInfo
        );

        $this->db->select('regid');
        $array = $data1;
        $this->db->where($array);
        $q = $this->db->get('android_users');
        if($q->num_rows()>=1){
            $this->db->where('regid', $regid);
            $this->db->update('android_users', $data2);
        }
        else {
            $this->db->insert('android_users', $data1);
            return $this->db->affected_rows();
        }

    }
    public function getUsers($email=FALSE, $password=FALSE){
        /*if ($slug === FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }*/

        if($email===FALSE && $password===FALSE )
        {
            return 0;
        }
        else
        {

            $this->db->select('emailid');
            $this->db->where('emailid', $email);
            $result=$this->db->get('new_user_login');
            if ($result->num_rows() == 1)
            {
                $sql = "SELECT * FROM new_user_login WHERE emailid = ? AND password = ? LIMIT 1";
                $result=$this->db->query($sql, array($email, $password));

                if ($result->num_rows() == 1)
                {
                    $row=$result->row();

                    /*  if($row->activated_user!=NULL)
                      {

                          return "Your Account Is Not Yet Activated.Please login to your mailid to activate your account";
                      } */

                    //elseif($row->enable==0)
                    if($row->enable==0)
                    {

                        /* $this->session->set_userdata('dmn_user', $row->name); */
                       /* return "<script>window.location.href='register_next';</script>"; */
                        $sess_data=array(
                            'uid'=>$row->uid,
                            'name'=>$row->name,
                            'emailid'=>$row->emailid
                        );

                       // $this->session->sess_destroy();
                        $this->session->set_userdata($sess_data);
                        return 1;

                    }
                    elseif($row->enable==1)
                    {

                        $sess_data=array(
                            'uid'=>$row->uid,
                            'name'=>$row->name,
                            'emailid'=>$row->emailid
                        );

                        $this->session->set_userdata($sess_data);
                        return "<script>window.location.href='home';</script>";
                    }

                }
                else{

                    return "The Password you entered is incorrect";
                }
            }
            else
            {
                return "Your Email id is not registered with us";
            }
        }
    }
    public function groupBooking($data){
        $this->db->insert('group_flight_booking', $data);
        $email=$data['emailId'];
        $this->db->select('id');
        $query = $this->db->get_where('group_flight_booking', array('emailId' => $email));
        $row = $query->row();
        $id = $row->id;
        return $id;
    }
   public function insertSubscribe($em){
        $this->db->insert('subscribe_users', $em);
        return $this->db->affected_rows();
    }

}