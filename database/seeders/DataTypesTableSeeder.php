<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => __('voyager::seeders.data_types.user.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.user.plural'),
                'icon'                  => 'voyager-person',
                'model_name'            => 'TCG\\Voyager\\Models\\User',
                'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'menus');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => __('voyager::seeders.data_types.menu.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.menu.plural'),
                'icon'                  => 'voyager-list',
                'model_name'            => 'TCG\\Voyager\\Models\\Menu',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'roles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => __('voyager::seeders.data_types.role.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.role.plural'),
                'icon'                  => 'voyager-lock',
                'model_name'            => 'TCG\\Voyager\\Models\\Role',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'portfolio');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'portfolio',
                'display_name_singular' => 'Portfolio',
                'display_name_plural'   => 'Portfolios',
                'icon'                  => 'voyager-photos',
                'model_name'            => 'App\Models\Portfolio',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'generate_permissions'  => 1,
                'description'           => '',
                'details'               => [
                    "order_column" => null,
                    "order_display_column" => null,
                    "order_direction" => "asc",
                    "default_search_key" => null
                ]
            ])->save();
        }

        $dataType = $this->dataType('slug', 'portfolio_detail');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'portfolio_detail',
                'display_name_singular' => 'Portfolio Detail',
                'display_name_plural'   => 'Portfolio Details',
                'icon'                  => 'voyager-file-text',
                'model_name'            => 'App\Models\PortfolioDetail',
                'controller'            => 'TCG\Voyager\Http\Controllers\PortfolioDetailController',
                'description'           => '',
                'generate_permissions'  => 1,
                'server_side' => 0,
                'details'               => [
                    "order_column" => null,
                    "order_display_column" => null,
                    "order_direction" => "asc",
                    "default_search_key" => null
                ]
            ])->save();
        }

        $dataType = $this->dataType('slug', 'blogs');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'blogs',
                'display_name_singular' => 'Blog',
                'display_name_plural'   => 'Blogs',
                'icon'                  => 'voyager-window-list',
                'model_name'            => 'App\Models\Blog',
                'controller'            => '',
                'description'           => '',
                'generate_permissions'  => 1,
                'server_side' => 0,
                'details'               => [
                    "order_column" => null,
                    "order_display_column" => null,
                    "order_direction" => "asc",
                    "default_search_key" => null
                ]
            ])->save();
        }

        $dataType = $this->dataType('slug', 'blog-details');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'blog_details',
                'display_name_singular' => 'Blog Detail',
                'display_name_plural'   => 'Blog Details',
                'icon'                  => 'voyager-documentation',
                'model_name'            => 'App\Models\BlogDetail',
                'controller'            => '',
                'description'           => '',
                'generate_permissions'  => 1,
                'server_side' => 0,
                'details'               => [
                    "order_column" => null,
                    "order_display_column" => null,
                    "order_direction" => "asc",
                    "default_search_key" => null,
                    "scope" => null,
                ]
            ])->save();
        }

        
    }

    

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
