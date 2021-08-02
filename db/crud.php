<?php
    class crud{
        private $db;
        function __construct($conn)
        {
            $this->db=$conn;
        }
        public function insert($fname,$lname,$age,$email,$department,$problem){
            try{
                $sql="INSERT INTO patients (First_Name,Last_Name,Age,Email_Id,Department_id,Problem) VALUES (:fname,:lname,:age,:emailid,:department,:problem)";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':age',$age);
                $stmt->bindparam(':emailid',$email);
                $stmt->bindparam(':department',$department);
                $stmt->bindparam(':problem',$problem);
                $stmt->execute();
                return true;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }
        public function getPatients()
        {
            $sql="SELECT * from patients";
            $result=$this->db->query($sql);
            return $result;
        }
        public function getPatientDetails($id)
        {
            $sql = "select * from patients a inner join departments s on a.department_id=s.department_id where patient_id=:id";
            $stmt=$this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result=$stmt->fetch();
            return $result;
        }
        public function editPatient($id,$fname,$lname,$age,$email,$department){
            try{
                $sql="UPDATE `patients` SET `First_Name`=:fname,`Last_Name`=:lname,`Age`=:age,`Email_Id`=:email,`department_id`=:department WHERE `Patient_Id`=:id";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':age',$age);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':department',$department);
                $stmt->execute();
                return true;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }
        public function deletePatient($id){
            try{$sql="delete from patients where Patient_Id=:id";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>