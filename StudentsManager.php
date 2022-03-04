<?php


class StudentsManager
{
    protected $filepath;

    public function __construct($filepath){
        $this->filepath=$filepath;
    }

    public function loadDataFile(){ // chuyen json sang mang
        $dataFile = file_get_contents($this->filepath);
        return json_decode($dataFile);
    }

    public function getAllStudent(){
        $data=$this->loadDataFile();
        $students=[];
        foreach($data as $item){
            $student=new Student($item->name, $item->dob, $item->age,$item->math,$item->physic,$item->chemistry);
            $student->setId($item->id);
            array_push($students, $student);
        }
        return $students;
    }

    public function saveDataFile($data){ //chuyen tu mang sang json
        $dataJson=json_encode($data);
        file_put_contents($this->filepath,$dataJson);
    }

    public function add($data){
        $dataFile=$this->loadDataFile(); //lay du lieu tu file json sang mang
        $lastUser=$dataFile[count($dataFile)-1]; //tim gia tri cuoi cung trong mang
        $data["id"]=$lastUser->id+1; // thay the bang 1 gia tri o cuoi mang
        array_push($dataFile,$data); // day gia tri o vi tri cuoi mang
        $this->saveDataFile($dataFile); // save data vao json
    }

    public function getStudentById($id){
        $data=$this->loadDataFile();
        foreach($data as $item){
            if($id==$item->id){
                $student=new Student($item->name, $item->dob, $item->age,$item->math,$item->physic,$item->chemistry);
                $student->setId($item->id);
                return $student;
            }
        }
    }


}