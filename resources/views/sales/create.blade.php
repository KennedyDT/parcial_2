<div class="container mt-5">
    <div class="row">
        <form action="{{ url('/sales') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('sales.form')


        </form>
    </div>
</div>
