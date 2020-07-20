<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'thumbnail'];

    /**
     * The attributes that appended to the model
     *
     * @var array
     */
    protected $appends = ['directory', 'encrypted_id'];

    /**
     * Get Encrypted Id of the model instance
     *
     * @var array
     */
    public function getEncryptedIdAttribute()
    {
        return encrypt_id($this->id);
    }

    /**
     * Get Directory of the model instance
     *
     * @var array
     */
    public function getDirectoryAttribute()
    {
        $directory = getDirectory('blogs');
        return $directory['web_path'];
    }
}
