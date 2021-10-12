<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PropertylistTable extends Table
{


        public function initialize(array $config)
        {
            
          //  $this->setTable('Property_list');
    
        //     // Prior to 3.4.0
        //     $this->table('my_table');
        // $this->belongsTo('propertyimages', [
        //     'className' => 'Propertyimages.propertyimages'
        // ])->setForeignKey('id')->setProperty('Propertylist');

        $this->hasMany('propertyimages', [
          'className'=>'propertyimages'
      ])
      ->setForeignKey('property_list_id');

      
        }

}