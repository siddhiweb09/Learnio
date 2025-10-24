@extends('layouts.frame')

@section('content')
<div class="main-content">
    <div class="content-header">
        <h1 class="content-title">Admin Dashboard</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
        </nav>
    </div>

    <div class="stats-grid">
        <div class="stat-card stat-students">
            <div class="stat-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div>
                <div class="stat-value">3,640</div>
                <div class="stat-label">Active Students</div>
            </div>
        </div>

        <div class="stat-card stat-teachers">
            <div class="stat-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div>
                <div class="stat-value">234</div>
                <div class="stat-label">Active Teachers</div>
            </div>
        </div>

        <div class="stat-card stat-parents">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div>
                <div class="stat-value">161</div>
                <div class="stat-label">Active Parents</div>
            </div>
        </div>

        <div class="stat-card stat-guardians">
            <div class="stat-icon">
                <i class="fas fa-user-shield"></i>
            </div>
            <div>
                <div class="stat-value">81</div>
                <div class="stat-label">Active Guardians</div>
            </div>
        </div>
    </div>

    <div class="alert alert-primary" role="alert">
        <i class="fas fa-info-circle me-2"></i>
        Welcome back, Mr. Herald! Have a productive day at work.
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Quick Actions</h5>
            <div class="row mt-3">
                <div class="col-md-3 mb-3">
                    <button class="btn btn-primary w-100 py-3">
                        <i class="fas fa-user-plus me-2"></i> Add Student
                    </button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-success w-100 py-3">
                        <i class="fas fa-chalkboard-teacher me-2"></i> Add Teacher
                    </button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-warning w-100 py-3">
                        <i class="fas fa-calendar-plus me-2"></i> Create Schedule
                    </button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-info w-100 py-3">
                        <i class="fas fa-file-invoice me-2"></i> Generate Report
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection