<?php

class Model
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "test";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (\Throwable $th) {
            //throw $th;
            echo "Connection error " . $th->getMessage();
        }
    }

    public function insert(){
        if(isset($_POST['submit'])){
            if (isset($_POST['CUC']) && isset($_POST['SAB']) && isset($_POST['TERMINAL']) 
            && isset($_POST['FECHA']) && isset($_POST['HORA']) && isset($_POST['MONTO']) 
            && isset($_POST['COD_TEX']) && isset($_POST['COD_RESP']) && isset($_POST['COD_CC'])) {
          
                if (!empty($_POST['CUC']) && !empty($_POST['SAB']) && !empty($_POST['TERMINAL']) 
            && !empty($_POST['FECHA']) && !empty($_POST['HORA']) && !empty($_POST['MONTO']) 
            && !empty($_POST['COD_TEX']) && !empty($_POST['COD_RESP']) && !empty($_POST['COD_CC'])) {

                $CUC = $_POST['CUC'];
                $SAB = $_POST['SAB'];
                $TERMINAL = $_POST['TERMINAL'];
                $FECHA = $_POST['FECHA'];
                $HORA = $_POST['HORA'];
                $MONTO = $_POST['MONTO'];
                $COD_TEX = $_POST['COD_TEX'];
                $COD_RESP = $_POST['COD_RESP'];
                $COD_CC = $_POST['COD_CC'];

                $query = "INSERT INTO reportsab (CUC,SAB,TERMINAL,FECHA,HORA,MONTO,COD_TEX,
                COD_RESP,COD_CC) VALUES ('$CUC','$SAB','$TERMINAL','$FECHA','$HORA','$MONTO','$COD_TEX',
                '$COD_RESP','$COD_CC')";
                if ($sql = $this->conn->query($query)) {

                    echo "<script>alert('Registro guardado')</script>";
                    
                    echo "<script>header('Location:loc.php');</script>";
                    # code...
                }else{

                    echo "<script>alert('Error al guardar')</script>";
                    
                    echo "<script>windws.location.href = 'loc.php';</script>";

                }
                
                
              
            }else{
                echo "<script>alert('empty');</script>";
				echo "<script>window.location.href = 'loc.php';</script>";
            }

            }
        }
    }

    public function fetch()
    {
        $data = [];

        $query = "SELECT * FROM reportsab";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function date_range($start_date, $end_date)
    {
        $data = [];

        if (isset($start_date) && isset($end_date)) {
            $query = "SELECT * FROM `reportsab` WHERE `fecha` >= '$start_date' AND `fecha` <= '$end_date'";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
        }

        return $data;
    }
}