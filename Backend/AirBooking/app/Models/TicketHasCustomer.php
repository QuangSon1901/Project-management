<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketHasCustomer extends Model
{
    use HasFactory;

    protected $table = 'tbl_ticket_has_customer';

    public $primaryKey = 'ticket_has_customer_id_id';

    public $timestamps = true;
}
