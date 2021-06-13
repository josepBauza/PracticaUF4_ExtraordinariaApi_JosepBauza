<?php

include 'Clients.php';

class ApiClients{

    function getAll(){
        $client = new Clients();
        $clients = array();
        $clients['register'] = array();

        $result = $client->getClients();

        if($result->rowCount()){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $register = array(
                    'id' => $row['ID'],
                    'name' => $row['Name'],
                    'phone' => $row['Phone'],
                    'address' => $row['Address'],
                    'date' => $row['Date'],
                    'qty' => $row['Qty'],
                );
                array_push($clients['register'], $register);
            }

            http_response_code(200);
            echo json_encode($clients);
        }else{
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }
}

$api = new ApiClients();
$api->getAll();

?>