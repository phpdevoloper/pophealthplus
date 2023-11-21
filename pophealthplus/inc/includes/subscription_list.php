<?php
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class Subscribe_Table extends WP_List_Table
{
    function extra_tablenav( $which )
    {
        if ( $which == "top" ) {          
            echo "<h1>Subscription List</h1>";
        }
        if ( $which == "bottom" ){
            //echo"Hi, I'm after the table";
        }
    }   
    function get_columns()
    {
        return $columns= array(
        'col_EmailID'=>__('Eamil'),
        'col_FormDate'=>__('created_at') 
        );
    }

    function prepare_items()
    {
        global $wpdb, $_wp_column_headers;
        $screen = get_current_screen();
        $query = "SELECT * FROM ". $wpdb->prefix ."subscribe";

        /* -- Ordering parameters -- */
        //Parameters that are going to be used to order the result
        $orderby = !empty($_GET["orderby"]) ? $_GET["orderby"] : 'DESC';
        $order = !empty($_GET["order"]) ? $_GET["order"] : 'created_at';
        if(!empty($orderby) & !empty($order)){ $query.=' ORDER BY '.$order.' '.$orderby; }

        /* -- Pagination parameters -- */
        //Number of elements in your table?
        $totalitems = $wpdb->query($query); //return the total number of affected rows
        //How many to display per page?
        $perpage = 10;
        //Which page is this?
        $paged = !empty($_GET["paged"]) ? $_GET["paged"] : '';
        //Page Number
        if(empty($paged) || !is_numeric($paged) || $paged<=0 ){ $paged=1; }
        //How many pages do we have in total?
        $totalpages = ceil($totalitems/$perpage);
        //adjust the query to take pagination into account
        if(!empty($paged) && !empty($perpage)){
        $offset=($paged-1)*$perpage;
        $query.=' LIMIT '.(int)$offset.','.(int)$perpage;
        }

        /* -- Register the pagination -- */
        $this->set_pagination_args( array(
        "total_items" => $totalitems,
        "total_pages" => $totalpages,
        "per_page" => $perpage,
        ) );
        //The pagination links are automatically built according to those parameters

        /* — Register the Columns — */
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, $hidden, $sortable);

        /* -- Fetch the items -- */
        $this->items = $wpdb->get_results($query);

    }

    function display_rows()
    {
       $records = $this->items;
       list( $columns, $hidden ) = $this->get_column_info();
        //Loop for each record
        if(!empty($records)) {
            foreach($records as $rec) {
                echo '<tr id="record_'.$rec->id.'">';
                foreach ( $columns as $column_name => $column_display_name ) {
                    $class = "class='$column_name column-$column_name'";
                    $style = "";
                    if ( in_array( $column_name, $hidden ) ) $style = ' style="display:none;"';
                        $attributes = $class . $style;
                        $editlink  = '/wp-admin/link.php?action=edit&id='.(int)$rec->id;
                    
                    //Display the cell
                    switch ( $column_name ) {
                        
                        case "col_Name": 
                            echo '<td '.$attributes.'>'.stripslashes($rec->first_name).'</td>';
                        break;

                        case "col_EmailID": 
                            echo '<td '.$attributes.'>'.stripslashes($rec->email).'</td>'; 
                        break;
                        
                        case "col_Subject": 
                            echo '<td '.$attributes.'>'.stripslashes($rec->subject).'</td>';
                        break;

                        case "col_Message": 
                            echo '<td '.$attributes.'>'.stripslashes($rec->message).'</td>';
                        break;

                        case "col_FormDate": 
                            echo '<td '.$attributes.'>'.$rec->created_at.'</td>';
                        break;
                    }
                }
                echo'</tr>';
            }
        }
    }    

}

add_action('admin_menu', 'subscription_list');

/*
    *** Admin menu
*/
function subscription_list() {
    $page_title = 'Subscription List';
    $menu_title = 'Subscription List';
    $capability = 'moderate_comments';
    $menu_slug = 'subscriptionlist';
    $function = 'subscriptionResult';
    $icon_url = '';
    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

function subscriptionResult()
{
    $wp_list_table = new Subscribe_Table();
    $wp_list_table->prepare_items();
    $wp_list_table->display();
}