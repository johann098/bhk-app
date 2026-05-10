@extends('layouts.sidebar')

@section('title')
Notifications
@endsection

@section('body')
<main id="pageContent" class="px-0">
    <div class="d-flex align-items-center justify-content-between padding-0" id="page-title">
        <div class="w-100">
            <p class="mb-0"><span class="title">Notifications</span><span class="badge">4</span></p>
            <span class="subtitle">Stay informed about updates to your deals</span>
        </div>
        <div class="flex-shrink-1">
            <button type="button" class="btn btn-bg-transparent"><span>Mark all as read</span></button>
        </div>
    </div>

    <div class="row" id="notifications">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true"><span>All</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-unread-tab" data-bs-toggle="pill" data-bs-target="#pills-unread" type="button" role="tab" aria-controls="pills-unread" aria-selected="false"><span>Unread</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-deal-tab" data-bs-toggle="pill" data-bs-target="#pills-deal" type="button" role="tab" aria-controls="pills-deal" aria-selected="false"><span>Deal</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages" type="button" role="tab" aria-controls="pills-messages" aria-selected="false"><span>Read</span></button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <p class="title-date">Today</p>
                    <div class="card unread mb-2">
                        <div class="card-body d-flex justify-content-between">
                            <div class="icon-bg step me-3"><x-lucide-zap class="card-icon"/></div>
                            <div class="flex-grow-1">
                                <p class="card-title mb-2">Advanced stage: Finalization</p>
                                <p class="card-subtitle mb-1">The Meridian Energy Partnership deal has reached the Finalization stage.</p>
                                <p class="mb-0 time">10mn ago</p>
                            </div>
                            <div class="notification-dot"></div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body d-flex justify-content-between">
                            <div class="icon-bg document me-3"><x-lucide-file class="card-icon"/></div>
                            <div class="flex-grow-1">
                                <p class="card-title mb-2">Updated contract</p>
                                <p class="card-subtitle mb-1">NCNDA Atlas Trading has been modified by J. Mbeki.</p>
                                <p class="mb-0 time">42mn ago</p>
                            </div>
                            <div class="notification-dot"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-unread" role="tabpanel" aria-labelledby="pills-unread-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-deal" role="tabpanel" aria-labelledby="pills-deal-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab" tabindex="0">...</div>
            </div>
        </div>
    </div>
</main>
@endsection