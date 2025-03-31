@props(['movie'])

<div class="p-2 border rounded-md">
    <p>Title: {{ $movie['title'] }}</p>
    <p>Original title: {{ $movie['original_title'] }}</p>
    <p>Nationality: {{ $movie['nationality'] }}</p>
    <p>Date: {{ $movie['date'] }}</p>
    <x-rating :rating="$movie['vote']"/>
</div>
