<?php
namespace App\Http\Controllers;
use App\Models\Organization;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private static $stateNames = [
        'AL'=>'Alabama','AK'=>'Alaska','AZ'=>'Arizona','AR'=>'Arkansas','CA'=>'California',
        'CO'=>'Colorado','CT'=>'Connecticut','DC'=>'District of Columbia','DE'=>'Delaware',
        'FL'=>'Florida','GA'=>'Georgia','HI'=>'Hawaii','IA'=>'Iowa','ID'=>'Idaho',
        'IL'=>'Illinois','IN'=>'Indiana','KS'=>'Kansas','KY'=>'Kentucky','LA'=>'Louisiana',
        'MA'=>'Massachusetts','MD'=>'Maryland','ME'=>'Maine','MI'=>'Michigan','MN'=>'Minnesota',
        'MO'=>'Missouri','MS'=>'Mississippi','MT'=>'Montana','NC'=>'North Carolina',
        'ND'=>'North Dakota','NE'=>'Nebraska','NH'=>'New Hampshire','NJ'=>'New Jersey',
        'NM'=>'New Mexico','NV'=>'Nevada','NY'=>'New York','OH'=>'Ohio','OK'=>'Oklahoma',
        'OR'=>'Oregon','PA'=>'Pennsylvania','RI'=>'Rhode Island','SC'=>'South Carolina',
        'SD'=>'South Dakota','TN'=>'Tennessee','TX'=>'Texas','UT'=>'Utah','VA'=>'Virginia',
        'VT'=>'Vermont','WA'=>'Washington','WI'=>'Wisconsin','WV'=>'West Virginia','WY'=>'Wyoming',
    ];

    public function index()
    {
        $states = Organization::select('state', DB::raw('count(*) as count'))
            ->whereNotNull('state')
            ->groupBy('state')
            ->orderByDesc('count')
            ->get()
            ->map(function ($row) {
                $code = strtoupper($row->state);
                $row->name = self::$stateNames[$code] ?? $code;
                $row->code = $code;
                return $row;
            });

        $featuredCenters = Organization::where('source', 'nyc')
            ->whereNotNull('phone')
            ->whereNotNull('zip')
            ->inRandomOrder()
            ->limit(9)
            ->get();

        return view('home', compact('states', 'featuredCenters'));
    }
}
