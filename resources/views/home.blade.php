@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div id="res"></div>


                        <form id="form" enctype="multipart/form-data">
                            <input type="text" name="name[]" required>
                            <input type="text" name="name[]" required>
                            <input type="text" name="name[]" required>
                            <input type="text" name="name[]" required>
                            <input type="text" name="name[]" required>
                            <input id="btn-save" type="submit" value="Upload" name="submit">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    <script>


        $(document).ready(function () {


            $("#btn-save").click(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                })

                e.preventDefault();


                var form_data = $('form').serialize();


                var type = "POST"; //for creating new resource

                var url = '/json';

                swal("Salvando...", {
                    button: false,
                    closeOnClickOutside: false,
                    closeOnEsc: false
                });


                $.ajax({
                    type: type,
                    url: url,
                    data: form_data,
                    Content: 'application/json',
                    success: function (data) {
                        $('#res').html(data);

                        swal("Salvo!",'', "success");


                        $(form).each(function () {
                            this.reset();
                        });


                    },
                    error: function (data) {
                        console.log('Error:', data);

                        swal("Opa, algo deu errado.", " Tente de novamente.", "error");

                    }
                });
            });
        });


    </script>
@endsection
