<?php

class Categoria extends ActiveRecord\Model
{
    static $belongs_to = array(
        array('Despesa')
    );
}
