@extends('Admin.Layout')
@section('title','Dashboard')
@section('headercontainer')
<script src="https://cdn.tiny.cloud/1/0nj8pmqfaosicobgrfr3hxgklq00xrjmm5awxk07vguu1qf5/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

@endsection
@section("container")

<form method="post" action="/Admin/Add-New-Pages" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row" style="padding:50px;">
        <h2> Section - Add Page</h2>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <table class="table">

            <tr>
                <td>
                    <p> Page Types </p>
                    <select name="pagetypestoCreate" class="form-control">
                        <option value="1">Main Page</option>


                    </select>

                    <span style="color:red;">
                        @error('pagetypestoCreate')
                        {{$message}}
                        @enderror
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <p> Title </p>
                    <input type="text" name="title" class="form-control" />
                    <span style="color:red;">
                        @error('title')
                        {{$message}}
                        @enderror
                    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <p> Keywords </p>
                    <div class="form-group">
                        <label for="tags" class="control-label col-lg-4">Tags</label>

                        <div class="col-lg-8">
                            <input name="tags" id="tags" value="get,link,page,web" class="form-control" />
                        </div>
                    </div>

                    <span style="color:red;">
                        @error('tags')
                        {{$message}}
                        @enderror
                    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <p> Image </p>
                    <input type="file" name="thumbnailimage" class="form-control" />
                    <span style="color:red;">
                        @error('thumbnailimage')
                        {{$message}}
                        @enderror
                    </span>
                </td>
            </tr>



            <tr>
                <td>
                    <p> Description (for website and search engine description ) </p>
                    <textarea name="shortdescription" class="form-control" style="height:100px;"></textarea>
                    <span style="color:red;">
                        @error('shortdescription')
                        {{$message}}
                        @enderror
                    </span>
                </td>
            </tr>


            <tr>
                <td>
                    <p> Content</p>
                    <textarea id="mytextareaboxadminsection" name="mytextarea" class="form-control"
                        style="height:500px;"></textarea>
                    <span style="color:red;">
                        @error('mytextarea')
                        {{$message}}
                        @enderror
                    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" class="btn btn-success btn-block" value="Submit" />
                </td>
            </tr>

        </table>

    </div>
</form>


@endsection

@section('footercontainer')
<script src="https://cdn.tiny.cloud/1/0nj8pmqfaosicobgrfr3hxgklq00xrjmm5awxk07vguu1qf5/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#mytextareaboxadminsection',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    image_class_list: [{
        title: 'img-responsive',
        value: 'img-responsive'
    }, ],
    height: 500,
    setup: function(editor) {
        editor.on('init change', function() {
            editor.save();
        });
    },
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

    image_title: true,
    automatic_uploads: true,
    images_upload_url: '/upload',
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function() {
            var file = this.files[0];

            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            };
        };
        input.click();
    }
});
</script>
@endsection