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
                    <p class="text-muted mb-5">*All infomation is required <i class="fas fa-exclamation-triangle"></i> Click on field name to read more !</p>
                </div>
            </div>

            <div class="row mb-5">
                <div id="item-images" class="col-lg-12">
                    <form id="form-add" method="POST" enctype="multipart/form-data">
                        <h2>Sumary</h2><br>
                        <table class="tb-add">
                            <tr>
                                <td>
                                    <label id="label-title">Title</label>

                                </td>
                                <td>
                                    <input type="text" name="title" id="title">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="label-box">Box</label>
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
                                    <label id="label-image">Image</label>
                                </td>
                                <td>
                                    <input type="file" name="image" id="image">
                                    <input type="hidden" name="imageConverted" id="imageConverted" value="null">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="label-source">Source</label>
                                </td>
                                <td>
                                    <input type="text" name="source" id="source">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="label-source-link">Source Link</label>
                                </td>
                                <td>
                                    <input type="text" name="source-link" id="source-link" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label id="label-sumary">Sumary</label>
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
                                margin: 15px 0px 15px 10px;
                            }

                            .tb-add input, .tb-add select, .tb-add textarea {
                                width: 100%;
                                height: 38px;
                                border: none;
                                border-bottom: 1px solid black;
                                outline: none;
                            }

                            .tb-add input[type=file] {
                                margin-top: 10px;
                                border: none;
                            }
                        </style>
                        <h2 id="label-detail">Detail</h2>
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

        $("#label-title").on('click', function(event) {
            vex.dialog.alert({
                unsafeMessage: `
                    <h6>Title Field</h6>
                    <p>The title is the text indicating the nature of the item below it.</p>
                `,
            })
        });
        
        $("#label-box").on('click', function(event) {
            vex.dialog.alert({
                unsafeMessage: `
                    <h6>Box Field</h6>
                    <p>Which box do you want the item in? Codes, Games or Foods ... Please choose one.</p>
                `,
            })
        });

        $("#label-image").on('click', function(event) {
            vex.dialog.alert({
                unsafeMessage: `
                    <h6>Image Field</h6>
                    <p>Pick an "avatar" for the item.</p>
                `,
            })
        });

        $("#label-source").on('click', function(event) {
            vex.dialog.alert({
                unsafeMessage: `
                    <h6>Source Field</h6>
                    <p>Where do you get this item from?</p>
                `,
            })
        });

        $("#label-source-link").on('click', function(event) {
            vex.dialog.alert({
                unsafeMessage: `
                    <h6>Source Link Field</h6>
                    <p>If you have a link for this item, please fill in this field (for copyright reasons). Or if you don't have one, enter "#" or "javascript: void (0)" (please read the <a target="_blank" href="javascript:void(0);">documentation</a> to be able to fill this field with the most accuracy).</p>
                `,
            })
        });

        $("#label-sumary").on('click', function(event) {
            vex.dialog.alert({
                unsafeMessage: `
                    <h6>Sumary Field</h6>
                    <p>A brief summary of this item (the shorter the better).</p>
                `,
            })
        });

        $("#label-detail").on('click', function(event) {
            vex.dialog.alert({
                unsafeMessage: `
                    <h6>Detail Field</h6>
                    <p>Detailed and complete information about this item.</p>
                `,
            })
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
                $("#imageConverted").val("null");
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
                        message: '???? Status: ' + result['status'] + '<br>Message: ' + result['message'],
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
                    if (result['status'] == 422) {
                        new Toast({
                            message: '???? Status: ' + result['status'] + '<br>Error: ' + Object.values(result['responseJSON']['errors'])[0],
                            type: 'danger',
                        });
                    } else if (result['status'] == 500) {
                        new Toast({
                            message: '???? Status: ' + result['status'] + '<br>Error: Some thing went wrong with our server ! Please try later ????',
                            type: 'danger',
                        });
                    } else if (result['status'] == 404) {
                        new Toast({
                            message: '???? Status: ' + result['status'] + '<br>Error: Server not found or you are trying to send item to a wrong server ! Please try later ????',
                            type: 'danger',
                        });
                    }
                    
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
            //         message: '??? Added new item !',
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
            //         message: '??? Something went wrong, please try again !',
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
