<?php

namespace mreko\mrz;

use mreko\mrz\Helper;

trait HashGenerator
{
    public function document_number_hash(): string
    {
        return Helper::hash_string($this->document_number);
    }

    public function birth_date_hash(): string
    {
        return Helper::hash_string($this->birth_date);
    }

    public function expiry_date_hash(): string
    {
        return Helper::hash_string($this->expiry_date);
    }
}