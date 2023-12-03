@extends('layout', ['activePage' => 'recipes'])

@section('title', 'Recipes')

@section('content')
    <h1>My Recipes</h1>

    @if ($recipes->count() > 0)
        <div class="mt-4">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Cooking Time</th>
                        <th scope="col">Rating</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($recipes as $recipe)
                    <tr>
                        <td>{{ $recipe->title }}</td>
                        <td>{{ formatDuration($recipe->cooking_time) }}</td>
                        <td>
                            @include('components.starRating', ['rating' => $recipe->rating])
                        </td>
                        <td class="text-end">
                            <a href="{{ route('recipes.show', $recipe) }}" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-primary mt-4" role="alert">
            You don't have any recipes yet!
        </div>
    @endif

    {{ $recipes->links() }}


@endsection