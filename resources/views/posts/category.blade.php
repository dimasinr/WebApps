@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="ta-2 fw-600 mb-4">Category</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody style="font-weight: 500;">
                                <tr>
                                    <td><a href="/categories/action" class="text-secondary">Action</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="/categories/comedy" class="text-secondary">Comedy</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="/categories/drama" class="text-secondary">Drama</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="/categories/fantasy" class="text-secondary">Fantasy</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="/categories/horror" class="text-secondary">Horror</a></td>
                                </tr>
                                <tr>
                                    <td><a href="/categories/romance" class="text-secondary">Romance</a></td>
                                </tr>
                                <tr>
                                    <td><a href="/categories/thriller" class="text-secondary">Thriller</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection