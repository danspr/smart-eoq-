<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0"><?= $pageName ?></h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">EOQ</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $pageName ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-122">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            EOQ Results
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-primary btn-wave waves-light"><i class="ri-add-line fw-semibold align-middle me-1"></i> Create Analysis</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Annual Demand</th>
                                        <th scope="col">Purchasing Price</th>
                                        <th scope="col">EOQ Result</th>
                                        <th scope="col">Number of Order</th>
                                        <th scope="col">Frequency Order</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in dataList" :key="item.id">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ item.name }}</td>
                                        <td>{{ item.annual_demand }}</td>
                                        <td>{{ item.purchasing_price }}</td>
                                        <td>{{ item.eoq_result }}</td>
                                        <td>{{ item.number_order }}</td>
                                        <td>{{ item.frequency_order }}</td>
                                        <td>
                                            <a :href="'<?= base_url() ?>eoq/detail/'+ item.id" class="btn btn-primary-light btn-icon btn-sm" title="See EOQ Result" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-bar-chart-2-line"></i></a>
                                            <button class="btn btn-danger-light btn-icon ms-1 btn-sm invoice-btn" title="Delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
</div>
<!-- End::app-content -->