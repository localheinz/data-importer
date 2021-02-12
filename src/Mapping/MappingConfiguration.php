<?php


namespace Pimcore\Bundle\DataHubBatchImportBundle\Mapping;


use Pimcore\Bundle\DataHubBatchImportBundle\Mapping\DataTarget\DataTargetInterface;
use Pimcore\Bundle\DataHubBatchImportBundle\Mapping\Operator\OperatorInterface;

class MappingConfiguration
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @var mixed
     */
    protected $dataSourceIndex;

    /**
     * @var array
     */
    protected $transformationPipeline;

    /**
     * @var DataTargetInterface
     */
    protected $dataTarget;

    /**
     * @return mixed
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getDataSourceIndex()
    {
        return $this->dataSourceIndex;
    }

    /**
     * @param mixed $dataSourceIndex
     */
    public function setDataSourceIndex($dataSourceIndex): void
    {
        $this->dataSourceIndex = $dataSourceIndex;
    }

    /**
     * @return OperatorInterface[]
     */
    public function getTransformationPipeline(): array
    {
        return $this->transformationPipeline;
    }

    /**
     * @param mixed $transformationPipeline
     */
    public function setTransformationPipeline($transformationPipeline): void
    {
        $this->transformationPipeline = $transformationPipeline;
    }

    /**
     * @return DataTargetInterface
     */
    public function getDataTarget(): DataTargetInterface
    {
        return $this->dataTarget;
    }

    /**
     * @param mixed $dataTarget
     */
    public function setDataTarget($dataTarget): void
    {
        $this->dataTarget = $dataTarget;
    }


}