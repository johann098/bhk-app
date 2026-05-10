@extends('layouts.sidebar')

@section('title')
Tracks
@endsection

@section('body')
<main id="pageContent">
    <div class="d-flex align-items-center justify-content-between" id="page-title-details">
        <button class="btn me-3"><x-lucide-arrow-left class="return-icon" /></button>
        <div class="flex-grow-1">
            <div class="d-flex align-items-center ">
                <p class="title mb-0">Partenariat Meridian Energy</p>
                <div class="step-bg active mx-2">
                    <span>Finalization</span>
                </div>
                <div class="status-bg active">
                    <span>Active</span>
                </div>
            </div>
            <span class="subtitle">Deal pipeline tracking</span>
        </div>
        <div class="">
            <p class="mb-0 value">$2.5M</p>
            <p class="mb-0 deadline">Deadline: 15/05/2026</p>
        </div>
    </div>
    <div id="pipeline-card" class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class=" card-title pipeline-header">
                        <span class="pipeline-title">Pipeline</span>
                        <span class="pipeline-pct" id="pctLabel">0%</span>
                    </div>
                    <div class="stepper" id="stepper"></div>
                    <div class="progress progress-track">
                        <div class="progress-bar progress-fill" id="progressFill" role="progressbar" aria-label="progression" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="informations-row" class="row justify-content-between">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        responsable
                    </div>
                    <div class="card-subtitle">
                        Bakulu Holdings
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Valeur
                    </div>
                    <div class="card-subtitle">
                        $2.5M
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Deadline
                    </div>
                    <div class="card-subtitle">
                        15/05/2026
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pipeline-details" class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-tasks-tab" data-bs-toggle="pill" data-bs-target="#pills-tasks" type="button" role="tab" aria-controls="pills-tasks" aria-selected="true">
                        <x-lucide-calendar-check-2 class="nav-pills-icon" /><span class="nav-pills-text">Tasks</span><span class="badge nav-pills-badge">4</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-chat-tab" data-bs-toggle="pill" data-bs-target="#pills-chat" type="button" role="tab" aria-controls="pills-chat" aria-selected="false">
                        <x-lucide-message-square class="nav-pills-icon" /><span class="nav-pills-text">Chat</span><span class="nav-pills-badge badge">3</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill" data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-history" aria-selected="false">
                        <x-lucide-history class="nav-pills-icon" /><span class="nav-pills-text">History</span>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab" tabindex="0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-4 d-flex align-items-center justify-content-between">
                                        <p class="mb-0">Tasks</p>
                                        <button class="btn"><x-lucide-plus class="add-new-icon" /> <span>Add</span></button>
                                    </div>
                                    <div class="card subcard mb-3">
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 title">Final contract review</p>
                                                <x-lucide-user class="subtitle-icon" /> <span class="subtitle-text me-5">Bakulu holdings</span> <span class="subtitle-date">10/05/2026</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="task-status-bg initiation me-3">
                                                    <span>On going</span>
                                                </div>
                                                <select class="form-select" aria-label="All steps">
                                                    <option value="to-do">To do</option>
                                                    <option value="initiation" selected>Ongoing</option>
                                                    <option value="on-hold">On hold</option>
                                                    <option value="completed">Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab" tabindex="0">
                    <div class="card chat-card">
                        <div class="chat-header">
                            <p class="chat-header-title">Internal communication</p>
                            <p class="chat-header-sub">Centralize all communication related to this deal</p>
                        </div>
                        <div class="chat-messages" id="chatMessages">
                            <span class="chat-time">12:00</span>
                            <div class="chat-sender-row">
                                <div class="chat-avatar">SA</div>
                                <span class="chat-sender-name">Sarah Mitchell</span>
                            </div>
                            <div class="chat-bubble-row">
                                <div class="chat-bubble">
                                    Nous avons envoyé nos commentaires sur la clause 4.2. Merci de confirmer réception.
                                </div>
                            </div>

                            <span class="chat-time">16:30</span>

                            <div class="chat-sender-row right">
                                <div class="chat-avatar self">BA</div>
                                <span class="chat-sender-name">Bakulu Holdings</span>
                            </div>
                            <div class="chat-bubble-row right">
                                <div class="chat-bubble self">
                                    Reçu. Nous revenons vers vous avant vendredi.
                                </div>
                            </div>
                            <span class="chat-bubble-time right">11:15</span>

                        </div>

                        <div class="chat-input-bar">
                            <input type="text" class="form-control chat-input" id="chatInput" placeholder="Écrire un message..." autocomplete="off" />
                            <button class="chat-send-btn" id="sendBtn" title="Envoyer">
                                <x-lucide-send class="chat-send-icon" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab" tabindex="0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-4 d-flex align-items-center justify-content-between">
                                        <p class="mb-0">Stock History</p>
                                    </div>
                                    <div class="card subcard mb-3">
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div class="table-notif me-3"></div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 title">Deal created</p>
                                                <span class="subtitle-text me-5">Bakulu holdings</span> <span class="subtitle-date">10 jan 2026, 11:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('js')
<script src="/assets/js/stepbar.js"></script>
<script src="/assets/js/chatbox.js"></script>
@endsection