    <?php

class PageController extends BaseController {

    public function index()
    {
        return View::make('page.index');
    }

    public function about()
    {
        return View::make('page.about_us');
    }

    public function contact()
    {
        return View::make('page.contact');
    }

    public function factoryViews()
    {
        return View::make('page.factory_views');
    }

    public function productionEquipment()
    {
        return View::make('page.production_equipment');
    }

    public function rd()
    {
        return View::make('page.rd');
    }

    public function exchange()
    {
        return View::make('page.exchange');
    }

    public function culture()
    {
        return View::make('page.culture');
    }

    public function service()
    {
        return View::make('page.service');
    }

    public function ok()
    {
        return View::make('page.ok');
    }

    public function products($category)
    {
        $data['category'] = $category ;
        return View::make('page.products', $data);
    }

    public function productSmall($model)
    {
        $data['model'] = $model ;
        return View::make('page.product_small', $data);
    }

    public function productMedium($model)
    {
        $data['model'] = $model ;
        return View::make('page.product_medium', $data);
    }

    public function productBig($model)
    {
        $data['model'] = $model ;
        return View::make('page.product_big', $data);
    }
}