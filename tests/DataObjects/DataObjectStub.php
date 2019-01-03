<?php
declare(strict_types=1);

namespace Tests\PostmanGenerator\DataObjects;

use PostmanGenerator\Objects\AbstractDataObject;

/**
 * @method string getDataAsString()
 * @method int getDataAsInt()
 * @method bool isDataBol()
 * @method string getAnotherProperty()
 * @method string getDummyProp() // for testing
 * @method self setDataAsString(string $asString)
 * @method self setDataAsInt(int $asInt)
 * @method self setDataBol(bool $bol)
 * @method self setAnotherProperty(string $anotherProperty)
 */
class DataObjectStub extends AbstractDataObject
{
    /** @var int */
    protected $dataAsInt;

    /** @var string */
    protected $dataAsString;

    /** @var bool */
    protected $dataBol;

    /** @var string */
    protected $anotherProperty;

    /**
     * Serialize object as array.
     *
     * @return mixed[]
     */
    public function toArray(): array
    {
        return [
            'int' => $this->getDataAsInt(),
            'string' => $this->getDataAsString(),
            'bol' => $this->isDataBol()
        ];
    }
}