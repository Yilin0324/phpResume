<?php  include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);
//$texts=$_POST['text'];
$ids=$_POST['id'];

foreach($ids as $key => $id){

    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $db->del($id);
    }else{

        $row=$db->find($id);
        //$row['text']=$texts[$key];

        switch($table){
            case 'image':
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
                $row['text']=$_POST['text'][$key];
            break;
            case 'admin':
                $row['acc']=$_POST['acc'][$key];
                $row['pw']=$_POST['pw'][$key];
            break;
            case "menu":
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $row['text']=$_POST['text'][$key];
                $row['href']=$_POST['href'][$key];
            break;
            case 'portfolio':
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $row['text']=$_POST['text'][$key];
                $row['subject']=$_POST['subject'][$key];
                $row['href']=$_POST['href'][$key];
            break;
            case 'hero':
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $row['text']=$_POST['text'][$key];
                $row['subject']=$_POST['subject'][$key];
                $row['title']=$_POST['title'][$key];
            break;
            case 'experience':
            case 'education':
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $row['text']=$_POST['text'][$key];
                $row['title']=$_POST['title'][$key];
                $row['dwork']=$_POST['dwork'][$key];
            break;
            // case 'education':
            //     $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            //     $row['text']=$_POST['text'][$key];
            //     $row['title']=$_POST['title'][$key];
            //     $row['dwork']=$_POST['dwork'][$key];
            break;
            case 'skills':
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $row['text']=$_POST['text'][$key];
                $row['subject']=$_POST['subject'][$key];
            break;
            default:
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                $row['text']=$_POST['text'][$key];
        }
        //print_r($row);
        $db->save($row);
    }
}

to("../backend.php?do=".$table);
?>