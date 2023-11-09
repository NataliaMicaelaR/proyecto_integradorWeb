<?php
namespace App\Models;
use CodeIgniter\Model;

class promociones_Model extends Model
{
	protected $table = 'promociones';
	protected $primaryKey = 'promociones_1';
	protected $allowedFields = ['gaseosas', 'vinos', 'otros'];
}
