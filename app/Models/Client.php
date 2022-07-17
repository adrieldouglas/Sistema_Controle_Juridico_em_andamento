<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [

        'name',
        'nickname',
        'phone',
        'email',
        'address',
        'neighborhood',
        'city',
        'complement',
        'cover',
        'state',
        'entity',
        'site',
        'birth',
        'company',
        'profession',
        'economic_activity',
        'marital_status',
        'parentage',
        'naturalness',
        'nationality',
        'number_client',
        'observation',
        'document_cpf',
        'document_rg',
        'document_pis',
        'voter_registration',
        'document_cnh',
        'document_passport',
        'document_reservist'
    ];


	// Limpando virgulas e traços para salvar no banco de dados

	// public function setDocumentCpfAttribute($value)
	// {
	// 	$this->attributes['document_cpf'] = $this->clearField($value);
	// }

    public function setPhoneAttribute($value)
	{
		$this->attributes['phone'] = $this->clearField($value);
	}

	private function clearField(?string $param)
	{
		if (empty($param)) {
			return '';
		}else {
			return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
		}
	}

	//end limpando
}
