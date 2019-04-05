<?php

namespace Al3xTig3r\Portfolio\Components;

use Cms\Classes\ComponentBase;

use Cookie;
use Flash;
use Input;
use Lang;
use Log;

use Al3xTig3r\Portfolio\Models\Work;

class Showcase extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Showcase Component',
            'description' => 'The last works'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init()
    {
        $this->page->works_liked = array_filter(explode('|', Cookie::get('works-liked')));
    }

    public function onRun()
    {
        $this->addJs('/plugins/al3xtig3r/portfolio/assets/js/scripts.js');
    }

    /**
     * Retrieve a collection of Works
     *
     * @param int $limit
     *
     * @return Collection|null
     */
    public function works($limit = 9999)
    {
        $works = Work::orderBy('release_date', 'DESC')
                    ->where('public', true)
                    ->limit($limit)
                    ->get();

        return $works;
    }

    /**
     * Handle works number change
     *
     * @return array
     */
    public function onRefresh()
    {
        Flash::success(Lang::get('al3xtig3r.portfolio::lang.components.showcase.refreshed'));
        return [
            '#works-container' => $this->renderPartial('@works', [
                'works' => $this->works(Input::get('works-number'))
            ])
        ];
    }

    /**
     * Handle click on like button on a work card
     *
     * @return array
     */
    public function onLike()
    {
        $workId = Input::get('work-id');
        $likes = array_filter(explode('|', Cookie::get('works-liked')));

        $work = Work::find($workId);
        if(!in_array($workId, $likes)){
            $likes[] = $workId;
            $work->likes = $work->likes + 1;
            Flash::success(Lang::get('al3xtig3r.portfolio::lang.components.showcase.thanks'));
        }
        else{
            array_splice($likes, array_search($workId, $likes), 1);
            $work->likes = $work->likes - 1;
        }
        $work->save();

        Cookie::queue('works-liked', implode('|', $likes), 525600);

        return [
            'likes-count' => $work->likes
        ];
    }
}
