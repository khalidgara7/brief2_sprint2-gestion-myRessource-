<?php
    function add_ressource() {
        global $conn;
        $titel = $_POST['title'];
        $desc = $_POST['description'];
        $user_id = $_POST['user_id'];
        $query = "INSERT INTO resources (`title`, `description`, `user_id`)
                                  values ('$titel', '$desc', '$user_id')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "ressource is inserted successfuly";
        }else {
            die('connection.failed :' .mysqli_connect_error());
        }
    }

    function CountRes(){
        $select = "SELECT count(*) as ResCount from resources";
        global  $conn;
        $result = mysqli_query($conn, $select);
        $arryAssoc = mysqli_fetch_assoc($result);

        return $arryAssoc['ResCount'];
    }

    function delete_resource($id) {
        global $conn;
        $sql = "DELETE from resources WHERE resource_id = $id";
        $result = mysqli_query($conn, $sql);
    }

    function update_resource(){
        $res_id = $_POST["resource_id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $user_id = $_POST["user_id"];
        global $conn;
        $sql = "UPDATE resources SET title = '$title', description = '$description', user_id = '$user_id' 
                WHERE resource_id = $res_id";
        $rslt = mysqli_query($conn, $sql);
        if($rslt){
            echo "data is updated successfully";
        }else{
            die("Connection failed: " . mysqli_connect_error());
        }
    }