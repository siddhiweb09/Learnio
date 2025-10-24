@extends('layouts.frame')

@section('content')
<div class="main-content">
    <div class="content-header border-bottom pb-3">
        <h1 class="content-title">School Information</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">School</a></li>
                <li class="breadcrumb-item active">School Information</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="my-0">Add New School</h2>
        <div class="d-flex">
            <button type="button" class="btn btn-info me-2"> Cancel </button>
            <button type="button" class="btn btn-primary"> Save </button>
        </div>
    </div>

    <form action="#" method="post">
        <div class="d-md-flex">
            <div class="flex-fill">
                <!-- Basic Information Section -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic Information</h5>
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit me-2"></i>Edit
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">School Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter school name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">School Code *</label>
                                <input type="text" class="form-control" name="code" placeholder="Enter school code" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Slug *</label>
                                <input type="text" class="form-control" name="slug" placeholder="Enter URL slug" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">School Type *</label>
                                <select class="form-select" name="type" required>
                                    <option value="">Select type</option>
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="charter">Charter</option>
                                    <option value="international">International</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">School Motto</label>
                            <input type="text" class="form-control" name="motto" placeholder="Enter school motto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control description-textarea" name="description" placeholder="Enter school description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">School Logo</label>
                            <div class="d-flex align-items-start">
                                <div class="logo-preview me-4">
                                    <i class="fas fa-school text-muted" style="font-size: 2rem;"></i>
                                </div>
                                <div>
                                    <label class="logo-upload-btn">
                                        <i class="fas fa-upload me-2"></i>Upload Logo
                                        <input type="file" class="file-input" name="logo" accept="image/*">
                                    </label>
                                    <p class="text-muted small mt-2">Recommended: 300x300px, PNG or JPG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information Section -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Contact Information</h5>
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit me-2"></i>Edit
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Address Line 1 *</label>
                            <input type="text" class="form-control" name="address_line1" placeholder="Enter address line 1" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Line 2</label>
                            <input type="text" class="form-control" name="address_line2" placeholder="Enter address line 2">
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">City *</label>
                                <input type="text" class="form-control" name="city" placeholder="Enter city" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">State *</label>
                                <input type="text" class="form-control" name="state" placeholder="Enter state" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Postal Code *</label>
                                <input type="text" class="form-control" name="postal_code" placeholder="Enter postal code" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country *</label>
                            <select class="form-select" name="country" required>
                                <option value="">Select country</option>
                                <option value="us">United States</option>
                                <option value="uk">United Kingdom</option>
                                <option value="ca">Canada</option>
                                <option value="au">Australia</option>
                                <option value="in">India</option>
                            </select>
                        </div>
                        <div class="section-divider"></div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter phone number" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Website</label>
                            <input type="url" class="form-control" name="website" placeholder="Enter website URL">
                        </div>
                    </div>
                </div>

                <!-- Additional Information Section -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Additional Information</h5>
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit me-2"></i>Edit
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Principal Name *</label>
                                <input type="text" class="form-control" name="principal_name" placeholder="Enter principal name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Established Year *</label>
                                <input type="number" class="form-control" name="established_year" placeholder="Enter established year" min="1900" max="2030" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Registration Number</label>
                                <input type="text" class="form-control" name="registration_no" placeholder="Enter registration number">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">School Board</label>
                                <input type="text" class="form-control" name="school_board" placeholder="Enter school board">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Timezone *</label>
                                <select class="form-select" name="timezone" required>
                                    <option value="">Select timezone</option>
                                    <option value="est">Eastern Standard Time (EST)</option>
                                    <option value="cst">Central Standard Time (CST)</option>
                                    <option value="mst">Mountain Standard Time (MST)</option>
                                    <option value="pst">Pacific Standard Time (PST)</option>
                                    <option value="gmt">Greenwich Mean Time (GMT)</option>
                                    <option value="ist">Indian Standard Time (IST)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status *</label>
                                <div class="d-flex align-items-center">
                                    <div class="form-check me-4">
                                        <input class="form-check-input" type="radio" name="status" id="statusActive" value="active" checked>
                                        <label class="form-check-label" for="statusActive">
                                            <span class="status-badge status-active">
                                                <i class="fas fa-circle me-1" style="font-size: 8px;"></i> Active
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="statusInactive" value="inactive">
                                        <label class="form-check-label" for="statusInactive">
                                            <span class="status-badge status-inactive">
                                                <i class="fas fa-circle me-1" style="font-size: 8px;"></i> Inactive
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-light me-3">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        Save School Information
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection