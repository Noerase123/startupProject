<?php 

class User extends dbh {

    //insert function in mysql
    public function create($table_name, $data) {

        $string = "INSERT INTO ".$table_name." (";
        $string .= implode("," , array_keys($data)) . ') VALUES (';
        $string .= "'". implode("','" , array_values($data)) . "')";
        // return $string;

        if (mysqli_query($this->conn, $string)) {

            return true;
        }
        else {
            echo mysqli_error($this->conn);
        }
    }

    // UPDATE SINGLE ROW FUNCTION IN DATABASE
    public function update($table_name, $fields, $where_condition)  
      {  
           $query = '';  
           $condition = '';  
           foreach($fields as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2);  
           /*This code will convert array to string like this-  
           input - array(  
                'key1'     =>     'value1',  
                'key2'     =>     'value2'  
           )  
           output = key1 = 'value1', key2 = 'value2'*/  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . "='".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           /*This code will convert array to string like this-  
           input - array(  
                'id'     =>     '5'  
           )  
           output = id = '5'*/  
           $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
           if(mysqli_query($this->conn, $query))  
           {  
                return true;  
           }  
      }  



    // delete single row function in mysqli
    public function delete($table_name, $id) {

        $query = "DELETE FROM $table_name WHERE id = $id";

        if (mysqli_query($this->conn,$query)) {

            return true;
        }
        else {

            echo mysqli_error($this->conn);
        }
    }

    // DELETE ALL DATA IN DATABASE
    public function delete_where($query)  
      {   
        $result = mysqli_query($this->conn, $query);  

        return $result;
           
      }

    public function escapeString($post) {

        $result = mysqli_real_escape_string($this->conn, $post);

        if ($result) {
            return $post;
        }
        else {
            echo mysqli_error($this->conn);
        }
    }
    
}

?>