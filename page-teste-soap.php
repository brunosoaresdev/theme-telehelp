<?php
  
  $TokUserToken = "SITETELEHELP";
  $TokCredentialAcess = "5454DSJHKAJSUYDSVVSDJBAJHDJ";

  // try {
      $clientSoap = new SoapClient("http://sistema.telehelp.com.br/ServiceAreaCliente/AreaClienteService.asmx?WSDL");
      // print_r($clientSoap);
      $data = array(
        'cpf' => '22522258826',
        'senha' => 'testeWS',
        'usrTok' => $TokUserToken,
        'stCredentialTok' => $TokCredentialAcess
      );
      $valida = $clientSoap->WsValidaUsuarios($data);
      // $response = $valida->WsValidaUsuariosResponse();
      print_r($valida);
      print_r(json_decode($valida->WsValidaUsuariosResult));
      // print_r($response);
      // die();
  // } catch (SoapFault $e) {
  //     echo $e->getMessage();
  // }
?>
                