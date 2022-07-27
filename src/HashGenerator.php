<?php

namespace mreko\mrz;

trait HashGenerator
{
    public function document_number_hash(): string
    {
        if ($this->gen_hash_doc) {
            return Helper::hash_string($this->document_number);
        } else {
            return "<";
        }
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