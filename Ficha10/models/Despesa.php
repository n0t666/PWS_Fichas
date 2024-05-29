<?php



class Despesa extends ActiveRecord\Model
{
    static $has_one = array(
        array('Categoria'),
        array('MetodoPagamento'),
    );

    static $belongs_to = array(
        array('Conta')
    );

    static  $validates_numericality_of = array(
        'valor' => [
            'greater_than' => 0,
        ],
    );
}
