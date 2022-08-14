<!-- The purpose of this file is to enable CRUD operations -->


<?php 
class Crud 
{   
     private $db;
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insert($fname,$lname,$email,$dob,$contact)//this function inserts entries into the birthday database
    {
        try {
            $sql="INSERT INTO birthdaypeople (firstname,lastname,email,dateOfBirth,contactNumber)
                VALUES (:fname,:lname,:email,:dob,:contact)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':dob', $dob);            
            $stmt->bindparam(':contact', $contact);

            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getList() //this function fetches desired values from the database
    {
        $sql = "SELECT firstname, lastname FROM birthdaypeople";
        $result = $this->db->query($sql);
        return $result;
    }
}

?>