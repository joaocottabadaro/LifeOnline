<?php

require('database/connection.php');

class Carro
{
    public function getCarrosFiltrados($placa = null, $modelo = null, $marca = null)
    {

        global $conn;

        $return = array();

        $sql = "SELECT * FROM carro WHERE TRUE";

        if (!empty($placa)) {
            $sql .= " AND placa LIKE '%{$placa}%'";
        }
        if (!empty($modelo)) {
            $sql .= " AND modelo = '{$modelo}'";
        }
        if (!empty($marca)) {
            $sql .= " AND marca = '{$marca}'";
        }

        try {

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $return[] = $row;
            }
            return $return;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function createCarro($placa, $modelo, $marca)
    {
        global $conn;

        $sql = "INSERT INTO carro (placa, modelo, marca, data_de_registro) VALUES ('{$placa}', '{$modelo}', '{$marca}', NOW())";


        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getCarro($id)
    {
        global $conn;

        $sql = "SELECT * FROM  carro WHERE id = $id";


        try {

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function updateCarro($id, $placa, $modelo, $marca)
    {
        global $conn;

        $sql = "UPDATE  carro  SET placa = '{$placa}', modelo = '{$modelo}', marca = '{$marca}' WHERE id = $id";

        try {

            $stmt = $conn->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function deletarCarro($id)
    {
        global $conn;

        $sql = "DELETE FROM carro WHERE id = $id";


        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
