 <?php include('include/header.php'); ?>  
        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#"> Home </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Contact Request</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-30">
                            <div class="card-header">
                                <h5>Contact Request</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Created at</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>XYZ</td>
                                                <td>XYSZ@XYZS.IN</td>
                                                <td>...</td>
                                                <td>...</td>
                                                <td>06-Jul-2022</td>
                                                <td><span class="badge badge-success rounded-pill">Active</span></td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-success btn-squared" onclick="window.open('edit.html')" title="Edit"><i class="la la-edit mr-0"></i></button>
                                                        <button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>ABC</td>
                                                <td>ABC@ABC.IN</td>
                                                <td>...</td>
                                                <td>...</td>
                                                <td>07-Jul-2022</td>
                                                <td><span class="badge badge-danger rounded-pill">In-Active</span></td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-success btn-squared" onclick="window.open('edit.html')" title="Edit"><i class="la la-edit mr-0"></i></button>
                                                        <button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav class="atbd-page d-flex justify-content-between ">

                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection form-control px-15">
                                            <option value="20">20/page</option>
                                            <option value="40">40/page</option>
                                            <option value="60">60/page</option>
                                        </select>
                                    </div>
                                    <ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </main>
    <div class="modal-basic modal fade show" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Confirmation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure .You want to <strong>delete</strong> this Contact Request ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
 <?php include('include/footer.php'); ?>       
 