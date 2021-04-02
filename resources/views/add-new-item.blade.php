@extends('layout.app')

@section('custom-css')
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="px-4 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <h1 id="item-title">Add new item to box <img src="https://img.icons8.com/pastel-glyph/64/000000/box--v3.png"/></h1>
                    <p class="text-muted mb-5">*All infomation is required <i class="fas fa-exclamation-triangle"></i></p>
                </div>
            </div>

            <div class="row mb-5">
                <div id="item-images" class="col-lg-12">
                    <form id="form-add" method="POST" enctype="multipart/form-data">
                        <h2>Sumary</h2><br>
                        <table class="tb-add">
                            <tr>
                                <td>
                                    <label for="title">Title</label>
                                </td>
                                <td>
                                    <input type="text" name="title" id="title">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="box">Box</label>
                                </td>
                                <td>
                                    <select name="box" id="box">
                                        @foreach ($boxes as $box)
                                            <option value="{{ $box->id }}">{{ $box->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="image">Image</label>
                                </td>
                                <td>
                                    <input type="file" name="image" id="image">
                                    <input type="hidden" name="imageConverted" id="imageConverted" value="No image found !">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="source">Source</label>
                                </td>
                                <td>
                                    <input type="text" name="source" id="source">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="source-link">Source Link</label>
                                </td>
                                <td>
                                    <input type="text" name="source-link" id="source-link">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="sumary">Sumary</label>
                                </td>
                                <td>
                                    <textarea name="sumary" id="sumary"></textarea>
                                </td>
                            </tr>
                        </table><br>
                        <style type="text/css">
                            .tb-add {
                                margin: 0;
                                width: 100%
                            }

                            .tb-add label {
                                font-weight: bold;
                                margin: 10px 30px 10px 10px;
                            }

                            .tb-add input, .tb-add select, .tb-add textarea {
                                width: 100%;
                                height: 30px;
                            }
                        </style>
                        <h2>Detail</h2>
                        <div id="summernote" name="detail"></div><br>
                        <button id="btn-add" type="submit" class="btn btn-primary">Add</button>
                        <button id="btn-reset" type="reset" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
    
@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Detail go here !',
                tabsize: 2,
                height: 300
            });
            $('#summernote').summernote('code', '');
        });

        document.title = "Add new item | Pylbox";
        $("#menu-add-new-item").addClass('active');

        $("#btn-reset").on('click', function(event) {
            $("#summernote").summernote("reset");
        });

        $("#image").on('change', function(event) {
            if ($("#image")[0].files && $("#image")[0].files[0]) {
                var file = $("#image")[0].files[0];
                var reader = new FileReader();

                reader.onloadend = function() {
                    $("#imageConverted").val(reader.result);
                }
                reader.readAsDataURL(file);
            } else {
                $("#imageConverted").val("No image found !");
            }
        });

        $("#btn-add").on('click', function(event) {
            event.preventDefault();
            $("#btn-add").html('Adding');
            $("#btn-add").prop('disabled', true);
            var title = $("#title").val();
            var box_id = $("#box").val();
            var image = $("#imageConverted").val();
            var source = $("#source").val();
            var source_link = $("#source-link").val();
            var sumary = $("#sumary").val();
            var detail = $("#summernote").summernote('code');

            $.ajax({
                url: '{{ route('items.store') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    title: title,
                    box_id: box_id,
                    image: image,
                    source: source,
                    source_link: source_link,
                    sumary: sumary,
                    detail: detail
                },
                success: function(result) {
                    $("#btn-add").prop('disabled', false);
                    $("#btn-add").html('Add');
                    new Toast({
                        message: '🟢 Status: ' + result['status'] + '<br>Message: ' + result['message'],
                        type: 'success',
                        customButtons: [
                            {
                                text: 'View item detail',
                                onClick: function() {
                                    window.open('/detail?id=' + result['id']);
                                }
                            }
                        ]
                    });
                },
                error: function(result){
                    $("#btn-add").prop('disabled', false);
                    $("#btn-add").html('Add');
                    new Toast({
                        message: '🔴 Status: ' + result['status'] + '<br>Error: ' + Object.values(result['responseJSON']['errors'])[0],
                        type: 'danger',
                        
                    });
                }
            });

            // defaultDatabase.ref('items/' + key).set({
            //     title: title,
            //     box: box,
            //     image: image,
            //     source: source,
            //     source-link: source-link,
            //     sumary: sumary,
            //     detail: detail
            // }).then(function() {
            //     new Toast({
            //         message: '✔ Added new item !',
            //         type: 'success',
            //         customButtons: [
            //             {
            //                 text: 'View item detail',
            //                 onClick: function() {
            //                     window.open('detail.html?key=' + key);
            //                 }
            //             }
            //         ]
            //     });
            //     $("#btn-add").prop('disabled', false);
            //     $("#btn-add").html('Add');
            //     $("#form-add").trigger('reset');
            //     $("#summernote").summernote("reset");
            // }).catch(function(error) {
            //     new Toast({
            //         message: '❌ Something went wrong, please try again !',
            //         type: 'danger',
            //         customButtons: [
            //             {
            //                 text: 'View error detail',
            //                 onClick: function() {
            //                     alert(error);
            //                 }
            //             }
            //         ]
            //     });
            //     $("#btn-add").prop('disabled', false);
            //     $("#btn-add").html('Add');
            // });
        });
    </script>
@endsection
