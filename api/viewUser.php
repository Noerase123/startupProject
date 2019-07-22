<?php 

class ViewUser extends User {

    //SELECT FUNCTION IN MYSQL
    public function get_data($get_table) {

        $query = "SELECT * FROM ".$get_table." ORDER BY id DESC";

        $res = mysqli_query($this->conn,$query);

        return $res;
    }

    //SELECT FUNCTION IN MYSQL
    public function get_query($query) {

        $res = mysqli_query($this->conn,$query);

        return $res;
    }

    public function rows($query) {

        $res = mysqli_query($this->conn, $query);
        
        $rows = $res->num_rows;

        if ($rows > 0) {
            return true;
        }
        else {
            return mysqli_error($this->conn);
        }
    }

    // SELECT SINGLE ROW FUNCTION 
    public function select_where($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {
                $condition .= $key . " = '".$value."' AND ";  
           }
           $condition = substr($condition, 0, -5);  
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->conn, $query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }

      public function select_image($table_name, $select, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {
                $condition .= $key . " = '".$value."' AND ";  
           }
           $condition = substr($condition, 0, -5);  
           $query = "SELECT $select FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->conn, $query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }

    // SEARCH FUNCTION IN MY DATABASE
    public function search($term,$table_name,$where) {
        
        $query = "SELECT * FROM $table_name WHERE $where like '%$term%' ORDER BY id desc";

        $result = mysqli_query($this->conn,$query);

        return $result;
    }

    // DATETIME AND DATE FORMAT
    public function datetime($string) {

        $date_format = "M d, Y h:i A";
        // $date_format = "M d, Y ";

        $date_content = strtotime($string);

        $date = date($date_format, $date_content);

        return $date;
    }

    public function Paginate($values,$per_page){
        $total_values = count($values);
        
        if(isset($_GET['page'])){
        $current_page = $_GET['page'];
        }else{
        $current_page = 1;
        }
        $counts = ceil($total_values / $per_page);
        $param1 = ($current_page - 1) * $per_page;
        $this->data = array_slice($values,$param1,$per_page);
        
        for($x=1; $x<= $counts; $x++){
        $numbers[] = $x;
        }
        return $numbers;
    }

    public function orderBy($table_name, $order) {

        $query = "SELECT * FROM $table_name ORDER BY $order";

        $res = mysqli_query($this->conn, $query);

        return $res;
    }

    public function lastRow($table_name, $order, $arrange) {

        $query = "SELECT * FROM $table_name ORDER BY $order $arrange";

        $res = mysqli_query($this->conn, $query);

        return $res;
    }
    
}

?>