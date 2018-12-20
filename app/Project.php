<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name', 'project_description'];

    public function setProjectAttribute($value)
    {
        $this->attributes['project_name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
    public function project()
    {
        return Question::class;
    }

}
