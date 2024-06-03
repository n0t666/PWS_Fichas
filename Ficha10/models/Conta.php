<?php

class Conta extends \ActiveRecord\Model
{

    static $validates_presence_of = array(
        array('numconta', 'message' => 'O número da conta deve ser fornecido'),
        array('titular', 'message' => 'O titular deve ser fornecido'),
        array('nib', 'message' => 'A NIB deve ser fornecido')
    );


    static $has_many = array(
        array('despesas')
    );

    static $validates_format_of = array(
        array('email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', 'message' => 'Email inválido')
    );
}
