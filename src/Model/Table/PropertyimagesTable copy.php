<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PropertyimagesTable extends Table
{


        public function initialize(array $config)
        {
            
          //  $this->setTable('Property_list');
    
        //     // Prior to 3.4.0
        //     $this->table('my_table');
        $this->belongsTo('propertylist', [
            'className' => 'ListProperty.propertylist'
        ])
        ->setForeignKey('property_list_id')
        ->setProperty('Propertyimages');
        }

}