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

    public function partner()
    {
        return View::make('page.partner');
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

    public function productRmg()
    {
        return View::make('page.product_rmg');
    }

    public function productRtg()
    {
        return View::make('page.product_rtg');
    }

    public function productGc()
    {
        return View::make('page.product_gc');
    }

    public function productBc_1()
    {
        return View::make('page.product_bc_1');
    }

    public function productBc_2()
    {
        return View::make('page.product_bc_2');
    }

    public function productEh()
    {
        return View::make('page.product_eh');
    }
}