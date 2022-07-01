<?php

namespace Rovereto\Country\Concerns;

trait Continent
{
    /**
     * Map a two-letter continent code onto the name of the continent.
     *
     * @var array
     */
    protected $continents = [
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "NA" => "North America",
        "OC" => "Oceania",
        "SA" => "South America",
    ];

    /**
     * Map a two-letter country code onto the country's two-letter continent code.
     *
     * @var array
     */
    protected $continents_by_country = [
        //Europe
        "AD" => "EU",
        "AL" => "EU",
        "AM" => "EU",
        "AT" => "EU",
        "AX" => "EU",
        "BA" => "EU",
        "BE" => "EU",
        "BG" => "EU",
        "BY" => "EU",
        "CH" => "EU",
        "CY" => "EU",
        "CZ" => "EU",
        "DE" => "EU",
        "DK" => "EU",
        "EE" => "EU",
        "ES" => "EU",
        "FI" => "EU",
        "FO" => "EU",
        "FR" => "EU",
        "GB" => "EU",
        "GG" => "EU",
        "GI" => "EU",
        "GR" => "EU",
        "HR" => "EU",
        "HU" => "EU",
        "IE" => "EU",
        "IM" => "EU",
        "IS" => "EU",
        "IT" => "EU",
        "JE" => "EU",
        "LI" => "EU",
        "LT" => "EU",
        "LU" => "EU",
        "LV" => "EU",
        "MC" => "EU",
        "MD" => "EU",
        "ME" => "EU",
        "MK" => "EU",
        "MT" => "EU",
        "NL" => "EU",
        "NO" => "EU",
        "PL" => "EU",
        "PT" => "EU",
        "RO" => "EU",
        "RS" => "EU",
        "RU" => [
            "RU-AD" => "EU",
            "RU-ARK" => "EU",
            "RU-AST" => "EU",
            "RU-BA" => "EU",
            "RU-BEL" => "EU",
            "RU-BRY" => "EU",
            "RU-CE" => "EU",
            "RU-CU" => "EU",
            "RU-DA" => "EU",
            "RU-IN" => "EU",
            "RU-IVA" => "EU",
            "RU-KB" => "EU",
            "RU-KL" => "EU",
            "RU-KLU" => "EU",
            "RU-KC" => "EU",
            "RU-KR" => "EU",
            "RU-KIR" => "EU",
            "RU-KO" => "EU",
            "RU-KOS" => "EU",
            "RU-KDA" => "EU",
            "RU-KRS" => "EU",
            "RU-LEN" => "EU",
            "RU-LIP" => "EU",
            "RU-ME" => "EU",
            "RU-MO" => "EU",
            "RU-MOS" => "EU",
            "RU-MOW" => "EU",
            "RU-MUR" => "EU",
            "RU-NEN" => "EU",
            "RU-NIZ" => "EU",
            "RU-NGR" => "EU",
            "RU-ORE" => "EU",
            "RU-ORL" => "EU",
            "RU-PNZ" => "EU",
            "RU-PER" => "EU",
            "RU-PSK" => "EU",
            "UA-43" => "EU",
            "RU-ROS" => "EU",
            "RU-RYA" => "EU",
            "RU-SAM" => "EU",
            "RU-SPE" => "EU",
            "RU-SAR" => "EU",
            "UA-40" => "EU",
            "RU-SE" => "EU",
            "RU-SMO" => "EU",
            "RU-STA" => "EU",
            "RU-TAM" => "EU",
            "RU-TA" => "EU",
            "RU-TUL" => "EU",
            "RU-TVE" => "EU",
            "RU-UD" => "EU",
            "RU-ULY" => "EU",
            "RU-VLA" => "EU",
            "RU-VGG" => "EU",
            "RU-VLG" => "EU",
            "RU-VOR" => "EU",
            "RU-YAR" => "EU",
            "RU-AL" => "AS",
            "RU-ALT" => "AS",
            "RU-AMU" => "AS",
            "RU-BU" => "AS",
            "RU-CHE" => "AS",
            "RU-CHU" => "AS",
            "RU-IRK" => "AS",
            "RU-KGD" => "AS",
            "RU-KAM" => "AS",
            "RU-KEM" => "AS",
            "RU-KHA" => "AS",
            "RU-KK" => "AS",
            "RU-KHM" => "AS",
            "RU-KYA" => "AS",
            "RU-KGN" => "AS",
            "RU-MAG" => "AS",
            "RU-NVS" => "AS",
            "RU-OMS" => "AS",
            "RU-PRI" => "AS",
            "RU-SA" => "AS",
            "RU-SAK" => "AS",
            "RU-SVE" => "AS",
            "RU-TOM" => "AS",
            "RU-TYU" => "AS",
            "RU-TY" => "AS",
            "RU-YAN" => "AS",
            "RU-YEV" => "AS",
            "RU-ZAB" => "AS"
        ],
        "SE" => "EU",
        "SI" => "EU",
        "SJ" => "EU",
        "SK" => "EU",
        "SM" => "EU",
        "UA" => "EU",
        "VA" => "EU",
        //Asia
        "AE" => "AS",
        "AF" => "AS",
        "AZ" => "AS",
        "BD" => "AS",
        "BH" => "AS",
        "BN" => "AS",
        "BT" => "AS",
        "CC" => "AS",
        "CN" => "AS",
        "CX" => "AS",
        "GE" => "AS",
        "HK" => "AS",
        "ID" => "AS",
        "IL" => "AS",
        "IN" => "AS",
        "IO" => "AS",
        "IQ" => "AS",
        "IR" => "AS",
        "JO" => "AS",
        "JP" => "AS",
        "KG" => "AS",
        "KH" => "AS",
        "KP" => "AS",
        "KR" => "AS",
        "KW" => "AS",
        "KZ" => "AS",
        "LA" => "AS",
        "LB" => "AS",
        "LK" => "AS",
        "MM" => "AS",
        "MN" => "AS",
        "MO" => "AS",
        "MV" => "AS",
        "MY" => "AS",
        "NP" => "AS",
        "OM" => "AS",
        "PH" => "AS",
        "PK" => "AS",
        "PS" => "AS",
        "QA" => "AS",
        "SA" => "AS",
        "SG" => "AS",
        "SY" => "AS",
        "TH" => "AS",
        "TJ" => "AS",
        "TL" => "AS",
        "TM" => "AS",
        "TR" => "AS",
        "TW" => "AS",
        "UZ" => "AS",
        "VN" => "AS",
        "YE" => "AS",
        //North America
        "AG" => "NA",
        "AI" => "NA",
        "AW" => "NA",
        "BB" => "NA",
        "BL" => "NA",
        "BM" => "NA",
        "BQ" => "NA",
        "BS" => "NA",
        "BZ" => "NA",
        "CA" => "NA",
        "CR" => "NA",
        "CU" => "NA",
        "CW" => "NA",
        "DM" => "NA",
        "DO" => "NA",
        "GD" => "NA",
        "GL" => "NA",
        "GP" => "NA",
        "GT" => "NA",
        "HN" => "NA",
        "HT" => "NA",
        "JM" => "NA",
        "KN" => "NA",
        "KY" => "NA",
        "LC" => "NA",
        "MF" => "NA",
        "MQ" => "NA",
        "MS" => "NA",
        "MX" => "NA",
        "NI" => "NA",
        "PA" => "NA",
        "PM" => "NA",
        "PR" => "NA",
        "SV" => "NA",
        "SX" => "NA",
        "TC" => "NA",
        "TT" => "NA",
        "US" => "NA",
        "VC" => "NA",
        "VG" => "NA",
        "VI" => "NA",
        //South America
        "AR" => "SA",
        "BO" => "SA",
        "BR" => "SA",
        "CL" => "SA",
        "CO" => "SA",
        "EC" => "SA",
        "FK" => "SA",
        "GF" => "SA",
        "GY" => "SA",
        "PE" => "SA",
        "PY" => "SA",
        "SR" => "SA",
        "UY" => "SA",
        "VE" => "SA",
        //Africa
        "AO" => "AF",
        "BF" => "AF",
        "BI" => "AF",
        "BJ" => "AF",
        "BW" => "AF",
        "CD" => "AF",
        "CF" => "AF",
        "CG" => "AF",
        "CI" => "AF",
        "CM" => "AF",
        "CV" => "AF",
        "DJ" => "AF",
        "DZ" => "AF",
        "EG" => "AF",
        "EH" => "AF",
        "ER" => "AF",
        "ET" => "AF",
        "GA" => "AF",
        "GH" => "AF",
        "GM" => "AF",
        "GN" => "AF",
        "GQ" => "AF",
        "GW" => "AF",
        "KE" => "AF",
        "KM" => "AF",
        "LR" => "AF",
        "LS" => "AF",
        "LY" => "AF",
        "MA" => "AF",
        "MG" => "AF",
        "ML" => "AF",
        "MR" => "AF",
        "MU" => "AF",
        "MW" => "AF",
        "MZ" => "AF",
        "NA" => "AF",
        "NE" => "AF",
        "NG" => "AF",
        "RE" => "AF",
        "RW" => "AF",
        "SC" => "AF",
        "SD" => "AF",
        "SH" => "AF",
        "SL" => "AF",
        "SN" => "AF",
        "SO" => "AF",
        "SS" => "AF",
        "ST" => "AF",
        "SZ" => "AF",
        "TD" => "AF",
        "TG" => "AF",
        "TN" => "AF",
        "TZ" => "AF",
        "UG" => "AF",
        "YT" => "AF",
        "ZA" => "AF",
        "ZM" => "AF",
        "ZW" => "AF",
        //Oceania
        "AS" => "OC",
        "AU" => "OC",
        "CK" => "OC",
        "FJ" => "OC",
        "FM" => "OC",
        "GU" => "OC",
        "KI" => "OC",
        "MH" => "OC",
        "MP" => "OC",
        "NC" => "OC",
        "NF" => "OC",
        "NR" => "OC",
        "NU" => "OC",
        "NZ" => "OC",
        "PF" => "OC",
        "PG" => "OC",
        "PN" => "OC",
        "PW" => "OC",
        "SB" => "OC",
        "TK" => "OC",
        "TO" => "OC",
        "TV" => "OC",
        "UM" => "OC",
        "VU" => "OC",
        "WF" => "OC",
        "WS" => "OC",
        //Antarctica
        "AQ" => "AN",
        "BV" => "AN",
        "GS" => "AN",
        "HM" => "AN",
        "TF" => "AN"
    ];

    /**
     * Return continent by country code
     *
     * @param string $country_code
     * @param string|null $subdivision_code
     * @return string|null
     */
    public function getContinentByCountry(string $country_code, string $subdivision_code = null): string|null
    {
        $continent_code = $this->getContinentCodeByCountry($country_code, $subdivision_code);

        if ($continent_code) {
            return $this->getContinentByCode($continent_code);
        }
        return null;
    }

    /**
     * Return continent code by country code
     *
     * @param string $country_code
     * @param string|null $subdivision_code
     * @return string|null
     */
    public function getContinentCodeByCountry(string $country_code, string $subdivision_code = null): string|null
    {
        if ($country_code != 'RU') {
            if (isset($this->continents_by_country[$country_code])) {
                return $this->continents_by_country[$country_code];
            }
        } else {
            if (empty($subdivision_code)) {
                return 'EU';
            } elseif (isset($this->continents_by_country[$country_code][$subdivision_code])) {
                return $this->continents_by_country[$country_code][$subdivision_code];
            }
        }
        return null;
    }

    /**
     * Return continent code by country code
     *
     * @param string $country_code
     * @return string|null
     */
    public function getContinentByCode(string $continent_code): string|null
    {
        if (isset($this->continents[$continent_code])) {
            return $this->continents[$continent_code];
        }
        return null;
    }

}
