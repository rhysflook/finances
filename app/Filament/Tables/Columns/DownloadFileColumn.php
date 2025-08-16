<?php

namespace App\Filament\Tables\Columns;

use Filament\Support\Components\Contracts\HasEmbeddedView;
use Filament\Tables\Columns\Column;

class DownloadFileColumn extends Column implements HasEmbeddedView
{
    public function toEmbeddedHtml(): string
    {
        ob_start(); ?>

        <div>
            <a href="<?= route('download.private.file', ['file_name' => $this->getRecord()->file_name]) ?>" download>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" style="vertical-align:middle;" viewBox="0 0 20 20">
                <path d="M10 2a1 1 0 0 1 1 1v8.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 1 1 1.414-1.414L9 11.586V3a1 1 0 0 1 1-1zm-7 13a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1z"/>
            </svg>
            <?= e($this->getState()) ?>
            </a>
        </div>

        <?php return ob_get_clean();
    }
}
