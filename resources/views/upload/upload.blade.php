

@extends('layouts.app')

@section('content')






    <style type="text/css">

        input[type=file]{

            display: inline;

        }

        #image_preview{

            border: 1px solid black;

            padding: 10px;

        }

        #image_preview img{

            width: 200px;

            padding: 5px;

        }
        img{

            max-height: 100%;
            max-width: 100%;
        }

    </style>





<div class="container">



    <form action="{{ route('ImagesUploadPost') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <input type="file" id="uploadFile" name="uploadFile[]" multiple/>

        <input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>

    </form>



    <br/>

    <div id="image_preview"></div>

</div>



</body>



<script type="text/javascript">



    $("#uploadFile").change(function(){

        $('#image_preview').html("");

        var total_file=document.getElementById("uploadFile").files.length;

        for(var i=0;i<total_file;i++)

        {

            $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' width='200px' height='200px' >");

        }

    });



    $('form').ajaxForm(function()

    {

        alert("Uploaded SuccessFully");

    });



</script>


@endsection