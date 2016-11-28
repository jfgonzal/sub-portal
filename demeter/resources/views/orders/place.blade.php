@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Build your own sandwich! ~ We will come around to deliver it to you!</div>
                    <div class="panel-body">

                        <form class="form-inline" role="form" action="/orders/place" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="sr-only" for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="location">Location</label>
                                <select name="location" id="location">
                                    <option value="0">Tell us your Location</option>
                                    <option value="first_floor">First Floor</option>
                                    <option value="second_floor">Second Floor</option>
                                </select>
                            </div>
                            {{-- Bread Div --}}
                            <div class="col-md-10">
                                <h4>Bread</h4>
                                {{-- must be iterative--}}
                                @foreach($sandwichComponents['bread'] as $bread)
                                    @if($bread->available == true)
                                    <label class="radio-inline"><input type="radio" id="bread" name="bread" value="{{ $bread->display_name }}" required> {{ $bread->display_name }}</label>
                                    @endif
                                @endforeach
                            </div>
                            {{-- condiment --}}
                            <div class="col-md-6">
                                <h4>Condiments</h4>
                                @foreach($sandwichComponents['condiment'] as $condiment)
                                    @if($condiment->available == true)
                                        <input type="checkbox" id="condiment[]" name="condiment[]" value="{{ $condiment->display_name }}"> {{ $condiment->display_name }}<br>
                                    @endif
                                @endforeach
                            </div>
                            {{--cheese --}}
                            <div class="col-md-6">
                                <h4>Cheese</h4>
                                @foreach($sandwichComponents['cheese'] as $cheese)
                                    @if($cheese->available == true)
                                        <input type="checkbox" name="cheese[]" value="{{ $cheese->display_name }}"> {{ $cheese->display_name }}<br>
                                    @endif
                                @endforeach
                            </div>
                            {{-- Meat Div - boars head--}}
                            <div class="col-md-6">
                                <h4>Meat - Boars Head</h4>
                                @foreach($sandwichComponents['meat_boar'] as $meatBoar)
                                    @if($meatBoar->available == true)
                                        <input type="checkbox" name="meat_boar[]" value="{{ $meatBoar->display_name }}"> {{ $meatBoar->display_name }}<br>
                                    @endif
                                @endforeach
                            </div>
                            {{-- Meat Div publix--}}
                            <div class="col-md-6">
                                <h4>Meat - Publix</h4>
                                @foreach($sandwichComponents['meat_pub'] as $meatPub)
                                    @if($meatPub->available == true)
                                        <input type="checkbox" name="meat_pub[]" value="{{ $meatPub->display_name }}">{{ $meatPub->display_name }}<br>
                                    @endif
                                @endforeach
                            </div>
                            {{--Soup Div--}}
                            <div class="col-md-10">
                                <h3>Choose a side of soup</h3>
                                @foreach($sides['soup'] as $soup)
                                    @if(($loop->iteration-1)%3 == 0 || $loop->iteration == 1)
                                        @if($loop->iteration != 1)
                                            </div>
                                        @endif
                                        <div class="col-md-10">
                                    @endif
                                    @if($soup->available == true)
                                        <label class="radio-inline"><input type="radio" id="soup" name="soup" value="{{ $soup->display_name }}"> {{ $soup->display_name }}</label>
                                    @endif
                                    @if($loop->last)
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            {{-- Chips or Cookie Div--}}
                            <div class="col-md-10">
                                <h3>Chips or a Cookie?</h3>
                                @foreach($sides['chip_cookie'] as $chip_cookie)
                                   @if($chip_cookie->available == true)
                                        <label class="radio-inline"><input type="radio" id="chip_cookie" name="chip_cookie" value="{{ $chip_cookie->display_name }}"> {{ $chip_cookie->display_name }}</label>
                                    @endif
                                @endforeach
                            </div>

                            {{-- Drinks Div--}}
                            <div class="col-md-10">
                                <h3>Choose a drink</h3>
                                @foreach($sides['drink'] as $drink)
                                    @if(($loop->iteration-1)%3 == 0 || $loop->iteration == 1)
                                        @if($loop->iteration != 1)
                                            </div>
                                        @endif
                                         <div class="col-md-10">
                                    @endif
                                    @if($drink->available == true)
                                        <label class="radio-inline"><input type="radio" id="drink" name="drink" value="{{ $drink->display_name }}"> {{ $drink->display_name }}</label>
                                    @endif
                                    @if($loop->last)
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-md-10">
                                <h3>Comments</h3>
                                <label for="comments">Anything special?</label><br/>
                                <textarea name="comments" id="comments"></textarea>
                            </div>
                            <div class="col-md-10">
                                <input type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
