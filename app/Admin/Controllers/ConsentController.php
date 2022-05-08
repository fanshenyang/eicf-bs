<?php

namespace App\Admin\Controllers;

use App\Model\Consent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ConsentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Consent';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Consent());

        $grid->column('id', __('ID'));
        $grid->column('inform_id', __('知情版本对应ID'));
        $grid->column('app', __('对应业务方'));
        $grid->column('project', __('对应项目'));
        $grid->column('user_id', __('用户ID'));
        $grid->column('user_type', __('用户类型'));
        $grid->column('ext', __('额外可选信息'));
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
        $show = new Show(Consent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('inform_id', __('知情版本对应ID'));
        $show->field('app', __('对应业务方'));
        $show->field('project', __('对应项目'));
        $show->field('user_id', __('用户ID'));
        $show->field('user_type', __('用户类型'));
        $show->field('ext', __('额外可选信息'));
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
        $form = new Form(new Consent());

        $form->number('inform_id', __('知情版本对应ID'));
        $form->text('app', __('对应业务方'));
        $form->text('project', __('对应项目'));
        $form->text('user_id', __('用户ID'));
        $form->switch('user_type', __('用户类型'));
        $form->textarea('ext', __('额外可选信息'));

        return $form;
    }
}
