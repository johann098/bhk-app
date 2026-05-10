@extends('layouts.sidebar')

@section('title')
Tracks
@endsection

@section('body')
<main id="pageContent">
    <div class="d-flex align-items-center justify-content-between" id="page-title">
        <div class="w-100">
            <p class="title mb-0">Tracks</p>
            <span class="subtitle">Deal pipeline tracking</span>
        </div>
        <div class="flex-shrink-1">
            <button class="btn" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add"><x-lucide-plus class="add-new-icon" /> <span> New Track</span></button>
        </div>
    </div>
    <div class="d-flex align-items-center" id="filter">
        <div class="position-relative me-3">
            <x-lucide-search class="position-absolute search-icon filter-icon" />
            <input class="form-control" type="text" placeholder="Find a deal" aria-label="Find a deal">
        </div>
        <div class="position-relative me-3">
            <x-lucide-funnel class="position-absolute filter-icon select-icon" />
            <select class="form-select" aria-label="All steps">
                <option selected>All steps</option>
                <option value="Initiation">Initiation</option>
                <option value="Negotiation">Negotiation</option>
                <option value="Due_diligence">Due Diligence</option>
                <option value="Finalization">Finalization</option>
                <option value="Closed">Closed</option>
            </select>
        </div>
    </div>
    <div class="row" id="track">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Deal Name</th>
                                <th scope="col">Step</th>
                                <th scope="col">Responsible</th>
                                <th scope="col">Deadline</th>
                                <th scope="col" style="width: 12%;">Progression</th>
                                <th scope="col">Value</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <p class="mb-0 table-title">Partenariat Meridian Energy</p>
                                    <span class="mb-0 table-description text-truncate">Exclusive distribution agreement in Central Africa</span>
                                </td>
                                <td>
                                    <div class="step-bg on-progress"><span>Finalization</span></div>
                                </td>
                                <td><span class="table-text">Bakulu Holdings</span></td>
                                <td><span class="table-text">15 mai 26</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="col-9 me-3">
                                            <div class="progress on-progress">
                                                <div class="progress-bar me-3" role="progressbar" aria-label="progression" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <span class="progress-value">90%</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="mb-0 value">$2.5M</span></td>
                                <td>
                                    <div class="status-bg active"><span class="">Active</span></div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <x-lucide-ellipsis class="table-icon" />
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><x-lucide-list class="dropdown-icon" /><span>See details</span></a></li>
                                            <li><a class="dropdown-item" href="" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit"><x-lucide-square-pen class="dropdown-icon" /><span>Edit</span></a></li>
                                            <li><a class="dropdown-item" href="" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#delete"><x-lucide-square-pen class="dropdown-icon text-danger" /><span class="text-danger">Delete</span></a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Add -->
            <div class="modal action-modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title" id="addLabel">Add a deal</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <x-lucide-x class="cancel-icon" />
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="title" class="form-label">Nom du Deal *</label>
                                        <input class="form-control" type="text" placeholder="Ex:Partenariat" name="title" id="title" value="Partenariat Meridian Energy">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <label for="step" class="form-label">Step</label>
                                        <select class="form-select" aria-label="All steps" id="step" name="step">
                                            <option value="initiation">Initiation</option>
                                            <option value="negociation">Negociation</option>
                                            <option value="diligence">Due Diligence</option>
                                            <option value="finalization" selected>Finalization</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="status" class="form-label">status</label>
                                        <select class="form-select" aria-label="All steps" id="step" name="status">
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="on-hold">On hold</option>
                                            <option value="finished">finished</option>
                                            <option value="canceled">Canceled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <label for="manager" class="form-label">Manager</label>
                                        <select class="form-select" id="manager" name="manager">
                                            <option value="bakulu">Bakulu Holdings</option>
                                            <option value="bakulu">Bakulu Holdings</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="deadline" class="form-label">deadline</label>
                                        <input type="date" name="deadline" id="deadline" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <label for="value" class="form-label">Value</label>
                                        <input type="number" name="value" id="value" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="client" class="form-label">client</label>
                                        <select class="form-select" id="client" name="client">
                                            <option value="bakulu">Bakulu Holdings</option>
                                            <option value="bakulu">Bakulu Holdings</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="description" class="form-label">description</label>
                                        <textarea name="description" id="description" placeholder="Type something..." rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"><span>Cancel</span></button>
                                <button type="submit" class="btn btn-submit"><span>Save</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Edit -->
            <div class="modal action-modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="">
                        
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title" id="editLabel">Edit this deal</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <x-lucide-x class="cancel-icon" />
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="title" class="form-label">Nom du Deal *</label>
                                        <input class="form-control" type="text" placeholder="Ex:Partenariat" name="title" id="title" value="Partenariat Meridian Energy">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <label for="step" class="form-label">Step</label>
                                        <select class="form-select" aria-label="All steps" id="step" name="step">
                                            <option value="initiation">Initiation</option>
                                            <option value="negociation">Negociation</option>
                                            <option value="diligence">Due Diligence</option>
                                            <option value="finalization" selected>Finalization</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="status" class="form-label">status</label>
                                        <select class="form-select" aria-label="All steps" id="step" name="status">
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="on-hold">On hold</option>
                                            <option value="finished">finished</option>
                                            <option value="canceled">Canceled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <label for="manager" class="form-label">Manager</label>
                                        <select class="form-select" id="manager" name="manager">
                                            <option value="bakulu">Bakulu Holdings</option>
                                            <option value="bakulu">Bakulu Holdings</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="deadline" class="form-label">deadline</label>
                                        <input type="date" name="deadline" id="deadline" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <label for="value" class="form-label">Value</label>
                                        <input type="number" name="value" id="value" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="client" class="form-label">client</label>
                                        <select class="form-select" id="client" name="client">
                                            <option value="bakulu">Bakulu Holdings</option>
                                            <option value="bakulu">Bakulu Holdings</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="description" class="form-label">description</label>
                                        <textarea name="description" id="description" placeholder="Type something..." rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"><span>Cancel</span></button>
                                <button type="submit" class="btn btn-submit"><span>Save</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Delete -->
            <div class="modal action-modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" id="deleteLabel">Delete Deal</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <p>
                                        Are you sure you want to delete "Meridian Energy Partnership"? This action is irreversible.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"><span>Cancel</span></button>
                            <form action="">
                                <button type="submit" class="btn btn-delete"><span>Confirm</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection