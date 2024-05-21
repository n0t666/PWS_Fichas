<?php
class Book extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('name', 'message' => 'It must be provided'),
        array('isbn', 'message' => 'It must be provided')
    );

    static $belongs_to = array(
        array('genre')
    );

    static $has_many = array(
        array('chapters')
    );

    public function after_destroy()
    {
        foreach ($this->chapters as $chapter) {
            $chapter->delete();
        }
    }
}
