<!-- The purpose of this file is to enable CRUD operations -->


<?php 
class Crud 
{   
     private $db;
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insert($fname,$lname,$email,$dob,$contact)
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
}

?>