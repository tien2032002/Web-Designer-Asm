<?php
    //list of controllers and action
    $controllers = array('guest' => ['home_page', 'login', 'signup', 'login_manager', 'dish_list', 'dish_detail', 'menu','news', 'reserve', 'search_result',
                                     "tag", "contact_page", 'comment', 'news_detail', "footer"],
                         'user' => ['home_page_user', 'signup', 'login', 'logout', 'profile_user', 'dish_list', 'dish_detail', 'rate', 'order', 'search_result', 'history',
                                    'menu', 'change_info', 'profile_user_tab', 'cart_dropdown', "addToCart", 'view_cart', 'cart_tab', 'comment', 'reserve', "contact_page",
                                    "tag", "news", "news_detail", "footer"],
                         'manager' => ['home_page_manager', 'manage_employee', 'login', 'logout', 'add_employee', 'manage_product', "product_page", 'feedback_tab', "feedback_list", "statistical_tab",
                                       'delete_employee', 'update_employee', 'reserve_confirm', "add_product", "delete_product", "update_product", 'add_news', 'save_news', "del_feedback"],
                         'employee' => ['home_page_employee', 'confirm_table_tab', "confirm_table", "confirm_order_tab", 'add_table', 'payment', 
                                        'cancel_bill', 'search_result', "add_food", "cancel_order"]);
    //if controller or action not in above list, go to error page
    if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
        header('Location: /error');
    }
    //execute action
    include_once('control/' . $controller . '_controller.php');
    $klass = $controller . 'Controller';
    $controller = new $klass;
    $controller->$action();
?>