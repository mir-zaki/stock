<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">


    <div class="menu_section">




        <ul class="nav side-menu">
            <li> <a href=""><i class="fa fa-user"></i><span>{{ auth()->user()->fullname }}</span><span>
                        ({{ auth()->user()->type }})</span></a>
            </li>

            @if(auth()->user()->type=='admin')


            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard </a>

            </li>
            <li>

                <a href="{{route('pos')}}"><i class="fa fa-cart-plus"></i>POS</a>


            </li>

            <li>
                <a href="{{route('sales')}}"><i class="fa fa-shopping-bag"></i>Sales</a>

            </li>
            <li>
                <a><i class="fa fa-users"></i>Users<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.user')}}">Add user</a></li>
                    <li><a href="{{route('user.manage')}}">Manage users</a></li>


                </ul>
            </li>

            <li>
                <a><i class="fa fa-users"></i>Customers<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.customer')}}">Add customer</a></li>
                    <li><a href="{{route('customer.manage')}}">Manage customers</a></li>


                </ul>
            </li>
            <li>
                <a><i class="fa fa-users"></i>Suppliers<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.supplier')}}">Add Supplier</a></li>
                    <li><a href="{{route('supplier.manage')}}">Manage Suppliers</a></li>


                </ul>
            </li>
            <li>
                <a><i class="fa fa-book"></i>Products<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.product')}}">Add product</a></li>
                    <li><a href="{{route('product.manage')}}">Manage products</a></li>


                </ul>
            </li>
            <li>
                <a href="{{route('category.list')}}"><i class="fa fa-cubes"></i>Categories</a>


            </li>

            <li>
                <a><i class="fa fa-suitcase"></i>Purchase<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.purchase')}}">Add purchase</a></li>
                    <li><a href="{{route('manage.purchases')}}">Manage purchase</a></li>


                </ul>
            </li>
            <li>
                <a href="{{route('stock.manage')}}"><i class="fa fa-folder-o"></i>Stocks</a>
            </li>
            <li>
                <a><i class="fa fa-money"></i>Payments<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('customer.payment')}}">Customer Payment</a></li>
                    <li><a href="{{route('supplier.payment')}}">Supplier Payment</a></li>


                </ul>
            </li>

            <li>
                <a><i class="fa fa-file-pdf-o"></i>Reports<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('report.purchase')}}">Purchase report</a></li>
                    <li><a href="{{route('report.sales')}}">Sales report</a></li>


                </ul>
            </li>
            <li>
                <a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
            </li>


        </ul>

        </ul>
        @endif

        @if(auth()->user()->type=='manager')

        <li>

            <a href="{{route('pos')}}"><i class="fa fa-cart-plus"></i>POS</a>


        </li>

        <li>
            <a href="{{route('sales')}}"><i class="fa fa-shopping-bag"></i>Sales</a>

        </li>
        

        <li>
            <a><i class="fa fa-users"></i>Customers<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.customer')}}">Add customer</a></li>
                <li><a href="{{route('customer.manage')}}">Manage customers</a></li>


            </ul>
        </li>
        <li>
            <a><i class="fa fa-users"></i>Suppliers<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.supplier')}}">Add Supplier</a></li>
                <li><a href="{{route('supplier.manage')}}">Manage Suppliers</a></li>


            </ul>
        </li>
        <li>
            <a><i class="fa fa-book"></i>Products<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.product')}}">Add product</a></li>
                <li><a href="{{route('product.manage')}}">Manage products</a></li>


            </ul>
        </li>
        <li>
            <a href="{{route('category.list')}}"><i class="fa fa-cubes"></i>Categories</a>


        </li>

        <li>
            <a><i class="fa fa-suitcase"></i>Purchase<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.purchase')}}">Add purchase</a></li>
                <li><a href="{{route('manage.purchases')}}">Manage purchase</a></li>


            </ul>
        </li>
        <li>
            <a href="{{route('stock.manage')}}"><i class="fa fa-folder-o"></i>Stocks</a>
        </li>
        <li>
            <a><i class="fa fa-money"></i>Payments<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('customer.payment')}}">Customer Payment</a></li>
                <li><a href="{{route('supplier.payment')}}">Supplier Payment</a></li>


            </ul>
        </li>

        <li>
            <a><i class="fa fa-file-pdf-o"></i>Report<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('report.purchase')}}">Purchase report</a></li>
                <li><a href="{{route('report.sales')}}">Sales report</a></li>


            </ul>
        </li>
        <li>
            <a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
        </li>


        </ul>

        </ul>
        @endif

        @if(auth()->user()->type=='seller')

        <li>

            <a href="{{route('pos')}}"><i class="fa fa-cart-plus"></i>POS</a>


        </li>

        <li>
            <a href="{{route('sales')}}"><i class="fa fa-shopping-bag"></i>Sales</a>

        </li>
        

        <li>
            <a><i class="fa fa-users"></i>Customers<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.customer')}}">Add customer</a></li>
                <li><a href="{{route('customer.manage')}}">Manage customers</a></li>


            </ul>
        </li>
        <li>
            <a><i class="fa fa-users"></i>Suppliers<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.supplier')}}">Add Supplier</a></li>
                <li><a href="{{route('supplier.manage')}}">Manage Suppliers</a></li>


            </ul>
        </li>
        <li>
            <a><i class="fa fa-book"></i>Products<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.product')}}">Add product</a></li>
                <li><a href="{{route('product.manage')}}">Manage products</a></li>


            </ul>
        </li>
        <li>
            <a href="{{route('category.list')}}"><i class="fa fa-cubes"></i>Categories</a>


        </li>

        <li>
            <a><i class="fa fa-suitcase"></i>Purchase<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.purchase')}}">Add purchase</a></li>
                <li><a href="{{route('manage.purchases')}}">Manage purchase</a></li>


            </ul>
        </li>
        <li>
            <a href="{{route('stock.manage')}}"><i class="fa fa-folder-o"></i>Stocks</a>
        </li>
        <li>
            <a><i class="fa fa-money"></i>Payments<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('customer.payment')}}">Customer Payment</a></li>
                <li><a href="{{route('supplier.payment')}}">Supplier Payment</a></li>


            </ul>
        </li>

        
        <li>
            <a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
        </li>


        </ul>

        </ul>
        @endif

       
    </div>

</div>
