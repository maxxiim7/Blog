<?php 

// connect to our MySQL database, and execute a query. 
class Database {
    public $connection;
    
    public function __construct($config,$username = "root",$password= "") // <-- Ich setze hier den username=root und password="" als default weil das meist die default settings für eine locale umgebung ist 
    {
        
        $dsn= "mysql:" . http_build_query($config,"",";"); // <--- das ist daselbe wie $dsn ="mysql:host={$config["host"]};port={$config["port"]};dbname{$config["dbname"]};charset={$config["charset"]}"; 
                                                                // DSN steht für Data Source Name
        try {
        $this->connection =  new PDO($dsn,$username,$password,[    // <-- hier können wir dann ein anderes $username und $password annehmen falls wir uns mit einer nicht localen database verbinden wollen. 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);         // <-- hier setze ich die Einstellung darauf das der default fetch mode immer auf ein Associative array gestellt ist.     
            }            
        catch(PDOException $e){
        print "Eroor!: ". $e->getMessage(). "";
        die();
        }                                                    
    }

    
    public function query($query,$parameters = []) 
    {
    
        $statement = $this->connection->prepare($query);
        $statement->execute($parameters);  
 
        return $statement;
    }

}   


