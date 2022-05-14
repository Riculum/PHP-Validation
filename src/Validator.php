<?php
namespace Riculum\Validation;

use JetBrains\PhpStorm\Pure;
use Riculum\Validation\exceptions\InvalidValidationException;
use Riculum\Validation\interfaces\ValidatorInterface;

class Validator implements ValidatorInterface
{

    /**
     * @param string|null $char
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidChar(?string $char, int $minLength = 1, int $maxLength = 50, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateChar($char, $minLength, $maxLength, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $city
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidCity(?string $city, int $minLength = 1, int $maxLength = 50, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateCity($city, $minLength, $maxLength, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * ISO: 3166-1 alpha-2 or alpha-2
     * @param string|null $countryCode (alpha-2, alpha-3 or numeric)
     * @param string $set
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidCountryCode(?string $countryCode, string $set = 'alpha-2', $caseSensitive = false, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateCountryCode($countryCode, $set, $caseSensitive, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * ISO: 4217
     * @param string|null $currencyCode
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidCurrencyCode(?string $currencyCode, $caseSensitive = false, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateCurrencyCode($currencyCode, $caseSensitive, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $domain
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidDomain(?string $domain, $caseSensitive = true, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateDomain($domain, $caseSensitive, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $email
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidEmail(?string $email, $caseSensitive = true, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateEmail($email, $caseSensitive, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * ISO: 639 alpha-2
     * @param string|null $languageCode
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidLanguageCode(?string $languageCode, $caseSensitive = false, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateLanguageCode($languageCode, $caseSensitive, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $name
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidName(?string $name, int $minLength = 1, int $maxLength = 50, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateName($name, $minLength, $maxLength, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $password
     * @param int $minLength
     * @param int $maxLength
     * @param bool $mixUpperLow
     * @param bool $mixLetterNumber
     * @param bool $mixSpecialChar
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidPassword(?string $password, int $minLength = 8, int $maxLength = 250, bool $mixUpperLow = true, bool $mixLetterNumber = true, bool $mixSpecialChar = true, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validatePassword($password, $minLength, $maxLength, $mixUpperLow, $mixLetterNumber, $mixSpecialChar, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $phone
     * @param string $countryCode
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidPhone(?string $phone, string $countryCode = "", bool $required = false, ?string $default = null): bool
    {
        try {
            self::validatePhone($phone, $countryCode, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $street
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidStreet(?string $street, int $minLength = 1, int $maxLength = 100, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateStreet($street, $minLength, $maxLength, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $zip
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidZip(?string $zip, int $minLength = 1, int $maxLength = 100, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateZip($zip, $minLength, $maxLength, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $website
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidWebsite(?string $website, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateWebsite($website, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $date
     * @param string $format
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidDate(?string $date, string $format = "yyyy-mm-dd", bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateDate($date, $format, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $decimal
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidDecimal(?string $decimal, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateDecimal($decimal, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $int
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidInt(?string $int, int $minLength = 1, int $maxLength = 11, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateInt($int, $minLength, $maxLength, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $iban
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidIBAN(?string $iban, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateIBAN($iban, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $besrId
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidBESRID(?string $besrId, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateBESRID($besrId, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    /**
     * @param string|null $enum
     * @param array $enums
     * @param bool $required
     * @param string|null $default
     * @return bool
     */
    public static function isValidEnum(?string $enum, array $enums, bool $required = false, ?string $default = null): bool
    {
        try {
            self::validateEnum($enum, $enums, $required, $default);
            return true;
        } catch (InvalidValidationException $e) {
            return false;
        }
    }

    #[Pure] public static function isValidBoolean($boolean): bool
    {
        return self::validateBoolean($boolean);
    }

    /**
     * @param string|null $city
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateCity(?string $city, int $minLength = 1, int $maxLength = 50, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $city === null) {
            throw new InvalidValidationException('City is required');
        } else if ($required && $city !== null) {
            if (strlen($city) < $minLength) {
                throw new InvalidValidationException("The city name must be at least $minLength characters long");
            }
            if (strlen($city) > $maxLength) {
                throw new InvalidValidationException("The city name must not be longer than $maxLength characters");
            }
            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçîÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇß0-9-.'\/ ]+$/", $city)) {
                throw new InvalidValidationException($city . ' is not a valid city name');
            }
        } else if (!$required && $city === null) {
            return $default;
        } else if (!$required && $city !== null) {
            if (strlen($city) < $minLength) {
                throw new InvalidValidationException("The city name must be at least $minLength characters long");
            }
            if (strlen($city) > $maxLength) {
                throw new InvalidValidationException("The city name must not be longer than $maxLength characters");
            }
            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçîÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇß0-9-.'\/ ]+$/", $city)) {
                throw new InvalidValidationException($city . ' is not a valid city name');
            }
        }

        return trim($city);
    }

    /**
     * ISO: 3166-1 alpha-2 or alpha-2
     * @param string|null $countryCode (alpha-2, alpha-3 or numeric)
     * @param string $set
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateCountryCode(?string $countryCode, string $set = 'alpha-2', $caseSensitive = false, bool $required = false, ?string $default = null): ?string
    {
        if ($countryCode !== null && !$caseSensitive) {
            $countryCode = strtoupper($countryCode);
        }

        $regex = match ($set) {
            'alpha-2' => '/^(AF|AX|AL|DZ|AS|AD|AO|AI|AQ|AG|AR|AM|AW|AU|AT|AZ|BS|BH|BD|BB|BY|BE|BZ|BJ|BM|BT|BO|BQ|BA|BW|BV|BR|IO|BN|BG|BF|BI|CV|KH|CM|CA|KY|CF|TD|CL|CN|CX|CC|CO|KM|CG|CD|CK|CR|CI|HR|CU|CW|CY|CZ|DK|DJ|DM|DO|EC|EG|SV|GQ|ER|EE|SZ|ET|FK|FO|FJ|FI|FR|GF|PF|TF|GA|GM|GE|DE|GH|GI|GR|GL|GD|GP|GU|GT|GG|GN|GW|GY|HT|HM|VA|HN|HK|HU|IS|IN|ID|IR|IQ|IE|IM|IL|IT|JM|JP|JE|JO|KZ|KE|KI|KP|KR|KW|KG|LA|LV|LB|LS|LR|LY|LI|LT|LU|MO|MG|MW|MY|MV|ML|MT|MH|MQ|MR|MU|YT|MX|FM|MD|MC|MN|ME|MS|MA|MZ|MM|NA|NR|NP|NL|NC|NZ|NI|NE|NG|NU|NF|MK|MP|NO|OM|PK|PW|PS|PA|PG|PY|PE|PH|PN|PL|PT|PR|QA|RE|RO|RU|RW|BL|SH|KN|LC|MF|PM|VC|WS|SM|ST|SA|SN|RS|SC|SL|SG|SX|SK|SI|SB|SO|ZA|GS|SS|ES|LK|SD|SR|SJ|SE|CH|SY|TW|TJ|TZ|TH|TL|TG|TK|TO|TT|TN|TR|TM|TC|TV|UG|UA|AE|GB|US|UM|UY|UZ|VU|VE|VN|VG|VI|WF|EH|YE|ZM|ZW)$/',
            'alpha-3' => '/^(AFG|ALA|ALB|DZA|ASM|AND|AGO|AIA|ATA|ATG|ARG|ARM|ABW|AUS|AUT|AZE|BHS|BHR|BGD|BRB|BLR|BEL|BLZ|BEN|BMU|BTN|BOL|BES|BIH|BWA|BVT|BRA|IOT|BRN|BGR|BFA|BDI|CPV|KHM|CMR|CAN|CYM|CAF|TCD|CHL|CHN|CXR|CCK|COL|COM|COG|COD|COK|CRI|CIV|HRV|CUB|CUW|CYP|CZE|DNK|DJI|DMA|DOM|ECU|EGY|SLV|GNQ|ERI|EST|SWZ|ETH|FLK|FRO|FJI|FIN|FRA|GUF|PYF|ATF|GAB|GMB|GEO|DEU|GHA|GIB|GRC|GRL|GRD|GLP|GUM|GTM|GGY|GIN|GNB|GUY|HTI|HMD|VAT|HND|HKG|HUN|ISL|IND|IDN|IRN|IRQ|IRL|IMN|ISR|ITA|JAM|JPN|JEY|JOR|KAZ|KEN|KIR|PRK|KOR|KWT|KGZ|LAO|LVA|LBN|LSO|LBR|LBY|LIE|LTU|LUX|MAC|MDG|MWI|MYS|MDV|MLI|MLT|MHL|MTQ|MRT|MUS|MYT|MEX|FSM|MDA|MCO|MNG|MNE|MSR|MAR|MOZ|MMR|NAM|NRU|NPL|NLD|NCL|NZL|NIC|NER|NGA|NIU|NFK|MKD|MNP|NOR|OMN|PAK|PLW|PSE|PAN|PNG|PRY|PER|PHL|PCN|POL|PRT|PRI|QAT|REU|ROU|RUS|RWA|BLM|SHN|KNA|LCA|MAF|SPM|VCT|WSM|SMR|STP|SAU|SEN|SRB|SYC|SLE|SGP|SXM|SVK|SVN|SLB|SOM|ZAF|SGS|SSD|ESP|LKA|SDN|SUR|SJM|SWE|CHE|SYR|TWN|TJK|TZA|THA|TLS|TGO|TKL|TON|TTO|TUN|TUR|TKM|TCA|TUV|UGA|UKR|ARE|GBR|USA|UMI|URY|UZB|VUT|VEN|VNM|VGB|VIR|WLF|ESH|YEM|ZMB|ZWE)$/',
            'numeric' => '/^(4|248|8|12|16|20|24|660|10|28|32|51|533|36|40|31|44|48|50|52|112|56|84|204|60|64|68|535|70|72|74|76|86|96|100|854|108|132|116|120|124|136|140|148|152|156|162|166|170|174|178|180|184|188|384|191|192|531|196|203|208|262|212|214|218|818|222|226|232|233|748|231|238|234|242|246|250|254|258|260|266|270|268|276|288|292|300|304|308|312|316|320|831|324|624|328|332|334|336|340|344|348|352|356|360|364|368|372|833|376|380|388|392|832|400|398|404|296|408|410|414|417|418|428|422|426|430|434|438|440|442|446|450|454|458|462|466|470|584|474|478|480|175|484|583|498|492|496|499|500|504|508|104|516|520|524|528|540|554|558|562|566|570|574|807|580|578|512|586|585|275|591|598|600|604|608|612|616|620|630|634|638|642|643|646|652|654|659|662|663|666|670|882|674|678|682|686|688|690|694|702|534|703|705|90|706|710|239|728|724|144|729|740|744|752|756|760|158|762|834|764|626|768|772|776|780|788|792|795|796|798|800|804|784|826|840|581|858|860|548|862|704|92|850|876|732|887|894|716)$/',
            default => throw new InvalidValidationException($set . ' is not a valid country code set'),
        };

        if ($required && $countryCode === null) {
            throw new InvalidValidationException('Country code is required');
        } else if ($required && $countryCode !== null) {
            if(!preg_match($regex, $countryCode)) {
                throw new InvalidValidationException($countryCode . ' is not a valid country code');
            }
        } else if (!$required && $countryCode === null) {
            return $default;
        } else if (!$required && $countryCode !== null) {
            if(!preg_match($regex, $countryCode)) {
                throw new InvalidValidationException($countryCode . ' is not a valid country code');
            }
        }

        return trim($countryCode);
    }

    /**
     * ISO: 4217
     * @param string|null $currencyCode
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateCurrencyCode(?string $currencyCode, $caseSensitive = false, bool $required = false, ?string $default = null): ?string
    {
        if ($currencyCode !== null && !$caseSensitive) {
            $currencyCode = strtoupper($currencyCode);
        }

        if ($required && $currencyCode === null) {
            throw new InvalidValidationException('Currency code is required');
        } else if ($required && $currencyCode !== null) {
            if(!preg_match('/^(ADP|AED|AFA|AFN|ALK|ALL|AMD|ANG|AOA|AOK|AON|AOR|ARA|ARP|ARS|ARY|ATS|AUD|AWG|AYM|AZM|AZN|BAD|BAM|BBD|BDT|BEC|BEF|BEL|BGJ|BGK|BGL|BGN|BHD|BIF|BMD|BND|BOB|BOP|BOV|BRB|BRC|BRE|BRL|BRN|BRR|BSD|BTN|BUK|BWP|BYB|BYN|BYR|BZD|CAD|CDF|CHC|CHE|CHF|CHW|CLF|CLP|CNY|COP|COU|CRC|CSD|CSJ|CSK|CUC|CUP|CVE|CYP|CZK|DDM|DEM|DJF|DKK|DOP|DZD|ECS|ECV|EEK|EGP|ERN|ESA|ESB|ESP|ETB|EUR|FIM|FJD|FKP|FRF|GBP|GEK|GEL|GHC|GHP|GHS|GIP|GMD|GNE|GNF|GNS|GQE|GRD|GTQ|GWE|GWP|GYD|HKD|HNL|HRD|HRK|HTG|HUF|IDR|IEP|ILP|ILR|ILS|INR|IQD|IRR|ISJ|ISK|ITL|JMD|JOD|JPY|KES|KGS|KHR|KMF|KPW|KRW|KWD|KYD|KZT|LAJ|LAK|LBP|LKR|LRD|LSL|LSM|LTL|LTT|LUC|LUF|LUL|LVL|LVR|LYD|MAD|MDL|MGA|MGF|MKD|MLF|MMK|MNT|MOP|MRO|MTL|MTP|MUR|MVQ|MVR|MWK|MXN|MXP|MXV|MYR|MZE|MZM|MZN|NAD|NGN|NIC|NIO|NLG|NOK|NPR|NZD|OMR|PAB|PEH|PEI|PEN|PES|PGK|PHP|PKR|PLN|PLZ|PTE|PYG|QAR|RHD|ROK|ROL|RON|RSD|RUB|RUR|RWF|SAR|SBD|SCR|SDD|SDG|SDP|SEK|SGD|SHP|SIT|SKK|SLL|SOS|SRD|SRG|SSP|STD|SUR|SVC|SYP|SZL|THB|TJR|TJS|TMM|TMT|TND|TOP|TPE|TRL|TRY|TTD|TWD|TZS|UAH|UAK|UGS|UGW|UGX|USD|USN|USS|UYI|UYN|UYP|UYU|UZS|VEB|VEF|VNC|VND|VUV|WST|XAF|XAG|XAU|XBA|XBB|XBC|XBD|XCD|XDR|XEU|XFO|XFU|XOF|XPD|XPF|XPT|XRE|XSU|XTS|XUA|XXX|YDD|YER|YUD|YUM|YUN|ZAL|ZAR|ZMK|ZMW|ZRN|ZRZ|ZWC|ZWD|ZWL|ZWN|ZWR)$/', $currencyCode)) {
                throw new InvalidValidationException($currencyCode . ' is not a valid currency code');
            }
        } else if (!$required && $currencyCode === null) {
            return $default;
        } else if (!$required && $currencyCode !== null) {
            if(!preg_match('/^(ADP|AED|AFA|AFN|ALK|ALL|AMD|ANG|AOA|AOK|AON|AOR|ARA|ARP|ARS|ARY|ATS|AUD|AWG|AYM|AZM|AZN|BAD|BAM|BBD|BDT|BEC|BEF|BEL|BGJ|BGK|BGL|BGN|BHD|BIF|BMD|BND|BOB|BOP|BOV|BRB|BRC|BRE|BRL|BRN|BRR|BSD|BTN|BUK|BWP|BYB|BYN|BYR|BZD|CAD|CDF|CHC|CHE|CHF|CHW|CLF|CLP|CNY|COP|COU|CRC|CSD|CSJ|CSK|CUC|CUP|CVE|CYP|CZK|DDM|DEM|DJF|DKK|DOP|DZD|ECS|ECV|EEK|EGP|ERN|ESA|ESB|ESP|ETB|EUR|FIM|FJD|FKP|FRF|GBP|GEK|GEL|GHC|GHP|GHS|GIP|GMD|GNE|GNF|GNS|GQE|GRD|GTQ|GWE|GWP|GYD|HKD|HNL|HRD|HRK|HTG|HUF|IDR|IEP|ILP|ILR|ILS|INR|IQD|IRR|ISJ|ISK|ITL|JMD|JOD|JPY|KES|KGS|KHR|KMF|KPW|KRW|KWD|KYD|KZT|LAJ|LAK|LBP|LKR|LRD|LSL|LSM|LTL|LTT|LUC|LUF|LUL|LVL|LVR|LYD|MAD|MDL|MGA|MGF|MKD|MLF|MMK|MNT|MOP|MRO|MTL|MTP|MUR|MVQ|MVR|MWK|MXN|MXP|MXV|MYR|MZE|MZM|MZN|NAD|NGN|NIC|NIO|NLG|NOK|NPR|NZD|OMR|PAB|PEH|PEI|PEN|PES|PGK|PHP|PKR|PLN|PLZ|PTE|PYG|QAR|RHD|ROK|ROL|RON|RSD|RUB|RUR|RWF|SAR|SBD|SCR|SDD|SDG|SDP|SEK|SGD|SHP|SIT|SKK|SLL|SOS|SRD|SRG|SSP|STD|SUR|SVC|SYP|SZL|THB|TJR|TJS|TMM|TMT|TND|TOP|TPE|TRL|TRY|TTD|TWD|TZS|UAH|UAK|UGS|UGW|UGX|USD|USN|USS|UYI|UYN|UYP|UYU|UZS|VEB|VEF|VNC|VND|VUV|WST|XAF|XAG|XAU|XBA|XBB|XBC|XBD|XCD|XDR|XEU|XFO|XFU|XOF|XPD|XPF|XPT|XRE|XSU|XTS|XUA|XXX|YDD|YER|YUD|YUM|YUN|ZAL|ZAR|ZMK|ZMW|ZRN|ZRZ|ZWC|ZWD|ZWL|ZWN|ZWR)$/', $currencyCode)) {
                throw new InvalidValidationException($currencyCode . ' is not a valid currency code');
            }
        }

        return trim($currencyCode);
    }

    /**
     * @param string|null $domain
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateDomain(?string $domain, $caseSensitive = true, bool $required = false, ?string $default = null): ?string
    {
        if ($domain !== null && $caseSensitive) {
            $domain = strtolower($domain);
        }

        if ($required && $domain === null) {
            throw new InvalidValidationException('Domain is required');
        } else if ($required && $domain !== null) {
            if(!preg_match("/^[A-z0-9äöüÄÖÜ][A-z0-9-_äöüÄÖÜ]{1,61}[.][A-z]{2,12}$/", $domain)) {
                throw new InvalidValidationException($domain . ' is not a valid domain');
            }
        } else if (!$required && $domain === null) {
            return $default;
        } else if (!$required && $domain !== null) {
            if(!preg_match("/^[A-z0-9äöüÄÖÜ][A-z0-9-_äöüÄÖÜ]{1,61}[.][A-z]{2,12}$/", $domain)) {
                throw new InvalidValidationException($domain . ' is not a valid domain');
            }
        }

        return trim($domain);
    }

    /**
     * @param string|null $email
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateEmail(?string $email, $caseSensitive = true, bool $required = false, ?string $default = null): ?string
    {
        if ($email !== null && $caseSensitive) {
            $email = strtolower($email);
        }

        if ($required && $email === null) {
            throw new InvalidValidationException('E-Mail is required');
        } else if ($required && $email !== null) {
            if(!preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,6}$/", $email)) {
                throw new InvalidValidationException($email . ' is not a valid email address',);
            }
        } else if (!$required && $email === null) {
            return $default;
        } else if (!$required && $email !== null) {
            if(!preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,6}$/", $email)) {
                throw new InvalidValidationException($email . ' is not a valid email address',);
            }
        }

        return trim($email);
    }

    /**
     * ISO: 639 alpha-2
     * @param string|null $languageCode
     * @param bool $caseSensitive
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateLanguageCode(?string $languageCode, $caseSensitive = false, bool $required = false, ?string $default = null): ?string
    {
        if ($languageCode !== null && $caseSensitive) {
            $languageCode = strtolower($languageCode);
        }

        if ($required && $languageCode === null) {
            throw new InvalidValidationException('Language code is required');
        } else if ($required && $languageCode !== null) {
            if(!preg_match("/^(AA|AB|AE|AF|AK|AM|AN|AR|AS|AV|AY|AZ|BA|BE|BG|BH|BM|BI|BN|BO|BR|BS|CA|CE|CH|CO|CR|CS|CU|CV|CY|DA|DE|DV|DZ|EE|EL|EN|EO|ES|ET|EU|FA|FF|FI|FJ|FO|FR|FY|GA|GD|GL|GN|GU|GV|HA|HE|HI|HO|HR|HT|HU|HY|HZ|IA|ID|IE|IG|II|IK|IO|IS|IT|IU|JA|JV|KA|KG|KI|KJ|KK|KL|KM|KN|KO|KR|KS|KU|KV|KW|KY|LA|LB|LG|LI|LN|LO|LT|LU|LV|MG|MH|MI|MK|ML|MN|MR|MS|MT|MY|NA|NB|ND|NE|NG|NL|NN|NO|NR|NV|NY|OC|OJ|OM|OR|OS|PA|PI|PL|PS|PT|QU|RM|RN|RO|RU|RW|SA|SC|SD|SE|SG|SI|SK|SL|SM|SN|SO|SQ|SR|SS|ST|SU|SV|SW|TA|TE|TG|TH|TI|TK|TL|TN|TO|TR|TS|TT|TW|TY|UG|UK|UR|UZ|VE|VI|VO|WA|WO|XH|YI|YO|ZA|ZH|ZU)$/", $languageCode)) {
                throw new InvalidValidationException($languageCode . ' is not a valid language address',);
            }
        } else if (!$required && $languageCode === null) {
            return $default;
        } else if (!$required && $languageCode !== null) {
            if(!preg_match("/^(AA|AB|AE|AF|AK|AM|AN|AR|AS|AV|AY|AZ|BA|BE|BG|BH|BM|BI|BN|BO|BR|BS|CA|CE|CH|CO|CR|CS|CU|CV|CY|DA|DE|DV|DZ|EE|EL|EN|EO|ES|ET|EU|FA|FF|FI|FJ|FO|FR|FY|GA|GD|GL|GN|GU|GV|HA|HE|HI|HO|HR|HT|HU|HY|HZ|IA|ID|IE|IG|II|IK|IO|IS|IT|IU|JA|JV|KA|KG|KI|KJ|KK|KL|KM|KN|KO|KR|KS|KU|KV|KW|KY|LA|LB|LG|LI|LN|LO|LT|LU|LV|MG|MH|MI|MK|ML|MN|MR|MS|MT|MY|NA|NB|ND|NE|NG|NL|NN|NO|NR|NV|NY|OC|OJ|OM|OR|OS|PA|PI|PL|PS|PT|QU|RM|RN|RO|RU|RW|SA|SC|SD|SE|SG|SI|SK|SL|SM|SN|SO|SQ|SR|SS|ST|SU|SV|SW|TA|TE|TG|TH|TI|TK|TL|TN|TO|TR|TS|TT|TW|TY|UG|UK|UR|UZ|VE|VI|VO|WA|WO|XH|YI|YO|ZA|ZH|ZU)$/", $languageCode)) {
                throw new InvalidValidationException($languageCode . ' is not a valid language address',);
            }
        }

        return trim($languageCode);
    }


    /**
     * @param string|null $name
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateName(?string $name, int $minLength = 1, int $maxLength = 50, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $name === null) {
            throw new InvalidValidationException('Name is required');
        } else if ($required && $name !== null) {
            if (strlen($name) < $minLength) {
                throw new InvalidValidationException("The name must be at least $minLength characters long");
            }

            if (strlen($name) > $maxLength) {
                throw new InvalidValidationException("The name must not be longer than $maxLength characters");
            }

            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇß ,.'-]+$/", $name)) {
                throw new InvalidValidationException($name . ' is not a valid name');
            }
        } else if (!$required && $name === null) {
            return $default;
        } else if (!$required && $name !== null) {
            if (strlen($name) < $minLength) {
                throw new InvalidValidationException("The name must be at least $minLength characters long");
            }

            if (strlen($name) > $maxLength) {
                throw new InvalidValidationException("The name must not be longer than $maxLength characters");
            }

            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇß ,.'-]+$/", $name)) {
                throw new InvalidValidationException($name . ' is not a valid name');
            }
        }

        return trim($name);
    }

    /**
     * A password must be at least 8 characters long (default)
     * A mixture of both uppercase and lowercase letters
     * A mixture of letters and numbers
     * Inclusion of at least one special character (~ ! @ # $ % ^ * - _ = + [ { ] } / ; : , . ?) --> no spaces allowed!
     * @param string|null $password
     * @param int $minLength
     * @param int $maxLength
     * @param bool $mixUpperLow
     * @param bool $mixLetterNumber
     * @param bool $mixSpecialChar
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validatePassword(?string $password, int $minLength = 8, int $maxLength = 250, bool $mixUpperLow = true, bool $mixLetterNumber = true, bool $mixSpecialChar = true, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $password === null) {
            throw new InvalidValidationException('Password is required');
        } else if ($required && $password !== null) {
            if (strlen($password) < $minLength) {
                throw new InvalidValidationException("Your password must be at least $minLength characters long");
            }

            if (strlen($password) > $maxLength) {
                throw new InvalidValidationException("The password must not be longer than $maxLength characters");
            }

            if ($mixUpperLow) {
                if (!preg_match('/(?=.*[a-z])(?=.*[A-Z])/', $password)) {
                    throw new InvalidValidationException("Your password must be a mixture of both uppercase and lowercase letters");
                }
            }

            if ($mixLetterNumber) {
                if (!preg_match('/(?=.*[a-zA-Z])(?=.*[0-9])/', $password)) {
                    throw new InvalidValidationException("Your password must be a mixture of letters and numbers");
                }
            }

            if ($mixSpecialChar) {
                if (!preg_match('/(?=.*[~!@#$%^*\-_=+\[{\]}\/;:,.?])/', $password)) {
                    throw new InvalidValidationException("Your password must include at least one special character");
                }
            }
        } else if (!$required && $password === null) {
            return $default;
        } else if (!$required && $password !== null) {
            if (strlen($password) < $minLength) {
                throw new InvalidValidationException("Your password must be at least $minLength characters long");
            }

            if (strlen($password) > $maxLength) {
                throw new InvalidValidationException("The password must not be longer than $maxLength characters");
            }

            if ($mixUpperLow) {
                if (!preg_match('/(?=.*[a-z])(?=.*[A-Z])/', $password)) {
                    throw new InvalidValidationException("Your password must be a mixture of both uppercase and lowercase letters");
                }
            }

            if ($mixLetterNumber) {
                if (!preg_match('/(?=.*[a-zA-Z])(?=.*[0-9])/', $password)) {
                    throw new InvalidValidationException("Your password must be a mixture of letters and numbers");
                }
            }

            if ($mixSpecialChar) {
                if (!preg_match('/(?=.*[~!@#$%^*\-_=+\[{\]}\/;:,.?])/', $password)) {
                    throw new InvalidValidationException("Your password must include at least one special character");
                }
            }
        }

        return $password;
    }

    /**
     * @param string|null $phone
     * @param string $countryCode
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validatePhone(?string $phone, string $countryCode = "", bool $required = false, ?string $default = null): ?string
    {
        if ($phone !== null) {
            $phone = str_replace(' ', '', $phone);
        }

        $regex = "/^[+]?[0-9]{4,19}$/";

        if ($countryCode != "") {
            switch ($countryCode) {
                case 'CH': //Switzerland
                    $regex = "/(\b(0041|0)|\B\+41)(\s?\(0\))?(\s)?[1-9]{2}(\s)?[0-9]{3}(\s)?[0-9]{2}(\s)?[0-9]{2}\b/";
                    break;
                default:
                    break;
            }
        }

        if ($required && $phone === null) {
            throw new InvalidValidationException('Phone is required');
        } else if ($required && $phone !== null) {
            if(!preg_match($regex, $phone)) {
                throw new InvalidValidationException($phone . ' is not a valid phone number');
            }
        } else if (!$required && $phone === null) {
            return $default;
        } else if (!$required && $phone !== null) {
            if(!preg_match($regex, $phone)) {
                throw new InvalidValidationException($phone . ' is not a valid phone number');
            }
        }

        return $phone;
    }

    /**
     * @param string|null $street
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateStreet(?string $street, int $minLength = 1, int $maxLength = 100, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $street === null) {
            throw new InvalidValidationException('Street is required');
        } else if ($required && $street !== null) {
            if (strlen($street) < $minLength) {
                throw new InvalidValidationException("The street name must be at least $minLength characters long");
            }

            if (strlen($street) > $maxLength) {
                throw new InvalidValidationException("The street name must not be longer than $maxLength characters");
            }

            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇ ,.'-]+[0-9a-zA-Z]+$/", $street)) {
                throw new InvalidValidationException($street . ' is not a valid street name');
            }
        } else if (!$required && $street === null) {
            return $default;
        } else if (!$required && $street !== null) {
            if (strlen($street) < $minLength) {
                throw new InvalidValidationException("The street name must be at least $minLength characters long");
            }

            if (strlen($street) > $maxLength) {
                throw new InvalidValidationException("The street name must not be longer than $maxLength characters");
            }

            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇ ,.'-]+[0-9a-zA-Z]+$/", $street)) {
                throw new InvalidValidationException($street . ' is not a valid street name');
            }
        }

        return trim($street);
    }

    /**
     * @param string|null $zip
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateZip(?string $zip, int $minLength = 1, int $maxLength = 4, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $zip === null) {
            throw new InvalidValidationException('Zip is required');
        } else if ($required && $zip !== null) {
            if (strlen($zip) < $minLength) {
                throw new InvalidValidationException("The zip code must be at least $minLength characters long");
            }

            if (strlen($zip) > $maxLength) {
                throw new InvalidValidationException("The zip code must not be longer than $maxLength characters");
            }


            if(!preg_match('/^[a-zA-Z0-9- ]+$/', $zip)) {
                throw new InvalidValidationException($zip . ' is not a valid zip code');
            }
        } else if (!$required && $zip === null) {
            return $default;
        } else if (!$required && $zip !== null) {
            if (strlen($zip) < $minLength) {
                throw new InvalidValidationException("The zip code must be at least $minLength characters long");
            }

            if (strlen($zip) > $maxLength) {
                throw new InvalidValidationException("The zip code must not be longer than $maxLength characters");
            }


            if(!preg_match('/^[a-zA-Z0-9- ]+$/', $zip)) {
                throw new InvalidValidationException($zip . ' is not a valid zip code');
            }
        }

        return trim($zip);
    }

    /**
     * @param string|null $website
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateWebsite(?string $website, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $website === null) {
            throw new InvalidValidationException('Website is required');
        } else if ($required && $website !== null) {
            if(!preg_match("/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:\/?#[\]@!\$&'\(\)\*\+,;=.]+$/", $website)) {
                throw new InvalidValidationException($website . ' is not a valid website address');
            }
        } else if (!$required && $website === null) {
            return $default;
        } else if (!$required && $website !== null) {
            if(!preg_match("/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:\/?#[\]@!\$&'\(\)\*\+,;=.]+$/", $website)) {
                throw new InvalidValidationException($website . ' is not a valid website address');
            }
        }
        
        return trim($website);
    }


    /**
     * @param string|null $date
     * @param string $format
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateDate(?string $date, string $format = "yyyy-mm-dd", bool $required = false, ?string $default = null): ?string
    {
        $regex = null;

        switch($format) {
            case "yyyy-mm-dd":
                $regex = '/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/';
                break;
            case "dd.mm.yyyy":
                $regex = '/^(0[1-9]|[12][0-9]|3[01]).(0[1-9]|1[0-2]).[0-9]{4}$/';
                break;
            default:
                break;
        }

        if ($required && $date === null) {
            throw new InvalidValidationException('Date is required');
        } else if ($required && $date !== null) {
            if(!preg_match($regex, $date)) {
                throw new InvalidValidationException($date . ' is not a valid date format');
            }
        } else if (!$required && $date === null) {
            return $default;
        } else if (!$required && $date !== null) {
            if(!preg_match($regex, $date)) {
                throw new InvalidValidationException($date . ' is not a valid date format');
            }
        }
        
        return $date;
    }

    /**
     * @param string|null $decimal
     * @param bool $required
     * @param string|null $default
     * @return float|null
     * @throws InvalidValidationException
     */
    public static function validateDecimal(?string $decimal, bool $required = false, ?string $default = null): ?float
    {
        if ($required && $decimal === null) {
            throw new InvalidValidationException('Decimal is required');
        } else if ($required && $decimal !== null) {
            if(!preg_match('/^([0-9]*[.])?[0-9]+$/', $decimal)) {
                throw new InvalidValidationException($decimal . ' is not a valid decimal number');
            }
        } else if (!$required && $decimal === null) {
            return $default;
        } else if (!$required && $decimal !== null) {
            if(!preg_match('/^([0-9]*[.])?[0-9]+$/', $decimal)) {
                throw new InvalidValidationException($decimal . ' is not a valid decimal number');
            }
        }
        
        return floatval($decimal);
    }

    /**
     * @param string|null $int
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return int|null
     * @throws InvalidValidationException
     */
    public static function validateInt(?string $int, int $minLength = 1, int $maxLength = 11, bool $required = false, ?string $default = null): ?int
    {
        if ($required && $int === null) {
            throw new InvalidValidationException('Integer is required');
        } else if ($required && $int !== null) {
            if (strlen($int) < $minLength) {
                throw new InvalidValidationException("Integer must be at least $minLength characters long");
            }

            if (strlen($int) > $maxLength) {
                throw new InvalidValidationException("Integer must not be longer than $maxLength characters");
            }

            if(!preg_match('/^([0-9]*[.])?[0-9]+$/', $int)) {
                throw new InvalidValidationException($int . ' is not a valid integer');
            }
        } else if (!$required && $int === null) {
            return $default;
        } else if (!$required && $int !== null) {
            if (strlen($int) < $minLength) {
                throw new InvalidValidationException("Integer must be at least $minLength characters long");
            }

            if (strlen($int) > $maxLength) {
                throw new InvalidValidationException("Integer must not be longer than $maxLength characters");
            }

            if(!preg_match('/^([0-9]*[.])?[0-9]+$/', $int)) {
                throw new InvalidValidationException($int . ' is not a valid integer');
            }
        }
        
        return intval($int);
    }

    /**
     * @param string|null $iban
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateIBAN(?string $iban, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $iban === null) {
            throw new InvalidValidationException('IBAN is required');
        } else if ($required && $iban !== null) {
            if(!preg_match('/^[A-Z]{2}(?:[ ]?[0-9]){18,20}$/', $iban)) {
                throw new InvalidValidationException($iban . ' is not a valid IBAN number');
            }
        } else if (!$required && $iban === null) {
            return $default;
        } else if (!$required && $iban !== null) {
            if(!preg_match('/^[A-Z]{2}(?:[ ]?[0-9]){18,20}$/', $iban)) {
                throw new InvalidValidationException($iban . ' is not a valid IBAN number');
            }
        }
        
        return $iban;
    }

    /**
     * @param string|null $besrId
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateBESRID(?string $besrId, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $besrId === null) {
            throw new InvalidValidationException('BESR-ID is required');
        } else if ($required && $besrId !== null) {
            if(!preg_match('/^[0-9]{6}$/', $besrId)) {
                throw new InvalidValidationException($besrId . ' is not a valid BESR-ID');
            }
        } else if (!$required && $besrId === null) {
            return $default;
        } else if (!$required && $besrId !== null) {
            if(!preg_match('/^[0-9]{6}$/', $besrId)) {
                throw new InvalidValidationException($besrId . ' is not a valid BESR-ID');
            }
        }
        
        return $besrId;
    }

    /**
     * @param string|null $enum
     * @param array $enums
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateEnum(?string $enum, array $enums, bool $required = false, ?string $default = null): ?string
    {

        if ($required && $enum === null) {
                throw new InvalidValidationException('Field is required');
        } else if ($required && $enum !== null) {
            if (!in_array($enum, $enums)) {
                throw new InvalidValidationException($enum . ' is not a valid value');
            }
        } else if (!$required && $enum === null) {
            return $default;
        }
        else if (!$required && $enum !== null) {
            if (!in_array($enum, $enums)) {
                throw new InvalidValidationException($enum . ' is not a valid value 2');
            }
        }

        return $enum;
    }

    /**
     * @param string|null $char
     * @param int $minLength
     * @param int $maxLength
     * @param bool $required
     * @param string|null $default
     * @return string|null
     * @throws InvalidValidationException
     */
    public static function validateChar(?string $char, int $minLength = 1, int $maxLength = 50, bool $required = false, ?string $default = null): ?string
    {
        if ($required && $char === null) {
            throw new InvalidValidationException('Char is required');
        } else if ($required && $char !== null) {
            if (strlen($char) < $minLength) {
                throw new InvalidValidationException("Char must be at least $minLength characters long");
            }

            if (strlen($char) > $maxLength) {
                throw new InvalidValidationException("Char must not be longer than $maxLength characters");
            }

            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇß ,.\"'-°+*ç%&\/()=?`¨!\[\]{}<>;:@#¦°§¬|]+$/", $char)) {
                throw new InvalidValidationException($char . ' is not a char value');
            }
        } else if (!$required && $char === null) {
            return $default;
        } else if (!$required && $char !== null) {
            if (strlen($char) < $minLength) {
                throw new InvalidValidationException("Char must be at least $minLength characters long");
            }

            if (strlen($char) > $maxLength) {
                throw new InvalidValidationException("Char must not be longer than $maxLength characters");
            }

            if(!preg_match("/^[a-zA-ZàáâäèéêëòóôöõøùúûüçÀÁÂÄÈÉÊËÒÓÔÖÕØÙÚÛÜÇß ,.\"'-°+*ç%&\/()=?`¨!\[\]{}<>;:@#¦°§¬|]+$/", $char)) {
                throw new InvalidValidationException($char . ' is not a char value');
            }
        }

        return $char;
    }

    static function validateBoolean($boolean): bool
    {
        return is_bool($boolean);
    }
}
