<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketClass extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_ticket_class';

    public $primaryKey = 'ticket_class_id';

    public $timestamps = true;
}