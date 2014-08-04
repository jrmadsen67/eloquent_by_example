<?php

class Author extends \Eloquent {

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
}