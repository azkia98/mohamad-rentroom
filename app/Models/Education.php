<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Education
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Education whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Education extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
