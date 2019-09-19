<?php

namespace codexten\yii\modules\report\grids;

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

trait ExportMenuTrait
{
    use ReportFooterTrait;

    public function init()
    {
        $this->onRenderSheet = function (Worksheet $sheet, self $widget) {
            if (!$this->hasMethod('getFooterRows')) {
                return;
            }
            $lastRow = $this->dataProvider->getTotalCount();
            $footerRows = $this->getFooterRowsContent();

            $currentRow = $lastRow + 4;

            $sheet->setCellValue("B{$currentRow}", 'Summary');
            $currentRow++;

            foreach ($footerRows as $footerRow) {
                $currentCol = 1;
                foreach ($footerRow as $cell) {
                    $sheet->setCellValue($this->getCellCoordinateFromIndex($currentRow, $currentCol), $cell);
                    $currentCol++;
                }
                $currentRow++;
            }

        };

        parent::init();;
    }

    public function getCellCoordinateFromIndex($row, $col)
    {
        $col = Coordinate::stringFromColumnIndex($col);
        return "{$col}{$row}";
    }

}