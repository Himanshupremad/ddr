
@extends('backend.layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dashboard-ecommerce">
                    <div class="row match-height">

                        <!-- Statistics Card -->
                        <div class="col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">230k</h4>
                                                    <p class="card-text font-small-3 mb-0">Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">8.549k</h4>
                                                    <p class="card-text font-small-3 mb-0">Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">1.423k</h4>
                                                    <p class="card-text font-small-3 mb-0">Products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">$9745</h4>
                                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="basic-vertical-layouts">
                        <div class="row">

                            <div class=" col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">users</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="first-name-icon">First Name</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    data-feather="user"></i></span>
                                                            <input type="text" id="first-name-icon" class="form-control"
                                                                name="fname-icon" placeholder="First Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="email-id-icon">Email</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    data-feather="mail"></i></span>
                                                            <input type="email" id="email-id-icon" class="form-control"
                                                                name="email-id-icon" placeholder="Email" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="contact-info-icon">Mobile</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    data-feather="smartphone"></i></span>
                                                            <input type="number" id="contact-info-icon" class="form-control"
                                                                name="contact-icon" placeholder="Mobile" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="password-icon">Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                    data-feather="lock"></i></span>
                                                            <input type="password" id="password-icon" class="form-control"
                                                                name="contact-icon" placeholder="Password" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck4" />
                                                            <label class="form-check-label" for="customCheck4">Remember
                                                                me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="reset" class="btn btn-primary me-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </section>
            </div>
        </div>
    </div>



@endsection