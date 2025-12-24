@extends('admin.layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    {{-- <h4 class="card-title">Banners</h4> --}}
                    <div class="ms-md-auto py-2 py-md-0">
                        <button class="btn btn-secondary" id="addBannerBtn">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Add Banner
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($banners))
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($banners as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subtitle }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ asset('storage/banners/' . $item->image) }}">
                                                <img loading="lazy" src="{{ asset('storage/banners/' . $item->image) }}"
                                                    width="60" alt="{{ $item->image }}"
                                                    class="banner-img">
                                            </a>
                                        </td>
                                        <td class="text-end">
                                            @if ($item->is_active == 1)
                                                <a href="javascript:void(0)" class="toggle-status"
                                                    data-id="{{ $item->id }}" data-value="{{ $item->is_active }}">
                                                    <span class="badge badge-success">Active</span>
                                                </a>
                                            @else
                                                <a href="javascript:void(0)" class="toggle-status"
                                                    data-id="{{ $item->id }}" data-value="{{ $item->is_active }}">
                                                    <span class="badge badge-warning">Inactive</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="row gap-3">
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)"
                                                        data-url="{{ route('manage.banner', $item->id) }}"
                                                        class="btn btn-secondary btn_edit btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)"
                                                        data-url="{{ route('delete.banner', $item->id) }}"
                                                        class="btn btn-danger btn_delete btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="bannerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Banner</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="bannerForm" method="POST" action="{{ route('banner.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input id="title" name="title" type="text" class="form-control"
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input id="subtitle" name="subtitle" type="text" class="form-control"
                                value="{{ old('subtitle') }}">
                            @error('subtitle')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input id="image" name="image" type="file" class="form-control">
                            <div id="imagePreviewWrapper" class="mt-2"></div>
                            @error('image')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="is_status" class="form-label">Status</label>
                            <select id="is_status" name="is_status" class="form-select">
                                <option value="1" {{ old('is_status', '1') == '1' ? 'selected' : '' }}>Active
                                </option>
                                <option value="0" {{ old('is_status') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('is_status')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function resetBannerForm() {
            const form = $('#bannerForm');

            // Reset form values
            form[0].reset();

            // Remove validation classes
            form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');

            // Remove Laravel / manual error messages
            form.find('.text-danger').remove();

            // Reset jQuery Validation (if used)
            const validator = form.data('validator');
            if (validator) {
                validator.resetForm();
            }

            // Clear file input
            form.find('input[type="file"]').val('');

            // Remove image preview
            $('#imagePreviewWrapper').empty();

            // Clear hidden ID
            form.find('input[name="id"]').val('');

            // Reset select default
            form.find('select[name="is_status"]').val('1');
        }
        $(function() {
            $("#basic-datatables").DataTable({});

            $(document).on('click', '#addBannerBtn, .add-banner-btn', function(e) {
                e.preventDefault();

                resetBannerForm();
                // Show modal
                var modalEl = document.getElementById('bannerModal');
                if (modalEl) {
                    var modal = new bootstrap.Modal(modalEl);
                    modal.show();
                }
            });

            // custom filesize validator (param in bytes)
            $.validator.addMethod("filesize", function(value, element, param) {
                if (element.files.length === 0) {
                    return true; // no file selected -> do not validate size here
                }
                return element.files[0].size <= param;
            }, "File is too large.");

            $("#bannerForm").validate({
                rules: {
                    title: {
                        required: true,
                        maxlength: 191
                    },
                    subtitle: {
                        required: true,
                        maxlength: 191
                    },
                    description: {
                        required: true
                    },
                    image: {
                        required: function() {
                            // image required ONLY when id is empty (ADD)
                            return $('#bannerForm input[name="id"]').val() === '';
                        },
                        extension: "jpg|jpeg|png|gif",
                        filesize: 2 * 1024 * 1024 // 2 MB
                    },
                    is_status: {
                        required: true
                    }
                },
                messages: {
                    title: {
                        required: "Please enter a title."
                    },
                    subtitle: {
                        required: "Please enter a Subtitle."
                    },
                    description: {
                        required: "Please enter a description."
                    },
                    image: {
                        required: "Please select a image.",
                        extension: "Allowed file types: jpg, jpeg, png, gif.",
                        filesize: "Image must be 2 MB or smaller."
                    },
                },
                errorElement: "div",
                errorClass: "text-danger small mt-1",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                },
                errorPlacement: function(error, element) {
                    if (element.attr("type") === "file") {
                        error.insertAfter(element);
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form, event) {
                    // keep default behavior — actual AJAX submit is handled below
                    event.preventDefault();
                    var $form = $(form);
                    var $btn = $form.find('[type="submit"]').first();
                    console.log('1');
                    $('body').addClass('is-loading');
                    // clear previous errors
                    $form.find('.text-danger').remove();
                    $form.find('.is-invalid').removeClass('is-invalid');

                    var url = $form.attr('action') || window.location.href;
                    var method = ($form.attr('method') || 'POST').toUpperCase();
                    var data = new FormData(form);
                    $.ajax({
                        url: url,
                        method: method,
                        data: data,
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(resp) {
                            // remove loading state
                            $('body').removeClass('is-loading');
                            $btn.prop('disabled', false).removeClass('is-loading');

                            // hide modal if present
                            var modalEl = document.getElementById('bannerModal') || document
                                .getElementById('exampleModal');
                            if (modalEl) {
                                try {
                                    var bsInstance = bootstrap.Modal.getInstance(modalEl);
                                    if (bsInstance) bsInstance.hide();
                                } catch (err) {
                                    // fallback: try to create instance and hide
                                    try {
                                        new bootstrap.Modal(modalEl).hide();
                                    } catch (e) {}
                                }
                            }

                            // success toast and then reload
                            swal(resp.message, {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: "btn btn-success",
                                    },
                                },
                            });
                            // auto close / reload after short delay
                            setTimeout(function() {
                                try {
                                    swal.close();
                                } catch (e) {}
                                location.reload();
                            }, 1200);
                        },
                        error: function(xhr) {
                            // remove loading state
                            $('body').removeClass('is-loading');
                            $btn.prop('disabled', false).removeClass('is-loading');

                            if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON
                                .errors) {
                                var errors = xhr.responseJSON.errors;
                                // show field errors
                                $.each(errors, function(name, messages) {
                                    var field = $form.find('[name="' + name + '"]');
                                    if (!field.length) {
                                        // try bracket notation for arrays e.g. name[0]
                                        field = $form.find('[name^="' + name +
                                            '"]');
                                    }
                                    field.addClass('is-invalid');
                                    var msg = $(
                                            '<div class="text-danger small mt-1"></div>'
                                        )
                                        .html(messages.join('<br>'));
                                    field.last().after(msg);
                                });

                                // reopen modal so user sees errors
                                var modalEl = document.getElementById('bannerModal') ||
                                    document
                                    .getElementById('exampleModal');
                                if (modalEl) {
                                    try {
                                        var modal = new bootstrap.Modal(modalEl);
                                        modal.show();
                                    } catch (ignore) {}
                                }
                            } else {
                                // generic error
                                swal("Error", "Something went wrong. Please try again.", {
                                    icon: "error",
                                    buttons: {
                                        confirm: {
                                            className: "btn btn-danger",
                                        },
                                    },
                                });
                            }
                        },
                        dataType: 'json'
                    });

                }
            });
        });

        $(document).on('click', '.btn_edit', function(e) {
            e.preventDefault();
            resetBannerForm();

            console.log('edit clicked');
            let url = $(this).data('url');

            $.ajax({
                url: url, // edit fetch route
                type: 'GET',
                dataType: 'json',

                success: function(resp) {

                    // fill form fields
                    $('#bannerForm input[name="id"]').val(resp.id);
                    $('#bannerForm input[name="title"]').val(resp.title);
                    $('#bannerForm input[name="subtitle"]').val(resp.subtitle);
                    $('#bannerForm textarea[name="description"]').val(resp.description);
                    $('#bannerForm select[name="is_status"]').val(resp.is_active);


                    // IMAGE PREVIEW (dynamic)
                    let previewContainer = $('#imagePreviewWrapper');

                    // remove old preview if exists
                    previewContainer.find('img').remove();

                    if (resp.image) {
                        let img = $('<img>', {
                            src: '/storage/banners/' + resp.image,
                            id: 'imagePreview',
                            class: 'img-thumbnail mt-2',
                            css: {
                                width: '120px',
                                height: 'auto'
                            }
                        });

                        previewContainer.append(img);
                    }

                    // open modal
                    $('#bannerModal').modal('show');
                },


                error: function() {
                    swal("Error", "Unable to load banner data", "error");
                }
            });
        });

        $(document).on('click', '.toggle-status', function() {
            let el = $(this);
            let id = el.data('id');
            let currentStatus = el.data('value');

            let newStatusText = currentStatus == 1 ? 'Deactivate' : 'Activate';

            swal({
                title: "Are you sure?",
                text: "Do you want to " + newStatusText + " this banner?",
                icon: "warning",
                buttons: {
                    confirm: {
                        text: "Yes",
                        className: "btn btn-success",
                    },
                    cancel: {
                        visible: true,
                        className: "btn btn-danger",
                    },
                },
            }).then((confirm) => {
                if (!confirm) {
                    swal.close();
                    return;
                }

                $.ajax({
                    url: "{{ route('banner.toggle.status') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(resp) {
                        if (resp.status) {

                            // update badge UI
                            if (resp.new_status == 1) {
                                el.html('<span class="badge badge-success">Active</span>');
                                el.data('value', 1);
                            } else {
                                el.html('<span class="badge badge-warning">Inactive</span>');
                                el.data('value', 0);
                            }

                            swal("Updated!", resp.message, {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: "btn btn-success",
                                    },
                                },
                            });
                        }
                    },
                    error: function() {
                        swal("Error", "Something went wrong", "error");
                    }
                });
            });
        });

        $(document).on('click', '.btn_delete', function(e) {
            e.preventDefault();

            let url = $(this).data('url');
            let row = $(this).closest('tr'); // optional: remove row after delete

            swal({
                title: "Are you sure?",
                text: "This banner and its image will be permanently deleted!",
                icon: "warning",
                buttons: {
                    confirm: {
                        text: "Yes, delete it!",
                        className: "btn btn-success",
                    },
                    cancel: {
                        visible: true,
                        className: "btn btn-danger",
                    },
                },
            }).then((confirm) => {
                if (!confirm) {
                    swal.close();
                    return;
                }

                $.ajax({
                    url: url,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(resp) {
                        if (resp.status) {

                            // remove row instantly (optional)
                            row.fadeOut(300, function() {
                                $(this).remove();
                            });

                            swal("Deleted!", resp.message, {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: "btn btn-success",
                                    },
                                },
                            });

                            setTimeout(function() {
                                $('body').addClass('is-loading');
                                location.reload();
                            }, 1200);
                        }
                    },
                    error: function() {
                        swal("Error", "Something went wrong. Please try again.", "error");
                    }
                });
            });
        });

        document.querySelectorAll('.banner-img').forEach(img => {
            if (img.complete) {
                img.classList.add('loaded');
            } else {
                img.addEventListener('load', () => {
                    img.classList.add('loaded');
                });
            }
        });
    </script>
@endpush
