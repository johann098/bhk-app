@extends('layouts.sidebar')

@section('title')
Documents
@endsection

@section('body')
<main id="pageContent">
    <div class="d-flex align-items-center justify-content-between" id="page-title">
        <div class="w-100">
            <p class="title mb-0">Documents</p>
            <span class="subtitle">Centralized file repository</span>
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
    <div class="d-flex row-gap-4 flex-wrap align-items-center justify-content-center justify-content-md-between" id="document">
        <!--  TYPE
            chart-no-axes-column class="financier"
            chart-file-text class="contrat"
            chart-shield class="nda/ncnda"
            chart-presentation class="presentation"
            chart-file class="autre"
    -->
        <div class="card">
            <div class="card-body">
                <div class="card-title d-flex align-items-center justify-content-between mb-4">
                    <div class="bg-icon">

                        <x-lucide-chart-no-axes-column class="card-id-icon financier" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <x-lucide-ellipsis class="dropdown-icon" />
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#edit"><x-lucide-square-pen class="dropdown-icon" /><span>Edit</span></a></li>
                            <li><a class="dropdown-item" href="" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#delete"><x-lucide-trash class="dropdown-icon text-danger" /><span class="text-danger">Delete</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-text">
                    <p class="title mb-2">Rapport Due Diligence Nile.pdf</p>
                    <div class="type-bg mb-2">
                        <span>Financier</span>
                    </div>
                    <p class="text mb-1"><span>Deal:</span><span>Joint Venture Nile Resources</span></p>
                    <p class="text mb-3"><span>Client:</span><span>Nile Resources Ltd</span></p>
                    <div class="card-footer bg-transparent px-0 d-flex justify-content-between align-items-center">
                        <p class="text mb-0">A. Diallo</p>
                        <p class="text mb-0">1.2 MB</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add -->
        <div class="modal action-modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title" id="addLabel">Add a document</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <x-lucide-x class="cancel-icon" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="name" class="form-label">document Name *</label>
                                    <input class="form-control" type="text" placeholder="Ex:Partenariat" name="name" id="name" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="NDA">NDA</option>
                                        <option value="NCNDA">NCNDA</option>
                                        <option value="Contrat">Contrat</option>
                                        <option value="Financial">Financial</option>
                                        <option value="Presentation">Presentation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="uploader" class="form-label">Uploaded by</label>
                                    <input type="text" name="uploader" id="uploader" class="form-control" value="">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="type" class="form-label">associated Deal</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="Presentation">Presentation</option>
                                        <option value="Other">Any</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="client" class="form-label">Client</label>
                                    <select class="form-select" id="client" name="client">
                                        <option value="Presentation">Presentation</option>
                                        <option value="Other">Any</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                <label for="document" class="form-label">Add a document</label>
                                <input class="form-control" type="file" id="document"  name= "document" value="">
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
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title" id="editLabel">Edit this document</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <x-lucide-x class="cancel-icon" />
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="name" class="form-label">document Name *</label>
                                <input class="form-control" type="text" placeholder="Ex:Partenariat" name="name" id="name" value="Meridian Energy">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-select" id="type" name="type">
                                    <option value="NDA">NDA</option>
                                    <option value="NCNDA">NCNDA</option>
                                    <option value="Contrat">Contrat</option>
                                    <option value="Financial">Financial</option>
                                    <option value="Presentation">Presentation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="uploader" class="form-label">Uploaded by</label>
                                <input type="text" name="uploader" id="uploader" class="form-control" value="Bakulu Holdings">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <label for="type" class="form-label">associated Deal</label>
                                <select class="form-select" id="type" name="type">
                                    <option value="Presentation">Presentation</option>
                                    <option value="Other">Any</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="client" class="form-label">Client</label>
                                <select class="form-select" id="client" name="client">
                                    <option value="Presentation">Presentation</option>
                                    <option value="Other">Any</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                            <label for="document" class="form-label">Add a document</label>
                            <input class="form-control" type="file" id="document"  name= "document" value="">
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
                        <p class="modal-title" id="deleteLabel">Delete document</p>
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
</main>
@endsection