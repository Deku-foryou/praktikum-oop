<?php

class Book {
    public function __construct(
        public private(set) string $title,
        public protected(set) string $author
    ) {}
}

class MyBook extends Book {
    public function changeAuthor($new) {
        $this->author = $new;
    }
}


$bk = new Book("How to PHP", "Ada");
echo $bk->title;
