<?php

class Post extends \Eloquent {

    public function author()
    {
    	// A Post has 1 Author
    	// authors.id = post.author_id
        return $this->hasOne('Author', 'id', 'author_id');
    }

}