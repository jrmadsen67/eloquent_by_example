<?php

class Country extends \Eloquent {
	protected $fillable = [];

    public function posts()
    {
        return $this->hasManyThrough('Post', 'Author');
    }

}