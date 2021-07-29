<?php
session_start();
date_default_timezone_set("Asia/Taipei");
//設定後台的抬頭文字



$ts=[
        "image"=>"履歷照片",
        "ad"=>"個人基本資料管理",
        "personal"=>"個人基本資料管理",
        'job'=>"求職目標",
        "portfolio"=>"作品集管理",
        "experience"=>"經歷管理",
        "education"=>"學歷管理",
        "admin"=>"管理者帳號管理",
        "menu"=>"選單管理",
        "skills"=>"技能管理",
        "biography"=>"自傳管理"
    ]; 
$as=[
        "image"=>"新增履歷照片",
        "ad"=>"新增個人基本資料",
        "personal"=>"新增個人基本資料",
        'job'=>"新增求職條件",
        "portfolio"=>"新增作品集",
        "experience"=>"新增經歷資料",
        "education"=>"新增學歷資料",
        "admin"=>"新增管理者帳號",
        "menu"=>"新增主選單",
        "skills"=>"新增技能",
        "biography"=>"新增自傳"
    ]; 
$hs=[
        "image"=>"履歷照片",
        "ad"=>"個人基本資料",
        "personal"=>"個人基本資料",
        'job'=>"求職條件",
        "portfolio"=>"作品集",
        "experience"=>"經歷",
        "education"=>"學歷",
        "admin"=>"管理者帳號",
        "menu"=>"選單",
        "skills"=>"技能",
        "biography"=>"自傳"
    ]; 
class DB{
    private $dsn="mysql:host=localhost;charset=utf8;dbname=db01";
    private $root='root';
    private $password='';
    private $table;
    private $pdo;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->root,$this->password);
    }

    public function all(...$arg){
        $sql="select * from $this->table ";
        // $arg=[]  or [陣列],[SQL字串],[陣列,SQL字串],

        if(isset($arg[0])){
            if(is_array($arg[0])){
                //["欄位"=>"值","欄位"=>"值"]
                //where `欄位`='值' && `欄位`='值'
                //"欄位"=>"值" ====> `欄位`='值'

                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
                //當它是字串
                $sql=$sql . $arg[0];
            }

            if(isset($arg[1])){
                //當它是字串
                $sql=$sql . $arg[1];
            }

        }

        //echo $sql;
        return $this->pdo->query($sql)->fetchAll();

    }

    public function count(...$arg){
        $sql="select count(*) from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
 
                $sql=$sql . $arg[0];
            }

            if(isset($arg[1])){
                 $sql=$sql . $arg[1];
            }
        }

        //echo $sql;
        return $this->pdo->query($sql)->fetchColumn();

    }
    public function find($id){
        $sql="select * from $this->table ";

        
            if(is_array($id)){
                foreach($id as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
 
                $sql=$sql . " where `id`='$id'";
            }

        //echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    }
    public function del($id){
        $sql="delete from $this->table ";
            if(is_array($id)){
                foreach($id as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
 
                $sql=$sql . " where `id`='$id'";
            }

        //echo $sql;
        return $this->pdo->exec($sql);

    }


    public function save($array){
        if(isset($array['id'])){
            //update
                foreach($array as $key => $value){
                    if($key!='id'){
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }

            $sql="update $this->table set ".implode(',',$tmp)." where `id`='{$array['id']}'";
        }else{
            //insert
            // `name`,`addr`,`tel`
            $sql="insert into $this->table 
                    (`".implode("`,`",array_keys($array))."`) values
                    ('".implode("','",$array)."')";
        }

        //echo $sql;
        return $this->pdo->exec($sql);
    }

}

function to($url){
    header("location:".$url);
}


 $Image=new DB('image');
 $Personal=new DB('personal');
 $Job=new DB('job');
 $Portfolio=new DB("portfolio");
 $Experience=new DB("experience");
 $Education=new DB("education");
 $Admin=new DB("admin");
 $Menu=new DB("menu");
 $Skills=new DB("skills");
 $Biography=new DB("biography");
 
//  if(!isset($_SESSION['total'])){
//     $total=$Total->find(1);
//     $total['total']++;
//     $Total->save($total);
//     $_SESSION['total']=1;
// }

?>