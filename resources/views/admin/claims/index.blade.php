@extends('layouts.app') {{-- Adjust this based on your layout structure --}}

@section('content')
    <div class="container">
        <h1>Claim List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Claim Mail</th>
                    <th>Claim Title</th>
                    <th>Claim Details</th>
                    <!-- Add other columns as needed -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($claims as $claim)
                    <tr>
                        <td>{{ $claim->id }}</td>
                        <td>{{ $claim->claim_mail }}</td>
                        <td>{{ $claim->claim_title }}</td>
                        <td>{{ $claim->claim_details }}</td>
                        <!-- Add other columns as needed -->
                        <td>
                            <a href="{{ route('admin.claims.show', $claim->id) }}">Show</a>
                            <a href="{{ route('admin.claims.edit', $claim->id) }}">Edit</a>
                            <form action="{{ route('admin.claims.destroy', $claim->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
