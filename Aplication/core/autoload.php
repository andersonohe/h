<?php
    
spl_autoload_register(funcion ($filename){
    $file = '..'. DIRECTORY_SEPARATOR   . $filename . '.php';
        if(DIRECTORY_SEPARATOR === '/'){
        $FILE = str_replace('\\','/',$FILE);
    }
    if(file_exists($FILE)){
    require $file;

}else{

    echo 'erro ao importar arquivo';

   
}
});

?>