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

  // Define the relationship with the associated vehicle
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    
     public function listing()
    {
        return $this->belongsTo(Listing::class); // Specify the foreign key column as 'id'
    }

    
    

}
