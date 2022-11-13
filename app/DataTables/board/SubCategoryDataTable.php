<?php

namespace App\DataTables\board;

use App\Models\SubCategory;

use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SubCategoryDataTable extends DataTable
{
   /**
    * Build DataTable class.
    *
    * @param QueryBuilder $query Results from query() method.
    * @return \Yajra\DataTables\EloquentDataTable
    */
   public function dataTable(QueryBuilder $query): EloquentDataTable
   {
      return (new EloquentDataTable($query))
         ->addColumn('action', 'board/subcategory.action')
         ->setRowId('id');
   }

   /**
    * Get query source of dataTable.
    *
    * @param \App\Models\board/subcategory $model
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function query(SubCategory $subCategory): QueryBuilder
   {
      return $subCategory->newQuery();
   }

   /**
    * Optional method if you want to use html builder.
    *
    * @return \Yajra\DataTables\Html\Builder
    */
   public function html(): HtmlBuilder
   {
      return $this->builder()
         ->setTableId('kt_ecommerce_category_table')
         ->columns($this->getColumns())
         ->minifiedAjax()
         //->dom('Bfrtip')
         ->orderBy(1)
         ->selectStyleSingle()
         ->buttons([
            Button::make('excel'),
            Button::make('csv'),
            Button::make('pdf'),
            Button::make('print'),
            Button::make('reset'),
            Button::make('reload')
         ]);
   }

   /**
    * Get the dataTable columns definition.
    *
    * @return array
    */
   public function getColumns(): array
   {
      return [
         
         Column::make(__("board.subcategory.name"))
            ->addClass('min-w-250px'),
         Column::make(__("board.subcategory.status"))
            ->addClass('min-w-150px'),
         Column::make(__("board.category.actions"))
            ->addClass('text-end min-w-70px'),
      ];
   }

   /**
    * Get filename for export.
    *
    * @return string
    */
   protected function filename(): string
   {
      return 'board/subcategory_' . date('YmdHis');
   }
}
