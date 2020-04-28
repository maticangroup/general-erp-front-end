<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">‌Bank Account View</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal"
               class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>
        </div>
    </div>
</div>
<!--page header-->
<div class="row">
    <div class="col-3">
        <div class="card ">
            <div class="card-body text-center pt-3 ">
                <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2"
                          data-image-src="../assets/images/photos/pro14.jpg">
                        <span class="avatar-status bg-green"></span>
                    </span>
                </a>
                <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mehdi Yegane</a></h5>
                <span>Owner</span>
                <div>
                    <span class="badge badge-default">Religious</span>
                    <span class="badge badge-default">sullen</span>
                </div>
                <div class="mt-4">
                    <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i
                                class="fas fa-eye"></i></button>
                    <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i
                                class="fas fa-phone"></i></button>
                    <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i
                                class="fas fa-envelope"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bank Accounts</h3>
            </div>

            <div class="card-body p-3">
                <div class="panel panel-primary">
                    <div class="  ">
                        <div class="tabs-menu mb-3">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab6" class="font-weight-bold active"
                                       data-toggle="tab">Melli</a></li>
                                <li><a href="#tab7" class="font-weight-bold"
                                       data-toggle="tab">Pasargad</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body  tabs-menu-body border-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab6">
                                <table class="table card-table table-vcenter text-nowrap table-bordered">
                                    <tbody class="text-center">
                                    <tr>
                                        <td rowspan="3"><img src="..\assets\Melli-logo-LimooGraphic.png"
                                                             alt="" style="width:120px;"></td>
                                        <th class="bg-primary">Bank</th>
                                        <td>Melli</td>
                                        <th class="bg-primary">Account Num.</th>
                                        <td>6579546521684</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-primary">Account Type</th>
                                        <td>Saving Account</td>
                                        <th class="bg-primary">Credit Card Num.</th>
                                        <td>6037 9973 7400 5786</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-primary">Owner</th>
                                        <td>Salehi Majid</td>
                                        <th class="bg-primary">Iban</th>
                                        <td>IR65482348912357865423687443</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab7">

                                <table class="table card-table table-vcenter text-nowrap table-bordered">
                                    <tbody class="text-center">
                                    <tr>
                                        <td rowspan="3"><img src="..\assets\پاسارگاد.jpg"
                                                             alt="" style="width:130px;"></td>
                                        <th class="bg-primary">Bank</th>
                                        <td>Pasargad</td>
                                        <th class="bg-primary">Account Num.</th>
                                        <td>6579546521684</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-primary">Account Type</th>
                                        <td>Saving Account</td>
                                        <th class="bg-primary">Credit Card Num.</th>
                                        <td>6037 9973 7400 5786</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-primary">Owner</th>
                                        <td>Salehi Majid</td>
                                        <th class="bg-primary">IBAN</th>
                                        <td>IR65482348912357865423687443</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title mr-2">Transactions</div>
                <div class="card-options d-none d-sm-block mr-1">
                    <a href="#" class="btn btn-outline-primary">Export <i
                                class="fas fa-file-export"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="example-2" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0 text-center">Type</th>
                            <th class="wd-15p border-bottom-0 text-center">Amount</th>
                            <th class="wd-10p border-bottom-0 text-center">Date</th>
                            <th class="wd-10p border-bottom-0 text-center">Time</th>
                            <th class="wd-10p border-bottom-0 text-center">Payment Request</th>
                            <th class="wd-15p border-bottom-0 text-center">From</th>
                            <th class="wd-20p border-bottom-0 text-center">To</th>
                            <th class="wd-25p border-bottom-0 text-center">Branch</th>
                            <th class="wd-25p border-bottom-0 text-center">Status</th>
                            <th class="wd-25p border-bottom-0 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">Withdraw</td>
                            <td class="text-center">1,200 $</td>
                            <td class="text-center">12 February 2020</td>
                            <td class="text-center">08:40 PM</td>
                            <td class="text-center">54654</td>
                            <td class="text-center">Somaieh Gholami</td>
                            <td class="text-center">Kosar Naiemi</td>
                            <td class="text-center">Shariati</td>
                            <td class="text-center">Success</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="#" class="btn btn-indigo btn-sm"><i class="fas fa-print"></i>
                                    Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Withdraw</td>
                            <td class="text-center">3,400 $</td>
                            <td class="text-center">29 July 2020</td>
                            <td class="text-center">00:20 PM</td>
                            <td class="text-center">456456</td>
                            <td class="text-center">Meelad Rezaee</td>
                            <td class="text-center">Mahdi Alavi</td>
                            <td class="text-center">Valiasr</td>
                            <td class="text-center">Unsuccess</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="#" class="btn btn-indigo btn-sm"><i class="fas fa-print"></i>
                                    Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Deposit</td>
                            <td class="text-center">660 $</td>
                            <td class="text-center">08 February 2018</td>
                            <td class="text-center">05:35 PM</td>
                            <td class="text-center">456456</td>
                            <td class="text-center">Hafez Asadi</td>
                            <td class="text-center">Nasrin Maghami</td>
                            <td class="text-center">Velenjak</td>
                            <td class="text-center">Success</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="#" class="btn btn-indigo btn-sm"><i class="fas fa-print"></i>
                                    Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Withdraw</td>
                            <td class="text-center">4,000 $</td>
                            <td class="text-center">23 January 2015</td>
                            <td class="text-center">10:50 AM</td>
                            <td class="text-center">456456</td>
                            <td class="text-center">ُAli Azimi</td>
                            <td class="text-center">Shahla Arasteh</td>
                            <td class="text-center">Bazar</td>
                            <td class="text-center">Success</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="#" class="btn btn-indigo btn-sm"><i class="fas fa-print"></i>
                                    Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Deposit</td>
                            <td class="text-center"> 7,300 $</td>
                            <td class="text-center">27 January 2019</td>
                            <td class="text-center">06:55 AM</td>
                            <td class="text-center">456456</td>
                            <td class="text-center">Ahmad Akbari</td>
                            <td class="text-center">Nasir Bashir</td>
                            <td class="text-center">Valiasr</td>
                            <td class="text-center">Unsuccess</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="modal"
                                   data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="#" class="btn btn-indigo btn-sm"><i class="fas fa-print"></i>
                                    Print</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-wrapper -->
        </div>
        <!-- section-wrapper -->
    </div>
</div>
