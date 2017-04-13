<?php
namespace Goszowski\Ukraine;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Settlement extends Eloquent {

  protected $table      = 'ukraine_settlements';
  protected $fillable   = ['area_id', 'name'];

  public function area()
  {
    return $this->belongsTo('\Goszowski\Ukraine\Area', 'area_id');
  }
}
