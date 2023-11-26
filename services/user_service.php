<?php 

    function get_all_users(){
        global $conn ;
        $requet = "SELECT * FROM utilisateur";
        $result = mysqli_query($conn,$requet);

        $users = [];
        while($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }


