<?php

namespace App\Admin\Controllers;

use App\Model\ConsentExt;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ConsentExtController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ConsentExt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ConsentExt());

        $grid->column('id', __('Id'));
        $grid->column('consent_id', __('签订ID'));
        $grid->column('label_key', __('标签名称'));
        $grid->column('label_value', __('标签值'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('最后更新时间'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ConsentExt::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('consent_id', __('签订ID'));
        $show->field('label_key', __('标签名称'));
        $show->field('label_value', __('标签值'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('最后更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ConsentExt());

        $form->number('consent_id', __('签订ID'));
        $form->text('label_key', __('标签名称'));
        $form->text('label_value', __('标签值'));

        return $form;
    }
}
