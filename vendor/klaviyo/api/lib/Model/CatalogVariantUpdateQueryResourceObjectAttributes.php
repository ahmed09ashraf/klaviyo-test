<?php
/**
 * CatalogVariantUpdateQueryResourceObjectAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2023-07-15
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPI\Model;

use \ArrayAccess;
use \KlaviyoAPI\ObjectSerializer;

/**
 * CatalogVariantUpdateQueryResourceObjectAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CatalogVariantUpdateQueryResourceObjectAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CatalogVariantUpdateQueryResourceObject_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'description' => 'string',
        'title' => 'string',
        'url' => 'string',
        'inventory_policy' => 'int',
        'price' => 'float',
        'custom_metadata' => 'object',
        'inventory_quantity' => 'float',
        'image_full_url' => 'string',
        'published' => 'bool',
        'images' => 'string[]',
        'image_thumbnail_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'description' => null,
        'title' => null,
        'url' => null,
        'inventory_policy' => null,
        'price' => null,
        'custom_metadata' => null,
        'inventory_quantity' => null,
        'image_full_url' => null,
        'published' => null,
        'images' => null,
        'image_thumbnail_url' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sku' => 'sku',
        'description' => 'description',
        'title' => 'title',
        'url' => 'url',
        'inventory_policy' => 'inventory_policy',
        'price' => 'price',
        'custom_metadata' => 'custom_metadata',
        'inventory_quantity' => 'inventory_quantity',
        'image_full_url' => 'image_full_url',
        'published' => 'published',
        'images' => 'images',
        'image_thumbnail_url' => 'image_thumbnail_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'description' => 'setDescription',
        'title' => 'setTitle',
        'url' => 'setUrl',
        'inventory_policy' => 'setInventoryPolicy',
        'price' => 'setPrice',
        'custom_metadata' => 'setCustomMetadata',
        'inventory_quantity' => 'setInventoryQuantity',
        'image_full_url' => 'setImageFullUrl',
        'published' => 'setPublished',
        'images' => 'setImages',
        'image_thumbnail_url' => 'setImageThumbnailUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'description' => 'getDescription',
        'title' => 'getTitle',
        'url' => 'getUrl',
        'inventory_policy' => 'getInventoryPolicy',
        'price' => 'getPrice',
        'custom_metadata' => 'getCustomMetadata',
        'inventory_quantity' => 'getInventoryQuantity',
        'image_full_url' => 'getImageFullUrl',
        'published' => 'getPublished',
        'images' => 'getImages',
        'image_thumbnail_url' => 'getImageThumbnailUrl'
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

    public const INVENTORY_POLICY_0 = 0;
    public const INVENTORY_POLICY_1 = 1;
    public const INVENTORY_POLICY_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInventoryPolicyAllowableValues()
    {
        return [
            self::INVENTORY_POLICY_0,
            self::INVENTORY_POLICY_1,
            self::INVENTORY_POLICY_2,
        ];
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
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['inventory_policy'] = $data['inventory_policy'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['custom_metadata'] = $data['custom_metadata'] ?? null;
        $this->container['inventory_quantity'] = $data['inventory_quantity'] ?? null;
        $this->container['image_full_url'] = $data['image_full_url'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['image_thumbnail_url'] = $data['image_thumbnail_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInventoryPolicyAllowableValues();
        if (!is_null($this->container['inventory_policy']) && !in_array($this->container['inventory_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'inventory_policy', must be one of '%s'",
                $this->container['inventory_policy'],
                implode("', '", $allowedValues)
            );
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
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The SKU of the catalog item variant.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A description of the catalog item variant.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the catalog item variant.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL pointing to the location of the catalog item variant on your website.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets inventory_policy
     *
     * @return int|null
     */
    public function getInventoryPolicy()
    {
        return $this->container['inventory_policy'];
    }

    /**
     * Sets inventory_policy
     *
     * @param int|null $inventory_policy This field controls the visibility of this catalog item variant in product feeds/blocks. This field supports the following values: `1`: a product will not appear in dynamic product recommendation feeds and blocks if it is out of stock. `0` or `2`: a product can appear in dynamic product recommendation feeds and blocks regardless of inventory quantity.
     *
     * @return self
     */
    public function setInventoryPolicy($inventory_policy)
    {
        $allowedValues = $this->getInventoryPolicyAllowableValues();
        if (!is_null($inventory_policy) && !in_array($inventory_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'inventory_policy', must be one of '%s'",
                    $inventory_policy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inventory_policy'] = $inventory_policy;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price This field can be used to set the price on the catalog item variant, which is what gets displayed for the item variant when included in emails. For most price-update use cases, you will also want to update the `price` on any parent items using the [Update Catalog Item Endpoint](https://developers.klaviyo.com/en/reference/update_catalog_item).
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets custom_metadata
     *
     * @return object|null
     */
    public function getCustomMetadata()
    {
        return $this->container['custom_metadata'];
    }

    /**
     * Sets custom_metadata
     *
     * @param object|null $custom_metadata Flat JSON blob to provide custom metadata about the catalog item variant. May not exceed 100kb.
     *
     * @return self
     */
    public function setCustomMetadata($custom_metadata)
    {
        $this->container['custom_metadata'] = $custom_metadata;

        return $this;
    }

    /**
     * Gets inventory_quantity
     *
     * @return float|null
     */
    public function getInventoryQuantity()
    {
        return $this->container['inventory_quantity'];
    }

    /**
     * Sets inventory_quantity
     *
     * @param float|null $inventory_quantity The quantity of the catalog item variant currently in stock.
     *
     * @return self
     */
    public function setInventoryQuantity($inventory_quantity)
    {
        $this->container['inventory_quantity'] = $inventory_quantity;

        return $this;
    }

    /**
     * Gets image_full_url
     *
     * @return string|null
     */
    public function getImageFullUrl()
    {
        return $this->container['image_full_url'];
    }

    /**
     * Sets image_full_url
     *
     * @param string|null $image_full_url URL pointing to the location of a full image of the catalog item variant.
     *
     * @return self
     */
    public function setImageFullUrl($image_full_url)
    {
        $this->container['image_full_url'] = $image_full_url;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published Boolean value indicating whether the catalog item variant is published.
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[]|null $images List of URLs pointing to the locations of images of the catalog item variant.
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets image_thumbnail_url
     *
     * @return string|null
     */
    public function getImageThumbnailUrl()
    {
        return $this->container['image_thumbnail_url'];
    }

    /**
     * Sets image_thumbnail_url
     *
     * @param string|null $image_thumbnail_url URL pointing to the location of an image thumbnail of the catalog item variant.
     *
     * @return self
     */
    public function setImageThumbnailUrl($image_thumbnail_url)
    {
        $this->container['image_thumbnail_url'] = $image_thumbnail_url;

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

