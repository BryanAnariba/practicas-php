@extends('layouts.landing')

@section('title', 'Services')  

@section('app-content')
    <h1>Services Page Works</h1>

    @component('_components/card')
        @slot('title', 'Service 1')
        @slot('img', 'assets/img/saitama.jpg')
        @slot('content', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, obcaecati, sed ratione consectetur libero rem dolores ullam illum consequuntur laborum repudiandae expedita incidunt atque cum, veniam quo? Libero, laudantium nihil. Aliquam magnam numquam nemo et ab eum omnis veniam voluptatibus suscipit! Sit aliquid ipsum est laboriosam voluptatum itaque ea! Blanditiis?')
    @endcomponent

    @component('_components/card')
        @slot('title', 'Service 2')
        @slot('img', 'assets/img/saitama.jpg')
        @slot('content', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, obcaecati, sed ratione consectetur libero rem dolores ullam illum consequuntur laborum repudiandae expedita incidunt atque cum, veniam quo? Libero, laudantium nihil. Aliquam magnam numquam nemo et ab eum omnis veniam voluptatibus suscipit! Sit aliquid ipsum est laboriosam voluptatum itaque ea! Blanditiis?')
    @endcomponent

    @component('_components/card')
        @slot('title', 'Service 3')
        @slot('img', 'assets/img/saitama.jpg')
        @slot('content', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, obcaecati, sed ratione consectetur libero rem dolores ullam illum consequuntur laborum repudiandae expedita incidunt atque cum, veniam quo? Libero, laudantium nihil. Aliquam magnam numquam nemo et ab eum omnis veniam voluptatibus suscipit! Sit aliquid ipsum est laboriosam voluptatum itaque ea! Blanditiis?')
    @endcomponent
@endsection