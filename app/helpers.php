<?php
    function get_header_items($role){
        switch ($role){
            case 'administrator':
                return [
                    ['لوحة التحكم', 'home', 'fa-home'],
                    ['إدارة الموظفين', 'home' , 'fa-user-tie'],
                    ['الإدارة المالية', 'financial-home' , 'fa-money-bill-alt'], 
                    ['Run Order' , 'home' , 'fa-cog' ]
                ];
            case 'accountant':
                return [
                    ['لوحة التحكم', 'home', 'fa-home'],
                    ['الإدارة المالية', 'financial-home' , 'fa-money-bill-alt'],
                ];
        }
    }

    // GET FEATURED ROLE AS STRING
    function get_role(){
        if (auth()->user()->hasRole('administrator')) return 'administrator';
        elseif (auth()->user()->hasRole('accountant')) return 'accountant';
        elseif (auth()->user()->hasRole('archive')) return 'archive';
        elseif (auth()->user()->hasRole('hr')) return 'hr';
        else return false;
    }

    function get_route($route){
        return Route::is(get_role() . '-' . $route);
    }

    function set_route($route){
        return route(get_role() . '-' . $route);
    }

    function current_bc(){
        $array = Breadcrumbs::current();
        return $array[count($array)-1];
    }

    function array_to_list($arr){
        $list = '<ul class="text-danger">';
        foreach ($arr as $item){
            $list .= '<li>'.$item.'</li>';
        }
        $list .= '</ul>';
        return $list;
    }

    function count_loop($parameter, $item, $key){
        if ($parameter)
            return $item->firstItem() + $key;
        else
            return $item->total() - $item->firstItem() - $key + 1;
    }

    function RandomString() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $randomString = '';
        for ($i = 0; $i < rand(7,10) ; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    function generateEmail(){
        return 'e-' . RandomString() . '@itourstory.com';
    }
