<?php
/**
 * MerchantAddressResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Channel\ApiClient\Model;

use \ArrayAccess;
use \FriendsOfCE\Channel\ApiClient\ObjectSerializer;

/**
 * MerchantAddressResponse Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantAddressResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantAddressResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line1' => 'string',
        'line2' => 'string',
        'line3' => 'string',
        'gender' => '\FriendsOfCE\Channel\ApiClient\Model\Gender',
        'companyName' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'streetName' => 'string',
        'houseNr' => 'string',
        'houseNrAddition' => 'string',
        'zipCode' => 'string',
        'city' => 'string',
        'region' => 'string',
        'countryIso' => 'string',
        'original' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'line1' => null,
        'line2' => null,
        'line3' => null,
        'gender' => null,
        'companyName' => null,
        'firstName' => null,
        'lastName' => null,
        'streetName' => null,
        'houseNr' => null,
        'houseNrAddition' => null,
        'zipCode' => null,
        'city' => null,
        'region' => null,
        'countryIso' => null,
        'original' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'line1' => true,
		'line2' => true,
		'line3' => true,
		'gender' => false,
		'companyName' => true,
		'firstName' => true,
		'lastName' => true,
		'streetName' => true,
		'houseNr' => true,
		'houseNrAddition' => true,
		'zipCode' => true,
		'city' => true,
		'region' => true,
		'countryIso' => true,
		'original' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'line1' => 'Line1',
        'line2' => 'Line2',
        'line3' => 'Line3',
        'gender' => 'Gender',
        'companyName' => 'CompanyName',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'streetName' => 'StreetName',
        'houseNr' => 'HouseNr',
        'houseNrAddition' => 'HouseNrAddition',
        'zipCode' => 'ZipCode',
        'city' => 'City',
        'region' => 'Region',
        'countryIso' => 'CountryIso',
        'original' => 'Original'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3',
        'gender' => 'setGender',
        'companyName' => 'setCompanyName',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'streetName' => 'setStreetName',
        'houseNr' => 'setHouseNr',
        'houseNrAddition' => 'setHouseNrAddition',
        'zipCode' => 'setZipCode',
        'city' => 'setCity',
        'region' => 'setRegion',
        'countryIso' => 'setCountryIso',
        'original' => 'setOriginal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3',
        'gender' => 'getGender',
        'companyName' => 'getCompanyName',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'streetName' => 'getStreetName',
        'houseNr' => 'getHouseNr',
        'houseNrAddition' => 'getHouseNrAddition',
        'zipCode' => 'getZipCode',
        'city' => 'getCity',
        'region' => 'getRegion',
        'countryIso' => 'getCountryIso',
        'original' => 'getOriginal'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('line1', $data ?? [], null);
        $this->setIfExists('line2', $data ?? [], null);
        $this->setIfExists('line3', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('companyName', $data ?? [], null);
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
        $this->setIfExists('streetName', $data ?? [], null);
        $this->setIfExists('houseNr', $data ?? [], null);
        $this->setIfExists('houseNrAddition', $data ?? [], null);
        $this->setIfExists('zipCode', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('countryIso', $data ?? [], null);
        $this->setIfExists('original', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) > 50)) {
            $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) < 0)) {
            $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['firstName']) && (mb_strlen($this->container['firstName']) > 50)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['firstName']) && (mb_strlen($this->container['firstName']) < 0)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['lastName']) && (mb_strlen($this->container['lastName']) > 50)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['lastName']) && (mb_strlen($this->container['lastName']) < 0)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['streetName']) && (mb_strlen($this->container['streetName']) > 50)) {
            $invalidProperties[] = "invalid value for 'streetName', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['streetName']) && (mb_strlen($this->container['streetName']) < 0)) {
            $invalidProperties[] = "invalid value for 'streetName', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['houseNr']) && (mb_strlen($this->container['houseNr']) > 50)) {
            $invalidProperties[] = "invalid value for 'houseNr', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['houseNr']) && (mb_strlen($this->container['houseNr']) < 0)) {
            $invalidProperties[] = "invalid value for 'houseNr', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['houseNrAddition']) && (mb_strlen($this->container['houseNrAddition']) > 50)) {
            $invalidProperties[] = "invalid value for 'houseNrAddition', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['houseNrAddition']) && (mb_strlen($this->container['houseNrAddition']) < 0)) {
            $invalidProperties[] = "invalid value for 'houseNrAddition', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 50)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['countryIso']) && (mb_strlen($this->container['countryIso']) > 2)) {
            $invalidProperties[] = "invalid value for 'countryIso', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['countryIso']) && (mb_strlen($this->container['countryIso']) < 0)) {
            $invalidProperties[] = "invalid value for 'countryIso', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['original']) && (mb_strlen($this->container['original']) > 256)) {
            $invalidProperties[] = "invalid value for 'original', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['original']) && (mb_strlen($this->container['original']) < 0)) {
            $invalidProperties[] = "invalid value for 'original', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string|null $line1 The first address line, use this field if address validation is disabled in ChannelEngine.
     *
     * @return self
     */
    public function setLine1($line1)
    {
        if (is_null($line1)) {
            array_push($this->openAPINullablesSetToNull, 'line1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 The second address line, use this field if address validation is disabled in ChannelEngine.
     *
     * @return self
     */
    public function setLine2($line2)
    {
        if (is_null($line2)) {
            array_push($this->openAPINullablesSetToNull, 'line2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line3
     *
     * @return string|null
     */
    public function getLine3()
    {
        return $this->container['line3'];
    }

    /**
     * Sets line3
     *
     * @param string|null $line3 The third address line, use this field if address validation is disabled in ChannelEngine.
     *
     * @return self
     */
    public function setLine3($line3)
    {
        if (is_null($line3)) {
            array_push($this->openAPINullablesSetToNull, 'line3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['line3'] = $line3;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \FriendsOfCE\Channel\ApiClient\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \FriendsOfCE\Channel\ApiClient\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName Optional. Company addressed too.
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        if (is_null($companyName)) {
            array_push($this->openAPINullablesSetToNull, 'companyName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('companyName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($companyName) && (mb_strlen($companyName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $companyName when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($companyName) && (mb_strlen($companyName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $companyName when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName The first name of the customer.
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            array_push($this->openAPINullablesSetToNull, 'firstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($firstName) && (mb_strlen($firstName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($firstName) && (mb_strlen($firstName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName The last name of the customer (includes the surname prefix [tussenvoegsel] like 'de', 'van', 'du').
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            array_push($this->openAPINullablesSetToNull, 'lastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($lastName) && (mb_strlen($lastName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($lastName) && (mb_strlen($lastName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets streetName
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['streetName'];
    }

    /**
     * Sets streetName
     *
     * @param string|null $streetName The name of the street (without house number information)  This field might be empty if address validation is disabled in ChannelEngine.
     *
     * @return self
     */
    public function setStreetName($streetName)
    {
        if (is_null($streetName)) {
            array_push($this->openAPINullablesSetToNull, 'streetName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('streetName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($streetName) && (mb_strlen($streetName) > 50)) {
            throw new \InvalidArgumentException('invalid length for $streetName when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($streetName) && (mb_strlen($streetName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $streetName when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['streetName'] = $streetName;

        return $this;
    }

    /**
     * Gets houseNr
     *
     * @return string|null
     */
    public function getHouseNr()
    {
        return $this->container['houseNr'];
    }

    /**
     * Sets houseNr
     *
     * @param string|null $houseNr The house number  This field might be empty if address validation is disabled in ChannelEngine.
     *
     * @return self
     */
    public function setHouseNr($houseNr)
    {
        if (is_null($houseNr)) {
            array_push($this->openAPINullablesSetToNull, 'houseNr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('houseNr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($houseNr) && (mb_strlen($houseNr) > 50)) {
            throw new \InvalidArgumentException('invalid length for $houseNr when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($houseNr) && (mb_strlen($houseNr) < 0)) {
            throw new \InvalidArgumentException('invalid length for $houseNr when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['houseNr'] = $houseNr;

        return $this;
    }

    /**
     * Gets houseNrAddition
     *
     * @return string|null
     */
    public function getHouseNrAddition()
    {
        return $this->container['houseNrAddition'];
    }

    /**
     * Sets houseNrAddition
     *
     * @param string|null $houseNrAddition Optional. Addition to the house number  If the address is: Groenhazengracht 2c, the address will be:  StreetName: Groenhazengracht  HouseNo: 2  HouseNrAddition: c  This field might be empty if address validation is disabled in ChannelEngine.
     *
     * @return self
     */
    public function setHouseNrAddition($houseNrAddition)
    {
        if (is_null($houseNrAddition)) {
            array_push($this->openAPINullablesSetToNull, 'houseNrAddition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('houseNrAddition', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($houseNrAddition) && (mb_strlen($houseNrAddition) > 50)) {
            throw new \InvalidArgumentException('invalid length for $houseNrAddition when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($houseNrAddition) && (mb_strlen($houseNrAddition) < 0)) {
            throw new \InvalidArgumentException('invalid length for $houseNrAddition when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['houseNrAddition'] = $houseNrAddition;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string|null $zipCode The zip or postal code.
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        if (is_null($zipCode)) {
            array_push($this->openAPINullablesSetToNull, 'zipCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zipCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The name of the city.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($city) && (mb_strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($city) && (mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region Optional. State/province/region.
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            array_push($this->openAPINullablesSetToNull, 'region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('region', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($region) && (mb_strlen($region) > 50)) {
            throw new \InvalidArgumentException('invalid length for $region when calling MerchantAddressResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($region) && (mb_strlen($region) < 0)) {
            throw new \InvalidArgumentException('invalid length for $region when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets countryIso
     *
     * @return string|null
     */
    public function getCountryIso()
    {
        return $this->container['countryIso'];
    }

    /**
     * Sets countryIso
     *
     * @param string|null $countryIso For example: NL, BE, FR.
     *
     * @return self
     */
    public function setCountryIso($countryIso)
    {
        if (is_null($countryIso)) {
            array_push($this->openAPINullablesSetToNull, 'countryIso');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('countryIso', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($countryIso) && (mb_strlen($countryIso) > 2)) {
            throw new \InvalidArgumentException('invalid length for $countryIso when calling MerchantAddressResponse., must be smaller than or equal to 2.');
        }
        if (!is_null($countryIso) && (mb_strlen($countryIso) < 0)) {
            throw new \InvalidArgumentException('invalid length for $countryIso when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['countryIso'] = $countryIso;

        return $this;
    }

    /**
     * Gets original
     *
     * @return string|null
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param string|null $original Optional. The address as a single string: use in case the address lines are entered  as single lines and later parsed into street, house number and house number addition.
     *
     * @return self
     */
    public function setOriginal($original)
    {
        if (is_null($original)) {
            array_push($this->openAPINullablesSetToNull, 'original');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($original) && (mb_strlen($original) > 256)) {
            throw new \InvalidArgumentException('invalid length for $original when calling MerchantAddressResponse., must be smaller than or equal to 256.');
        }
        if (!is_null($original) && (mb_strlen($original) < 0)) {
            throw new \InvalidArgumentException('invalid length for $original when calling MerchantAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['original'] = $original;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


