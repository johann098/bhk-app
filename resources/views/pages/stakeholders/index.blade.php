@extends('layouts.sidebar')

@section('title')Stakeholders@endsection

@section('body')
<main id="pageContent">
    <div class="d-flex align-items-center justify-content-between" id="page-title">
        <div class="w-100">
            <p class="title mb-0">Clients/Partners</p>
            <span class="subtitle">Stakeholder Directory</span>
        </div>
        <div class="flex-shrink-1">
            <button class="btn" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add"><x-lucide-plus class="add-new-icon" /> <span>Add New</span></button>
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
                <option selected>All stakeholder</option>
                <option value="Revision">Client</option>
                <option value="Negotiation">Partner</option>
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
                                <th scope="col">Stakeholder Name</th>
                                <th scope="col">Sector</th>
                                <th scope="col">Main Contact</th>
                                <th scope="col">Role</th>
                                <th scope="col">Nb Deals</th>
                                <th scope="col">Date added</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-icon me-2">
                                            <x-lucide-building class="table-icon" style="color:var(--gold)" />
                                        </div>
                                        <span class="mb-0 table-title">Meridian Energy</span>
                                    </div>
                                </td>
                                <td><span class="table-text-2">Energie</span></td>
                                <td>
                                    <p class="mb-0 table-title">Jean-Pierre Moreau</p> <span class="table-text small">jp.moreau@meridian.com</span>
                                </td>
                                <td>
                                    <div class="type-bg type-bg-2"><span>Partenaire</span></div>
                                </td>
                                <td><span class="table-title">0</span></td>
                                <td><span class="mb-0 table-text-2">20 avr. 26</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn px-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <p class="modal-title" id="addLabel">Add a stakeholder</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="name" class="form-label">Organization Name *</label>
                                    <input class="form-control" type="text" placeholder="Ex:Partenariat" name="name" id="name" value="Meridian Energy">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="sector" class="form-label">sector activity</label>
                                    <input type="text" name="sector" id="sector" class="form-control" value="Energie">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="role" class="form-label">role</label>
                                    <select class="form-select" id="role" name="role">
                                        <option value="client">Client</option>
                                        <option value="partner">Partner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="contact-name" class="form-label">Main contact</label>
                                    <input type="text" name="contact-name" id="contact-name" class="form-control" value="Jean-Pierre Moreau">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="contact-email" class="form-label">Contact email</label>
                                    <input type="email" name="contact-email" id="contact-email" class="form-control" value="jp.moreau@meridian.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="contact-phone" class="form-label">Phone number</label>
                                    <input type="text" name="contact-phone" id="contact-phone" class="form-control" value="+33 6 12 34 56 78">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="notes" class="form-label">notes</label>
                                    <textarea name="notes" id="notes" placeholder="Notes on this partner..." rows="4" class="form-control"></textarea>
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
                            <p class="modal-title" id="editLabel">Edit this stakeholder</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="name" class="form-label">Organization Name *</label>
                                    <input class="form-control" type="text" placeholder="Ex:Partenariat" name="name" id="name" value="Meridian Energy">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="sector" class="form-label">sector activity</label>
                                    <input type="text" name="sector" id="sector" class="form-control" value="Energie">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="role" class="form-label">role</label>
                                    <select class="form-select" id="role" name="role">
                                        <option value="client">Client</option>
                                        <option value="partner">Partner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="contact-name" class="form-label">Main contact</label>
                                    <input type="text" name="contact-name" id="contact-name" class="form-control" value="Jean-Pierre Moreau">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="contact-email" class="form-label">Contact email</label>
                                    <input type="email" name="contact-email" id="contact-email" class="form-control" value="jp.moreau@meridian.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="contact-phone" class="form-label">Phone number</label>
                                    <input type="text" name="contact-phone" id="contact-phone" class="form-control" value="+33 6 12 34 56 78">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="notes" class="form-label">notes</label>
                                    <textarea name="notes" id="notes" placeholder="Notes on this partner..." rows="4" class="form-control"></textarea>
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
                            <p class="modal-title" id="deleteLabel">Delete stakeholder</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon" />
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