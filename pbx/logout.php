<?php

//Essa parte do código se destina e encerrar o login atual (seção)


//iniciar a seção antes de destruir

session_start();
session_unset();
session_destroy();

header('location: login.html')

?>