@extends('Admin.Layout')
@section('title','Dashboard')
@section('headercontainer')
<script src="https://cdn.tiny.cloud/1/0nj8pmqfaosicobgrfr3hxgklq00xrjmm5awxk07vguu1qf5/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

@endsection
@section("container")

    @if(isset($data)) 
    {{$data}}
<form method="post" action="/EheaderScript" enctype="multipart/form-data">
{{csrf_field()}}
<div class="row" style="padding-top:50px;">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

        <h2> Section - Add Page</h2>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
 
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Header</p>
            <textarea id="mytextareaboxadminsection" name="headerfiles" class="form-control"
                style="height:500px;">{{$data->headerScript}}</textarea>
            <span style="color:red;">
                @error('mytextarea')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Footer</p>
            <textarea id="mytextareaboxadminsection" name="footerfiles" class="form-control"
                style="height:500px;">{{$data->footerScript}}</textarea>
            <span style="color:red;">
                @error('mytextarea')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <input type="submit" class="btn btn-success btn-block" value="Submit" />
        </div>
    </div>
</div>
</form>

    @else 

    <form method="post" action="/headerScript" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="row" style="padding-top:50px;">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

        <h2> Section - Add Page</h2>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Header Scripts</p>
            <textarea id="mytextareaboxadminsection" name="headerfiles" class="form-control"
                style="height: 200px;"></textarea>
            <span style="color:red;">
                @error('mytextarea')
                {{$message}}
                @enderror
            </span>
        </div>

                 <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Footer Scripts </p>
            <textarea id="mytextareaboxadminsection" name="footerfiles" class="form-control"
                style="height:200px;"></textarea>
            <span style="color:red;">
                @error('mytextarea')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <input type="submit" class="btn btn-success btn-block" value="Submit" />
        </div>
    </div>
</div>
</form>

    @endif
    

@endsection

@section('footercontainer')

<!-- <script src="https://cdn.tiny.cloud/1/0nj8pmqfaosicobgrfr3hxgklq00xrjmm5awxk07vguu1qf5/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script> -->
<script>
// tinymce.init({
//     selector: '#mytextareaboxadminsection',
//     plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
//     toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
//     toolbar_mode: 'floating',
//     tinycomments_mode: 'embedded',
//     tinycomments_author: 'Author name',
//     image_class_list: [{
//         title: 'img-fluid',
//         value: 'img-fluid'
//     },{
//         title: 'mx-auto',
//         value: 'mx-auto'
//     }, ],
//     height: 500,
//     setup: function(editor) {
//         editor.on('init change', function() {
//             editor.save();
//         });
//     },
//     plugins: [
//         "advlist autolink lists link image charmap print preview anchor",
//         "searchreplace visualblocks code fullscreen",
//         "insertdatetime media table contextmenu paste imagetools"
//     ],
//     toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

//     image_title: true,
//     automatic_uploads: true,
//     images_upload_url: '/upload',
//     file_picker_types: 'image',
//     file_picker_callback: function(cb, value, meta) {
//         var input = document.createElement('input');
//         input.setAttribute('type', 'file');
//         input.setAttribute('accept', 'image/*');
//         input.onchange = function() {
//             var file = this.files[0];

//             var reader = new FileReader();
//             reader.readAsDataURL(file);
//             reader.onload = function() {
//                 var id = 'blobid' + (new Date()).getTime();
//                 var blobCache = tinymce.activeEditor.editorUpload.blobCache;
//                 var base64 = reader.result.split(',')[1];
//                 var blobInfo = blobCache.create(id, file, base64);
//                 blobCache.add(blobInfo);
//                 cb(blobInfo.blobUri(), {
//                     title: file.name
//                 });
//             };
//         };
//         input.click();
//     }
// });
</script>
@endsection