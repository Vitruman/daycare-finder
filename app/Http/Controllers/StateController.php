<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class StateController extends Controller
{
    private static $stateNames = [
        'AL'=>'Alabama','AK'=>'Alaska','AZ'=>'Arizona','AR'=>'Arkansas','CA'=>'California',
        'CO'=>'Colorado','CT'=>'Connecticut','DC'=>'District of Columbia','DE'=>'Delaware',
        'FL'=>'Florida','FM'=>'Federated States of Micronesia','GA'=>'Georgia','HI'=>'Hawaii',
        'IA'=>'Iowa','ID'=>'Idaho','IL'=>'Illinois','IN'=>'Indiana','KS'=>'Kansas',
        'KY'=>'Kentucky','LA'=>'Louisiana','MA'=>'Massachusetts','MD'=>'Maryland',
        'ME'=>'Maine','MI'=>'Michigan','MN'=>'Minnesota','MO'=>'Missouri','MS'=>'Mississippi',
        'MT'=>'Montana','NC'=>'North Carolina','ND'=>'North Dakota','NE'=>'Nebraska',
        'NH'=>'New Hampshire','NJ'=>'New Jersey','NM'=>'New Mexico','NV'=>'Nevada',
        'NY'=>'New York','OH'=>'Ohio','OK'=>'Oklahoma','OR'=>'Oregon','PA'=>'Pennsylvania',
        'PR'=>'Puerto Rico','RI'=>'Rhode Island','SC'=>'South Carolina','SD'=>'South Dakota',
        'TN'=>'Tennessee','TX'=>'Texas','UT'=>'Utah','VA'=>'Virginia','VT'=>'Vermont',
        'WA'=>'Washington','WI'=>'Wisconsin','WV'=>'West Virginia','WY'=>'Wyoming',
    ];

    public function index()
    {
        $states = Organization::query()
            ->whereNotNull('state')
            ->selectRaw('state, COUNT(*) as facilities_count')
            ->groupBy('state')
            ->orderBy('state')
            ->get()
            ->map(function ($row) {
                $code = strtoupper($row->state);
                $row->name = self::$stateNames[$code] ?? $row->state;
                $row->code = $code;
                $row->slug = strtolower($code);
                $row->image = null;
                $row->description = null;
                return $row;
            });

        return view('states.index', compact('states'));
    }

    public function show(string $state)
    {
        $code = strtoupper($state);
        $fullName = self::$stateNames[$code] ?? $code;

        $facilities = Organization::query()
            ->where('state', $code)
            ->paginate(12);

        $stateObject = (object) [
            'name' => $fullName,
            'code' => $code,
            'description' => null,
            'image' => null,
        ];

        return view('states.show', [
            'state' => $stateObject,
            'facilities' => $facilities,
        ]);
    }
}