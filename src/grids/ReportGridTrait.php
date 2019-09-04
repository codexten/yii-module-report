<?php

namespace codexten\yii\modules\report\grids;

use codexten\yii\helpers\ArrayHelper;
use yii\grid\Column;
use yii\helpers\Html;

trait ReportGridTrait
{
    use ReportFooterTrait;

    public function renderTableFooter()
    {
        $footerRows = $this->getFooterRowsContent();
        $rows = [];
        foreach ($footerRows as $footerRow) {
            $cells = [];
            foreach ($footerRow as $footerColumn) {
                $cells[] = Html::tag('td', $footerColumn);
            }
            $rows[] = Html::tag('tr', implode('', $cells), $this->footerRowOptions);
        }
        $content = implode('', $rows);

        return "<tfoot>\n".$content."\n</tfoot>";
    }

}
