{{-- dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <div class="container-fluid">
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-people fs-5"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <div class="small text-muted">Total Users</div>
                                <div class="fs-4 fw-bold">1,234</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-graph-up fs-5"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <div class="small text-muted">Revenue</div>
                                <div class="fs-4 fw-bold">₹2,34,567</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-clock fs-5"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <div class="small text-muted">Pending Orders</div>
                                <div class="fs-4 fw-bold">23</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px;">
                                    <i class="bi bi-check-circle fs-5"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <div class="small text-muted">Completed</div>
                                <div class="fs-4 fw-bold">567</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Tables Row -->
        <div class="row">
            <!-- Recent Activity -->
            <div class="col-lg-8 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 pb-0">
                        <h5 class="card-title mb-0">Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>User</th>
                                        <th>Action</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2"
                                                    style="width: 32px; height: 32px; font-size: 0.8rem;">
                                                    JD
                                                </div>
                                                John Doe
                                            </div>
                                        </td>
                                        <td>Created new page</td>
                                        <td>2 hours ago</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-2"
                                                    style="width: 32px; height: 32px; font-size: 0.8rem;">
                                                    JS
                                                </div>
                                                Jane Smith
                                            </div>
                                        </td>
                                        <td>Updated profile</td>
                                        <td>4 hours ago</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2"
                                                    style="width: 32px; height: 32px; font-size: 0.8rem;">
                                                    MB
                                                </div>
                                                Mike Brown
                                            </div>
                                        </td>
                                        <td>Deleted item</td>
                                        <td>6 hours ago</td>
                                        <td><span class="badge bg-danger">Failed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 pb-0">
                        <h5 class="card-title mb-0">Quick Actions</h5>
                    </div>
                    @php
                        $role = Auth::user()->role; // e.g., 'admin', 'user', etc.
                    @endphp
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{ route($role . '.add') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-2"></i>Add New Page
                            </a>
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-upload me-2"></i>Upload File
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-download me-2"></i>Export Data
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="bi bi-gear me-2"></i>Settings
                            </button>
                        </div>

                        <hr class="my-4">

                        <h6 class="mb-3">System Status</h6>
                        <div class="mb-2">
                            <small class="text-muted">Server Status</small>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Online</span>
                                <small>99.9%</small>
                            </div>
                        </div>
                        <div class="mb-2">
                            <small class="text-muted">Database</small>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Connected</span>
                                <small>Fast</small>
                            </div>
                        </div>
                        <div class="mb-2">
                            <small class="text-muted">Storage</small>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning">75% Used</span>
                                <small>2.1GB Free</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
