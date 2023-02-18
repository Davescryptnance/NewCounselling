<!-- messages.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-white bg-primary">Messages</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($messages) > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-secondary text-white">
                                    <th>ID</th>
                                    <th>Recipient</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->recipient }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->created_at ? $message->created_at->format('Y-m-d H:i:s') : '' }}</td>

                                </tr>

                                <div class="space-x-2">
                                    <a href="/"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Back</a>
                                 </div>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-center">No messages found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body {
        background-color: #e6ffe6; /* Light green background */
    }

    table td,
    table th {
        border-color: #99ff99; /* Light green border for table cells */
    }
</style>
