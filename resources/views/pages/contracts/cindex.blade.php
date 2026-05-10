@extends('layouts.sidebar')

@section('title')
    Contracts
@endsection

@section('body')
<main id="pageContent">
    <div class="d-flex align-items-center justify-content-between" id="page-title">
        <div class="w-100">
            <p class="title mb-0">Contracts</p>
            <span class="subtitle">Management of contractual documents</span>
        </div>
        <div class="flex-shrink-1">
            <button class="btn" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add"><x-lucide-plus class="add-new-icon" /> <span> New Contracts</span></button>
        </div>
    </div>
    <div class="d-flex align-items-center" id="filter">
        <div class="position-relative me-3">
            <x-lucide-search class="position-absolute search-icon filter-icon" />
            <input class="form-control" type="text" placeholder="Find a contract" aria-label="Find a contract">
        </div>
        <div class="position-relative me-3">
            <x-lucide-funnel class="position-absolute filter-icon select-icon" />
            <select class="form-select" aria-label="All status">
                <option selected>All status</option>
                <option value="Revision">Revision</option>
                <option value="Negotiation">Negotiation</option>
                <option value="Finalization">Finalization</option>
                <option value="Signed">Signed</option>
            </select>
        </div>
    </div>
    <div class="row" id="track">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-2 table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Contract Name</th>
                                <th scope="col">Counterpart</th>
                                <th scope="col">Type</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 12%;">Progression</th>
                                <th scope="col">Signature Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><span class="mb-0 table-title">NDA Meridian Energy 2026</span></td>
                                <td><span class="table-text-2">Meridian Energy Corp</span></td>
                                <td><div class="type-bg on-progress"><span>NDA</span></div></td>
                                <td><div class="status-bg active"><span class="">Signed</span></div></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="col-9 me-3">
                                            <div class="progress on-progress">
                                                <div class="progress-bar me-3" role="progressbar" aria-label="progression" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <span class="progress-value on-progress" style="font-weight:600">90%</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="mb-0 table-text-2">01/02/26</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <x-lucide-ellipsis class="table-icon table-icon-2" />
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit"><x-lucide-square-pen class="dropdown-icon" /><span>Edit</span></a></li>
                                            <li><a class="dropdown-item" href="" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#delete"><x-lucide-trash class="dropdown-icon text-danger" /><span class="text-danger">Delete</span></a></li>
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
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" id="addLabel">Add a contract</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon"/>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="title" class="form-label">Contract Name *</label>
                                    <input class="form-control" type="text" placeholder="Ex:Partenariat" name="title" id="title" value="NDA Meridian Energy 2026">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="counterpart" class="form-label">Counterpart</label>
                                    <input type="text" name="counterpart" id="counterpart" class="form-control">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="client" class="form-label">type</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="nda">NDA</option>
                                        <option value="ncnda">NCNDA</option>
                                        <option value="financier">Financier</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
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
                                <div class="col-12 col-md-6">
                                    <label for="deal" class="form-label">Associated Deal</label>
                                    <select class="form-select" aria-label="All deals" id="deal" name="deal">
                                        <option value="initiation">Initiation</option>
                                        <option value="negociation">Negociation</option>
                                        <option value="diligence">Due Diligence</option>
                                        <option value="finalization" selected>Finalization</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="client" class="form-label">client</label>
                                    <select class="form-select" id="client" name="client">
                                        <option value="bakulu">Bakulu Holdings</option>
                                        <option value="bakulu">Bakulu Holdings</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="dateSignature" class="form-label">Signature Date</label>
                                    <input type="date" name="dateSignature" id="dateSignature" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-12">
                                <label for="dateExpiration" class="form-label">Expiration Date</label>
                                <input type="date" name="dateExpiration" id="dateExpiration" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"><span>Cancel</span></button>
                            <button type="submit" class="btn btn-submit"><span>Save</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit -->
            <div class="modal action-modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" id="editLabel">Edit this contract</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon"/>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="title" class="form-label">Contract Name *</label>
                                    <input class="form-control" type="text" placeholder="Ex:Partenariat" name="title" id="title" value="NDA Meridian Energy 2026">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="counterpart" class="form-label">Counterpart</label>
                                    <input type="text" name="counterpart" id="counterpart" class="form-control">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="client" class="form-label">type</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="nda">NDA</option>
                                        <option value="ncnda">NCNDA</option>
                                        <option value="financier">Financier</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
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
                                <div class="col-12 col-md-6">
                                    <label for="deal" class="form-label">Associated Deal</label>
                                    <select class="form-select" aria-label="All deals" id="deal" name="deal">
                                        <option value="initiation">Initiation</option>
                                        <option value="negociation">Negociation</option>
                                        <option value="diligence">Due Diligence</option>
                                        <option value="finalization" selected>Finalization</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="client" class="form-label">client</label>
                                    <select class="form-select" id="client" name="client">
                                        <option value="bakulu">Bakulu Holdings</option>
                                        <option value="bakulu">Bakulu Holdings</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="dateSignature" class="form-label">Signature Date</label>
                                    <input type="date" name="dateSignature" id="dateSignature" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-12">
                                <label for="dateExpiration" class="form-label">Expiration Date</label>
                                <input type="date" name="dateExpiration" id="dateExpiration" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"><span>Cancel</span></button>
                            <button type="submit" class="btn btn-submit"><span>Save</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete -->
            <div class="modal action-modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" id="deleteLabel">Delete Contracts</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon"/>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <p>
                                        Are you sure you want to remove "NDA Meridian Energy 2026"?
                                    </p>
                                </div>
                            </div>
                        </div>
                          
                        <div class="modal-footer">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"><span>Cancel</span></button>
                            <button type="submit" class="btn btn-delete"><span>Confirm</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection