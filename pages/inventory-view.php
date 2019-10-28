<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Inventory View</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal"
               class="btn btn-primary "><i class="fas fa-pen"></i> Edit</a>
        </div>
        <div class="float-right ml-1">
            <a href="#" class="btn btn-primary  bg-red"><i
                        class="fas fa-trash mr-1"></i>Delete</a>
        </div>
    </div>
</div>
<!--page header-->

<div class="row">
    <div class="col-xl-4 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body text-center pt-3 pb-5">
                <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro6.jpg">
                        <span class="avatar-status bg-red"></span>
                    </span>
                </a>
                <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Shahin Samadi</a></h5>
                <span>Responsible</span>
                <div >
                    <span class="badge badge-default">keeper</span>
                </div>
                <div class="mt-4 mb-5">
                    <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                    <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                    <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-md-12 col-lg-12">
            <div class="card ">
                <div class="card-header">
                    <p class="card-title font-weight-bold">Inventory info</p>
                </div>
                <div class="card-body p-3">
                    <div class="panel panel-primary">
                        <div class="row">
                                        <div class="col-6">
                                            <div class="media mt-1 pb-2">
                                                <div class="mediaicon">
                                                    <i class="fas fa-font" aria-hidden="true"></i>
                                                </div>
                                                <div class="media-body ml-5 mt-1">
                                                    <h6 class="mediafont text-dark mb-1">Name</h6><span
                                                            class="d-block">Number Five</span>
                                                </div>
                                            </div>
                                            <div class="media mt-1 pb-2">
                                                <div class="mediaicon">
                                                    <i class="fas fa-code-branch" aria-hidden="true"></i>
                                                </div>
                                                <div class="media-body ml-5 mt-1">
                                                    <h6 class="mediafont text-dark mb-1">Branch</h6><span
                                                            class="d-block">Saadi</span>
                                                </div>
                                            </div>
                                            <div class="media mt-1 pb-2">
                                                <div class="mediaicon">
                                                    <i class="fas fa-boxes" aria-hidden="true"></i>
                                                </div>
                                                <div class="media-body ml-5 mt-1">
                                                    <h6 class="mediafont text-dark mb-1">Stock</h6><span
                                                            class="d-block">
                                                                    <div class="progress progress-md mb-3">
                                                                        <div class="progress-bar bg-success w-20 font-weight-bold">20%</div>
                                                                    </div>
                                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="media mt-1 pb-2">
                                                <div class="mediaicon">
                                                    <i class="fas fa-map-signs" aria-hidden="true"></i>
                                                </div>
                                                <div class="media-body ml-5 mt-1">
                                                    <h6 class="mediafont text-dark mb-1">Type</h6><span
                                                            class="d-block">Office Equipment</span>
                                                </div>
                                            </div>
                                            <div class="media mt-1 pb-2">
                                                <div class="mediaicon">
                                                    <i class="fas fa-people-carry" aria-hidden="true"></i>
                                                </div>
                                                <div class="media-body ml-5 mt-1">
                                                    <h6 class="mediafont text-dark mb-1">Inventory
                                                        Keeper</h6><span class="d-block">Abbas Amiri</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body p-5">
                <div class="panel panel-primary">
                    <div class="  p-3 ">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab1111" class="active font-weight-bold" data-toggle="tab">Equipment Transfer Deed</a></li>
                                <li><a href="#tab2222" class="font-weight-bold" data-toggle="tab"> Equipment Supply Deed</a></li>
                                <li><a href="#tab3333" class="font-weight-bold" data-toggle="tab">Equipment Purchase Deed</a></li>
                                <li><a href="#tab4444" class="font-weight-bold" data-toggle="tab">Safety Requirements</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body  tabs-menu-body border-0 ">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab1111">
                                <div class="table-responsive mt-3">
                                    <table id="example-2" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0 text-center bg-primary">Deed Serial</th>
                                            <th class="wd-15p border-bottom-0 text-center bg-primary">Num Of Equipment</th>
                                            <th class="wd-20p border-bottom-0 text-center bg-primary">Create Date</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Requester</th>
                                            <th class="wd-10p border-bottom-0 text-center bg-primary">From</th>
                                            <th class="wd-15p border-bottom-0 text-center bg-primary">To</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Transfer Date</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Related To</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Status</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1354v18</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">12 February 2019</td>
                                            <td class="text-center">Majid Moghadam</td>
                                            <td class="text-center">TQM Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">15 Jun 2019</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center"><span class="status-icon bg-warning"></span>  On The Way </td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">243sx235</td>
                                            <td class="text-center">11</td>
                                            <td class="text-center">26 March 2020</td>
                                            <td class="text-center">Salehe Rafie</td>
                                            <td class="text-center">CEM Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">01 May 2021</td>
                                            <td class="text-center">Organization</td>
                                            <td class="text-center"><span class="status-icon bg-danger"></span> Rejected</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">23adc4544</td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">03 June 2018</td>
                                            <td class="text-center">Mohsen Foruzan</td>
                                            <td class="text-center">TQM Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">18 March 2020</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center"><span class="status-icon bg-success"></span> Delivered</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2134as235</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">11 April 2019</td>
                                            <td class="text-center">Saba Sabaghi</td>
                                            <td class="text-center">Operational Team</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">28 April 2018</td>
                                            <td class="text-center">Deal</td>
                                            <td class="text-center"><span class="status-icon bg-pink"></span> Requested</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2134r23</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">19 April 2017</td>
                                            <td class="text-center">Nastaran Yavari</td>
                                            <td class="text-center">Edit Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">09 May 2020</td>
                                            <td class="text-center">Organization</td>
                                            <td class="text-center"><span class="status-icon bg-info"></span> List accepted</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1354v18</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">12 February 2019</td>
                                            <td class="text-center">Majid Moghadam</td>
                                            <td class="text-center">TQM Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">15 Jun 2019</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center"><span class="status-icon bg-warning"></span>  On The Way</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">243sx235</td>
                                            <td class="text-center">11</td>
                                            <td class="text-center">26 March 2020</td>
                                            <td class="text-center">Salehe Rafie</td>
                                            <td class="text-center">CEM Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">01 May 2021</td>
                                            <td class="text-center">Organization</td>
                                            <td class="text-center"><span class="status-icon bg-danger"></span> Rejected</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">23adc4544</td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">03 June 2018</td>
                                            <td class="text-center">Mohsen Foruzan</td>
                                            <td class="text-center">TQM Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">18 March 2020</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center"><span class="status-icon bg-success"></span> Delivered</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2134as235</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">11 April 2019</td>
                                            <td class="text-center">Saba Sabaghi</td>
                                            <td class="text-center">Operational Team</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">28 April 2018</td>
                                            <td class="text-center">Deal</td>
                                            <td class="text-center"><span class="status-icon bg-pink"></span> Requested</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2134r23</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">19 April 2017</td>
                                            <td class="text-center">Nastaran Yavari</td>
                                            <td class="text-center">Edit Unit</td>
                                            <td class="text-center">Inventory Keeper</td>
                                            <td class="text-center">09 May 2020</td>
                                            <td class="text-center">Organization</td>
                                            <td class="text-center"><span class="status-icon bg-info"></span> List accepted</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmenttransferdeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab2222">
                                <div class="table-responsive mt-3">
                                    <table id="example-3" class="table table-striped table-bordered nowrap">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th class="wd-15p border-bottom-0 text-center">Deed Serial</th>
                                            <th class="wd-15p border-bottom-0 text-center">Supplier</th>
                                            <th class="wd-20p border-bottom-0 text-center">Num of equipment</th>
                                            <th class="wd-25p border-bottom-0 text-center">Request date</th>
                                            <th class="wd-10p border-bottom-0 text-center">From time</th>
                                            <th class="wd-15p border-bottom-0 text-center">To time</th>
                                            <th class="wd-25p border-bottom-0 text-center">Related To</th>
                                            <th class="wd-25p border-bottom-0 text-center">Status</th>
                                            <th class="wd-25p border-bottom-0 text-center">Actions</th>
                                        </tr>
                                        </thead class=text-center>
                                        <tbody>
                                        <tr>
                                            <td>1354v18</td>
                                            <td class="text-center">Jahan Shop</td>
                                            <td class="text-center">03</td>
                                            <td class="text-center">12 February 2019</td>
                                            <td class="text-center">10:26 AM</td>
                                            <td class="text-center">06:26 PM</td>
                                            <td class="text-center">Organization</td>
                                            <td class="text-center"> Requested</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>243sx235</td>
                                            <td class="text-center">Novin Shop</td>
                                            <td class="text-center">23</td>
                                            <td class="text-center">01 May 2021</td>
                                            <td class="text-center">08:06 AM</td>
                                            <td class="text-center">08:46 PM</td>
                                            <td class="text-center">Deal</td>
                                            <td class="text-center">Rejected</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23adc4544</td>
                                            <td class="text-center">Bartar Company</td>
                                            <td class="text-center">13</td>
                                            <td class="text-center">18 March 2020</td>
                                            <td class="text-center">09:16 AM</td>
                                            <td class="text-center">10:15 PM</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center">Send To Supplier</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2134as235</td>
                                            <td class="text-center">First Shop</td>
                                            <td class="text-center">09</td>
                                            <td class="text-center">28 April 2018</td>
                                            <td class="text-center">02:01 PM</td>
                                            <td class="text-center">11:00 PM</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center">Ready For Transfer</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2134r23</td>
                                            <td class="text-center">Sadid Company</td>
                                            <td class="text-center">44</td>
                                            <td class="text-center">09 May 2020</td>
                                            <td class="text-center">04:46 PM</td>
                                            <td class="text-center">00:00 AM</td>
                                            <td class="text-center">Deal</td>
                                            <td class="text-center"> Send To Supplier</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1354v18</td>
                                            <td class="text-center">Jahan Shop</td>
                                            <td class="text-center">03</td>
                                            <td class="text-center">12 February 2019</td>
                                            <td class="text-center">10:26 AM</td>
                                            <td class="text-center">06:26 PM</td>
                                            <td class="text-center">Organization</td>
                                            <td class="text-center"> Requested</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>243sx235</td>
                                            <td class="text-center">Novin Shop</td>
                                            <td class="text-center">23</td>
                                            <td class="text-center">01 May 2021</td>
                                            <td class="text-center">08:06 AM</td>
                                            <td class="text-center">08:46 PM</td>
                                            <td class="text-center">Deal</td>
                                            <td class="text-center">Rejected</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23adc4544</td>
                                            <td class="text-center">Bartar Company</td>
                                            <td class="text-center">13</td>
                                            <td class="text-center">18 March 2020</td>
                                            <td class="text-center">09:16 AM</td>
                                            <td class="text-center">10:15 PM</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center">Send To Supplier</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2134as235</td>
                                            <td class="text-center">First Shop</td>
                                            <td class="text-center">09</td>
                                            <td class="text-center">28 April 2020</td>
                                            <td class="text-center">02:01 PM</td>
                                            <td class="text-center">11:30 PM</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center">Ready For Transfer</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2134r23</td>
                                            <td class="text-center">Sadid Company</td>
                                            <td class="text-center">44</td>
                                            <td class="text-center">09 May 2010</td>
                                            <td class="text-center">04:30 PM</td>
                                            <td class="text-center">00:30 AM</td>
                                            <td class="text-center">Project</td>
                                            <td class="text-center"> Send To Supplier</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="/equipmentsupplydeed-view-print"
                                                   class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="javascript:void(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab3333">
                                <div class="table-responsive mt-3">
                                    <table id="example-4" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0 text-center bg-primary">Equipment</th>
                                            <th class="wd-15p border-bottom-0 text-center bg-primary">Category</th>
                                            <th class="wd-10p border-bottom-0 text-center bg-primary">Requester</th>
                                            <th class="wd-15p border-bottom-0 text-center bg-primary">Confirmation person</th>
                                            <th class="wd-20p border-bottom-0 text-center bg-primary">Purchasing officer</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Purchase date</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Invoices</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Branches</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Settled inventory</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Status</th>
                                            <th class="wd-25p border-bottom-0 text-center bg-primary">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">Tablet</td>
                                            <td class="text-center">Digital</td>
                                            <td class="text-center">Hossein Azimi</td>
                                            <td class="text-center">Nikoo Gharib</td>
                                            <td class="text-center">Saba Nouri</td>
                                            <td class="text-center">12 December 2019</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Shariati</td>
                                            <td class="text-center">Number 3</td>
                                            <td class="text-center"> Delivered</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="/equipmentpurchasedeed-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Tablet</td>
                                            <td class="text-center">Digital</td>
                                            <td class="text-center">Ehsan Rezvanian</td>
                                            <td class="text-center">Yasaman Taghvaie</td>
                                            <td class="text-center">Saba Nouri</td>
                                            <td class="text-center">12 December 2019</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Shariati</td>
                                            <td class="text-center">Number 1</td>
                                            <td class="text-center">rejected</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="/equipmentpurchasedeed-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Tablet</td>
                                            <td class="text-center">Digital</td>
                                            <td class="text-center">Hossein Azimi</td>
                                            <td class="text-center">Mahdi Ardalan</td>
                                            <td class="text-center">Saba Nouri</td>
                                            <td class="text-center">12 December 2019</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Shariati</td>
                                            <td class="text-center">Number 3</td>
                                            <td class="text-center">accepted</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="/equipmentpurchasedeed-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">TV</td>
                                            <td class="text-center">Digital</td>
                                            <td class="text-center">Hossein Azimi</td>
                                            <td class="text-center">Shamsi Saberi</td>
                                            <td class="text-center">Hossein Azimi</td>
                                            <td class="text-center">12 December 2019</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Shariati</td>
                                            <td class="text-center">Number 5</td>
                                            <td class="text-center">Initialized</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="/equipmentpurchasedeed-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Camera</td>
                                            <td class="text-center">Digital</td>
                                            <td class="text-center">Ehsan Rezvanian</td>
                                            <td class="text-center">Motahareh Moalem</td>
                                            <td class="text-center">Hossein Azimi</td>
                                            <td class="text-center">12 December 2019</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Shariati</td>
                                            <td class="text-center">Number 3</td>
                                            <td class="text-center">Purchased</td>
                                            <td class="text-center">
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="/equipmentpurchasedeed-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                   data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pen"></i> Edit</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab4444">
                                <div class="table-responsive mt-3">
                                    <table class="table card-table table-vcenter text-nowrap table-primary border">
                                        <thead class="bg-primary text-white border-dark">
                                        <tr>
                                            <th class="text-white text-center">Code</th>
                                            <th class="text-white text-center">
                                                Item
                                            </th>
                                            <th class="text-white text-center">
                                                Description
                                            </th>
                                            <th></th>
                                        </tr>
                                        </thead class=text-center>
                                        <tbody class="text-center">
                                        <tr>
                                            <th scope="row">GE097</th>
                                            <td class="text-center">
                                                Safety glasses
                                            </td>
                                            <td class="text-center">
                                                Used for protecting eye from being hurt.
                                            </td>
                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">GE097</th>
                                            <td class="text-center">
                                                Safety glasses
                                            </td>
                                            <td class="text-center">
                                                Used for protecting eye from being hurt.
                                            </td>
                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">GE097</th>
                                            <td class="text-center">
                                                Safety glasses
                                            </td>
                                            <td class="text-center">
                                                Used for protecting eye from being hurt.
                                            </td>
                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">GE097</th>
                                            <td class="text-center">
                                                Safety glasses
                                            </td>
                                            <td class="text-center">
                                                Used for protecting eye from being hurt.
                                            </td>
                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                            </td>
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
</div>

<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body p-5">
                <div class="panel panel-primary">
                    <div class="  p-3 ">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab11" class="active font-weight-bold" data-toggle="tab">Equipments</a></li>
                                <li><a href="#tab22" class="font-weight-bold" data-toggle="tab"> Shelves</a></li>
                                <li><a href="#tab33" class="font-weight-bold" data-toggle="tab">Zones</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="panel-body  tabs-menu-body border-0 ">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab11">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title mr-2 font-weight-bold">Equipment</div>
                                        <button type="button" class="btn btn-success float-right ml-auto" data-toggle="modal" data-target="#add-modal"><i class="fas  fa-plus"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-5" class="table table-striped table-bordered ">
                                                <thead>
                                                <tr>
                                                    <th class="border-bottom-0 text-center bg-primary">Name</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Label</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Zone</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Shelf</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Category</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Size(Cm)</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Weight(Kg)</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Status</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">Camera</td>
                                                    <td class="text-center">12</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">Digital</td>
                                                    <td class="text-center">65*85</td>
                                                    <td class="text-center">1.2</td>
                                                    <td class="text-center"><span class="tag tag-danger">Broken</span></td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Tv</td>
                                                    <td class="text-center">69</td>
                                                    <td class="text-center">D</td>
                                                    <td class="text-center">06</td>
                                                    <td class="text-center">Digital</td>
                                                    <td class="text-center">15*76</td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-center"><span class="tag tag-success">Available</span></td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Tablet</td>
                                                    <td class="text-center">119</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">01</td>
                                                    <td class="text-center">Digital</td>
                                                    <td class="text-center">94*56</td>
                                                    <td class="text-center">0.5</td>
                                                    <td class="text-center"><span class="tag tag-warning">In use</span></td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Video camera</td>
                                                    <td class="text-center">51</td>
                                                    <td class="text-center">C</td>
                                                    <td class="text-center">13</td>
                                                    <td class="text-center">Digital</td>
                                                    <td class="text-center">40*12</td>
                                                    <td class="text-center">1.5</td>
                                                    <td class="text-center"><span class="tag tag-success">Available</span></td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Camera Stand</td>
                                                    <td class="text-center">88</td>
                                                    <td class="text-center">B</td>
                                                    <td class="text-center">09</td>
                                                    <td class="text-center">Digital</td>
                                                    <td class="text-center">195*56</td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center"><span class="tag tag-warning">In use</span></td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab22">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title mr-2 font-weight-bold">Shelves</div>
                                        <button type="button" class="btn btn-success float-right ml-auto" data-toggle="modal" data-target="#add-modal"><i class="fas  fa-plus"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-6" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th class="border-bottom-0 text-center bg-primary">Name</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Inventory</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Zone</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Length (cm)</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Width (cm)</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Height (cm)</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Capacity</th>
                                                    <th class="border-bottom-0 text-center bg-primary">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">01</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">300</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-35 font-weight-bold">35%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">02</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">120</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">60</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-danger w-90 font-weight-bold ">90%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">800</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">120</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-danger w-70 font-weight-bold">70%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">04</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">500</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-50 font-weight-bold">50%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">05</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">180</td>
                                                    <td class="text-center">80</td>
                                                    <td class="text-center">150</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-20 font-weight-bold">20%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab33">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title mr-2 font-weight-bold">Zones</div>
                                        <button type="button" class="btn btn-success float-right ml-auto" data-toggle="modal" data-target="#add-modal"><i class="fas  fa-plus"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-7" class="table table-striped table-bordered">
                                                <thead class="bg-primary">
                                                <tr>
                                                    <th class="border-bottom-0 text-center">Name</th>
                                                    <th class="border-bottom-0 text-center">Inventory</th>
                                                    <th class="border-bottom-0 text-center">Num of Shelves</th>
                                                    <th class="border-bottom-0 text-center">Capacity</th>
                                                    <th class="border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>A</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">13</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-30 font-weight-bold">30%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>B</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">42</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-5 font-weight-bold">5%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>C</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">69</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-20 font-weight-bold">85%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>D</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">32</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-60 font-weight-bold">60%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>E</td>
                                                    <td class="text-center">Number Five</td>
                                                    <td class="text-center">113</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-70 font-weight-bold">70%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/inventory-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modals-->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-modal">Edit Inventory</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card mb-0">
                            <div class="panel panel-primary ">
                                <div class="  border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#tab1-11" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab2-22" class="font-weight-bold" data-toggle="tab">Place & Location</a></li>
                                            <li><a href="#tab3-33" class="font-weight-bold" data-toggle="tab">Safety Requirement</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1-11">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Name">Name :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="branch">Branch :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="branch">
                                                                    <option>Pasdaran</option>
                                                                    <option>Shariati</option>
                                                                    <option>Shoosh</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Category">Type :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="contract">
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Category">inventory keeper :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="contract">
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Name">Capacity :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name" placeholder="in cubic meter"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Descriptions">Descriptions :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control"
                                                                          name="example-textarea-input" rows="6"
                                                                          placeholder="text here.."
                                                                          id="Descriptions"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2-22">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Address">Address :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-map-signs tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker"
                                                                           id="Address" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Location">Static Phone :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker"
                                                                           id="Location" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-1">
                                                        <img class="border-dark"
                                                             src="/assets/images/photos/Matican Location Map + Pin.png" width="100%"
                                                             alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3-33">
                                            <div class="form-group clearfix mt-3">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <label class="control-label form-label font-weight-bold"
                                                               for="title">Safety Requirement :</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    CD421
                                                                </button>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    FD984
                                                                </button>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    GE097
                                                                </button>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    GE097
                                                                </button>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    GE097
                                                                </button>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    GE097
                                                                </button>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    GE097
                                                                </button>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-12 mt-2 mb-2">
                                                                <button type="button" class="btn btn-outline-primary"
                                                                        data-container="body" data-toggle="popover"
                                                                        data-popover-color="default"
                                                                        data-placement="bottom"
                                                                        title="Safety glasses"
                                                                        data-content="Used for protecting eye from being hurt.">
                                                                    GE097
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mt-5">
                                                            <div class="col-md-12 col-lg-12">
                                                                <div class="table-responsive ">
                                                                    <table class="table card-table table-vcenter text-nowrap table-primary border">
                                                                        <thead class="bg-primary text-white border-dark">
                                                                        <tr>
                                                                            <th class="text-white">Code</th>
                                                                            <th class="text-white text-center">
                                                                                Item
                                                                            </th>
                                                                            <th class="text-white text-center">
                                                                                Description
                                                                            </th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <th scope="row">GE097</th>
                                                                            <td class="text-center">
                                                                                Safety glasses
                                                                            </td>
                                                                            <td class="text-center">
                                                                                Used for protecting eye from being hurt.
                                                                            </td>
                                                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">GE097</th>
                                                                            <td class="text-center">
                                                                                Safety glasses
                                                                            </td>
                                                                            <td class="text-center">
                                                                                Used for protecting eye from being hurt.
                                                                            </td>
                                                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">GE097</th>
                                                                            <td class="text-center">
                                                                                Safety glasses
                                                                            </td>
                                                                            <td class="text-center">
                                                                                Used for protecting eye from being hurt.
                                                                            </td>
                                                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">GE097</th>
                                                                            <td class="text-center">
                                                                                Safety glasses
                                                                            </td>
                                                                            <td class="text-center">
                                                                                Used for protecting eye from being hurt.
                                                                            </td>
                                                                            <td><a href="#"><i class="fas fa-times"></i></a>
                                                                            </td>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i>Save</button>
            </div>
        </div>
    </div>
</div>
