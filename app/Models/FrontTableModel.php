<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FrontTableModel extends Model
{
    use HasFactory,SoftDeletes;

    
    protected $table = 'pending_t_b_l_s';
    protected $fillable = [ 
                            'case_no',
                            'school', 
                            'complainantfname', 
                            'complainantmname', 
                            'complainantlname', 
                            'complainantsuffix', 
                            'respondentfname', 
                            'respondentmname', 
                            'respondentlname',
                            'respondentsuffix',
                            'charges', 
                            'dateofactions',
                            'actions',
                            'status',
                          ];                  
}
