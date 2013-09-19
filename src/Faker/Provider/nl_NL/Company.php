<?php

namespace Faker\Provider\nl_NL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('VOF', 'CV', 'LLP', 'BV', 'NV', 'IBC', 'CSL', 'EESV', 'SE', 'CV', 'Stichting', '& Zonen', '& Zn');

	/**
	 * International Bank Account Number (IBAN)
	 * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
	 * @param string $prefix for generating bank account number of a specific bank
	 * @param string $countryCode ISO 3166-1 alpha-2 country code
	 * @param integer $length total length without country code and 2 check digits
	 * @return string
	 */
	public static function bankAccountNumber($prefix = '', $countryCode = 'NL', $length = null)
	{
		return static::iban($countryCode, $prefix, $length);
	}
}
