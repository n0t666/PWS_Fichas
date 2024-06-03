<?php



class Despesa extends ActiveRecord\Model
{
    static $has_one = array(
        array('categoria'),
        array('metodopagamento'),
    );

    static $belongs_to = array(
        array('conta')
    );

    static  $validates_numericality_of = array(
        'valor' => [
            'greater_than' => 0,
        ],
    );
}
