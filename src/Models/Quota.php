<?php

declare(strict_types=1);

namespace Liberu\CRM\QuotasAndIncentives\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 */
final class Quota extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_quotas';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['target' => 'float', 'attained' => 'float', 'period_start' => 'date', 'period_end' => 'date', 'ramp' => 'array'];
    }
}
