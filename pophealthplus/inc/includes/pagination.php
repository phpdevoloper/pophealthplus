<?php
class pagination
{
    var $page = 1; // Current Page
    var $perPage = 3; // Items on each page, defaulted to 10
    var $showFirstAndLast = false; // if you would like the first and last page options.
    var $implodeBy;
    var $queryURL;
    function generate($array, $perPage = 10) {
        // Assign the items per page variable
        if (!empty($perPage))
            $this->perPage = $perPage;
        // Assign the page variable
        if (!empty($_GET['pid'])) {
            $this->page = $_GET['pid']; // using the get method
        } else {
            $this->page = 1; // if we don't have a page number then assume we are on the first page
        }
        // Take the length of the array
        $this->length = count($array);
        // Get the number of pages
        $this->pages = ceil($this->length / $this->perPage);
        // Calculate the starting point 
        $this->start  = ceil(($this->page - 1) * $this->perPage);
        // Return the part of the array we have requested
        return array_slice($array, $this->start, $this->perPage);
    }

    function links() {
        // Initiate the links array
        $plinks = array();
        $links = array();
        $slinks = array();
        // Concatenate the get variables to add to the page numbering string
        if (count($_GET)) {
            $this->queryURL = '';
            foreach ($_GET as $key => $value) {
                if ($key != 'pid') {
                    $this->queryURL .= '&amp;'.$key.'='.$value;
                }
            }
        }
        // If we have more then one pages
        if (($this->pages) > 1) {
            // Assign the 'next page' if we are not on the last page
            if ($this->page < $this->pages) {
                $slinks[] = '<li class="next"><a class="opage pager-nav last" href="?pid='.($this->page + 1).$this->queryURL.'"><i class="fa fa-chevron-right"></i></a></li> ';
                if ($this->showFirstAndLast) {
                    $slinks[] = '<li class="prev"><a class="opage pager-nav" href="?pid='.($this->pages).$this->queryURL.'"><i class="fa fa-chevron-left"></i></a> </li>';
                }
            }
            // Assign all the page numbers & links to the array
            $totalpages = $this->pages + 1;
            $page = $this->page;
            
        
            for($i = $page; $i < min($page + 4, $totalpages); $i++) {
                if ($this->page == $i) {
                    $links[] = ' <li><a class="active current">'.$i.'</a></li> '; // If we are on the same page as the current item
                } else { 
                    $links[] = ' <li><a class="opage" href="?pid='.$i.$this->queryURL.'">'.$i.'</a> </li>'; // add the link to the array
                }
            }
            
            
            // Assign the 'previous page' link into the array if we are not on the first page
            
            if ($this->page != 1) {
                if ($this->showFirstAndLast) {
                    $plinks[] = '<li class="next"><a class="opage" href="?pid=1'.$this->queryURL.'"><i class="fa fa-chevron-right"></i></a></li>';
                }
                $plinks[] = '<li class="prev"><a class="opage first" href="?pid='.($this->page - 1).$this->queryURL.'"><i class="fa fa-chevron-left"></i></a></li>';
            }       
            // Push the array into a string using any some glue
            return implode(' ', $plinks).implode($this->implodeBy, $links).implode(' ', $slinks);        
        }
        return;
    }
}
?>