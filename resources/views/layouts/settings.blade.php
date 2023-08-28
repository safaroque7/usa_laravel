@extends('layouts.master')

@section('content')
    <div class="w-11/12">
        <form action="#">
            <label for="theme" class="block"> themeColor </label>
            <select name="themeColor" id="themeColor">
                <option value="Dark"> Dark </option>
                <option value="light"> Light </option>
                <option value="Green"> Green </option>
            </select>
        </form>
    </div>
@endsection
