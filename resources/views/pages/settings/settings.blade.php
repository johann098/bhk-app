@extends('layouts.sidebar')

@section('title')
Settings
@endsection

@section('body')
<main id="pageContent">
    <div class="d-flex align-items-center justify-content-between" id="page-title">
        <div class="w-100">
            <p class="title mb-0">Settings</p>
            <span class="subtitle">Profile and organization management</span>
        </div>
    </div>

    <div class="row" id="settings">
        <div class="col-12">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-organization-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true"><x-lucide-user class="nav-pills-icon" /><span>Profile</span></button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-organization" type="button" role="tab" aria-controls="v-pills-organization" aria-selected="false"><x-lucide-building class="nav-pills-icon" /><span>Organization</span></button>
                    <button class="nav-link" id="v-pills-notification-tab" data-bs-toggle="pill" data-bs-target="#v-pills-notification" type="button" role="tab" aria-controls="v-pills-notification" aria-selected="false"><x-lucide-bell class="nav-pills-icon" /><span>Notifications</span></button>
                    <button class="nav-link" id="v-pills-security-tab" data-bs-toggle="pill" data-bs-target="#v-pills-security" type="button" role="tab" aria-controls="v-pills-security" aria-selected="false"><x-lucide-shield class="nav-pills-icon" /><span>Security</span></button>
                </div>
                <div class="tab-content w-100" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center identity-row">
                                    <div class="avatar-bg">
                                        <span>BH</span>
                                    </div>
                                    <div class="identity">
                                        <p class="title mb-0">Bakulu Holdings</p>
                                        <p class="subtitle mb-0">Administrateur</p>
                                        <a href=""><span class="input-file">Change profile image</span></a>
                                    </div>
                                </div>
                                <form action="">
                                    <div class="form-body">
                                        <div class="row mb-2">
                                            <div class="col-12 col-md-6">
                                                <label for="first-name" class="form-label">First name</label>
                                                <input class="form-control" type="text" placeholder="Ex:Claude" name="firstName" id="first-name" value="Bakulu">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="last-name" class="form-label">Last name</label>
                                                <input class="form-control" type="text" placeholder="Ex:Doe" name="lastName" id="last-name" value="Holdings">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-12 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input class="form-control" type="text" placeholder="Ex:claude.doe@example.com" name="email" id="email" value="admin@bakuluholdings.com">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="phone" class="form-label">Phone number</label>
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Ex:+243 xxx xxx xxxx" value="+243 xxx xxx xxxx">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-12 col-md-6">
                                                <label for="job" class="form-label">Job</label>
                                                <input type="text" name="job" id="job" class="form-control" placeholder="Ex:Chief executive" value="Chief executive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex align-content-center justify-content-end">
                                        <button type="submit" class="btn btn-submit"><x-lucide-save class="btn-icon me-1" /><span>Save</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-organization" role="tabpanel" aria-labelledby="v-pills-organization-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body p-0">
                                <form action="">
                                    <div class="form-body pt-0">
                                        <div class="row mb-2">
                                            <div class="col-12 col-md-6">
                                                <label for="organization-name" class="form-label">Organization Name</label>
                                                <input class="form-control" type="text" placeholder="Ex:Bakulu holdings LLC." name="organizationName" id="organization-name" value="Bakulu holdings LLC.">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="sector" class="form-label">Sector</label>
                                                <input class="form-control" type="text" placeholder="Ex:Trading & Investissements" name="sector" id="sector" value="Trading & Investissements">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-12 col-md-6">
                                                <label for="country" class="form-label">Country</label>
                                                <input class="form-control" type="text" placeholder="Ex:United States" name="country" id="country" value="United States">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="town" class="form-label">Town</label>
                                                <input type="text" name="town" id="town" class="form-control" placeholder="Ex:New-York" value="New-York">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-footer d-flex align-content-center justify-content-end">
                                        <button type="submit" class="btn btn-submit"><x-lucide-save class="btn-icon me-1" /><span>Save</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body p-0">
                                <form action="">
                                    <div class="form-body pt-0">
                                        <div class="card subcard mb-3">
                                            <div class="card-body">
                                                <div class="d-flex d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 title">Assigned tasks</p>
                                                        <span class="subtitle">Notification when a new task is assigned</span>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="tasks-notif-switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card subcard mb-3">
                                            <div class="card-body">
                                                <div class="d-flex d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 title">Deadline approach</p>
                                                        <span class="subtitle">Alert 48 hours before a deadline</span>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="tasks-notif-switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card subcard mb-3">
                                            <div class="card-body">
                                                <div class="d-flex d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 title">Task delays</p>
                                                        <span class="subtitle">Notification for overdue tasks</span>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="tasks-notif-switch">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card subcard mb-3">
                                            <div class="card-body">
                                                <div class="d-flex d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 title">New deals</p>
                                                        <span class="subtitle">Notification when a new deal is created</span>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="tasks-notif-switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card subcard mb-3">
                                            <div class="card-body">
                                                <div class="d-flex d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 title">Contract update</p>
                                                        <span class="subtitle">Notification of a contract amendment</span>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="tasks-notif-switch" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card subcard">
                                            <div class="card-body">
                                                <div class="d-flex d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0 title">Weekly summary</p>
                                                        <span class="subtitle">Summary report every Monday morning</span>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="tasks-notif-switch">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex align-content-center justify-content-end">
                                        <button type="submit" class="btn btn-submit"><x-lucide-save class="btn-icon me-1" /><span>Save</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-security" role="tabpanel" aria-labelledby="v-pills-security-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body p-0">
                                <form action="">
                                    <div class="form-body pt-0">
                                        <div class="card subcard mb-3">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p class="mb-0 title">Change password</p>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <label for="oldPassword" class="form-label small text-capitalize">Actual password</label>
                                                        <input class="form-control" type="password" placeholder="" name="oldPassword" id="oldPassword" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <label for="newPassword" class="form-label small text-capitalize">New password</label>
                                                        <input class="form-control" type="password" placeholder="" name="newPassword" id="newPassword" value="">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <label for="confirmPassword" class="form-label small text-capitalize">Confirm the new password</label>
                                                        <input class="form-control" type="password" placeholder="" name="confirmPassword" id="confirmPassword" value="">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="card subcard">
                                            <div class="card-body">
                                                <p class="mb-3"><x-lucide-globe class="card-icon me-2"/><span class="title">Active sessions</span></p>
                                                <div class="d-flex d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <p class="subtitle mb-0">Chrome · Windows · Paris, France</p>
                                                        <p class="subtitle mb-0 small">Currently active</p>
                                                    </div>
                                                    <div class="active-dot"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex align-content-center justify-content-end">
                                        <button type="submit" class="btn btn-submit"><x-lucide-save class="btn-icon me-1" /><span>Save</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection