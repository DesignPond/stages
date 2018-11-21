<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Job as Job;
use App\Type as Type;

class SearchComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $jobs  = Job::with(['user','type'])->get();
        $types = Type::get();

        $villes = $jobs->map(function ($job, $key) {
            return $job->user->ville;
        })->sort()->unique();

        $view->with('types',$types);
        $view->with('villes',$villes);
    }
}