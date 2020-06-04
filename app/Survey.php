<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    /**
     * A survey is submitted/created by a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * A location belongs to a district.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function districtDivision()
    {
        return $this->belongsTo(DistrictDivision::class);
    }
}
