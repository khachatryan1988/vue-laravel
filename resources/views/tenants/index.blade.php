@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tenants') }}</div>

                    <br class="card-body">
                        <a href="{{route('tenants.create')}}"
                        class="btn btn-primary">Add

                        </a>
                    <br/><br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Domain</th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>
                            @forelse($tenants as $tenant)
                                <tr>
                                    <td>{{$tenant->name}}</td>
                                    <td>{{$tenant->email}}</td>
                                    <td>{{$tenant->domain}}</td>
                                    <td>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No tenants.</td>
                                </tr>
                            @endforelse
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
