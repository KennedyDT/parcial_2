<div class="container mt-5">
    <form method="post" action="{{ url('/sales/' . $sales->id) }}">
        @csrf
        {{ method_field('PATCH') }}
        @include('sales.form')

    </form>

</div>
