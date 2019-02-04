@if (Auth::guard('web')->check())
<p class="text-success"> Your are logged in as a <strong> User </strong></p>
@else
<p class="text-danger"> Your are logged out in a <strong>User</strong></p>
@endif

@if (Auth::guard('admin')->check())
<p class="text-success"> Your are logged in as a <strong> Admin </strong></p>
@else
<p class="text-danger"> Your are logged out in a <strong>Admin</strong></p>
@endif