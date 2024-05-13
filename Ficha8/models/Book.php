
<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

class Book extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('name'),
        array('isbn', 'message' => 'It must be provided')
    );
}
?>