<?php

class Books_Stats extends Babel_Models_Table
{
    protected $_name = 'babel_books_stats';
    protected $_primary = 'book';

    public function findByBook($book) {
        return $this->fetchRow($this->select()->where('book = ?', $book));
    }
}
