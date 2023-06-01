<?php
/**
 * Gender
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
use \FriendsOfCE\Channel\ApiClient\ObjectSerializer;

/**
 * Gender Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Channel\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Gender
{
    /**
     * Possible values of this enum
     */
    public const MALE = 'MALE';

    public const FEMALE = 'FEMALE';

    public const NOT_APPLICABLE = 'NOT_APPLICABLE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MALE,
            self::FEMALE,
            self::NOT_APPLICABLE
        ];
    }
}


