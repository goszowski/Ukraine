<?php
namespace Goszowski\Ukraine;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Area extends Eloquent {

  protected $table      = 'ukraine_areas';
  protected $fillable   = ['region_id', 'name'];

  public function region()
  {
    return $this->belongsTo('\Goszowski\Ukraine\Region', 'region_id');
  }
}
