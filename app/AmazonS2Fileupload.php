<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmazonS2Fileupload extends Model
{
    protected $primaryKey="id";
    protected $table="file_upload";
    protected $fillable=['file_upload'];

}
