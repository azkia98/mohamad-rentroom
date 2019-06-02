<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

/**
 * App\Models\Rent
 *
 * @property int $id
 * @property int $room_id
 * @property int $user_id
 * @property int $lesson_id
 * @property string $start_at
 * @property string $end_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Lesson $lesson
 * @property-read \App\Models\Room $room
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rent whereUserId($value)
 * @mixin \Eloquent
 */
class Rent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'taken_classes';


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }


    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }


    public function hasTime()
    {
        if ($this->end_at < now())
            return false;
        return true;
    }

    public function isExpired()
    {
        return !$this->hasTime();
    }
}
