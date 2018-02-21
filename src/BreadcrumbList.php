<?php

namespace JsonLd;

class BreadcrumbList extends Thing
{
    /**
     * @var ListItem[]
     */
    private $breadcrumbItemList = [];

    /**
     * @return ListItem[]
     */
    public function getBreadcrumbItemList(): array
    {
        return $this->breadcrumbItemList;
    }

    /**
     * @param ListItem[] $breadcrumbItemList
     */
    public function setBreadcrumbItemList(array $breadcrumbItemList): void
    {
        $this->breadcrumbItemList = $breadcrumbItemList;
    }

    public function addBreadcrumbItem(ListItem $item): void
    {
        $this->breadcrumbItemList[] = $item;
    }

    public function clearBreadcrumbItemList(): void
    {
        $this->breadcrumbItemList = [];
    }

    public function getProperties(): array
    {
        $data = [
            'itemListElement' => $this->breadcrumbItemList,
            'numberOfItems' => count($this->breadcrumbItemList),
        ];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'BreadcrumbList';

        return $data;
    }
}
