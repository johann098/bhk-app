@extends('layouts.sidebar')

@section('title')Stakeholder - Details @endsection

@section('body')
<main id="pageContent">
    <div class="d-flex align-items-center" id="page-title-details">
        <a href="" class="btn me-3"><x-lucide-arrow-left class="return-icon" /></a>
        <p class="title mb-0">Meridian Energy</p>
    </div>
    <div id="stakeholder-identity" class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="title mb-1">Meridian Energy</p>
                            <p class="subtitle mb-3"><span>Energie</span> · Basé à <span> Genève, Suisse</span></p>
                            <div class="status-bg client"><span>Client</span></div>
                        </div>
                        <div class="d-flex">
                            <a class="btn edit-btn me-3"><x-lucide-square-pen class="btn-icon me-2" /><span>Edit</span></a>
                            <a class="btn contact-btn"><x-lucide-send class="btn-icon me-2" /><span>Contact</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="stakeholder-informations-row" class="row justify-content-between">
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Active deals</p>
                    <p class="card-value mb-0">3</p>
                    <span class="card-subtitle">including 2 in the final stages</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Total value</p>
                    <p class="card-value gold mb-0">$8.4M</p>
                    <span class="card-subtitle">on all deals</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Documents</p>
                    <p class="card-value mb-0">7</p>
                    <span class="card-subtitle">NDAs, contracts, reports</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Since</p>
                    <p class="card-value mb-0">Apr. 29, 2026</p>
                    <span class="card-subtitle">Active partner</span>
                </div>
            </div>
        </div>
    </div>
    <div id="stakeholder-informations-details" class="row">
        <div class="col-12 col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <p class="card-title mb-3">Informations</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><span class="title">Main contact</span></td>
                                <td class="text-end"><span class="details">Jean-Pierre Moreau</span></td>
                            </tr>
                            <tr>
                                <td><span class="title">Email</span></td>
                                <td class="text-end"><span class="details">jp.moreau@meridian.com</span></td>
                            </tr>
                            <tr>
                                <td><span class="title">Secteur</span></td>
                                <td class="text-end"><span class="details">Energie</span></td>
                            </tr>
                            <tr>
                                <td><span class="title">Country</span></td>
                                <td class="text-end"><span class="details">Suisse</span></td>
                            </tr>
                            <tr>
                                <td><span class="title">Role</span></td>
                                <td class="float-end border-0">
                                    <div class="status-bg client"><span>Client</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="title">Nb Deals</span></td>
                                <td class="text-end"><span class="details gold">3</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-3">
                        <p class="card-title">Related deals</p>
                        <a href="" class="card-link gold"><span>See more</span><x-lucide-chevron-right class="ms-1 card-icon" /></a>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="width:5%">
                                    <div class="table-notif on-progress"></div>
                                </td>
                                <td style="width:70%"><span class="details">Partenariat Meridian Energy</span></td>
                                <td>
                                    <div class="step-bg on-progress"><span>Finalization</span></div>
                                </td>
                                <td><span class="table-value">$2.5M</span></td>
                            </tr>

                            <tr>
                                <td style="width:5%">
                                    <div class="table-notif initiation"></div>
                                </td>
                                <td style="width:70%"><span class="details">Supply Agreement Q3</span></td>
                                <td>
                                    <div class="step-bg initiation"><span>Initiation</span></div>
                                </td>
                                <td><span class="table-value">$2.5M</span></td>
                            </tr>
                            <tr>
                                <td style="width:5%">
                                    <div class="table-notif due"></div>
                                </td>
                                <td style="width:70%"><span class="details">JV Nile Pipeline</span></td>
                                <td><div class="step-bg due"><span>Due</span></div></td>
                                <td><span class="table-value">$2.5M</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="stakeholder-informations-details" class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-3">
                        <p class="card-title">Recent activity</p>
                        <a href="" class="card-link gold"><span>See more</span><x-lucide-chevron-right class="ms-1 card-icon" /></a>
                    </div>
                    <table class="table table-cs">
                        <tbody>
                            <!-- 
                                x-lucide-file : Contracts, NDAs, etc.
                                x-lucide-message-square : Message
                                x-lucide-check : Etape completed
                                x-lucide-user : Stakeholder added
                                -->
                            <tr>
                                <td style="width: 5%;"><div class="icon-bg document"><x-lucide-file class="table-icon" /></div></td>
                                <td><p class="title mb-0">NDA signed - Meridian Energy Partnership</p> <span class="table-time">2d ago</span></td>
                            </tr>
                            <tr>
                                <td style="width: 5%;"><div class="icon-bg message"><x-lucide-message-square class="table-icon" /></div></td>
                                <td><p class="title mb-0">Message received from Jean-Pierre Moreau</p> <span class="table-time">2d ago</span></td>
                            </tr>
                            <tr>
                                <td style="width: 5%;"><div class="icon-bg step"><x-lucide-check class="table-icon" /></div></td>
                                <td><p class="title mb-0">Due Diligence stage completed</p> <span class="table-time">2d ago</span></td>
                            </tr>
                            <tr>
                                <td style="width: 5%;"><div class="icon-bg user"><x-lucide-user class="table-icon" /></div></td>
                                <td><p class="title mb-0">Partner added to the platform</p> <span class="table-time">2d ago</span></td>
                            </tr>
                        </tbody>
                    </table>
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