@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @has_role('super_admin')
                        Super Admin
                    @endhas_role
                    @has_role('client')
                        Client
                    @endhas_role
                    @has_role('admin')
                        Admin
                    @endhas_role
                    @has_role('user')
                        User
                    @endhas_role

                    @has_permission('all_access')
                        <br>Acceso Completo
                    @endhas_permission
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
