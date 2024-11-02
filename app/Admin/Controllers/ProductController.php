<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Product;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProductController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Product(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('bigimg_url');
            $grid->column('smlimg_url');
            $grid->column('price');
            $grid->column('status');
            $grid->column('create_time');
            $grid->column('update_time');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Product(), function (Show $show) {
            $show->field('id');
            $show->field('id');
            $show->field('name');
            $show->field('bigimg_url');
            $show->field('smlimg_url');
            $show->field('price');
            $show->field('status');
            $show->field('create_time');
            $show->field('update_time');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Product(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('bigimg_url');
            $form->text('smlimg_url');
            $form->text('price');
            $form->text('status');
            $form->text('create_time');
            $form->text('update_time');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
