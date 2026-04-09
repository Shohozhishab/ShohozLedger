
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="min-height: 65px;">
            <div class="pull-left image">
<!--                <img src="--><?php //echo base_url()?><!--/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                <?php $imglogo =  no_image_view('/uploads/schools/'.logo_image(),'/uploads/schools/no_image_logo.jpg',logo_image()); ?>
                <img src="<?php echo $imglogo; ?>" class="" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo profile_name();?></p>
                <a href="#" ><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php $role_id = newSession()->role;?>


            <li class="treeview Active">
                <?php
                    echo add_main_ajax_based_menu_with_permission('Dashboard', '/Admin/Dashboard', $role_id, 'fa fa-dashboard', '/Admin/DashboardAjax','Dashboard');
                ?>
            </li>







            <?php
                $modArrayTr = ['Transaction'];
                $menuAccessTr = all_menu_permission_check($modArrayTr,$role_id);
                if ($menuAccessTr == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-exchange"></i>
                    <span>Transaction</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Process Transaction', '/Admin/Transaction/create', $role_id, 'fa fa-exchange', '/Admin/Transaction_ajax/create','Transaction'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Transaction List', '/Admin/Transaction', $role_id, 'fa fa-exchange', '/Admin/Transaction_ajax','Transaction'); ?>
                </ul>
            </li>
            <?php } ?>



            <?php
                $modArrayLed = ['Ledger_nagodan','Ledger_bank','Ledger_loan','Ledger','Ledger_suppliers','Ledger_purchase','Ledger_sales','Ledger_stock','Ledger_expense','Ledger_profit','Ledger_capital','Ledger_vat','Ledger_other_sales','Ledger_discount'];
                $menuAccessLed = all_menu_permission_check($modArrayLed,$role_id);
                if ($menuAccessLed == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-book"></i>
                    <span>Ledger</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu"><?php echo add_main_ajax_based_menu_with_permission('Bank Ledger', '/Admin/Ledger_bank', $role_id, 'fa fa-book', '/Admin/Ledger_bank_ajax','Ledger_bank'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Account Head Ledger', '/Admin/Ledger_loan', $role_id, 'fa fa-book', '/Admin/Ledger_loan_ajax','Ledger_loan'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Customer Ledger', '/Admin/Ledger', $role_id, 'fa fa-book', '/Admin/Ledger_ajax','Ledger'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Supplier Ledger', '/Admin/Ledger_suppliers', $role_id, 'fa fa-book', '/Admin/Ledger_suppliers_ajax','Ledger_suppliers'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Ledger Expense', '/Admin/Ledger_expense', $role_id, 'fa fa-book', '/Admin/Ledger_expense_ajax','Ledger_expense'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Ledger other sales', '/Admin/Ledger_other_sales', $role_id, 'fa fa-book', '/Admin/Ledger_other_sales_ajax','Ledger_other_sales'); ?>
                </ul>
            </li>
            <?php } ?>



            <?php
                $modArrayCus = ['Customer_type','Customers'];
                $menuAccessCus = all_menu_permission_check($modArrayCus,$role_id);
                if ($menuAccessCus == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-users"></i>
                    <span>Customer </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Customer type', '/Admin/Customer_type', $role_id, 'fa fa-child', '/Admin/Customer_type_ajax','Customer_type'); ?>

                    <?php echo add_main_ajax_based_menu_with_permission('Customers', '/Admin/Customers', $role_id, 'fa fa-child', '/Admin/Customers_ajax','Customers'); ?>
                </ul>
            </li>
            <?php } ?>

            <?php echo add_main_ajax_based_menu_with_permission('Suppliers', '/Admin/Suppliers', $role_id, 'fa fa-user', '/Admin/Suppliers_ajax','Suppliers'); ?>

            <?php echo add_main_ajax_based_menu_with_permission('Account Head', '/Admin/Loan_provider', $role_id, 'fa fa-user-plus', '/Admin/Loan_provider_ajax','Loan_provider'); ?>

            <?php
            $modArrayEmp = ['Employee','Ledger_employee'];
            $menuAccessEmp = all_menu_permission_check($modArrayEmp,$role_id);
            if ($menuAccessEmp == true){
                ?>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa fa-line-chart"></i>
                        <span>Employee</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <?php echo add_main_ajax_based_menu_with_permission('Employee', '/Admin/Employee', $role_id, 'fa fa-line-chart', '/Admin/Employee_ajax','Employee'); ?>
                        <?php echo add_main_ajax_based_menu_with_permission('Salary', '/Admin/Ledger_employee', $role_id, 'fa fa-line-chart', '/Admin/Ledger_employee_ajax','Ledger_employee'); ?>
                    </ul>
                </li>
            <?php } ?>

            <?php
                $modArrayBank = ['Bank','Bank_deposit','Bank_withdraw','Chaque'];
                $menuAccessBank = all_menu_permission_check($modArrayBank,$role_id);
                if ($menuAccessBank == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-bank"></i>
                    <span>Bank</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Bank', '/Admin/Bank', $role_id, 'fa fa-th-list', '/Admin/Bank_ajax','Bank'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Deposit', '/Admin/Bank_deposit', $role_id, 'fa fa-th-list', '/Admin/Bank_deposit_ajax','Bank_deposit'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Withdraw', '/Admin/Bank_withdraw', $role_id, 'fa fa-th-list', '/Admin/Bank_withdraw_ajax','Bank_withdraw'); ?>
                </ul>
            </li>
            <?php } ?>

            <?php
                $modArrayUse = ['User','Role'];
                $menuAccessUse = all_menu_permission_check($modArrayUse,$role_id);
                if ($menuAccessUse == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-line-chart"></i>
                    <span>Users </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Users', '/Admin/User', $role_id, 'fa fa-hospital-o', '/Admin/User_ajax','User'); ?>

                    <?php echo add_main_ajax_based_menu_with_permission('Users Role', '/Admin/Role', $role_id, 'fa fa-hospital-o', '/Admin/Role_ajax','Role'); ?>
                </ul>
            </li>
            <?php } ?>

            <?php echo add_main_ajax_based_menu_with_permission('Settings', '/Admin/Settings', $role_id, 'fa fa-hospital-o', '/Admin/Settings_ajax','Settings'); ?>






        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

