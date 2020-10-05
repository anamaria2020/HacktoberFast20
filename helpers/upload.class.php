<?php


class upload{
    
    private $Arquivo;
    private $Nome;
    
    private $Result;
    private $Msg;
    
    private static $Diretorio;
    
    function __construct($Diretorio = null){
        self::$Diretorio = ((string) $Diretorio ? $Diretorio : 'arquivos/');
        
        if(!file_exists(self::$Diretorio) && !is_dir(self::$Diretorio));
            mkdir(self::$Diretorio, 0777);
        endif;
    }
}