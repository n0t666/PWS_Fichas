<?php


class MetodoPagamento extends ActiveRecord\Model
{
    static $belongs_to = array(
        array('Despesa')
    );

    static $validates_length_of = array(
        'nome' => [
            'minimum' => 6,
        ],
    );
}
