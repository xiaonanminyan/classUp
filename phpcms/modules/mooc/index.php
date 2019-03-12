<?php
    class index {
        private $db;
        function __construct() {
            $this->db = pc_base::load_model('mooc_model');//控制数据库的增删查改
            $this->_userid = param::get_cookie('_userid');
            $this->_username = param::get_cookie('_username');
            $this->_groupid = param::get_cookie('_groupid');
        }


      public function cate(){
            $fid = $_GET['fid'];
            $userid = $this->_userid;
            $list = $this->db->select(array('fid'=>$fid),'*',20);
            $r = $this->db->query('select * from field');
            $fields = $this->db->fetch_array($r);
            $r2 = $this->db->query('select * from category where fid ='.$fid);
            $cates = $this->db->fetch_array($r2);
            include template('mooc','cate');//调度cate页面

      }
      public function more(){
            //json
            $fid=$_GET['fid'];
          $page=$_GET['page'];
          $data=$this->db->listinfo(array('fid'=>$fid),'',$page);//从数据库里取数据
          echo json_encode($data);

      }

      public function  search(){
            if(isset($_POST['q'])){
                $keyword = $_POST['q'];
                $sql = "SELECT * FROM `mooc_course` WHERE `title` LIKE '%".$keyword."%' OR `description` LIKE '%".$keyword."%'";
            }else{
                $fid=$_GET['fid'];
                $sql = "SELECT * FROM `mooc_course` WHERE `fid`= ".$fid;
            }

            $r = $this->db->query($sql);
            $results = $this->db->fetch_array($r);
            $r = $this->db->query("SELECT * FROM field");
            $fields = $this->db->fetch_array($r);
            include template ('mooc','search');
      }

      public function  course(){
            $id = $_GET['id'];//获取所有章
            $course = $this->db->get_one(array('id'=>$id));
            $sql = 'select * from chapters where cid = '.$id;
            $r = $this->db->query('select * from chapters where cid = '.$id);
            $chapters = $this->db->fetch_array($r);

            foreach($chapters as $k => $v){
               $sql2 = 'select * from `sections` where cid='.$v['id'];
               $r = $this->db->query($sql2);
               $sections = $this->db->fetch_array($r);
              // $v['sections'] = $sections;
                $chapters[$k]['sections'] = $sections;

            }
            include template('mooc','course');
      }
      public function  x(){
            $userid = $this->_userid;
            $id = $_GET['id'];
            $sql = 'select x.category_id , y.* from course_category as x, mooc_course as y where x.course_id = y.id and x.category_id = '.$id;
            $r = $this->db->query($sql);
            $list = $this->db->fetch_array($r);


            $v = $list[0]['category_id'];
            $sql2= 'SELECT * FROM category WHERE id='.$v;
            $r2 = $this->db->query($sql2);
            $list2 = $this->db->fetch_array($r2);//0元素数组
            print_r($list2[0]['name']);
            include template('mooc','x');
      }
      public function s(){

            $cateid =$_GET['id'];
            $typeid = $_GET['typeid'];//获取type的id
            $order = $_GET['order'];//获取排序规则

            $sql = 'select x.category_id , y.* from course_category as x, mooc_course as y where x.course_id = y.id and x.category_id = '.$cateid;
            if($typeid !== '0'){
                $sql = $sql.' and y.tid = '.$typeid;
            }
            if($order == 1){
                $sql = $sql.' order by y.create_time';
            }else{
                $sql = $sql.' order by y.view_count desc';
            }
            $r1 = $this->db->query($sql);

            $list3 = $this->db->fetch_array($r1);

            sleep(1);
            echo json_encode($list3);
      }

      public function lesson(){
          $id = $_GET['id'];//获取所有章
          $cid = $_GET['cid'];//
          $sql = 'select * from chapters where id = '.$cid;
          $r = $this->db->query($sql);
          $chapters = $this->db->fetch_array($r);

          foreach($chapters as $k => $v){
              $sql2 = 'select * from `chapters` where cid='.$v['cid'];
              $r2 = $this->db->query($sql2);
              $chapters = $this->db->fetch_array($r2);
          }
          $sql3 = 'select * from sections where id = '.$id;
          $r3 = $this->db->query($sql3);
          $sec = $this->db->fetch_array($r3);

          foreach($chapters as $k => $v){
              $sql2 = 'select * from `sections` where cid='.$v['id'];
              $r2 = $this->db->query($sql2);
              $sections = $this->db->fetch_array($r2);
              $chapters[$k]['sections'] = $sections;
          }
          include template('mooc','lesson');
      }
    }