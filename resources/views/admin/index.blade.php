@extends('admin.layouts.app')

@section('content')
    <div class="row border-bottom bg-white page-heading">
        <div class="col-lg-6">
            <h2>Questions Template</h2>
        </div>
        <div class="col-lg-6 text-md-end">
            <a href="https://prepolic.factech.org/question-templates-create-to-upload" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> <strong>Create To Upload</strong>
            </a>
            <a href="https://prepolic.factech.org/question-templates-create-from-existing"
                class="btn btn-primary btn-sm ms-2">
                <i class="fa fa-plus"></i> <strong>Create From Existing</strong>
            </a>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12">
            <form action="#" method="get" class="row g-3">
                <div class="col-auto">
                    <label for="perPage" class="visually-hidden">Records Per Page</label>
                    <select name="perPage" id="perPage" onchange="submit()" class="form-select form-select-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label for="keyword" class="visually-hidden">Search</label>
                    <input name="keyword" type="text" class="form-control form-control-sm" placeholder="Search Here">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary btn-sm">Go!</button>
                    <a href="https://prepolic.factech.org/question-templates"
                        class="btn btn-secondary btn-sm ms-2">Reset</a>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card" id="tableResponsive">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTables" class="table table-bordered table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Exam Code</th>
                                    <th>Subject</th>
                                    <th>Total Question</th>
                                    <th>Total Marks</th>
                                    <th>Negative Marks</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>MD/MS CEEPG</b> - Random questions for MD/MS Exams
                                    </td>
                                    <td>BM09GJ</td>
                                    <td>All</td>
                                    <td>15.00</td>
                                    <td>15.00</td>
                                    <td>0.25</td>
                                    <td class="text-center">
                                        <a href="#" title="Edit" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                        </a>
                                        <a href="#" title="View" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> <strong>View</strong>
                                        </a>
                                        <a onclick="deleteRow(16)" href="JavaScript:void(0)" title="Delete"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> <strong>Delete</strong>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            Showing 1 to 6 of 6 entries
                        </div>
                        <nav>
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    < script >
        $(document).ready(function() {
            $('#questionsTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });
        });
</script>
