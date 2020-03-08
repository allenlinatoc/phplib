<?php

namespace Allenlinatoc\DB;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Facades\Schema;

/**
 * Class to manipulate table
 *
 * @author Allen Linatoc
 */
class Table
{
    
    protected $name;
    protected $capsule;
    protected $schema;
    protected $attributes = [ ];
    
    
    /**
     * Create new instance of Table
     * 
     * @param string $name      Name of the table
     * @param \Allenlinatoc\DB\Manager $capsule     Instance of Manager
     */
    public function __construct(string $name, Manager $capsule)
    {
        $this->name;
        $this->capsule = $capsule;
        $this->schema = $this->capsule->schema();
    }
    
    
    
    public function create() {
        $this->schema->create("user", function(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments("id");
            
        });
    }
    
    /**
     * Get instance of Eloquent's capsule
     * 
     * @return \Illuminate\Database\Capsule\Manager
     */
    public function getCapsule()
    {
        return $this->capsule;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    
    static public function bigIncrements($table, $id)
    {
        $table->bigIncrements($id);
        return $table;
    }
    
    
    
}
