<?

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Favourites extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'vehicle_id',];

    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vehicle (){
        return $this->belongsTo(Vehicle::Class, 'vehicle_id');
    }

    public function isFavorited($vehicleId)
{
    if (auth()->check()) {
        $userId = auth()->user()->id;
        return Favourites::where('user_id', $userId)
            ->where('vehicle_id', $vehicleId)
            ->exists();
    }
    return false;
}

}
