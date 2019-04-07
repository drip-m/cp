<?php

namespace App\Admin\Controllers;

use App\Models\DownloadClass;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class DownloadClassesController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('下载分类')
            ->body($this->grid());
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑分类')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建分类')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new DownloadClass);

        $grid->id('Id');
        $grid->title('分类名称');
        $grid->created_at('创建时间');

        // 禁用导出
        $grid->disableExport();

        // 禁用行选择checkbox
        $grid->disableRowSelector();

        $grid->actions(function ($actions) {
            // 不在每一行后面展示查看按钮
            $actions->disableView();
            // 不在每一行后面展示删除按钮
            $actions->disableDelete();
//            // 不在每一行后面展示编辑按钮
//            $actions->disableEdit();
        });
        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DownloadClass);

        $form->text('title', '分类名称');

        // 取消编辑页面的详情和删除按钮
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
            $tools->disableDelete();
        });
        return $form;
    }
}
