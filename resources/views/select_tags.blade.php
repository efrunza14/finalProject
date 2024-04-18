{{--

<form action="{{ route('filter_products') }}" method="GET">
    @csrf
    <div class="form-group">
        <label for="selected_tags">Selectează etichetele:</label>
        <select name="selected_tags[]" id="selected_tags" class="form-control" multiple>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Filtrează produsele</button>
</form>  --}}
