<?php declare(strict_types=1);

namespace mreko\mrz;

class Mrz
{
    use HashGenerator, StringChecks;

    /**
     * @var string
     */
    private $document_type;
    /**
     * @var string
     */
    private $country_code;
    /**
     * @var string
     */
    private $document_number;
    /**
     * @var string
     */
    private $birth_date;
    /**
     * @var string
     */
    private $sex;
    /**
     * @var string
     */
    private $expiry_date;
    /**
     * @var string
     */
    private $nationality;
    /**
     * @var string
     */
    private $surname;
    /**
     * @var string
     */
    private $given_names;
    /**
     * @var string
     */
    private $optional_data1;
    /**
     * @var string
     */
    private $optional_data2;


    /**
     * Mrz constructor.
     * @param string $document_type
     * @param string $country_code
     * @param string $document_number
     * @param string $birth_date
     * @param string $sex
     * @param string $expiry_date
     * @param string $nationality
     * @param string $surname
     * @param string $given_names
     * @param string $optional_data1
     * @param string $optional_data2
     * @param bool $force
     */
    public function __construct(string $document_type,
                                string $country_code,
                                string $document_number,
                                string $birth_date,
                                string $sex,
                                string $expiry_date,
                                string $nationality,
                                string $surname,
                                string $given_names,
                                string $optional_data1 = "",
                                string $optional_data2 = "",
                                bool $force = False)
    {
        $this->document_type = $document_type;
        $this->country_code = $country_code;
        $this->document_number = $document_number;
        $this->birth_date = $birth_date;
        $this->sex = $sex;
        $this->expiry_date = $expiry_date;
        $this->nationality = $nationality;
        $this->surname = $surname;
        $this->given_names = $given_names;
        $this->optional_data1 = $optional_data1;
        $this->optional_data2 = $optional_data2;
    }

    public function TD1CodeGenerator(): string
    {
        return $this->line1() . PHP_EOL . $this->line2() . PHP_EOL . $this->line3();
    }

    private function line1()
    {
        return $this->document_type() . $this->country_code() . $this->document_number() . $this->document_number_hash() . $this->optional_data1();
    }

    private function line2()
    {
        return $this->birth_date . $this->birth_date_hash() . $this->sex() . $this->expiry_date . $this->expiry_date_hash() . $this->nationality() . $this->optional_data2() . $this->final_hash();
    }

    private function line3()
    {
        return Helper::field(Helper::transliterate($this->surname) . "<<" . Helper::transliterate($this->given_names), 30);
    }

    private function final_hash()
    {
        return Helper::hash_string(
            $this->document_number() .
            $this->document_number_hash() .
            $this->optional_data1() .
            $this->birth_date .
            $this->birth_date_hash() .
            $this->expiry_date .
            $this->expiry_date_hash() .
            $this->optional_data2()
        );
    }
}
