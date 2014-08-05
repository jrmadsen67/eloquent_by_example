<?php

class Author extends \Eloquent {

    // For intermediate/author_lastname_accessor example
    // Notice this will capitalize ALL authors in ALL examples
    // notice - field name is last_name, so accessor must be getLastNameAttribute
    public function getLastNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function posts()
    {
        return $this->hasMany('Post'); 
    }

    public function scopeWomen($query)
    {
        // Laravel will match the function name to a field if it can. So:
        return $query->whereGender('female');

        // is the same as: 
        // return $query->where('gender','=','female');
    }

    public function scopeGender($query, $gender = 'female')
    {
        // Laravel will match the function name to a field if it can. So:
        return $query->whereGender($gender);

        // is the same as: 
        // return $query->where('gender','=',$gender);
    }

    public function books()
    {
      return $this->belongsToMany('Book');
    }



}