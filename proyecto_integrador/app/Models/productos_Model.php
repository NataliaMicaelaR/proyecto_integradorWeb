<?php
namespace App\Models;
use CodeIgniter\Model;

class productos_Model extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'productos_1';
	protected $allowedFields = ['gaseosas', 'vinos', 'otros'];
}
