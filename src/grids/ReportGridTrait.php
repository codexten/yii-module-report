<?php

namespace codexten\yii\modules\report\grids;

use codexten\yii\helpers\ArrayHelper;
use yii\grid\Column;
use yii\helpers\Html;

trait ReportGridTrait
{
    public function renderTableFooter()
    {
        $cells = [];
        $footerCells = $this->getFooterCells();
        $columns = $this->columns();
        foreach ($columns as $key => $column) {
            /* @var $column Column */
            $cells[] = Html::tag('td', ArrayHelper::getValue($footerCells, $key, ''));
        }

        $content = Html::tag('tr', implode('', $cells), $this->footerRowOptions);

        return "<tfoot>\n".$content."\n</tfoot>";
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
