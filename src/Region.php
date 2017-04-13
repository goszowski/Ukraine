<?php
namespace Goszowski\Ukraine;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Region extends Eloquent {

  protected $table      = 'ukraine_regions';
  protected $fillable   = ['name'];

}
