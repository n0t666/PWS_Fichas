<?php
class Despesa extends ActiveRecord\Model
{
    static $has_one = array(
        // array('metodopagamento'),
        // array('categoria', 'class_name' => 'Categoria'),
    );

    static $belongs_to = array(
        array('conta'),
        array('categoria'),
        array('metodopagamento')
    );

    static  $validates_numericality_of = array(
        'valor' => [
            'greater_than' => 0,
        ],
    );
}
