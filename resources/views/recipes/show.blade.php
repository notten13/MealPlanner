@extends('layout', ['activePage' => 'recipes'])

@section('title', $recipe->title)

@section('content')
    <h1>{{ $recipe->title }}</h1>

    <article class="mt-4">
        <p>
            <b>Cooking Time: </b> {{ formatDuration($recipe->cooking_time) }} &bull;
            <b>Serves: </b> {{ $recipe->serves }} &bull;
            <b>Rating: </b> @include('components.starRating', ['rating' => $recipe->rating])
        </p>

        <div class="row mt-4">
            <div class="col-md-8">
                <article>
                    <h4 class="mb-4">Ingredients</h4>

                    <ul>
                        @foreach($recipe->ingredients as $ingredient)
                            <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
                        @endforeach
                    </ul>

                    <h4 class="mt-4 mb-4">Instructions</h4>

                    <p>
                        {{ $recipe->instructions }}
                    </p>
                </article>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-success w-100">Add to shopping list</button>
                        <hr />
                        <button class="btn btn-outline-primary w-100">Edit recipe</button>
                        <button class="btn btn-outline-danger w-100 mt-3">Delete recipe</button>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
