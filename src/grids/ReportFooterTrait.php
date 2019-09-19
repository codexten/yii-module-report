<?php

namespace codexten\yii\modules\report\grids;

use codexten\yii\helpers\ArrayHelper;
use yii\grid\Column;

trait ReportFooterTrait
{
    public function getFooterRowsContent()
    {
        if (!$this->hasMethod('getFooterRows')){
            return [];
        }
        $rows = [];
        $columns = $this->columns();
        $footerRows = $this->getFooterRows();

        foreach ($footerRows as $footerRow) {
            $cells = [];
            foreach ($columns as $key => $column) {
                $cells[] = ArrayHelper::getValue($footerRow, $key, '');
            }
            $rows[] = $cells;
        }

        return $rows;
    }

    public function getAverageColumnValue($value)
    {
        $totalValue = $this->getTotalColumnValue($value);
        if ($totalValue) {
            return ($totalValue / $this->dataProvider->getCount());
        }

        return 0;
    }

    public function getTotalColumnValue($value)
    {
        $totalValue = 0;
        foreach ($this->dataProvider->getModels() as $model) {
            $calculatedValue = 0;
            if (is_string($value)) {
                $calculatedValue = $model->{$value};
            }
            if (is_callable($value)) {
                $calculatedValue = call_user_func($value, $model);
            }
            $totalValue += $calculatedValue;
        }

        return $totalValue;
    }
}