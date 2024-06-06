<?php
class Categoria extends ActiveRecord\Model
{
    /*
    static $belongs_to = array(
        array('despesa')
    );*/
    static $has_many = array(
        array('despesas')
    );
}
