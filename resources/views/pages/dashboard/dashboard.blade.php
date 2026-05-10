@extends('layouts.sidebar')

@section('title')
Dashboard
@endsection

@section('breadcumb')
<p class="title mb-1"><span class="page-active ">Dashboard</span></p>
@endsection

@section('body')
<div class="row pe-3">
    <div class="col-12 col-xl-9 ps-0">
        <header class="topbar d-flex align-items-center justify-content-between" id="topbar">
            <div class="topbar-greetings">
                <p class="mb-0"> Hi, bakulu holdings</p>
                <span class="subgreet">Let's finish your tasks today !</span>
            </div>
            <div class="topbar-actions d-flex">
                <button class="btn btn-icon has-notif" title="Notifications">
                    <x-lucide-bell class="main-topbar-icon" />
                    <span class="notif-dot"></span>
                </button>
                <button class="btn btn-icon" title="Messages">
                    <x-lucide-mail class="main-topbar-icon" />
                </button>
            </div>
        </header>
        <main id="main-padding">
            <div class="row" id="greeting-card">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-3">Today Task</p>
                            <p class="card-subtitle mb-3">You have <span class="highlight"> 5 active deals</span> currently being processed</p>
                            <button class="btn"><x-lucide-plus class="greeting-card-icon" /> <span> New Deal</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column mb-3 me-2 me-md-0 align-items-center justify-content-between" id="statistic-card">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-icon clients mb-3">
                            <x-lucide-users class="statistic-card-icon" />
                        </div>
                        <p class="title mb-0">total clients</p>
                        <p class="value mb-0">5</p>
                        <span class="add-notif">+ 2 this month</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="bg-icon contracts mb-3">
                            <x-lucide-file-text class="statistic-card-icon" />
                        </div>
                        <p class="title mb-0">active contracts</p>
                        <p class="value mb-0">5</p>
                        <span class="add-notif">+ 1 this month</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="bg-icon pipeline mb-3">
                            <x-lucide-trending-up class="statistic-card-icon" />
                        </div>
                        <p class="title mb-0">pipeline value</p>
                        <p class="value mb-0">$22.6M</p>
                        <span class="add-notif">Total active deals</span>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="bg-icon ovtasks mb-3">
                            <x-lucide-triangle-alert class="statistic-card-icon" />
                        </div>
                        <p class="title mb-0">overdue tasks</p>
                        <p class="value mb-0">5</p>
                        <span class="add-notif">All updated</span>
                    </div>
                </div>
            </div>
            <div class="row" id="contracts-on-process">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title mb-4 d-flex align-items-center justify-content-between">
                                <p class="mb-0">Contracts currently being finalized</p>
                                <a href="#" class="see-details-link">
                                    <span>See more</span>
                                    <x-lucide-chevron-right class="see-details-link-icon" />
                                </a>
                            </div>
                            <div class="card subcard mb-3">
                                <div class="card-body mb-4 d-flex align-items-center justify-content-between">
                                    <div class="row w-100">
                                        <div class="col-11">
                                            <div class="d-flex mb-2">
                                                <p class="mb-0 title">Partenariat Meridian Energy</p>
                                                <div class="step-bg">
                                                    <span>Finalisation</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-10">
                                                    <div class="progress">
                                                        <div class="progress-bar me-3" role="progressbar" aria-label="progression" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="progress-value">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1 text-end px-0" style="line-height: 19px;">
                                            <p class="mb-0 value">$2.5M</p>
                                            <span class="date">15 may</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card subcard mb-3">
                                <div class="card-body mb-4 d-flex align-items-center justify-content-between">
                                    <div class="row w-100">
                                        <div class="col-11">
                                            <div class="d-flex mb-2">
                                                <p class="mb-0 title">Partenariat Meridian Energy</p>
                                                <div class="step-bg">
                                                    <span>Finalisation</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-10">
                                                    <div class="progress">
                                                        <div class="progress-bar me-3" role="progressbar" aria-label="progression" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span class="progress-value">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1 text-end px-0" style="line-height: 19px;">
                                            <p class="mb-0 value">$2.5M</p>
                                            <span class="date">15 may</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="pipeline">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title mb-4 d-flex align-items-center justify-content-between">
                                <p class="mb-0">Deal pipeline</p>
                                <a href="#" class="see-details-link">
                                    <span>Manage</span>
                                    <x-lucide-chevron-right class="see-details-link-icon" />
                                </a>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="width:2%">
                                            <div class="table-notif"></div>
                                        </td>
                                        <td style="width:45%">
                                            <span class="table-text">Partenariat Meridian Energy</span>
                                        </td>
                                        <td style="width:20%">
                                            <div class="step-bg on-progress">
                                                <span>Finalisation</span>
                                            </div>
                                        </td>
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
                                        <td style="width:10%;text-align:end;">
                                            <span class="mb-0 value">$2.5M</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:2%">
                                            <div class="table-notif"></div>
                                        </td>
                                        <td style="width:45%">
                                            <span class="table-text">Acquisition Atlas Trading</span>
                                        </td>
                                        <td style="width:20%">
                                            <div class="step-bg initiation">
                                                <span>Initiation</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="col-9 me-3">
                                                    <div class="progress initiation">
                                                        <div class="progress-bar me-3" role="progressbar" aria-label="progression" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <span class="progress-value">30%</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10%;text-align:end;">
                                            <span class="mb-0 value">$5.8M</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:2%">
                                            <div class="table-notif"></div>
                                        </td>
                                        <td style="width:45%">
                                            <span class="table-text">Joint Venture Nile Resources</span>
                                        </td>
                                        <td style="width:20%">
                                            <div class="step-bg due">
                                                <span>Due Diligence</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="col-9 me-3">
                                                    <div class="progress due">
                                                        <div class="progress-bar me-3" role="progressbar" aria-label="progression" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <span class="progress-value">60%</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:10%;text-align:end;">
                                            <span class="mb-0 value">$12.0M</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="col-12 col-xl-3 ps-0">
        <div id="pageContentSecondCol">
            <div id="calendar">
                <div class="col-12">
                    <div class="datepicker"></div>
                </div>
            </div>
            <div id="last-activity">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title mb-4 d-flex align-items-center">
                                <x-lucide-activity class="last-activity-title-icon" />
                                <p class="mb-0">Last Activities</p>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="flex-shrink-1 me-3">
                                    <x-lucide-link class="last-activity-icon" />
                                </div>
                                <div class="w-100">
                                    <p class="title mb-0">Deal created</p>
                                    <p class="name mb-0">Partenariat Meridian Energy</p>
                                    <p class="mb-0 time">6d ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
<script src="/vendor/datepicker/dist/js/datepicker-full.min.js"></script>
<script src="/assets/js/datepicker.js"></script>

@endsection