<?php


class Metodopagamento extends ActiveRecord\Model
{
    static $belongs_to = array(
        array('despesa')
    );

    static $validates_length_of = array(
        'nome' => [
            'minimum' => 6,
        ],
    );
}
