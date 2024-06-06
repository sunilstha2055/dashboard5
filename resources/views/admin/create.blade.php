@extends('admin.layouts.app')

@section('content')
    <div class="row border-bottom bg-white page-heading">
        <div class="col-lg-10">
            <h2>Create</h2>
        </div>
        <div class="col-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <strong>Create</strong>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="content-wrapper animate__animated pt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header bg-white">
                        <h5>Create Exam</h5>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" method="POST" enctype="multipart/form-data" action="#"
                            novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="department_id" class="form-label">Department<span class="required-star">
                                                *</span></label>
                                        <select class="form-select" id="department_id" name="department_id">
                                            <option value="0">Select Subject</option>
                                            <optgroup label="MBBS Entrance">
                                                <option value="all-1-MBBS Entrance">All</option>
                                                <option value="1">Physics</option>
                                                <option value="3">Chemistry</option>
                                                <option value="4">Zoology</option>
                                                <option value="13">Botany</option>
                                            </optgroup>
                                            <optgroup label="MD/MS CEEPG">
                                                <option value="all-4-MD/MS CEEPG">All</option>
                                                <option value="2">Anatomy</option>
                                                <option value="12">Orthopedic</option>
                                                <option value="14">ENT</option>
                                                <option value="15">Surgery</option>
                                                <option value="16">Physiology</option>
                                                <option value="17">Internal Medicine</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Exam Name<span class="required-star">
                                                *</span></label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="total_questions" class="form-label">Total Questions<span
                                                class="required-star"> *</span></label>
                                        <input type="number" min="1" id="total_questions" name="total_questions"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="total_marks" class="form-label">Total Marks<span class="required-star">
                                                *</span></label>
                                        <input type="number" min="1" id="total_marks" name="total_marks"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="duration" class="form-label">Duration (In minute)<span
                                                class="required-star"> *</span></label>
                                        <input type="number" step="0.01" id="duration" name="duration"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="negative_marks" class="form-label">Negative Marks/Question<span
                                                class="required-star"> *</span></label>
                                        <input type="number" step="0.01" id="negative_marks" name="negative_marks"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="correct_score" class="form-label">Correct Score/Question<span
                                                class="required-star"> *</span></label>
                                        <input type="number" step="0.01" id="correct_score" name="correct_score"
                                            class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exam_fee" class="form-label">Exam Fee (NPR)</label>
                                        <input type="number" id="exam_fee" name="exam_fee" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status<span class="required-star">
                                                *</span></label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer bg-white">
                                <button class="btn btn-primary" type="submit">
                                    <strong>Submit</strong>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
